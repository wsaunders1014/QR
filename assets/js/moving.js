$( document ).ready(function() {
	
	$("#from-zip-code").focus();
	$("#moving-form").validationEngine();
	$( "#move-date").datepicker({ minDate: 0, maxDate: "+12M +1D", numberOfMonths: 2 });
	$("#phone").mask("(999) 999-9999",{placeholder:""});
	$("#from-zip-code").mask("99999",{placeholder:""});
	$("#to-zip-code").mask("99999",{placeholder:""});
	$("#secondary-from-zip-code").mask("99999",{placeholder:" "});



$('.icon-custom-permission').click(function(){ var w = screen.width; var left = w - 550; var top = 0; window.open( 'https://trustsealinfo.verisign.com/splash?form_file=fdf/splash.fdf&dn=www.quoterunner.co&lang=en', 'VeriSign', 'width=550,height=380,top='+top+',left='+left ); });




	if($('#countdown').length )
	{
		var currentDate = new Date();
		var target_date = new Date(currentDate.getTime() + (120 * 60 * 1000));
		var days, hours, minutes, seconds;
		var countdown = document.getElementById("countdown");
		setInterval(function () {
		 	var current_date = new Date().getTime();
		    var seconds_left = (target_date - current_date) / 1000;
			days = parseInt(seconds_left / 86400);
		    seconds_left = seconds_left % 86400;
		    hours = parseInt(seconds_left / 3600);
		    seconds_left = seconds_left % 3600;
		    minutes = parseInt(seconds_left / 60);
		    seconds = parseInt(seconds_left % 60);
		    countdown.innerHTML = minutes + "m, " + seconds + "s";  
		 
		}, 1000);
		
	}

	$('html,form,input').keypress(function(e) {
		if(e.which == 13) {
        	$('.current-step').click();
		}
	});
	
	
	$('#calendar-icon').click(function(){
		$("#move-date").focus();
	});
	calculateDistances();
	
/*	if(location.hostname == "quoterunner.co" && location.pathname == "/moving/thank-you"){
                var image = new Image(1,1);
                image.src = "http://www.googleadservices.com/pagead/conversion/976539933/?label=TbsJCJve4AcQnaLT0QM&script=0";
                $('body').append(image);
		//goog_report_conversion();
	}*/

});
$('.next-step').click(function () {
 next_step($(this).attr('id'));
});
 
function next_step(step)
{

	//STEP 1
	if( step == "step-1-button")
	{
		if( !$("#from-zip-code").validationEngine('validate') )
		{
			$('#step1').hide();
			$('#step2').show("slide", { direction: "left" }, 600, function(){
				$('#step-1-button').removeClass('current-step');
				$('#step-2-button').addClass('current-step');
				$("#to-zip-code").focus();
			});
		}
	}

	//STEP 2
	if( step == "step-2-button")
	{
		if( 
			!$("#to-zip-code").validationEngine('validate') && 
			!$("#move-date").validationEngine('validate')  && 
			!$("#move-size").validationEngine('validate')  
		)
		{
			$('#step2').hide();
			$('#step3').show("slide", { direction: "left" }, 600, function(){
				$("#first-name").focus();
				$('#step-2-button').removeClass('current-step');
				$('#step-3-button').addClass('current-step');
			});
		}	
	}	

}


$("#secondary-moving-form").submit(function(e){

	if( !$("#secondary-from-zip-code").validationEngine('validate') )
	{
		$("#from-zip-code").val($("#secondary-from-zip-code").val());
		$("html, body").animate({ scrollTop: 0 }, 600);
		$("#step-1-button").click();
	} 
	e.preventDefault();
});

function calculateDistances() {
	var start = '90036';
	var end = '90210';
	if($('#zip_from').val() != ''){
		start = $('#zip_from').val();
	}
	if($('#zip_to').val() != ''){
		end = $('#zip_to').val();
	}
	var service = new google.maps.DistanceMatrixService();
	service.getDistanceMatrix(
	  {
		origins: [start],
		destinations: [end],
		travelMode: google.maps.TravelMode.DRIVING,
		unitSystem: google.maps.UnitSystem.IMPERIAL,
		avoidHighways: false,
		avoidTolls: false
	  }, callback);
}

function callback(response, status) {
	if (status != google.maps.DistanceMatrixStatus.OK) {
	  //alert('Error was: ' + status);
	  alert('Error: Please try again at a later time.');
	} else {
	  var origins = response.originAddresses;
      var destinations = response.destinationAddresses;
	  var test = '';
	  var str1 = origins.toString();
	  var str2 = destinations.toString();
	  if( str1.match(/\bUSA\b/) && str2.match(/\bUSA\b/)){
			try{
			  for (var i = 0; i < origins.length; i++) {
				var results = response.rows[i].elements;
				for (var j = 0; j < results.length; j++) {
				   test += results[j].distance.text;
				}
			  }
			  var rooms = 'six bedrooms and more house';
			  if($('#number_of_rooms').val() != ''){
				rooms = $('#number_of_rooms').val()
			  }	  
			  
			  $.post(
					'/moving/calc',
					{
						rooms: rooms,
						miles: test
					},
					function(data){
						var d = $.parseJSON(data);
						setTimeout(
							function(){
								$('#quoterange').html('$' + d.min + ' - $' + d.max);
								$('.slide-5-quote div').hide('slide',function(){
									$(this).next().show('slide',{direction:'right'});
								});
							}
						, 5 );
					}
				);	  
			  //alert(test);
			}catch(e){
				setTimeout(
					function(){
						$('#quoterange').html('Unable to calculate price range, one or more of your locations may not be accessible by moving trucks');
						$('#range-loader').hide('blind');
						$('#quote-range').show('blind');
					}
				, 5000 );
			}
		}
	  else{
		setTimeout(
			function(){
				$('#quoterange').html('Unable to calculate, Locations may not be in the USA');
				$('#range-loader').hide('blind');
				$('#quote-range').show('blind');
			}
		, 3000 );
	  }
	}
}
