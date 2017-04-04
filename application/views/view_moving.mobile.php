<div id="errors"></div>

    <section class="slider_area">
       <?php echo form_open('moving/thank-you', array('id' => 'moving-form', 'class'=> 'form-horizontal', 'role' => 'form')); ?>
        <!--Step1--->
        <div class="container step-1">
            <div class="row slider-bg text-center white">
                <div class="col-md-12">
                
                <!--
                	<div class="row">
                    	<div class="col-md-6 left  hidden-xs">Enter Your Zip Code</div>
						<div class="col-md-6 left  hidden-xs">Find Movers</div>
					</div>
					<div class="row">
                 		<div class="col-md-12 text-center white	 hidden-xs">
                        	<img src="<?php echo site_url(); ?>assets/img/zip_progress1.png" class="img-responsive" />
						</div>
					</div>  
                 -->
                   
                  <div class="row">
                  <div class="col-md-offset-3 col-md-6">
                  	<h1>Moving Price Calculator</h1>
					<h2>Save 60% in 60 Seconds on Full Service Movers</h2>
                  	<p>Truck, Loading &amp; Driving Included - Nationwide from $849</p>
                  	
				  </div>
                 	<div class="col-md-8  col-md-offset-2 padding">  
                        
                                                 
                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-7 control-label">WHERE ARE YOU MOVING FROM?</label>
                                <div class="col-sm-5">
                                  <input type="number" pattern="[0-9]*" class="form-control" name="from_zip_code" id="from_zip_code" placeholder="Enter Zip code">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputPassword3" class="col-sm-7 control-label">WHERE ARE YOU MOVING TO?</label>
                                <div class="col-sm-5">
                                  <input type="number" pattern="[0-9]*" class="form-control" name="to_zip_code" id="to_zip_code" placeholder="Enter Zip code">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputPassword3" class="col-sm-7 control-label">WHEN IS YOUR MOVE?</label>
                                <div class="input-group col-sm-5">
                                  <input type="text" name="move_date" class="form-control" id="move_date" placeholder="Approximate Move Date " readonly="readonly">
                                  <span class="input-group-addon"><i class="icon-custom-calender"></i></span>
                                </div>
                              </div>
                             <div class="form-group">
                                <label for="inputPassword3" class="col-sm-7 control-label">HOW LARGE IS YOUR MOVE?</label>
                                <div class="col-sm-5">
                                 <select class="form-control" id="move_size" name="move_size">
                                    <option class="select-inactive" value="">Select home size</option>
                                    <option class="select-active" value="studio">Studio</option>
                                    <option class="select-active" value="one bedrooms apartment">1 Bedroom Apt</option>
                                    <option class="select-active" value="one bedrooms house">1 Bedroom House</option>
                                    <option class="select-active" value="two bedrooms apartment">2 Bedroom Apt</option>
                                    <option class="select-active" value="two bedrooms house">2 Bedroom House</option>
                                    <option class="select-active" value="three bedrooms apartment">3 Bedroom Apt</option>
                                    <option class="select-active" value="three bedrooms house">3 Bedroom House</option>
                                    <option class="select-active" value="four bedrooms apartment">4 Bedroom Apt</option>
                                    <option class="select-active" value="four bedrooms house">4 Bedroom House</option>
                                    <option class="select-active" value="five bedrooms apartment">5 Bedroom Apt</option>
                                    <option class="select-active" value="five bedrooms house">5 Bedroom House</option>
                                    <option class="select-active" value="six bedrooms apartment">6 Bedroom Apt</option>
                                    <option class="select-active" value="six bedrooms house">6 Bedroom House</option>
                                    <option class="select-active" value="six bedrooms and more apartment">6 or more Bedroom Apt</option>
                                    <option class="select-active" value="six bedrooms and more house">6 or more Bedroom House</option>
                                 </select>
                                </div>
                              </div>
                              <div class="form-group">
                             	 <div class="col-sm-7"></div>
                               	 <div class="col-sm-5">
                                  <button type="button" id="step-1-button" class="btn btn-green">CALCULATE RATES</button>
                                </div>
                              </div>
                            
                     </div>
                 </div>
                   <div class="row text-left">
                 	  <div class="col-sm-10 col-sm-offset-2">
                 		 <i class="icon-custom-secured"></i>
                     </div>
                  </div>
                </div>
            </div>
        </div>
        
        <div class="search-step" style="display: none;">
            <div class="row">
                <div class="col-md-12">
                	<img src="#" data-url="<?php echo site_url(); ?>assets/img/animation.gif" style="width:100%" id="animation" />
                </div>
            </div>
        </div>
        
        
        <!--Step2--->
        <div class="container step-2" style="display: none;">
            <div class="row slider-bg text-center white">
           
             
                <div class="col-md-12">
              
                <!--
                <div class="row">
                    <div class="col-md-6 left hidden-xs">Enter Your Zip Code</div>
                    <div class="col-md-6 left hidden-xs">Find Movers</div>
                 </div>
                 <div class="row">
                 	<div class="col-md-12 text-center white hidden-xs">
                         <img src="<?php echo site_url(); ?>/assets/img/zip_progress.png" class="img-responsive" />
                     </div>
                 </div>  
             -->
             
                  <div class="row">
                  <div class="col-md-12">
                  	 <h1>one step away from a <font color="red">FREE</font> moving estimate</h1>
                  </div>    
                 	<div class="col-md-8  col-md-offset-2 padding"> 
                    	<div class="row">	
                         	<div class="col-sm-7"> 
                                      <div class="col-sm-6">
                                     	 <div class="form-group">
                                           <label class="sr-only" for="exampleInputEmail2"></label>
                                        	<input type="text" name="first_name" class="form-control" id="first_name" placeholder="First name">
                                          </div>
                                        </div>
                                        <div class="col-sm-6">
                                        	<div class="form-group">
                                            <label class="sr-only" for="exampleInputPassword2"></label>
                                            <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last name">
                                             </div>
                                        </div>
                                      <div class="form-group">
                                          <input type="email" name="email" class="form-control" id="email" placeholder="Valid Email Address">
                                      </div>
                                      <div class="form-group">
                                          <input type="text" name="phone" class="form-control" id="phone" placeholder="Valid Phone Number">
                                      </div>
                                      <div class="form-group" style="display:none;">
                                            <label>
                                              <input type="checkbox"> I accept Terms listed below
                                            </label>
                                      </div>
                                      <div class="form-group">
	                                      	 <input type="hidden" name="utm_source" value="<?php echo (isset($_GET['utm_source'])) ? $_GET['utm_source']: "" ?>">
											 <input type="hidden" name="utm_medium" value="<?php echo (isset($_GET['utm_medium'])) ? $_GET['utm_medium']: "" ?>">
											 <input type="hidden" name="utm_campaign" value="<?php echo (isset($_GET['utm_campaign'])) ? $_GET['utm_campaign']: "" ?>">
											 <input type="hidden" name="ag" value="<?php echo (isset($_GET['ag'])) ? $_GET['ag']: "" ?>">
											 <input type="hidden" name="qs" value="<?php echo (isset($_GET['qs'])) ? $_GET['qs']: "" ?>">
											 <input type="hidden" name="network" value="<?php echo (isset($_GET['network'])) ? $_GET['network']: "" ?>">
											 <input type="hidden" name="device" value="<?php echo (isset($_GET['device'])) ? $_GET['device']: "" ?>">
											 <input type="hidden" name="adid" value="<?php echo (isset($_GET['adid'])) ? $_GET['adid']: "" ?>">
											 <input type="hidden" name="gclid" value="<?php echo (isset($_GET['gclid'])) ? $_GET['gclid']: "" ?>">
											 <input type="hidden" name="source" value="/moving/mobile">
											 <button type="submit" id="submit-form-button" class="btn btn-green">GET QUOTES</button>
                                        </div>
                                        
                                        </form>
                                       
                                    
                               </div>
                               <div class="col-sm-5">
                               		<!-- <i class="icon-custom-gmap"></i>-->
                               		<div id="map-canvas" class="hidden-xs"></div>
                               </div>
                            </div>
                     </div>
                 </div>
                 
                   <div class="row text-left">
                 	  <div class="col-sm-10 col-sm-offset-2">
                 		 <i class="icon-custom-secured"></i>
                     </div>
                  </div>
                </div>
            </div>
        </div>
        </form>
    </section>   
    
    <div id="slide_partner">
    
      <div class="container step-1">
        	<div class="row text-center">
            	<ul>
               		 <li><i class="icon-custom-allied"></i></li>
                	 <li><i class="icon-custom-na"></i></li>
                	 <li><i class="icon-custom-arpin"></i></li>
                	 <li><i class="icon-custom-stevens"></i></li>
                	 <li><i class="icon-custom-moving"></i></li>
                	 <li><i class="icon-custom-graebel"></i></li>
                 </ul>
            </div>
        </div>
        
        
    	<div class="container search-step" style="display:none;">
        	<div class="row features text-center">
                <ul>
                    <li>
                         <i class="icon-custom-move-easy"></i>
                        <h4>QuoteRunner Makes Moving Easy</h4>
                    </li>
                     <li>
                          <i class="icon-custom-save-money"></i><h4>Save Time and Money
    in 3 Easy Steps</h4>
                    </li>
                     <li>
                         <i class="icon-custom-license"></i><h4>Connect with Licensed 
    Movers Nationwide</h4>
                    </li>
                    <li>
                         <i class="icon-custom-price-range"></i><h4>View Your Move's
    Price Range Online</h4>
                    </li>
                    <li>
                         <i class="icon-custom-free-quote"></i><h4>Get Free Quotes 
    via Phone and Email</h4>
                    </li>
                </ul>
            </div>
        </div>
        
         <!--Step1--->
         
       
        
        
        
          <!--Step2--->
         
         <div class="container step-2" style="display: none">
        	<div class="row text-center">
                <div class="col-md-12 terms">
              <p>By clicking the <span>[GET QUOTES]</span>  button, you agree as follows: You have reviewed, agree to and will honor our Terms of Use and Privacy Policy; You authorize a maximum of 6 moving carriers to contact you by telephone regardless of whether you have registered on a federal or state Do Not Call (DNC) registry or previously opted out or unsubscribed from QuoteRunner,co, Set Media Lab, moving carriers or other persons or entities; You authorize QuoteRunner,co., Set Media Lab, moving carriers and third party lead generators/aggregators/distributors to transmit text/SMS marketing messages to you and to utilize an automatic dialing system in connection with calls made or text/SMS messages sent to the telephone number you have provided; I understand that I am not required to click the [GET QUOTES] button or otherwise sign this agreement or agree (directly or indirectly) to enter into an agreement to receive automated telephone dialing system marketing calls or text/SMS messages as a condition of purchasing any property, goods or services; By clicking the [GET QUOTES] button, your electronic signature shall have the same force and effect as if you hand signed this agreement.</p>



                </div>
            </div>
        </div>
    </div>

<section id="how_it_works">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Your Easy Step to Get Best Deal Price Moving Rate</h2>
            </div>                 
        </div>
        <div class="row">
            <div class="col-md-4">
                <i class="icon-custom-location"></i>
                <p>Enter your ZIP Code, destination and Moving Size. Simply complete the short moving form, providing information about your move. The entire process takes just a few minutes.</p>
            </div>
            <div class="col-md-4">
                <i class="icon-custom-search"></i>
                <p>We find matched with companies in near your area. Using the information you provide, we will match you with up to 5 movers in our network who can best serve your individual needs.</p>
            </div>
            <div class="col-md-4">
                <i class="icon-custom-mover"></i>
                <p>Compare pricing and services to choose a mover. Review the moving quotes from each company to determine which mover will offer the best service at the most competitive price.</p>
            </div>
        </div>
    </div>
    
</section>