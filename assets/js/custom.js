$( document ).ready(function() {
$( "#login-form" ).submit(function( event ) {
		alert( "Username and/or Password Incorrect, please try again!" );
		event.preventDefault();
  });
  
  $('form').bind("keyup keypress", function(e) {
	  var code = e.keyCode || e.which; 
	  if (code  == 13) {               
	    e.preventDefault();
	    return false;
	  }
  });
});
 
 
/*
* FUNCTIONS
*/ 
