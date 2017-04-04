$( document ).ready(function() {
	
	
	$("#step-1-button").click(function()
	{
		if (validator.form()) 
		{
			$('#animation').attr('src', $('#animation').attr('data-url'));
			$('.step-1').hide("slide", { direction: "right" }, 400, function(){
				$("html,body").animate({ scrollTop: 0 }, "slow");
				$('.search-step').show("slide", { direction: "left" }, 600, function(){
				
					$('.search-step').delay(7200).hide("slide", { direction: "right" }, 600, function(){
						$('.step-2').show("slide", { direction: "left" }, 600, function(){
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
	$( "#move_date").datepicker({ minDate: 0, maxDate: "+6M", numberOfMonths: 1 });
	
	
	$('.icon-custom-calender').click(function(){
		$("#move_date").focus();
	});
	
	
	jQuery.validator.setDefaults({
		//debug: true,
		//success: "valid"
	});
	
	
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
			submitHandler: function(form){
				form.submit();
			}
			
			
		}

	);
	
	
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

 


