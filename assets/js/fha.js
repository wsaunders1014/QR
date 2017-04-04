$( document ).ready(function() {
	
	$("#from-zip-code").focus();
	$("#moving-form").validationEngine();
	$( "#move-date").datepicker({ minDate: 0, maxDate: "+3M +1D", numberOfMonths: 2 });
	$("#phone").mask("(999) 999-9999",{placeholder:" "});
	$("#from-zip-code").mask("99999",{placeholder:" "});
	$("#to-zip-code").mask("99999",{placeholder:" "});
	$("#secondary-from-zip-code").mask("99999",{placeholder:" "});



	if($('#countdown').length )
	{
		var currentDate = new Date();
		var target_date = new Date(currentDate.getTime() + (10 * 60 * 1000));
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



});
 


function next_step(step)
{

	//STEP 1
	if( step == "#step2")
	{
		if( 1 )
		{
			$('#step1').hide();
			$('#step2').show();	
			$("#to-zip-code").focus();
		}
	}

	//STEP 2
	if( step == "#step3")
	{
		if( 1 )
		{
			$('#step2').hide();
			$('#step3').show();	
			$("#first-name").focus();
		}	
	}	

}


$("#secondary-moving-form").submit(function(e){

	if( !$("#secondary-from-zip-code").validationEngine('validate') )
	{
		$("#from-zip-code").val($("#secondary-from-zip-code").val());
		$("html, body").animate({ scrollTop: 0 }, 600);
		$("#step-2-button").click();
	} 
	e.preventDefault();
});