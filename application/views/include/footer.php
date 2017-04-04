<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-10">
                <h5>Contact Us</h5>
            </div>
            <div class="col-xs-2">
                 <h5>Follow Us on</h5>
            </div>
         </div>
       	 <div class="row">
                    <div class="col-xs-3">
                        <i class="icon-custom-envelope"></i><a href="mailtp:contact@quoterunner.com">contact@quoterunner.co</a>
                    </div>
                    <div class="col-xs-4">      
                        <i class="icon-custom-phone"></i>(307)-206-9506
                    </div>
                     <div class="col-xs-3">      
                        <!--<i class="icon-custom-comments"></i>Chat online  -->
                    </div>
                     <div class="col-xs-2">
                          <a href="https://www.facebook.com/quoterunner"><i class="icon-custom-facebook1"></i></a>
                          <a href="https://twitter.com/QuoteRunnerco"><i class="icon-custom-twitter1"></i></a>
            		 </div>      
         </div> 
         <div class="row">
                <ul>
                    <li><a href="/">How It Works</a></li>
                    <li><a href="/about/">About Us</a></li>
                    <li><a href="/faq/">FAQ</a></li>
                    <li><a href="/partners/agents/">Agents</a></li>
                    <li><a href="/partners/service-partners/">Affiliates</a></li>
                    <li><a href="/privacy-policy/">Privacy Policy</a></li>
                    <li><a href="/terms/">Terms & Conditions</a></li>
                    <li><a href="/contact/">Contact</a></li>
                </ul>
                <table width="100%" border="0" cellpadding="2" cellspacing="0" title="Click to Verify - This site chose Symantec SSL for secure e-commerce and confidential communications.">
<tr>
<td width="135" align="center" valign="top"><script type="text/javascript" src="https://seal.verisign.com/getseal?host_name=www.quoterunner.co&amp;size=S&amp;use_flash=NO&amp;use_transparent=YES&amp;lang=en"></script><br />
<a href="http://www.symantec.com/verisign/ssl-certificates" target="_blank"  style="color:#000000; text-decoration:none; font:bold 7px verdana,sans-serif; letter-spacing:.5px; text-align:center; margin:0px; padding:0px;">ABOUT SSL CERTIFICATES</a></td>
</tr>
</table>
            <p>&copy; <?php echo date('Y'); ?> QuoteRunner. All rights reserved</p>           
        </div> 
    </div>
</div>        
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
   <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/lodash.js/1.3.1/lodash.min.js"></script>
   <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
   
	<script src="<?php echo base_url('assets/js/jquery.validationEngine-en.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/jquery.validationEngine.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/jquery.validate.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/jquery.maskedinput.min.js') ?>"></script>
	
	
	
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
