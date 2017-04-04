<div class="moving-top" style="height: 630px;">
     <div class="container">
          
          <?php echo form_open('moving/thank-you', array('id' => 'moving-form')); ?>
          	 <div id="step1" data-active="1" class="step">
                       <div class="row">
                            	<h1>Moving Price Calculator</h1>
					<h2>Save 60% in 60 Seconds on Full Service Movers</h2>
                  	<h5 style="color:white; font-weight: normal;">
                  		Truck, Loading &amp; Driving Included - Nationwide from 
                  		<span style="color: red; font-size: 36px;">$849</span>
	                </h5>
                       </div>
                       <div class="row">
                            <div class="form-box">
                                               <h4>I am moving from</h4>
                                               <div class="form-group">
                                                <input type="text" id="from-zip-code" class="validate[required,custom[onlyNumberSp],minSize[5],maxSize[5]]" name="from_zip_code" placeholder="zipcode">
                                                </div>
                                               <div class="form-group">
                                                <button class="next-step icon-custom-btn1 current-step" type="button" id="step-1-button">Get Started</button>
                                               </div>
                            </div>
                       </div>                                   
                       <div class="row desclaimer">
                             <div class="col-xs-2"><i class="icon-custom-permission"></i></div>
                             <div class="col-xs-10 terms"><a href="/terms/">Terms</a>  |  <a href="/privacy-policy/">Privacy policy</a></div>  
                       </div> 
                       <div class="row step2icon">
                                <img src="/assets/img/moving_patners.png" alt="" height="79" width="930"  />
                       </div>
               </div> 
                              
               <div id="step2" style="display:none"  class="step">
                     <div class="row">
                         <h2> Save Time and Money Compared to Renting</h2>
                         <p>We carry a wide range of licensed and reputable carriers in our network that service long distance moves across the country. <br />We provide you competing quotes from licensed movers available for your move.</p>
                     </div>
                      <div class="row">
                          <div class="form-box">
                                 <div class="form-group">
                                        <label class="col-xs-5">To Zip Code</label>
                                        <div class="col-xs-7">
                                        <input type="text" id="to-zip-code" name="to_zip_code" class="normalsize validate[required,custom[onlyNumberSp],minSize[5],maxSize[5]]" placeholder="Where are you moving to?">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-5">When is your move?</label>
                                     	 <div class="col-xs-7">
                                            <div class="input-group">
                                                <input type="text" id="move-date" class="datepicker normalsize validate[required]" name="move_date" placeholder="approximate move date" readonly="readonly"> <span id="calendar-icon" class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-5">Move Size</label>
                                        <div class="col-xs-7">
                                            <select class="normalsize validate[required]" id="move-size" name="move_size">
                                                <option class="" value="">Select home size</option>
                                                <option class="" value="studio">Studio</option>
                                                <option class="" value="one bedrooms apartment">1 Bedroom Apt</option>
                                                <option class="" value="one bedrooms house">1 Bedroom House</option>
                                                <option class="" value="two bedrooms apartment">2 Bedroom Apt</option>
                                                <option class="" value="two bedrooms house">2 Bedroom House</option>
                                                <option class="" value="three bedrooms apartment">3 Bedroom Apt</option>
                                                <option class="" value="three bedrooms house">3 Bedroom House</option>
                                                <option class="" value="four bedrooms apartment">4 Bedroom Apt</option>
                                                <option class="" value="four bedrooms house">4 Bedroom House</option>
                                                <option class="" value="five bedrooms apartment">5 Bedroom Apt</option>
                                                <option class="" value="five bedrooms house">5 Bedroom House</option>
                                                <option class="" value="six bedrooms apartment">6 Bedroom Apt</option>
                                                <option class="" value="six bedrooms house">6 Bedroom House</option>
                                                <option class="" value="six bedrooms and more apartment">6 or more Bedroom Apt</option>
                                                <option class="" value="six bedrooms and more house">6 or more Bedroom House</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group sbtn">
                                    <button class="icon-custom-btn1 next-step" id="step-2-button" type="button">Proceed</button>
                                    </div>
                            </div>
                       </div>
                        
                       <div class="row step2icon">
                           		<div class="col-xs-2">
                                     <i class="icon-custom-check"></i><h5>QuoteRunner makes moving easy</h5> 
                                </div>
                                <div class="col-xs-2">
                                    <i class="icon-custom-users"></i><h5>Save time and money in 3 easy steps </h5>
                                </div>
                                <div class="col-xs-2">
                                    <i class="icon-custom-list"></i><h5>Connect with licensed movers nationwide </h5>
                                </div>
                                <div class="col-xs-2">
                                    <i class="icon-custom-cog"></i><h5>View your move's price range online</h5> 
                                </div>
                                <div class="col-xs-2">
                                    <i class="icon-custom-phonemail"></i><h5>Get free quotes via phone and email</h5> 
                                </div>
                      </div> 
                </div>                                      

                <div id="step3" style="display:none" class="step">
                  <h2>You are one step away from a <font color="red">FREE</font> moving quote</h2>
                  <div class="row">
                 	 <div class="form-box">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-xs-3">Full Name</label>
                                    <div class="col-xs-9">
                                    	<input type="text" id="first-name"  class="fullname validate[required,minSize[3]]" name="first_name" placeholder="first name">
										<input name="last_name" id="last-name" type="text" class="fullname validate[required,minSize[3]]" placeholder="last name">
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="col-xs-3">Valid e-mail</label>
                                    <div class="col-xs-9">
                                   		 <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                                <input type="text" id="email" name="email" validationEngine class="normalsize validate[required,custom[email]]" placeholder="your email">
                                         </div>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label for="inputEmail3" class="col-xs-3">Valid phone</label>
                                    <div class="col-xs-9">
                                    	 <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                                <input type="text" id="phone" name="phone" class="normalsize validate[required,minSize[10]]" placeholder="( ) -">
                                          </div>
                                    </div>
                                </div>
                                 <div class="form-group" style="display:none;">
                                    <label for="inputEmail3" class="col-xs-3"></label>
                                   	<input type="checkbox" id="inputEmail3" class="validate[required]" name="sample" checked ><div class="agree">I agree to <a href="/terms/" target="_blank">Terms</a></div>
                                </div>
                                <div class="form-group sbtn">
                                <button class="icon-custom-btn1 col-xs-12" id="step-3-button" name="submit" id="submit" type="submit">Get Price</button>
                                </div>
                      </div>
                    </div>
                      <div  class="row policy">By clicking on the [Get Price] button, you consent, acknowledge, and agree to the following
(i) You agree to review and honor the Terms of Use and Privacy Policy;(ii) You affirmatively consent and agree that any disclosures required by law and other information about your legal rights and duties may be provided to you electronically;(iii) Your electronic signature is made by clicking the [Display Price] and shall have the same effect as if you signed in ink;(iv) This authorization allows licensed moving carriers to contact you regardless of previous registration(s) on a federal or state Do-Not-Call (DNC) registry or any internal opt-out/unsubscribe requests you may have previously submitted to QuoteRunner,co., Set Media Lab, licensed carriers or third party lead distributors.(v) You authorize QuoteRunner,co., Set Media Lab., licensed carriers who may be able to service your move and third party lead distributors, to send text or SMS marketing messages to you, and may use an automatic dialing system in connection with calls made to the telephone number you entered, even if it is a cellular phone number.(vi) Licensed carriers which may be part of a third party distribution network which may provide you with a moving quote are not currently identified; you understand that some carriers may use text messages to provide you with a moving quote or other marketing offers, and may use an automatic dialing system in connection with calls made to any telephone number you entered, even if it is a cellular phone number.(vii) I understand that I may choose not to click the [Get Price] if I do not want to receive calls or messages.(viii) I understand that consent is not a condition of purchase.
                      </div>
  				 </div>
  			 <input type="hidden" name="utm_source" value="<?php echo (isset($_GET['utm_source'])) ? $_GET['utm_source']: "" ?>">
			 <input type="hidden" name="utm_medium" value="<?php echo (isset($_GET['utm_medium'])) ? $_GET['utm_medium']: "" ?>">
			 <input type="hidden" name="utm_campaign" value="<?php echo (isset($_GET['utm_campaign'])) ? $_GET['utm_campaign']: "" ?>">
			 <input type="hidden" name="ag" value="<?php echo (isset($_GET['ag'])) ? $_GET['ag']: "" ?>">
			 <input type="hidden" name="qs" value="<?php echo (isset($_GET['qs'])) ? $_GET['qs']: "" ?>">
			 <input type="hidden" name="network" value="<?php echo (isset($_GET['network'])) ? $_GET['network']: "" ?>">
			 <input type="hidden" name="device" value="<?php echo (isset($_GET['device'])) ? $_GET['device']: "" ?>">
			 <input type="hidden" name="adid" value="<?php echo (isset($_GET['adid'])) ? $_GET['adid']: "" ?>">
			 <input type="hidden" name="gclid" value="<?php echo (isset($_GET['gclid'])) ? $_GET['gclid']: "" ?>">
			 <input type="hidden" name="source" value="/moving">
   	     </form>
      </div>
</div>     
<div class="movingblock1">     
        <div class="container">
            <div class="row">
                 <div class="col-xs-6 whitebg services">
                     <table width="100%" border="0" class="table">
                          <tr>
                            <td><i class="icon-custom-safe"></i><h4>Safer</h4></td>
                            <td><i class="icon-custom-fast"></i><h4>Faster</h4></td>
                          </tr>
                          <tr>
                            <td><i class="icon-custom-price"></i><h4>Compititive Pricing</h4></td>
                            <td><i class="icon-custom-pack"></i><h4>Customized Packing</h4></td>
                          </tr>
                    </table>
                      <p>Moving to another location can be a daunting task, if not a logistical nightmare. Let the professionals do it all for you. Quoterunner matches you with movers that has the knowledge, experience, people and equipment to get all your belongings to your new place in the safest and most efficient way. With us, you can only expect the best moving, storage, and packing services.  </p><a class="knowmore" href="#">Know more</a>
                 </div>
                 <div class="col-xs-6">
                    <div class="whitebg">
                        <h5>Our Happy Customers</h5>
                        <p>QuoteRunner saved me time money and headaches! I have used them several times by now and they are always able to help me find the best deals from the best providers - highly recommended! </p>
                        <p class="auth1"><span>- Carol W, </span>California</p>
                    </div>
                    <div class="whitebg">
                        <h5>FAQ</h5>
                        <h6><i class="icon-custom-ques"></i>Is  there a fee for using QuoteRunner?</h6>
                      <p>No  the site and all quote comparison services are completely free. </p>
                        <p class="ryt1"><i class="icon-custom-leftarrow"></i>View all<i class="icon-custom-rightarrow"></i></p>
                    </div>
                 </div> 
              </div> 
        </div>
</div>        

<div class="play-your-movie">
      <div class="container">
      		<div class="row">
                    <div class="col-xs-6">
                          <h3>Plan your move in minutes</h3>
                          <table width="100%" border="0">
                              <tr>
                                <td><i class="icon-custom-safe1"></i><h6>Fill out our simple form</h6>
                              </tr>
                              <tr>
                                <td><i class="icon-custom-review"></i><h6>Review the price range for qualified<br />movers</h6></td>
                              </tr>
                              <tr>
                                <td><i class="icon-custom-pack1"></i><h6>Receive exact quotes for your move</h6></td>
                              </tr>
							</table>
                                 <form name="" id="secondary-moving-form">
                                     <div class="form-group">
                                        <label class="col-xs-4 control-label">Enter zip code</label>
                                        <div class="col-xs-8">
                                        <input type="text" id="secondary-from-zip-code" class="validate[required,custom[onlyNumberSp],minSize[5],maxSize[5]]" placeholder="zipcode"><input type="submit" id="secondary-form-submit" class="icon-custom-sbtn" value="Get Started">
                                        </div>
                                      </div>
              
									 
								 
                                 </form>
                    </div>   
                    <div class="col-xs-5 thumbboy2"> 
                        <img src="/assets/img/packingguys.png" width="478" height="420" alt=""  />
                 </div>  
            </div>             
      </div> 
</div>
<div class="container">
      <div class="row blog">
          <h2>You came to the right place</h2>
          		<img src="/assets/img/homeimg1.png" class="left"  alt="" height="221" width="317" />
         	 	<p>Quoterunner has grown over the years and has learned much from each one. Our experience in the industry has taught us all that there is no substitute for quality moving services. We always put you, the customer, first. Our company is committed to achieving total customer satisfaction by giving importance to what you can say about our service and how we can make it better for you. We make sure everything goes smoothly from start to finish. From the moment you call us to the moment we leave you in your new location, we monitor all that our staff is doing to make sure that we get the job done and done well.  </p>
      </div> 
</div>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
