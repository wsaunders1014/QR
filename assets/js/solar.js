$( document ).ready(function() {
	
	//$("#solar-form").validationEngine();
	
	$("#phone").mask("(999) 999-9999",{placeholder:""});
	$("#zip-code").mask("99999",{placeholder:""});
	
	
	if($('#countdown').length )
	{
		var currentDate = new Date();
		var target_date = new Date(currentDate.getTime() + (60 * 60 * 1000));
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


	
	$("#solar-form").submit(function(e){
	
		if( $("#solar-form").validationEngine('validate') )
		{
			$(this).submit();
		}
		else
		{
			e.preventDefault();
		} 
		
	});
	
	
});





/*
* FUNCTIONS
*/ 

function next_step(step)
{

	//STEP 1
	if( step == "#step2")
	{
		if( !$("#electricity-bill-select").validationEngine('validate') )
		{
			$('#step1').hide();
			$('#step2').show();	
		}
	}

	//STEP 2
	if( step == "#step3")
	{
		if( 
			!$("#zip-code").validationEngine('validate') && 
			!$("#is-owner").validationEngine('validate')  && 
			!$("#covered-by-shade").validationEngine('validate')  
		)
		{
			$('#step2').hide();
			$('#step3').show();	
		}	
	}	

}

 
/*
* FUNCTIONS
*/ 
