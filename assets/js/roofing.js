$( document ).ready(function() {
	
	
	 
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
	
	 
	
	
	$("#step-1-button").click(function()
	{
		console.log('here');
		if (validator.form()) 
		{
			console.log('here2');
			$('#step-1-button').removeClass('current-step');
			$('#step-2-button').addClass('current-step');
			
			$('#step-1').hide("slide", { direction: "left" }, 400, function(){
				$("html,body").animate({ scrollTop: 0 }, "slow");
				$('#step-2').show("slide", { direction: "right" }, 600, function(){
					//do nothing
				});
			});
		}
	});
	
	
	
	$("#step-2-button").click(function()
	{
		if (validator.form()) 
		{
			
			$('#step-2-button').removeClass('current-step');
			$('#step-3-button').addClass('current-step');
			
			$('#step-2').hide("slide", { direction: "left" }, 400, function(){
				$("html,body").animate({ scrollTop: 0 }, "slow");
				$('#step-3').show("slide", { direction: "right" }, 600, function(){
					//do nothing
				});
			});
			
		}
	});
	
	
	
	
	
	
	
	
	$("#phone").mask("(999) 999-9999",{placeholder:""});
	$("#zip_code").mask("99999",{placeholder:""});
	
	
	 
	
	jQuery.validator.setDefaults({
		//debug: true,
		//success: "valid"
	});
	
	
	var validator = $("#roofing-form").validate({
			rules: {
				 zip_code: {
					required: true,
					digits: true
				},
				roof_size: {
					required: true
				},
				roof_type: {
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
			submitHandler: function(form){
				form.submit();
			}
			
			
		}

	);
	
	
	$( "#form-submit-button" ).click(function(e){
		if (validator.form()) 
		{
			$('#roofing-form').submit();
		}
	});
		
});


 


