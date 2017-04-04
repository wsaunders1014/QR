<footer>
    <div class="container">
        <div class="row">
        	<div class="col-md-12">
            	
            	
            	
            	<table width="100%" border="0" cellpadding="2" cellspacing="0" title="Click to Verify - This site chose Symantec SSL for secure e-commerce and confidential communications.">
<tr>
<td width="135" align="center" valign="top"><script type="text/javascript" src="https://seal.verisign.com/getseal?host_name=www.quoterunner.co&amp;size=S&amp;use_flash=NO&amp;use_transparent=NO&amp;lang=en"></script><br />
<a href="http://www.symantec.com/verisign/ssl-certificates" target="_blank"  style="color:#000000; text-decoration:none; font:bold 7px verdana,sans-serif; letter-spacing:.5px; text-align:center; margin:0px; padding:0px;">ABOUT SSL CERTIFICATES</a></td>
</tr>
</table>

Copyright &copy; <?php echo date('Y'); ?> QuoteRunner.Co. All rights reserved.

            </div>
        </div>
    </div>
</footer>
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
   <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/lodash.js/1.3.1/lodash.min.js"></script>
   <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
   <script src="<?php echo base_url('assets/js/jquery.maskedinput.min.js') ?>"></script>
   <script src="<?php echo base_url('assets/js/jquery.validate.min.js') ?>"></script>
   <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
   
   
	
	<script>
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
	</script>
	

	
	<?php if(isset($include_js)): ?>
		<script src="<?php echo base_url('assets/js/'.$include_js) ?>"></script>
	<? endif; ?>
	
	
</body>
</html>
