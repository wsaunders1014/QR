<div id="wrapper">
<!-- BEGIN SLIDER.PHTML -->
<div id="slider" class="clearfix">
	<div class="slide first" id="slide-1">
		<div class="home-icon"></div>
		<h3>Calculate the cost of your move.</h3>
		<p>Prices as Low as $250 Local, <br/>$750 Long Distance</p>
		<div class='form-box'>
			<div class="error-msg"><div class="icon"></div>Must be a US zipcode.</div>
			<div class="question" id="cityState">Where are you moving from?</div>
			<form id="moving_from-form">
				<input type="tel" name="zip_from" id="from_zip" autocomplete="off" placeholder="From ZIP" maxlength="5" value="<?=$this->zip_from?>" tabindex="-1">
				<div class="btn inline" id="to-move-size">GO</div>
			</form>
			<div class="zip-help-wrapper">
				<span class="map-pin"></span><a href="#" class="zip-help">ZIP Help</a>
			</div>
		</div>
	</div>
	<div class="slide" id="slide-2">
		<div class="form-box">
			<div class="question">Where are you moving to?</div>
			<form id="moving_to-form">
				<div class="error-msg">Please enter a valid ZIP.</div>
				<input type="text" class="ziphelp" name="zip_to" id="to_zip" autocomplete="off" placeholder="Type City or ZIP" value="<?=$this->zip_to?>" tabindex="-1">
				<div class="btn inline" id="to-loader">GO</div>
				<div class="results">
					<ul></ul>
				</div>
			</form>
			<div id="info-bar" class="clearfix">
				<div style="font-size: 18px;color: #678BB7;"><span style="">From: </span> <span class="from-city"></span></div>
				<div style="display:inline;font-size: 18px;color: #678BB7;">Size: <span class="move-size"></span></div><div style="display:inline;margin-left:25px;font-size: 18px;color: #678BB7;">Date: <span class="move-date"></span></div>
			</div>
		</div>
	</div>
	<div class="slide" id="slide-3">
		<div id="loader" data-progress="0">
			<div class="circle">
				<div class="mask full">
					<div class="fill"></div>
				</div>
				<div class="mask half">
					<div class="fill"></div>
					<div class="fill fix"></div>
				</div>
				<div class="shadow"></div>
			</div>
			<div class="inset">
				<div id="percent">43%</div>
			</div>
		</div>
		<h4>Calculating...</h4>
	</div>
	<div class="slide" id="slide-4">
		<div id="progress-bar">
			<div class="movers-found">Movers Found<div class="checkmark"></div></div>
			<div class="view-quote">View Quote</div>
		</div>
		<h4>Next, our system will display your ballpark estimate.</h4>
		<div id="form-slider" class="clearfix">
			<div class="form-box">
				<div class="error-msg"><div class="icon"></div>Please enter valid email.</div>
				<div class="question">What is your email?</div>
				<form id="email-form">
					<input type="email" id="email_address" name="email_address" autocomplete="off" placeholder="Enter Valid Email" value="<?=$this->email_address?>" tabindex="-1">
					<div class="btn inline" id="to-name">GO</div>
				</form>
			</div>
			<div class="form-box">
				<div class="error-msg"><div class="icon"></div>Please enter valid name.</div>
				<div class="question">What is your name?</div>
				<form id="name-form">
					<input type="text" id="first_name" name="first_name" autocomplete="off" placeholder="First Name" maxlength="20" value="<?=$this->first_name?>" tabindex="-1">
					<input type="text" id="last_name" name="last_name" autocomplete="off" placeholder="Last Name" maxlength="20" value="<?=$this->last_name?>" tabindex="-1">
					<div class="btn" id="to-phone">SUBMIT</div>
				</form>
			</div>
			<div class="form-box">
				<div class="error-msg"><div class="icon"></div>Please enter valid number.</div>
				<div class="question">What is your number?</div>
				<form id="phone-form">
					<input type="tel" id="phone_number" name="phone_number" autocomplete="off" placeholder="Enter Phone Number" maxlength="16" value="<?=$this->phone_number?>" tabindex="-1">
					<div class="btn" id="to-verify">GET QUOTES</div>
				</form>
			</div>
		</div>
		<div id="disclaimer">
			By clicking on the "Get My Quotes" button I am verifying that I am over 18 years of age and agree to the Terms of Use and Privacy Policy. My "click" is my expressed written consent to be contacted via email, text, SMS or phone (including the use of autodialed calls or prerecorded calls) by Quote Runner LLC. and its moving partners that can quote or service my move, as well as companies offering other useful products or services. My consent supercedes any registration on any do-not-call list. Consent is required to proceed, but is not a condition of any purchase.
		</div>
	</div>
	<div class="slide" id="slide-5">
		<h3>Confirm Number</h3>
		<h4>Movers require us to validate your number prior to processing your quote.</h4>
		<div class="form-box">
			<div class="question">Edit or Confirm Number:</div>
			<form id="verify">
				<input type="tel" id="verify-phone" name="phone" autocomplete="off" placeholder="Verify Number" maxlength="16" value="">
				<div class="btn" id="validate-by-text">VALIDATE BY TEXT</div>
					<div class="or">OR</div>
				<div class="btn" id="validate-by-phone">VALIDATE BY PHONE</div>
			</form>
			<div class="subtext"><sup>*</sup>You will receive a 2 digit verification code and enter it on the next screen to confirm your number.</div>
		</div>
	</div>
	<div class="slide" id="slide-6">
		<h4>SMS CODE SENT TO:</h4>
		<h3>(888) 888-8888</h3>
		<div class="form-box">
			<div class="error-msg"><div class="icon"></div>Invalid Code.</div>
			<div class="question">Enter 2 Digit Code:</div>
			<form id="code-form">
				<input type="tel" id="code" name="verify-code" placeholder="00" maxlength="2" autocomplete="off">
				<div class="btn" id="to-thankyou">ENTER</div>
			</form>
			<div class="subtext">After validating your number, your quote will be ready and we will match you with movers</div>
		</div>
	</div>
	<div class="slide" id="slide-7">
		<h3>Thank You!</h3>
		<h4>Professional movers will contact you shortly. In the meantime, please see below for your approximate estimate.</h4>
		<h5 id="quote">Calculating...</h5>
	</div>
</div>
<div id="overlay">
	<div id="ziphelp">
		<h3>ZIP Help</h3>
		<form id="ziphelp-form">
			<input type='text' class="ziphelp" id="ziphelp-input" name="ziphelp" autocomplete="off" placeholder="Type City" tabindex="-1">
			<div class="btn inline" id="ziphelp-btn">GO</div>
			<div class="results">
				<ul></ul>
			</div>
		</form>
	</div>
	<div id="move-size">
		<div class="question">What size is your move?</div>
		<div id="size-list">
			<div class="size-btn" data-mask="Studio" data-value="studio">STUDIO</div>
			<div class="size-btn" data-mask="1 BR" data-value="one bedrooms apartment">1 BEDROOM</div>
			<div class="size-btn" data-mask="2 BR" data-value="two bedrooms apartment">2 BEDROOM</div>
			<div class="size-btn" data-mask="3 BR" data-value="three bedrooms house">3 BEDROOM</div>
			<div class="size-btn" data-mask="4+ BR" data-value="four bedrooms house">4+ BEDROOM</div>
			<div class="size-btn" data-mask="Office" data-value="two bedrooms house">OFFICE/COMMERCIAL</div>
		</div>
	</div>
	<div id="move-date">
		<div class="question">When are your moving?</div>
		<div id="datepicker"></div>
	</div>
	<div id="privacy-policy" class="popup">
		<div class="abs-reset"><div>
		<div class="close"></div>
		<p><strong>Privacy Policy</strong><br> Quote Runner LLC.<br> 30 N. Gould St. suite 5636<br>
Sheridan, WY 82801  </p>
		<br><p> Protecting your private information is one of our top priorities. This Privacy Policy applies to any web property owned and operated by Quote Runner LLC ("QR"), including www.quoterunner.co, and governs data collection and usage. This website is primarily an information-based and "contact-me" website. By using this website, you consent to the data practices described in this statement. </p><br><p><strong> Collection of your Personal Information </strong></p><br><p> Information about your computer hardware and software may be automatically collected by QR. This information may include your IP address, browser type, domain names, access times and referring website addresses. This information is used for the operation of the service, to maintain quality of the service, and to provide general statistics regarding use of this website. </p><br><p> QR encourages you to review the privacy statements of websites you choose to link to from QR so you can understand how those websites collect, use and share your information. QR is not responsible for the privacy statements or other content on websites outside of this website. </p><br><p><strong> Use of Cookies</strong></p><br><p> This website may use cookies to help personalize your online experience. A cookie is a text file that is placed on your hard disk by a web page server. Cookies cannot be used to run programs or deliver viruses to your computer. Cookies are uniquely assigned to you, and can only be read by a web server in the domain that issued the cookie to you.</p><br><p> You have the ability to accept or decline cookies. Most Web browsers automatically accept cookies, but you can usually modify your browser setting to decline cookies if you prefer. If you choose to decline cookies, you may not be able to fully experience the interactive features of the QR services or websites you visit. </p><br><p><strong> Security of your Personal Information</strong></p><br><p> Verisign </p><br><p> Verisign is an independent, third-party company engaged in the development of digital trust. Verisign provides authentication of Internet services, digital identity and intellectual property. By clicking on the Verisign logo, the Verisign website will serve up a web page that confirms that QR is "Verisign Authenticated." </p><br><p><strong> Children Under Thirteen</strong></p><br><p> QR does not knowingly collect personally identifiable information from children under the age of thirteen. If you are under the age of thirteen, you must ask your parent or guardian for permission to use this website. </p><br><p><strong> Recorded Phone Calls</strong></p><br><p> Telephone calls with Quote Runner LLC are routinely recorded for quality assurance. Recordings will not be released to customers except pursuant to a lawful court order, or when QR deems it appropriate, in its sole discretion, to resolve a dispute. </p><br><p><strong> Opt-Out &amp; Unsubscribe</strong></p><br><p> We respect your privacy and give you an opportunity to opt-out of receiving announcements of certain information. Users may opt-out of receiving marketing communications from QR by contacting us here: <br> - Email: info@quoterunner.co </p><br><p><strong> Changes to this Statement</strong></p><br><p> QR occasionally may update this Statement of Privacy to reflect company and customer feedback. QR encourages you to periodically review this Statement to be informed of how QR is protecting your information. </p><br><p> Contact Information </p><p> QR welcomes your questions or comments regarding this Statement of Privacy. If you believe that QR has not adhered to this Statement, please contact QR at: </p><br><p> Quote Runner LLC<br> 30 N. Gould St. Suite 5636<br> Sheridan, WY 82801<br></p><br><p> Email Address:<br> info@quoterunner.co<br></p><p> Telephone number:<br> 307-206-9506<br></p><p> Last Updated: January 26th, 2017 </p>
		</div></div>
	</div>
	<div id="terms-of-use" class="popup">
		<div class="abs-reset"><div>
		<div class="close"></div>
		<h3>Terms of Use</h3><p> Quote Runner LLC <br> 30 N. Gould St. Suite 5636<br> Sheridan, WY 82801<br></p>
		<br><p> Last Updated: 1-26-2017 </p><br><p> Please review these Terms of Use. By using this Website or by using the services offered through the website or ancillary means (including without limitation telephone, mail or email) you accept and agree to these Terms. The term Website includes the use of ancillary means. </p><br><p> If you do not agree to these Terms, you are not authorized to access or use or access the Website. </p><br><p> For purposes of this Agreement, "you" or "your" refers to the person using the Website. QR operates the Website and has the right at any time to change or discontinue any function, display or feature of the Website and the right to modify these Terms. Changes, modification, additions or deletions to the Website or these Terms shall be effective immediately upon posting on the Website. Any use by you of the Website shall be deemed to constitute acceptance of such changes. </p><br><p> The QR Privacy Policy is incorporated in this Agreement by reference. </p><br><p> Copyright Infringement </p><br><p> QR respects the rights of all copyright holders. If you believe your work has been copied on the Website resulting in a copyright infringement, please provide QR the following information required by the Online Copyright Infringement Liability Limitation Act of the Digital Millennium Copyright Act, 17 U.S.C. 512: </p><br><p> Identification of the copyrighted work you claim has been infringed;<br> Identification of the material that you claim is infringing and needs to be removed, including a description of where it is located on the Website sufficient to permit us to locate the material;<br> Information reasonably sufficient to permit us to contact you about your complaint;<br> A signed statement that the above information is accurate, that you have a good faith belief that the identified use of the materials is not authorized by the copyright owner, its agent or the law; and, under penalty of perjury, that you are the copyright owner or are authorized to act on the copyright owner's behalf. The statement may be signed physically or electronically.<br> Notice of copyright infringement claims should be sent as follows: </p><br><p> Copyright Agent<br> Quote Runner LLC<br> 30 N. Gould St. Suite 5636 <br> Sheridan, WY 82801 <br> By e-mail: info@quoterunner.co<br></p><br><p><strong>Use of the Website</strong></p><br><p> You agree and warrant that you will not submit any content (a) known by you to be false, inaccurate or misleading, (b) that infringes any third party's intellectual property, (c) that violates any applicable law, statute, ordinance or regulation, (d) that may reasonably be considered pornographic or illicit, defamatory, libelous, hateful, racially or religiously biased or offensive, unlawfully threatening or unlawfully harassing to any person, (e) for which you received compensation of any kind by any third party, or (f) that contains any computer viruses, worms or other potentially damaging computer programs or files. </p><p>Copyright, Trademark and Service Mark Notices</p><br><p> The Website and its content are copyrighted © by Quote Runner LLC and/or its suppliers and providers pursuant to license. Nothing on the Website grants you, by implication, estoppel or otherwise, any license or right to use any service mark or trademark ™ displayed on the Website, without the prior written permission of the applicable Mark holder. The Marks may not be used to disparage QR, the applicable third party or the products or services of such parties, nor shall they be used in any manner that may damage any goodwill in the Marks. Use of any Mark as part of a link to or from any site is prohibited unless establishment of such a link is approved in advance by QR in writing. Except as otherwise expressly permitted under copyright law, no copying, redistribution, retransmission, publication or commercial or non-commercial exploitation of downloaded material will be permitted without QR's (or the applicable copyright holders) express written permission. Elements of the Website are protected by trade dress, trademark, unfair competition, and other state and federal laws and may not be copied or imitated in whole or in part, by any means, including but not limited to, the use of framing or mirrors. </p><br><p><strong>Disclaimers And Liability</strong></p><br><p> QR intends that the information contained in this Website is accurate and reliable. Errors do, however, sometimes occur. In addition, changes and improvements to the information provided herein may be made by QR at any time. QR is not, under any circumstances, liable for any loss or damage caused by your reliance on information obtained through this Website, links contained herein or products and services offered or provided by any third party unless otherwise provided by law. It is your responsibility to evaluate the accuracy, completeness or usefulness of any information, opinion, advice or other content available through this Website </p><br><p> THIS WEBSITE AND THE INFORMATION, PRODUCTS AND SERVICES ASSOCIATED WITH IT ARE PROVIDED "AS IS". QR AND/OR ITS SUPPLIERS DISCLAIM ANY WARRANTY OF ANY KIND, WHETHER EXPRESS OR IMPLIED, AS TO ANY MATTER WHATSOEVER RELATING TO THIS WEBSITE AND ANY INFORMATION, PRODUCTS AND SERVICES PROVIDED HEREIN, INCLUDING WITHOUT LIMITATION THE IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, TITLE, AND NONINFRINGEMENT. USE THIS WEBSITE IS AT YOUR OWN RISK. QR AND/OR ITS SUPPLIERS ARE NOT LIABLE FOR ANY DIRECT, INDIRECT, PUNITIVE, INCIDENTAL, SPECIAL OR CONSEQUENTIAL DAMAGES OR OTHER INJURY ARISING OUT OF OR IN ANY WAY CONNECTED WITH THE USE OR THE INABILITY TO USE THIS WEBSITE OR WITH THE DELAY OR INABILITY TO USE THIS WEBSITE, OR FOR ANY INFORMATION, PRODUCTS AND SERVICES OBTAINED THROUGH THIS WEBSITE, INCLUDING BUT NOT LIMITED TO RELIANCE BY YOU ON ANY INFORMATION OBTAINED AT THIS WEBSITE, OR THAT RESULT FROM MISTAKES, OMISSIONS, INTERRUPTIONS, DELETION OF FILES OR EMAILS, ERRORS, DEFECTS, VIRUSES, WORMS, TROJAN HORSES, TRAP DOORS, BACK DOORS, EASTER EGGS, TIME BOMBS, CANCELBOTS OR OTHER CODE OR COMPUTER PROGRAMMING ROUTINES THAT CONTAIN CONTAMINATING OR DESTRUCTIVE PROPERTIES OR THAT ARE INTENDED TO DAMAGE, DETRIMENTALLY INTERFERE WITH, SURREPTITIOUSLY INTERCEPT OR EXPROPRIATE ANY SYSTEM, DATA OR PERSONAL INFORMATION, DELAYS IN OPERATION OR TRANSMISSION, OR ANY FAILURE OF PERFORMANCE, WHETHER OR NOT RESULTING FROM ACTS OF GOD, COMMUNICATIONS FAILURE, THEFT, DESTRUCTION OR UNAUTHORIZED ACCESS TO TREE RECORDS, PROGRAMS OR SERVICES, OR OTHERWISE ARISING OUT OF THE USE OF THIS WEBSITE, WHETHER RESULTING IN WHOLE OR IN PART, FROM BREACH OF CONTRACT, TORTIOUS BEHAVIOR, NEGLIGENCE, STRICT LIABILITY OR OTHERWISE, EVEN IF QR AND/OR ITS SUPPLIERS HAVE BEEN ADVISED OF THE POSSIBILITY OF DAMAGES. SOME JURISDICTIONS DO NOT ALLOW THE EXCLUSION OF IMPLIED WARRANTIES, SO THE ABOVE EXCLUSION MAY NOT APPLY TO YOU. </p><br><p> Third Party Website Links </p><br><p> This Website may contain links to websites maintained by unaffiliated third parties. These links are provided for your convenience only. QR does not operate or control in any way the information, software, products or services available on such websites, and providing such links to you does not imply any endorsement of the products or services or the website's contents. When you leave this Website, QR is not responsible for the accuracy or content of the information provided by the linked website, nor is it liable for any direct or indirect technical or system issues arising out of your access to or use of third party technologies or programs available through that website. </p><br><p> Indemnity </p><p> As a condition of use of this Website and/or QR's services, you agree to indemnify QR and its suppliers from and against any and all liabilities, expenses (including attorneys' fees) and damages arising out of claims resulting from your use of this Website, including without limitation, any claims alleging facts that if true would constitute a breach by you of this Agreement. If you contract QR to provide a moving estimate and broker moving services for you, this entire agreement (only in relation to your long distance move) will be replaced with the terms of the written estimate provided to you. </p><br><p> Limitation On Damages </p><br><p> In no event will QR have any liability to you in excess of actual compensatory damages. You irrevocably waive any claim to consequential, punitive or exemplary damages. </p>
		</div></div>
	</div>
</div>
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
<!-- END SLIDER.PHTML -->
</div>