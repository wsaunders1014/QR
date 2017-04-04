<?php echo form_open('moving/thank-you', array('id' => 'moving-form', 'class'=> 'form-horizontal', 'role' => 'form')); ?>
<section class="slider_area">
<div class="container">
		<div class="row">
            <div class="col-xs-10 col-xs-offset-2 no-padding">
				<div class="map-bg"></div>
            </div>
        </div>
</div>
<div class="step1 step-1" id="step-1">
	<div class="container">
		<div class="row">
            <div class="col-xs-10 col-xs-offset-1 no-padding">
            		<div class="step_position">
                        <ul class="moving_steps">
                            <li class="s1"><a href="#">Enter Your Zip Code</a></li>
                            <li class="s2"><a href="#">Find Movers</a></li>
                            <li class="s3"><a href="#">Get Moving Quote</a></li>
                        </ul>
                        <div class="progress_status">
                            <div class="zip"></div>
                        </div>
                    </div>
                    <div class="title">
                        <h2>Calculate Your Moving Cost</h2>
                        <p>Save 60% in 60 Seconds. Truck, Loading & Driving Included - Nationwide from $849</p>
                    </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
                    <div class="step1_form">
                        <p class="heading">Where are you moving from?</p>
                        <div class="input-group top">
                          <span class="input-group-addon"><div class="arrow"></div></span>
                          <input type="text" id="from_zip_code" name="from_zip_code" class="form-control" placeholder="Enter Zip Code">
                        </div>
                        <button type="button" id="step-1-button" class="current-step btn get_started">Get Started</button>                   
                    </div>
                    <div id="privacy_menu">
                    <i class="icon-custom-verison"></i>
                        <ul>
                            <li><a href="http://quoterunner.co/privacy-policy/" target="_BLANK" title="Privacy Policy">Privacy Policy</a></li>
                            <li><a href="http://quoterunner.co/terms/" target="_BLANK" title="Term of Use">Term of Use</a></li>
                        </ul>
                     </div>
                    <div class="happy_people"><img src="http://quoterunner.co/assets/img/moving-couple.png" />                       
                    </div> 
            </div>
       </div>
  	</div>

<div id="slide_partner">
      <div class="container">
        	<div class="row text-center">
            	<ul>
               		 <li><i class="icon-custom-allied"></i></li>
                	 <li><i class="icon-custom-na"></i></li>
                	 <li><i class="icon-custom-arpin"></i></li>
                	 <li><i class="icon-custom-stevens"></i></li>
                	 <li><i class="icon-custom-moving"></i></li>
                 </ul>
            </div>
        </div>  
</div>   
</div>    
<!--end step 1--> 
<div class="step2 step-2" id="step-2">
	<div class="container">
		<div class="row">
        	<div class="col-xs-10 col-xs-offset-1 no-padding">
                     <div class="step_position">
                        <ul class="moving_steps">
                            <li class="s1 disabled"><a href="#">Enter Your Zip Code</a></li>
                            <li class="s2"><a href="#">Find Movers</a></li>
                            <li class="s3"><a href="#">Get Moving Quote</a></li>
                        </ul>
                        <div class="progress_status">
                            <div class="mover"></div>
                        </div>
                         <div class="title">
                            <h2>ENTER YOUR DESTINATION</h2>
                            <p>We'll search a wide range of licensed and reputable carriers <br />in our network that service moves across the country.</p>
                        </div>
                  </div>
             </div>
             <div class="row">
           		 <div class="col-xs-6 col-xs-offset-3">
                         <div class="step2_form right">
                                <div class="form-group">
                                    <label class="col-xs-6 control-label">MOVING TO:</label>
                                    <div class="col-xs-6">
                                     <input type="text" class="form-control" id="to_zip_code" name="to_zip_code" placeholder="Enter ZIP Code">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-6 control-label">MOVE DATE: </label>
                                    <div class="input-group col-xs-6">
                                     <input type="text" class="form-control" name="move_date" id="move_date" placeholder="Approx. Move Date">
                                     <span class="input-group-addon"><div class="calandar"></div></span>
                                	</div>
                                </div>
                                 <div class="form-group">
                                    <label class="col-xs-6 control-label">MOVE SIZE:</label>
                                    <div class="col-xs-6">
                                     <select name="move_size" id="move_size" class="form-control">
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
                                 <div class="form-group  text-center">
                                     <div class="col-xs-6">
                                     </div>
                                     <div class="col-xs-6">
                                         <button type="button" id="step-2-button" class="get_started">Continue</button>
                                     </div>
                                </div>
                          </div>
                           <div id="privacy_menu">
                                <i class="icon-custom-verison"></i>
                           </div>
                    </div>
                    
                </div>
        	</div>
        </div>
<div id="slide_partner">
      <div class="container">
        	<div class="row features text-center">
                <div class="col-xs-2">
               		 <i class="icon-custom-move-easy"></i>
                    <h6>QuoteRunner Makes Moving Easy</h6>
                </div>
                 <div class="col-xs-2">
                	  <i class="icon-custom-save-money"></i><h6>Save Time and Money
in 3 Easy Steps</h6>
                </div>
                 <div class="col-xs-2">
                	 <i class="icon-custom-license"></i><h6>Connect with Licensed 
Movers Nationwide</h6>
                </div>
                 <div class="col-xs-2">
                	 <i class="icon-custom-price-range"></i><h6>View Your Move's
Price Range Online</h6>
                </div>
                 <div class="col-xs-2">
                	 <i class="icon-custom-free-quote"></i><h6>Get Free Quotes 
via Phone and Email</h6>
                </div>
            </div>
        </div>  
</div> 
</div>
<!--end step 2--> 
<div id="search-step">
	<div class="container">
		<div class="row">
        	<div class="col-xs-12">
        		<img id="search-animation" src="" />
        	</div>
		</div>
	</div>
	<div id="slide_partner">
      <div class="container">
        	<div class="row text-center">
            	<ul>
               		 <li><i class="icon-custom-allied"></i></li>
                	 <li><i class="icon-custom-na"></i></li>
                	 <li><i class="icon-custom-arpin"></i></li>
                	 <li><i class="icon-custom-stevens"></i></li>
                	 <li><i class="icon-custom-moving"></i></li>
                 </ul>
            </div>
        </div>  
	</div>
</div>

<div class="step3 step-3" id="step-3">
	<div class="container">
		<div class="row">
        	<div class="col-xs-10 col-xs-offset-1 no-padding">
                     <div class="step_position">
                        <ul class="moving_steps">
                            <li class="s1 disabled"><a href="#">Enter Your Zip Code</a></li>
                            <li class="s2 disabled"><a href="#">Find Movers</a></li>
                            <li class="s3"><a href="#">Get Moving Quote</a></li>
                        </ul>
                        
                        <div class="progress_status">
                            <div class="quote"></div>
                        </div>
                         <div class="title">
                            <h2>Nearly Done !</h2>
                            <p>Enter your information to get the final price for your move.</p>
                        </div>
             		 </div>
       		 </div>  
        </div>
       <div class="row">
        	<div class="col-xs-8 col-xs-offset-2 no-padding">         
                         <div class="form_quote">
                         <div class="row">	
                         	<div class="col-xs-6"> 
                                      <div class="col-xs-6 top-half">
                                     	 <div class="form-group margin">
                                           <label for="exampleInputEmail2" class="sr-only"></label>
                                        	<input type="text" placeholder="First name" id="first_name" class="form-control" name="first_name">
                                          </div>
                                        </div>
                                        <div class="col-xs-6  top-half">
                                        	<div class="form-group margin">
                                            <label for="exampleInputPassword2" class="sr-only"></label>
                                            <input type="text" placeholder="Last name" id="last_name" class="form-control" name="last_name">
                                             </div>
                                        </div>
                                      <div class="form-group no-margin left">
                                          <input type="email" placeholder="Valid Email Address" id="email" class="form-control" name="email">
                                      </div>
                                      <div class="form-group no-margin left">
                                          <input type="text" placeholder="Valid Phone Number" id="phone" class="form-control" name="phone">
                                      </div>
                                      <div class="form-group agreement terms-validation-popup text-center left">
                                            <label class="accept-terms">
                                              <input id="terms-accept-checkbox" name="terms_accept" type="checkbox"> I accept terms listed below
                                            </label>
                                      </div>
                                    
                                    
                                      <div class="form-group">
											 <button type="submit" id="form-submit-button" class="btn display_prices">GET PRICING</button>
                                      </div>
                                      <div id="privacy_menu">
                                		<i class="icon-custom-verison"></i>
                    				 </div>
                               </div>
                               <div class="col-xs-6">
                              		 <div id="map-canvas"></div>
                               </div>
                            </div>
                         </div>
                    </div>
           		 </div>
    </div>
<div id="slide_partner">
      <div class="container">
      	<div class="row">
             <div class="col-xs-12 terms">
                <p>By clicking the <span>[GET PRICING]</span>  button, you agree as follows: You have reviewed, agree to and will honor our Terms of Use and Privacy Policy; You authorize a maximum of 6 moving carriers to contact you by telephone regardless of whether you have registered on a federal or state Do Not Call (DNC) registry or previously opted out or unsubscribed from QuoteRunner,co, Set Media Lab, moving carriers or other persons or entities; You authorize QuoteRunner,co., Set Media Lab, moving carriers and third party lead generators/aggregators/distributors to transmit text/SMS marketing messages to you and to utilize an automatic dialing system in connection with calls made or text/SMS messages sent to the telephone number you have provided; I understand that I am not required to click the [GET PRICING] button or otherwise sign this agreement or agree (directly or indirectly) to enter into an agreement to receive automated telephone dialing system marketing calls or text/SMS messages as a condition of purchasing any property, goods or services; By clicking the [GET PRICING] button, your electronic signature shall have the same force and effect as if you hand signed this agreement.</p>
             </div>
        </div>
      </div>
</div> 
</div>     
</section>
  <input type="hidden" name="utm_source" value="<?php echo (isset($_GET['utm_source'])) ? $_GET['utm_source']: "" ?>">
			 <input type="hidden" name="utm_medium" value="<?php echo (isset($_GET['utm_medium'])) ? $_GET['utm_medium']: "" ?>">
			 <input type="hidden" name="utm_campaign" value="<?php echo (isset($_GET['utm_campaign'])) ? $_GET['utm_campaign']: "" ?>">
			 <input type="hidden" name="ag" value="<?php echo (isset($_GET['ag'])) ? $_GET['ag']: "" ?>">
			 <input type="hidden" name="qs" value="<?php echo (isset($_GET['qs'])) ? $_GET['qs']: "" ?>">
			 <input type="hidden" name="network" value="<?php echo (isset($_GET['network'])) ? $_GET['network']: "" ?>">
			 <input type="hidden" name="device" value="<?php echo (isset($_GET['device'])) ? $_GET['device']: "" ?>">
			 <input type="hidden" name="adid" value="<?php echo (isset($_GET['adid'])) ? $_GET['adid']: "" ?>">
			 <input type="hidden" name="gclid" value="<?php echo (isset($_GET['gclid'])) ? $_GET['gclid']: "" ?>">
			 <input type="hidden" name="source" value="/moving/desktop"> 
</form> 
<!--STATIC-->
<section id="welcome">
    <div class="container">
        <div class="row">
            <div class="col-xs-7">                
                <h2>Welcome to QuoteRunner</h2>
              <p>Quoterunner matches you with movers that has the knowledge, experience, people and equipment to get all your belongings to your new place in the safest and most efficient way. With us, you can only expect the best moving, storage, and packing services.</p>
                <ul class="features">
                <li><p>Quickly and easily receive quotes for your move to compare.</p></li>
                    <li><p>All quotes includes gas, driving, loading &amp; unloading.</p></li>
                    <li><p>Have all your belongings handled by professional movers.</p></li>
                    <li><p>Receive quotes via email or phone.</p></li>
                    <li><p>Save time compared to having to call several movers.</p></li>
                    <li><p>Save the hassle of doing the work yourself.</p></li>                    
                </ul>
            </div>
            <div class="col-xs-5">                
                <div class="welcome_couple"><img src="http://quoterunner.co/assets/img/couple-moving-with-boxes-faded.jpg" /></div>
            </div>
        </div>
    </div>
</section>
<section id="how_it_works">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="shadow"></div>
                <h2>Your Easy Step to Get Best Deal Price Moving Rate</h2>
            </div>                 
        </div>
        <div class="row">
            <div class="col-xs-4">
                <div class="location"></div>
                <p>Enter your ZIP Code, destination and Moving Size. Simply complete the short moving form, providing information about your move. The entire process takes just a few minutes.</p>
            </div>
            <div class="col-xs-4">
                <div class="search"></div>
                <p>We find matched with companies in near your area.Using the information you provide, we will match you with up to 5 movers in our network who can best serve your individual needs.</p>
            </div>
            <div class="col-xs-4">
                <div class="mover"></div>
                <p>Compare pricing and services to choose a mover. Review the moving quotes from each company to determine which mover will offer the best service at the most competitive price.</p>
            </div>
        </div>
    </div>
    
</section>
<!--testimonial-->
<section id="testimonial">
    <div class="container">        
        <div class="row">
            <div class="col-xs-6">
                <ul>
                    <li><p class="quote">" Simple. Quick. And to the point. I couldn't have been happier with the way everything turned out. I've been recommending QuoteRunner to everyone! "</p>
                        <p class="quote_by">- Patricia  - Chicago, IL</p>
                        <p class="border-line"></p>
                    </li>
                    <li><p class="quote">"Quoterunner has become my go-to for several types of services now. I was able to find a great deal on moving and I was extremely pleased with the movers I ended up using."</p>
                        <p class="quote_by">- Jeremy  - Scottsdael, AZ</p>
                        <p class="border-line"></p>
                    </li>
                    <li><p class="quote">"As someone who has never had to move more than a few pieces of furniture, I was terrified of having to move everything in the house we've been living in for the past 14 years. Happy to say it wen't off without a hitch, and at a great price too."</p>
                        <p class="quote_by">- Victoria  - Jacksonville, FL</p>
                        <p class="border-line"></p>
                    </li>
                </ul>
            </div>
            <div class="col-xs-6">
                <div id="latest_blog">
                    <h2>Quote Runner Blogs</h2>
                    <div class="blog-line"></div>
                    <ul id="blog_posts">
                    
                    <?php foreach($blog_roll as $b): ?>
                   		<li class="post">
                            <p class="post_title"><a href="<?php echo ($b->guid); ?>"><?php echo ($b->post_title); ?></a></p>
                            <p class="post_meta"><?php echo date( 'm/d/Y H:i', strtotime( $b->post_date ) ); ?></p>
                            <p class="post_excerpt"><?php echo ($b->post_excerpt); ?></p>
                            <div class="blog-line"></div>
	                    </li>
	                <?php endforeach; ?>
	                    
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--FOOTER MOVING-->    
<section class="search_moving">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                    <h2>Let’s Start Moving Now</h2>
                    <p>Fill out our simple form to get started!</p>

                    <form class="form-inline" role="form">
                      <div class="form-group">
                        <input type="text" class="form-control" id="enter_zip" placeholder="Enter City Name or Zip Code"> 
                      </div>
                      <button type="submit" class="btn started">Submit</button>
                      
                     
			 
                    </form>

            </div>
        </div>
    </div>
</section>