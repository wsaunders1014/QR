<footer class="clearfix">
	<div class="centered">
		<div class="contact-links">
			<!-- Email:<br/>
			<a style="text-decoration:underline;" href="mailto:contact@quoterunner.co">Contact@QuoteRunner.co</a> 
			<br/>-->
			Phone:<br/>
			<a href="tel:8889766067">888-976-6067</a>
		</div>
		<!-- <div class="menu-links">
			<ul>
				<li><a href="#">How it Works</a></li>
				<li><a href="#">Our Agents</a></li>
				<li><a href="#">FAQS</a></li>
				<li><a href="#">Affiliates</a></li>
			</ul>
		</div> -->
		<div class="right-menu clearfix">
			<div class="twt"><a target="_blank" href="https://twitter.com/QuoteRunner_"></a></div>
			<div class="fb"><a target="_blank" href="https://www.facebook.com/QuoteRunner-751459501696914/"></a></div>
			<div class="clear">
				<a href="#" class="privacy">Privacy Policy</a>
				<a href="#" class="terms">Terms & Conditions</a>
			</div>
		</div>
	</div>
</footer>
<input type="hidden" id="source" name="source" value="<?=$this->source?>" />
<input type="hidden" id="utm_source" name="utm_source" value="<?php echo (isset($_GET['utm_source'])) ? $_GET['utm_source']: "" ?>">
 <input type="hidden" id="utm_medium" name="utm_medium" value="<?php echo (isset($_GET['utm_medium'])) ? $_GET['utm_medium']: "" ?>">
 <input type="hidden" id="utm_campaign" name="utm_campaign" value="<?php echo (isset($_GET['utm_campaign'])) ? $_GET['utm_campaign']: "" ?>">
 <input type="hidden" id="ag"  name="ag" value="<?php echo (isset($_GET['ag'])) ? $_GET['ag']: "" ?>">
 <input type="hidden"  id="qs" name="qs" value="<?php echo (isset($_GET['qs'])) ? $_GET['qs']: "" ?>">
 <input type="hidden"  id="network" name="network" value="<?php echo (isset($_GET['network'])) ? $_GET['network']: "" ?>">
 <input type="hidden"  id="device"  name="device" value="<?php echo (isset($_GET['device'])) ? $_GET['device']: "" ?>">
 <input type="hidden" id="adid" name="adid" value="<?php echo (isset($_GET['adid'])) ? $_GET['adid']: "" ?>">
 <input type="hidden" id="gclid" name="gclid" value="<?php echo (isset($_GET['gclid'])) ? $_GET['gclid']: "" ?>">
 <!-- Google Code for Desktop Lead Conversion Page
In your html page, add the snippet and call
goog_report_conversion when someone clicks on the
chosen link or button. -->
<script type="text/javascript">
  /* <![CDATA[ */
  goog_snippet_vars = function() {
    var w = window;
    w.google_conversion_id = 976539933;
    w.google_conversion_label = "p9jfCPjV-W4QnaLT0QM";
    w.google_remarketing_only = false;
  }
  // DO NOT CHANGE THE CODE BELOW.
  goog_report_conversion = function(url) {
    goog_snippet_vars();
    window.google_conversion_format = "3";
    var opt = new Object();
    opt.onload_callback = function() {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  }
  var conv_handler = window['google_trackConversion'];
  if (typeof(conv_handler) == 'function') {
    conv_handler(opt);
  }
}
/* ]]> */
</script>
<script type="text/javascript"
  src="//www.googleadservices.com/pagead/conversion_async.js">
</script>
<script src="<?php echo base_url('assets/js/TweenLite.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/TimelineLite.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/CSSPlugin.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/CustomEase.min.js') ?>"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOAFjKE8xQUWxlVds1COiroKVmYjH8SoM"></script>
<script src="<?php echo base_url('assets/js/moving-2.js') ?>"></script>
</body>
</html>