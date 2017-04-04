<div class="form-container form-container-fha">
	<div class="container">
         <?php echo form_open('fha/thank-you', array('id' => 'fha-form')); ?>		
        	<div id="step1">
				
				<div class="row">
					<h1>FHA Government Program</h1>
					<h2>Get the <font color="red">Best Rates</font> in the industry</h2>
					<h2>As little as <font color="red">3.5% </font> Down</h2>
				</div> <!-- close row -->
                
                <div class="row">
                	
					<div class="col-xs-8 col-xs-offset-2">
						<div class="form-wrapper form-horizontal">
							<h4>Step 1 of 3</h4>
							
							
								<div class="form-group">
		                    	<label class="col-xs-5 col-xs-offset-1">Home Value</label>
		                        <div class="col-xs-6">
			                        <select name="is_owner" id="is-owner" class="validate[required]">
			                            <option value="">Select one</option>
										<option value="50-100k">50,000 - 100,000</option>
										<option value="100-150k">100,000 - 150,000</option>
										<option value="150-200k">150,000 - 200,000</option>
										<option value="200-300k">200,000 - 300,000</option>
										<option value="300-400k">300,000 - 400,000</option>
				                        <option value="400-500k">400,000 - 500,000</option>
				                        <option value="500-750k">500,000 - 750,000</option>
				                        <option value="750-1000k">750,000 - 1,000,000</option>
				                        <option value="1000-1250k">1,000,000 - 1,250,000</option>
										<option value="1250-1500k">1,250,000 - 1,500,000</option>
										<option value="1500-2000k">1,500,000 - 2,000,000</option>
										<option value="2000-2500k">2,000,000 - 2,500,000</option>
										<option value="2500-3000k">2,500,000 - 3,000,000</option>
				                        <option value="3000k+">3,000,000+</option> 
				                        <option value="not sure">Not Sure</option> 
									</select>
			                    </div>
			                </div>
			                        
			                    
							<div class="form-group">
		                    	<label class="col-xs-5 col-xs-offset-1">Mortgage Balance</label>
		                        <div class="col-xs-6">
			                        <select name="is_owner" id="is-owner" class="validate[required]">
			                            <option value="" class="">Select Option</option>
			                            <option value="50-100k">50,000 - 100,000</option>
										<option value="100-150k">100,000 - 150,000</option>
										<option value="150-200k">150,000 - 200,000</option>
										<option value="200-300k">200,000 - 300,000</option>
										<option value="300-400k">300,000 - 400,000</option>
				                        <option value="400-500k">400,000 - 500,000</option>
				                        <option value="500-750k">500,000 - 750,000</option>
				                        <option value="750-1000k">750,000 - 1,000,000</option>
				                        <option value="1000-1250k">1,000,000 - 1,250,000</option>
										<option value="1250-1500k">1,250,000 - 1,500,000</option>
										<option value="1500-2000k">1,500,000 - 2,000,000</option>
										<option value="2000-2500k">2,000,000 - 2,500,000</option>
										<option value="2500-3000k">2,500,000 - 3,000,000</option>
				                        <option value="3000k+">3,000,000+</option> 
				                        <option value="not sure">Not Sure</option> 
									</select>
			                    </div>
			                </div>
			                        
			                
			                <div class="form-group">
		                    	<label class="col-xs-5 col-xs-offset-1">Current Interest Rate</label>
		                        <div class="col-xs-6">
			                        <select name="is_owner" id="is-owner" class="validate[required]">
			                            <option value="" class="">Select Option</option>
			                            <option value="50-100k">3.00% - 3.50%</option>
										<option value="100-150k">3.50% - 4.00%</option>
										<option value="150-200k">4.00% - 4.50%</option>
										<option value="200-300k">4.50% - 5.00%</option>
										<option value="300-400k">5.00% - 5.50%</option>
				                        <option value="400-500k">5.50% - 6.00%</option>
				                        <option value="400-500k">6.00% - 6.50%</option>
				                        <option value="400-500k">6.50% - 8.00%</option>
									</select>
			                    </div>
			                </div>
			                
			                
			                <div class="form-group">
		                    	<label class="col-xs-5 col-xs-offset-1">Credit Score</label>
		                        <div class="col-xs-6">
			                        <select name="is_owner" id="is-owner" class="validate[required]">
			                            <option value="" class="">Select Option</option>
			                            <option value="50-100k">Poor (Below 550)</option>
										<option value="50-100k">Fair (550 - 650)</option>
										<option value="50-100k">Excellent (650 - 800)</option>
										
									
									</select>
			                    </div>
			                </div>
			                
			                 
							
							
							<div class="form-group">
								<button class="icon-custom-btn1" type="button" onclick="javascript:next_step('#step2')">Get Started</button>
							</div>
						</div> <!-- close form-wrapper -->
					</div>  <!-- close col-8 -->                           
				</div> <!-- close row -->
				
				<div class="row">
           			<div class="col-xs-2 col-xs-offset-2">
           				<i class="icon-custom-permission"></i>
           			</div>
		   			<div class="col-xs-10 terms">
		   				<a href="/terms/">Terms</a>  |  <a href="/privacy-policy/">Privacy policy</a>
		   			</div> 
				</div> <!-- close row -->
            	
			</div> <!-- end step1 -->
			                      
			<div id="step2" style="display:none">
               	
               	<div class="row">
               		<h1>FHA Government Program</h1>
				</div> <!-- close row -->
                
                <div class="row">
                	<div class="col-xs-8 col-xs-offset-2">
						<div class="form-wrapper form-horizontal">
                    		<h4>Step 2 of 3</h4>
                    	    <div class="form-group">
		                    	<label class="col-xs-4 col-xs-offset-1">Type of Loan</label>
		                        <div class="col-xs-6">
			                        <select name="is_owner" id="is-owner" class="validate[required]">
			                            <option value="" class="">Select Option</option>
			                            <option value="50-100k">Refinance</option>
										<option value="50-100k">New Purchase</option>
										
										
									
									</select>
			                    </div>
			                </div>
			                
							
                    		<div class="form-group">
		                    	<label class="col-xs-4 col-xs-offset-1">Filed Bankruptcy?</label>
		                        <div class="col-xs-3">
			                    	<label style="vertical-align: bottom;">Yes</label><input type="radio" name="" id="" value="" style="margin-left:-5px;">
			                    </div>
								<div class="col-xs-3">
			                    	<label style="vertical-align: bottom;">No</label>	<input type="radio" name="" id="" value="" style="margin-left:-5px;" checked>		                         
			                    </div>
							</div>
			                
			                <div class="form-group">
		                    	<label class="col-xs-4 col-xs-offset-1">Any Late Payments?</label>
		                        <div class="col-xs-3">
			                    	<label style="vertical-align: bottom;">Yes</label><input type="radio" name="" id="" value="" style="margin-left:-5px;">
			                    </div>
								<div class="col-xs-3">
			                    	<label style="vertical-align: bottom;">No</label>	<input type="radio" name="" id="" value="" style="margin-left:-5px;" checked>		                         
			                    </div>
							</div>
							
							
							
							<div class="form-group">
		                    	<label class="col-xs-4 col-xs-offset-1">Mobile Home?</label>
		                        <div class="col-xs-3">
			                    	<label style="vertical-align: bottom;">Yes</label><input type="radio" name="" id="" value="" style="margin-left:-5px;">
			                    </div>
								<div class="col-xs-3">
			                    	<label style="vertical-align: bottom;">No</label>	<input type="radio" name="" id="" value="" style="margin-left:-5px;" checked>		                         
			                    </div>
							</div>
							
							
							<div class="form-group">
		                    	<label class="col-xs-4 col-xs-offset-1">Commercial?</label>
		                        <div class="col-xs-3">
			                    	<label style="vertical-align: bottom;">Yes</label><input type="radio" name="" id="" value="" style="margin-left:-5px;">
			                    </div>
								<div class="col-xs-3">
			                    	<label style="vertical-align: bottom;">No</label>	<input type="radio" name="" id="" value="" style="margin-left:-5px;" checked>		                         
			                    </div>
							</div>
							
							<div class="form-group">
		                    	<label class="col-xs-4 col-xs-offset-1">Investment Property?</label>
		                        <div class="col-xs-3">
			                    	<label style="vertical-align: bottom;">Yes</label><input type="radio" name="" id="" value="" style="margin-left:-5px;">
			                    </div>
								<div class="col-xs-3">
			                    	<label style="vertical-align: bottom;">No</label>	<input type="radio" name="" id="" value="" style="margin-left:-5px;" checked>		                         
			                    </div>
							</div>
							
							
							
			                
			                
                    	
                             <div class="form-group">
								<button class="icon-custom-btn1" type="button" onclick="javascript:next_step('#step3')">Proceed</button>
							</div>
                             
                             
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
								<h4>Final Step</h4>
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
                                    <label class="col-xs-3">Address</label>
                                    <div class="col-xs-6">
                                    <input type="text" id="inputEmail3" name="email" class="validate[required,custom[email]]" placeholder="your address">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-xs-3">Zip Code</label>
                                    <div class="col-xs-6">
                                    <input type="text" id="inputEmail3" name="email" class="validate[required,custom[email]]" placeholder="your zip code">
                                    </div>
                                </div>
                                
                                
								<div class="form-group">
                                    <label class="col-xs-3">Valid e-mail</label>
                                    <div class="col-xs-6">
                                    <input type="text" id="inputEmail3" name="email" class="validate[required,custom[email]]" placeholder="your email">
                                    </div>
                                </div>
                                
                                
                                
                                
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-xs-3">Valid phone</label>
                                    <div class="col-xs-6">
                                    <input type="text" id="phone" name="phone" class=" validate[required,minSize[10]]" placeholder="( ) -">
                                    </div>
                                </div>
                                 
                               <div class="form-group agree-to-terms">
                                    <label class="col-xs-3" for="inputEmail3"></label>
                                    <div class="col-xs-offset-1 col-xs-1">
                                    	<input type="checkbox" name="terms" class="validate[required]" id="inputEmail3">
                                    </div>
                                     <div class="col-xs-3">
                                    I agree to <a href="/terms/" target="_blank">terms</a>
                                    </div>
                                    
                                </div>
                                
                                
                                
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
                            <td><i class="icon-custom-price"></i><h4>Lowest Rates</h4></td>
                            <td><i class="icon-custom-pack"></i><h4>Reliable</h4></td>
                          </tr>
                    </table>
                      <p>LenderDepot has deep lending pockets and is ready to meet your mortgage refinancing needs. As a direct lending source, we provide and design the best mortgage financing options to fit exactly with the needs of our applicants. LenderDepot is here to serve you.  </p><a class="knowmore" href="#">Know more</a>
              </div>
                 <div class="col-xs-6">
                    <div class="whitebg">
                        <h5>Our Happy Customers</h5>
                        <p>LenderDepot was friendly, fast and offered my family the lowest rate possible. We now have a great mortgage, savings from our new low rate to be contributing to our retirement. Thank You LenderDepot </p>
                        <p class="auth1"><span>- Carol W, </span>California</p>
                    </div>
                    <div class="whitebg">
                        <h5>FAQ</h5>
                        <h6><i class="icon-custom-ques"></i>Is  there a fee for using QuoteRunner?</h6>
                      <p>We are your FREE mortgage lending source </p>
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
                          <h3>We are your FREE mortgage lending source.</h3>
                          <table width="100%" border="0">
                              <tr>
                                <td><i class="icon-custom-safe1"></i><h6>Fill out our simple form</h6>
                              </tr>
                              <tr>
                                <td><i class="icon-custom-review"></i><h6>Select from a wide variety of low rates options</h6></td>
                              </tr>
                              <tr>
                                <td><i class="icon-custom-pack1"></i><h6>Lock your rate and save</h6></td>
                              </tr>
							</table>
							<!-- 
                                 <form name="secondary-moving-form">
                                     <div class="form-group">
                                        <label class="col-xs-4 control-label">Enter zip code</label>
                                        <div class="col-xs-8">
                                        <input type="text" id="inputEmail3" placeholder="zipcode"><input type="submit" class="icon-custom-sbtn" value="search">
                                        </div>
                                      </div>
                                 </form>
                             -->
                    </div>   
                    <div class="col-xs-5 thumbboy2"> 
                        <img src="assets/img/fha_middle_section.png" alt="" />
                 </div>  
            </div>             
      </div> 
</div>
<div class="container">
      <div class="row blog">
          <h2>LenderDepot is here to:</h2>
          		<img src="assets/img/fha_post.png" class="left"  alt="" />
         	 	<p>Serve your family with the best lending option, meeting all your required financial needs to lower your mortgage interest rate, increase your savings by paying less in monthly payments, reduce your excess fees by providing many cost savings services for FREE and secure your retirement future by providing a path to a secure financial state for your family. Family is everything to LenderDepot.
 </p>
      </div> 
</div>