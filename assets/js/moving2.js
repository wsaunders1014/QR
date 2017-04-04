$( document ).ready(function() {
	
	
	 //preload animation
	 var animating_gif = new Image();
	 animating_gif.src = "http://quoterunner.co/assets/img/desktop-animation.gif";

  	//$(window).keydown(function(event){
    
	$('form').bind("keyup keypress", function(e) {
	//$(window).keydown(function(e){
    	  var code = e.keyCode || e.which; 
		  if (code  == 13) {    
			$('.current-step').click();
		    e.preventDefault();
		    return false;
		  }
	  });
	 
	 
	 
	
	
	$("#step-1-button").click(function()
	{
		if (validator.form()) 
		{
			//$('#step-1-button').removeClass('current-step');
			//$('#step-2-button').addClass('current-step');
			
			$('#step-1').hide("slide", { direction: "left" }, 400, function(){
				//$("html,body").animate({ scrollTop: 0 }, "slow");
				$('#step-2').show("slide", { direction: "right" }, 600, function(){
			
				});
			});
		}
	});
	
	
	$("#step-2-button").click(function()
	{
		if (validator.form()) 
		{
			//$('#step-2-button').removeClass('current-step');
			//$('#form-submit-button').addClass('current-step');
			
			$('#step-2').fadeOut('slow', function(){
				//$('#search-animating-gif').attr('src', '#');
				$('#search-animation').attr('src', animating_gif.src);
				$('#search-step').fadeIn('slow', function(){
					$('#search-step').delay(15000).fadeOut('slow',function(){
						$('#step-3').show("slide", { direction: "right" }, 600, function(){
							initialize();
						});
					});

				});	
				
			});				
		}
	});
	
	
	
	
	
	
	
	
	$("#from_zip_code").focus();
	$("#phone").mask("(999) 999-9999",{placeholder:""});
	$("#from_zip_code").mask("99999",{placeholder:""});
	$("#to_zip_code").mask("99999",{placeholder:""});
	$( "#move_date").datepicker({ minDate: 0, maxDate: "+6M", numberOfMonths: 2 });
	
	
	$('.icon-custom-calender').click(function(){
		$("#move_date").focus();
	});
	
	
	jQuery.validator.setDefaults({
		//debug: true,
		//success: "valid"
	});
	
	var submitted = false;
	var validator = $("#moving-form").validate({
			rules: {
				 from_zip_code: {
					required: true,
					digits: true
				},
				to_zip_code: {
					required: true,
					minlength: 5,
					maxlength: 5,
					digits: true
				},
				move_date: {
					required: true
				},
				move_size: {
					required: true
				},
				first_name: {
					required: true,
					minlength: 3
				},
				last_name: {
					required: true,
					minlength: 3
				},
				email: {
					required: true,
					email: true
				},
				phone: {
					required: true,
					minlength: 10
				}
			},
			messages: {
		    	from_zip_code: "zip code you are moving from?",
		    	to_zip_code: "zip code you are moving to?",
		    	move_date: "approximate move date?",
		    	move_size: "approximate move size?",
		    	first_name: "your first name?",
		    	last_name: "your last name?",
				email: {
					required: "provide your email address",
					email: "email address is invalid"
				},
				phone: {
					required: "provide your phone number",
					email: "phone number is invalid"
				}
				
		    },
			submitHandler: function(form){
				
				if(!submitted){
					form.submit();
				//	conversion(976539933,'TbsJCJve4AcQnaLT0QM');
					submitted = true;
				}
			}
			
			
		}

	);
	
	$('.accept-terms').hide(); 
	
	function conversion(google_conversion_id,google_conversion_label){
	//console.log("yahoo conversion");
		if(location.hostname == "quoterunner.co" ){
			//window.dotq = window.dotq || [];
			//window.dotq.push({"projectId":"10001059850032", "properties": {"pixelId":"431153","qstrings":{"et":"custom", "ea":"conversion"}}});
			//console.log("bing conversion");
			//window.uetq = window.uetq || []; window.uetq.push({'ea': 'bconversion'}); 
			
			//google conversion script
			var image = new Image(1,1); 
			image.src = "http://www.googleadservices.com/pagead/conversion/"+google_conversion_id+"/?label="+google_conversion_label + "&script=0";
			$('body').append(image);
		}
	}

	
	function validateEmail(email) { 
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
} 

	
	
	$( "#form-submit-button" ).click(function(e){
		if (validator.form()) 
		{
			$('#moving-form').submit();
		}
	});
		
});


//GOOGLE MAP CODE
    
var directionsDisplay;
var directionsService = new google.maps.DirectionsService();
var map;

function initialize() {
  directionsDisplay = new google.maps.DirectionsRenderer();
  var mapOptions = {
      scrollwheel: false,
      navigationControl: false,
      mapTypeControl: false,
      scaleControl: false,
      draggable: false,
	  disableDoubleClickZoom: true,
	  disableDefaultUI: true,
	  clickable: false,
	  mapTypeId: google.maps.MapTypeId.ROADMAP
	};


  map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
  var directionsOptions = {
		markerOptions: {clickable: false}
	};
	directionsDisplay.setMap(map);
	directionsDisplay.setOptions(directionsOptions);
	calcRoute();
}

function calcRoute() {
  var start = $('#from_zip_code').val();
  var end = $('#to_zip_code').val();
  var request = {
      origin:start,
      destination:end,
      travelMode: google.maps.TravelMode.DRIVING
  };
  directionsService.route(request, function(response, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      directionsDisplay.setDirections(response);
    }
  });
}

 


