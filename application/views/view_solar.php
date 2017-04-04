<div class="form-container form-container-solar">
	<div class="container">
        <?php echo form_open('solar/thank-you', array('id' => 'solar-form')); ?>	
        	<div id="step1">
				
				<div class="row">
					<h1>Cut Your Electric Bill 70% or More</h1>
					<h2>Lease / Finance for $0 Down!</h2>
					<h2>Save 40-60% with Today’s Rebates</h2>
				</div> <!-- close row -->
                
                <div class="row">
                	
					<div class="col-xs-8 col-xs-offset-2">
						<div class="form-wrapper form-horizontal">
							<h4>Your Monthly Electricity Bill?</h4>
							
							<div class="form-group">
								<div class="col-xs-6 col-xs-offset-3">
									<select class="validate[required]" id="electricity-bill-select" name="electricity_bill">
									<option value="" label="(Select)">(Select)</option>
									<option value="$0-50">$0-50</option>
									<option value="$51-100">$51-100</option>
									<option value="$101-150">$101-150</option>
									<option value="$151-200">$151-200</option>
									<option value="$201-300">$201-300</option>
									<option value="$301-400">$301-400</option>
									<option value="$401-500">$401-500</option>
									<option value="$501-600">$501-600</option>
									<option value="$601-700">$601-700</option>
									<option value="$701-800">$701-800</option>
									<option value="$801+">$801+</option>
									</select>
								</div> <!-- close col-12 -->
							</div> <!-- close form-group -->
							<div class="form-group">
								<button class="icon-custom-btn1" type="button" onclick="javascript:next_step('#step2')">Get Started</button>
							</div>
						</div> <!-- close form-wrapper -->
					</div>  <!-- close col-8 -->                           
				</div> <!-- close row -->
				
				<div class="row desclaimer">
           			<div class="col-xs-2"><i class="icon-custom-permission"></i></div>
		   			<div class="col-xs-10 terms"><a href="/terms/">Terms</a>  |  <a href="/privacy-policy/">Privacy policy</a></div> 
				</div> <!-- close row -->
            	
			</div> <!-- end step1 -->
			                      
			<div id="step2" style="display:none">
               	
               	<div class="row">
               		<h2>Search Solar Installers</h2>
			   		<div class="col-xs-8 col-xs-offset-2">
                		<p>We carry a wide range of licensed and reputable solar installers in our network. Based on your information, we will find the best possible quote in your area.</p>
					</div> <!-- close col -->
				</div> <!-- close row -->
                
                <div class="row">
                	<div class="col-xs-8 col-xs-offset-2">
						<div class="form-wrapper form-horizontal">
                    	
	                    	<div class="form-group">
	                        	<label class="col-xs-5 col-xs-offset-1">Your Zip Code</label>
	                            <div class="col-xs-6">
	                            	<input type="text" id="zip-code" name="zip_code" class="validate[required,custom[onlyNumberSp],minSize[5],maxSize[5]]" placeholder="Zip Code">
	                            </div>
	                        </div>
						
							<div class="form-group">
		                    	<label class="col-xs-5 col-xs-offset-1">Are You The Owner?</label>
		                        <div class="col-xs-6">
			                        <select class="validate[required]" id="is-owner" name="is_owner">
			                            <option class="" value="">Select Option</option>
			                            <option class="" value="Yes">Yes</option>
			                            <option class="" value="No">No</option>
									</select>
			                    </div>
			                </div>
	                                    
	                        <div class="form-group">
	                            <label class="col-xs-5 col-xs-offset-1">Is Your Roof Exposed to Sun?</label>
	                            <div class="col-xs-6">
	                                <select class="validate[required]" id="covered-by-shade" name="covered_by_shade">
	                                    <option class="" value="">Select Option</option>
	                                    <option class="" value="No">No</option>
	                                    <option class="" value="Yes">Yes</option>
	                                    <option class="" value="partially covered">Partially Exposed</option>
									</select>
	                            </div>
	                        </div>
                                    
                                    
							<button class="icon-custom-btn1" type="button" onclick="javascript:next_step('#step3')">Proceed</button>
						</div> <!-- close form-wrapper -->
					</div> <!-- close col -->
               </div> <!-- close row -->  
                
                
                   <div class="row step2icon">
                       		<div class="col-xs-2">
                                 <i class="icon-custom-check"></i><h5>Quoterunner makes finding solar contractors easy</h5> 
                            </div>
                            <div class="col-xs-2">
                                <i class="icon-custom-users"></i><h5>Save time and money in 3 easy steps</h5>
                            </div>
                            <div class="col-xs-2">
                                <i class="icon-custom-list"></i><h5>Connect with licensed solar experts nationwide</h5>
                            </div>
                            <div class="col-xs-2">
                                <i class="icon-custom-cog"></i><h5>Go Green & Save Money</h5> 
                            </div>
                            <div class="col-xs-2">
                                <i class="icon-custom-phonemail"></i><h5>Get free quotes via phone and email</h5> 
                            </div>
                  </div> <!-- close row -->   
                
            </div> <!-- close step 2-->                                     

			<div id="step3" style="display:none">
                	<h2>Your are one step away from ballpark estimate</h2>
					<div class="row">
						<div class="col-xs-8 col-xs-offset-2">
							<div class="form-wrapper form-horizontal">
								
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
                                	<button class="icon-custom-btn1 col-xs-12" name="submit" type="submit">Get Price</button>
                                </div>
							</div> <!-- close form wrapper -->
						</div> <!-- close col -->
						
					</div> <!-- close row -->
					<div class="row">
						<div class="col-xs-12">
						<!--<p class="terms-and-conditions">Lorem ipsum dolor sit amet, aeterno appellantur ne quo, posse ullamcorper nec id, et mundi cotidieque has. Cu vel dolorum omnesque, ea graeco virtute mea, ad nec quem pericula. Ad suas adolescens vim. Inani iriure alienum nam ex. Referrentur dissentiunt ad pri, eos ex minim tibique. Eu elit rationibus vim, minimum quaerendum an mel. Vis sale congue consulatu ex. Id mei solum equidem conceptam, eam ut saepe aeterno apeirian. No duo illud corrumpit, cu nec quas idque percipit. Paulo atomorum ea mea, est in alii euismod partiendo. Iriure interpretaris ne eum, congue dicunt ne est. Eu feugait delicata repudiare mea, ad nihil volutpat voluptatibus sit, equidem constituam disputationi no eam. Lorem ipsum dolor sit amet, aeterno appellantur ne quo, posse ullamcorper nec id, et mundi cotidieque has. Cu vel dolorum omnesque, ea graeco virtute mea, ad nec quem pericula. Ad suas adolescens vim. Inani iriure alienum nam ex. Referrentur dissentiunt ad pri, eos ex minim tibique. Eu elit rationibus vim, minimum quaerendum an mel. Vis sale congue consulatu ex. Id mei solum equidem conceptam, eam ut saepe aeterno apeirian. No duo illud corrumpit, cu nec quas idque percipit. Paulo atomorum ea mea, est in alii euismod partiendo. Iriure interpretaris ne eum, congue dicunt ne est. Eu feugait delicata repudiare mea, ad nihil volutpat voluptatibus sit, equidem constituam disputationi no eam.</p> -->
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
			 <input type="hidden" name="source" value="/moving/solar"> 
			 
			 
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
                            <td><i class="icon-custom-pack"></i><h4>Reliable</h4></td>
                          </tr>
                    </table>
                      <p>As an investment, solar energy is a smart choice. You can save money and power your entire home. The sun is one of the best renewable energy sources. This is a great opportunity to help the environment. By using solar power, you lessen the use of fossil fuels, no greenhouse gas is created, the value of your house is increased, your home's environmental impact is reduced by a quiet and pollutant-free power source. What's more, it's cheaper in the long run.  </p><a class="knowmore" href="#">Know more</a>
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
                          <h3>Go solar in minutes</h3>
                          <table width="100%" border="0">
                              <tr>
                                <td><i class="icon-custom-safe1"></i><h6>Fill out our simple form</h6>
                              </tr>
                              <tr>
                                <td><i class="icon-custom-review"></i><h6>Review the price range for qualified<br />solar installation experts</h6></td>
                              </tr>
                              <tr>
                                <td><i class="icon-custom-pack1"></i><h6>Receive exact quotes for your solar installation</h6></td>
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
          <h2>Choose us with confidence</h2>
          		<img src="/assets/img/solar_post_flattened.png" class="left"  alt="" />
         	 	<p>Quoterunner has been in the solar installation business for years. We are proud to say that we have become experts in this field of environmental service. We are always up to date with the latest advances in solar power technology as we are with the tested techniques and applications. With this experience and knowledge, you can be sure that we will find the optimum solutions to fit your budget and requirements.
We are aware of the trends and the incentives from the government but our commitment goes beyond those. The main reason we love doing what we do is because we care deeply for the earth and the second is we find satisfaction in helping other people do their part in saving the planet for the next generation. 
 </p>
      </div> 
</div>