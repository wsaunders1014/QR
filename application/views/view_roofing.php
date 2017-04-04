  <div class="form-container form-container-roofing">
	<div class="container">
        <?php echo form_open('roofing/thank-you', array('id' => 'roofing-form')); ?>	
        	<div id="step-1">
				
				<div class="row">
					<h1 style="font-size: 42px;">Request a FREE ONSITE Roofing <br /> Estimate Inspection and Save Up To 50%</h1>
					<h2>For New Roofs, Re-Roofs or Roof Repair</h2>
					<h2 style="font-size: 20px; font-weight: normal;">We do not sell materials or do emergency leak or storm repairs<h2>
				</div> <!-- close row -->
                
                <div class="row">
                	
					<div class="col-xs-8 col-xs-offset-2">
						<div class="form-wrapper form-horizontal">
							<h4>Type</h4>
							
							<div class="form-group">
								<div class="col-xs-6 col-xs-offset-3">
									<select class="validate[required]" id="roofing-type-select" name="roof_type">
										<option selected="selected"  value="Residential">Residential</option>
									    <option value="Commercial">Commercial</option>
									  
									</select>
								</div> <!-- close col -->
							</div> <!-- close form-group -->
							<div class="form-group">
								<button class="icon-custom-btn1" type="button" id="step-1-button">Get Started</button>
							</div>
						</div> <!-- close form-wrapper -->
					</div>  <!-- close col-8 -->                           
				</div> <!-- close row -->
				
				<div class="row desclaimer">
           			<div class="col-xs-2"><i class="icon-custom-permission"></i></div>
		   			<div class="col-xs-10 terms"><a href="/terms/">Terms</a>  |  <a href="/privacy-policy/">Privacy policy</a></div> 
				</div> <!-- close row -->
            	
			</div> <!-- end step1 -->
			                      
			<div id="step-2" style="display:none">
               	
               	<div class="row">
               		<h2>Location of Property for Onsite Estimate</h2>
			   		<div class="col-xs-8 col-xs-offset-2">
                		<p>We work with only licensed and reputable roofing contractors that do both residential and commercial roofing. Based on your location, we will find the best 3 contractors in your area to come out and give you FREE inspection/quote.</p>
					</div> <!-- close col -->
				</div> <!-- close row -->
                
                <div class="row">
                	<div class="col-xs-8 col-xs-offset-2">
						<div class="form-wrapper form-horizontal">
                    	
	                    	
	                    		<h4>Zip Code</h4>
                                 <div class="form-group">
                                     
                                    <div class="col-xs-6 col-xs-offset-3">
                                    <input type="text" id="zip_code" name="zip_code" class="" placeholder="Zip Code">
                                    </div>
                                </div>
                                
                                
						<h4>Roof Size</h4>
							<div class="form-group">
								
								<div class="col-xs-6 col-xs-offset-3">
									<select class="validate[required]" id="roofing-size-select" name="roof_size">
										<option value=""  selected="selected" label="(Select Roof Size)">(Select Roof Size)</option>
										<option value="0-1000 sqft" selected="selected">0-1000 sqft</option>
										<option value="1000-1500 sqft">1000-1500 sqft</option>
										<option value="1500-2000 sqft">1500-2000 sqft</option>
										<option value="2000-2500 sqft">2000-2500 sqft</option>
										<option value="2500+ sqft">2500+ sqft</option>
									</select>
								</div> <!-- close col -->
							</div> <!-- close form-group -->
	                                    
	                       
                                    
                                    
							<button class="icon-custom-btn1" type="button" id="step-2-button">Proceed</button>
						</div> <!-- close form-wrapper -->
					</div> <!-- close col -->
               </div> <!-- close row -->  
                
                
                   <div class="row step2icon">
                       		<div class="col-xs-2">
                                 <i class="icon-custom-check"></i><h5>Quoterunner makes finding roofing contractors easy</h5> 
                            </div>
                            <div class="col-xs-2">
                                <i class="icon-custom-users"></i><h5>Save time and money in 3 easy steps</h5>
                            </div>
                            <div class="col-xs-2">
                                <i class="icon-custom-list"></i><h5>Connect with local licensed roofing experts</h5>
                            </div>
                            <div class="col-xs-2">
                                <i class="icon-custom-cog"></i><h5>Save up to 50% by comparing 3 quotes</h5> 
                            </div>
                            <div class="col-xs-2">
                                <i class="icon-custom-check"></i><h5>Get 3 Free Onsite Inspections</h5> 
                            </div>
                  </div> <!-- close row -->   
                
            </div> <!-- close step 2-->                                     

			<div id="step-3" style="display:none">
                	<h2>You are one step away from 3 FREE Estimates</h2>
					<div class="row">
						
						<div class="col-xs-8 col-xs-offset-2">
							<div class="form-wrapper form-horizontal">
								<h3>Final Step</h3>
								<div clas="row">
									<div class="form-group">
	                                    <label for="inputEmail3" class="col-xs-3">Full Name</label>
	                                    <div class="col-xs-4">
	                                    	<input type="text" class="validate[required,minSize[3]]" name="first_name" placeholder="first name">
	                                    </div>
	                                    <div class="col-xs-4" style="padding-left: 0px;">
	                                    	<input name="last_name" type="text" class="validate[required,minSize[3]]" placeholder="last name">
	                                    </div>
	                                </div>
                                </div>
                                
                                
                                
                                 <div class="form-group">
                                    <label class="col-xs-3">Valid e-mail</label>
                                    <div class="col-xs-6">
                                    <input type="text" id="dddd" name="email" class="validate[required,custom[email]]" placeholder="your email">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-xs-3">Valid phone</label>
                                    <div class="col-xs-6">
                                    <input type="text" id="phone" name="phone" class="validate[required,minSize[10]]" placeholder="">
                                    </div>
                                </div>
                                 
                               <!-- <div class="form-group agree-to-terms">
                                    <label class="col-xs-3" for="inputEmail3"></label>
                                    <div class="col-xs-offset-1 col-xs-1">
                                    	<input type="checkbox" name="terms" class="validate[required]" id="inputEmail3">
                                    </div>
                                     <div class="col-xs-3">
                                    I agree to <a href="/terms/" target="_blank">terms</a>
                                    </div>
                                    
                                </div>
                                
                                -->
                                
                                <div class="form-group">
                                	<button class="icon-custom-btn1 col-xs-12" name="submit" id="form-submit-button" type="submit">Get Quotes</button>
                                </div>
							</div> <!-- close form wrapper -->
						</div> <!-- close col -->
						
					</div> <!-- close row -->
					<div class="row">
						<div class="col-xs-12">
						<div  class="row policy">By clicking on the [Get Quotes] button, you consent, acknowledge, and agree to the following (i) You agree to review and honor the Terms of Use and Privacy Policy;(ii) You affirmatively consent and agree that any disclosures required by law and other information about your legal rights and duties may be provided to you electronically;(iii) Your electronic signature is made by clicking the [Get Quotes] and shall have the same effect as if you signed in ink;(iv) This authorization allows licensed roofing contractors to contact you regardless of previous registration(s) on a federal or state Do-Not-Call (DNC) registry or any internal opt-out/unsubscribe requests you may have previously submitted to QuoteRunner,co., Set Media Lab, licensed carriers or third party lead distributors. (v) I understand that I may choose not to click the [Get Quotes] if I do not want to receive calls from local roofing contractors. (vi) I understand that consent is not a condition of purchase.
                      </div>
                     </div> <!-- close col -->
                    </div> <!-- close row -->
			</div> <!-- close step 3 -->
   	     
   	     <input type="hidden" name="utm_source" value="<?php echo (isset($_GET['utm_source'])) ? $_GET['utm_source']: "" ?>">
<input type="hidden" name="utm_medium" value="<?php echo (isset($_GET['utm_medium'])) ? $_GET['utm_medium']: "" ?>">
<input type="hidden" name="utm_campaign" value="<?php echo (isset($_GET['utm_campaign'])) ? $_GET['utm_campaign']: "" ?>">
<input type="hidden" name="ag" value="<?php echo (isset($_GET['ag'])) ? $_GET['ag']: "" ?>">
<input type="hidden" name="qs" value="<?php echo (isset($_GET['qs'])) ? $_GET['qs']: "" ?>">
<input type="hidden" name="network" value="<?php echo (isset($_GET['network'])) ? $_GET['network']: "" ?>">
<input type="hidden" name="device" value="<?php echo (isset($_GET['device'])) ? $_GET['device']: "" ?>">
<input type="hidden" name="adid" value="<?php echo (isset($_GET['adid'])) ? $_GET['adid']: "" ?>">
<input type="hidden" name="source" value="/roofing/">

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
                            <td><i class="icon-custom-price"></i><h4>Competitive Pricing</h4></td>
                            <td><i class="icon-custom-pack"></i><h4>Experienced Professionals</h4></td>
                          </tr>
                    </table>
                      <p>There are times when we need to put a roof over our heads - literally. Whatever type of roof you need, Quoterunner matches you with roofing contractors that have the knowledge, experience and equipment to do a five star job on your home. Simply fill out the form, and receive competing moving quotes to choose from – it couldn't be simpler. With us, you can only expect the best roofing services from the highest quality professional. Get you quote now!</p>
                      <a class="knowmore" href="#">Know more</a>
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

<div class="play-your-movie secondary-form-wrapper">
      <div class="container">
      		<div class="row">
                    <div class="col-xs-6">
                          <h3>Get roofing quotes in less than 60 seconds</h3>
                          <table width="100%" border="0">
                              <tr>
                                <td><i class="icon-custom-safe1"></i><h6>Fill out our simple form</h6>
                              </tr>
                              <tr>
                                <td><i class="icon-custom-review"></i><h6>Review the price range for qualified roofing contractores</h6></td>
                              </tr>
                              <tr>
                                <td><i class="icon-custom-pack1"></i><h6>Receive exact quotes for your new roof<br />
                                </h6></td>
                              </tr>
							</table>
							
                    </div>   
                    <div class="col-xs-5 thumbboy2"> 
                        <img src="/assets/img/solar_guys.png" alt="" />
                 </div>  
            </div>             
      </div> 
</div>
<div class="container">
      <div class="row blog">
          <h2>You came to the right place</h2>
          		<img src="/assets/img/solar_post_flattened.png" class="left"  alt="" />
         	 	<p>Quoterunner has grown over the years and has learned much from each one. Our experience in the industry has taught us all that there is no substitute for quality work  when it comes to your home. We always put you, the customer, first. Our company is committed to achieving total customer satisfaction by giving importance to what you can say about our service and how we can make it better for you. We make sure everything goes smoothly from start to finish. From the moment you call us to the final touches on your new roof, we monitor all that our staff is doing to make sure that we get the job done and done well.</p>
         	 	<p></p>
      </div> 
</div>