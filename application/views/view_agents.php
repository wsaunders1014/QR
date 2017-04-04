<div class="contact-top">
	<div class="container">
    	<div class="row">
            <div class="col-xs-8 title">
                <h1>Agents</h1>
                <!--<h2>Reach us using the form below or details on right side.</h2> -->
            </div>
            <div class="col-xs-3 thumbboy">
                <img src="/assets/img/thumb_boy.png" alt=""  />
            </div>
         </div>
    </div>        
</div>
<div class="contact-block1">
    <div class="container">
        <div class="row content">
        	<div class="col-xs-12">
                  <i class="icon-home"></i>&nbsp;&nbsp;&raquo;&nbsp;&nbsp;Agents
            </div>
        </div>
    </div>
</div>




<div class="row contactblock1">
  <div class="container con">
          
          <h3>Agents</h3>
           <p> Quoterunner uses a sophisticated lead validation system. Each data entity is cross-validated to provide highest data quality possible. This happens in real-time to ensure speedy delivery to our partners while maintaining the highest possible quality.</p>
           <p> To ensure that our partners will only be receiving leads that are of highest value to them, we pass each lead through a strict set of filters which guarantee the integrity and quality of our data.</p>
            <p> Partners can filter the leads using a wide set of criterions - from geo-specific such as state, area-code and zipcode, to practical like cost, volume and even time of day. Contact information for each lead is verified in real time to ensure accuracy.</p>
          <p>If your comapany represents a reputable service network or lead vendor, and you are interested in having access to sales inquiries from QuoteRunner and other properties, please contact us at <a href="mailto:agents@quoterunner.co">agents@quoterunner.co</a> or fill out the form below:</p>
          <p>&nbsp;</p>
          <div class="contact-block2">
    <div class="container">
    	<div class="row">
        		<div class="col-xs-7">
                   
                   	<?php $message = $this->session->flashdata('message'); ?>
                   	<?php  if( strlen($message) ){ ?>
                   		<div class="alert alert-success"><?php echo $message; ?></div>
                  <?php }; ?>
                   	
                   	
                     <?php echo form_open('contact/submit', array('class' => 'form-horizontal', 'role' => 'form') ); ?>
                             <div class="form-group">
                                <label for="inputEmail3" class="col-xs-3 control-label">Your Name</label>
                                <div class="col-xs-7">
                                  <input type="text" class="form-control" name="name" id="inputEmail3" placeholder="your name">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputEmail3" class="col-xs-3 control-label">Your E-mail</label>
                                <div class="col-xs-7">
                                  <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputPassword3" class="col-xs-3 control-label">Subject</label>
                                <div class="col-xs-7">
                                     <div class="select">
                                         <select class="form-control" name="subject">
                                            <option value="">Select Option</option>
                                            <option value="General Inquiry">General Inquiry</option>
                                            <option value="Inquiry For Realtime Leads" selected>Inquiry For Realtime Leads</option>
                                          </select>
                                      </div>
                                </div>
                              </div>
                               <div class="form-group">
                                <label for="inputPassword3" class="col-xs-3 control-label">Your Message</label>
                                <div class="col-xs-7">
                               <textarea class="form-control" name="message" rows="4"></textarea>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="col-xs-offset-2 col-xs-10">
                                  <button type="submit" class="icon-custom-btn">Submit</button>
                                </div>
                              </div>
                     </form>
   				 </div>
                 <div class="col-xs-5 whitebg">
                     <table width="100%" border="0" class="table">
                          <tr>
                            <td>Any Questions? Call Us</td>
                            <td><p>(307)-200-4898</p></td>
                          </tr>
                          <tr>
                            <td>E-Mail</td>
                            <td><p>contact@quoterunner.co</p></td>
                          </tr>
                        
                          <tr>
                            <td>Head Office</td>
                            <td><p>Quote Runner LLC<br />30 N. Gould St. suite 5636<br />
                            
                                            Sheridan, WY 82801

                            <br />
                                            <a target="_BLANK" href="https://www.google.co.in/maps/dir//30+N+Gould+St+%235636,+Sheridan,+WY+82801,+USA/@44.7977549,-106.9571565,17z/data=!4m16!1m7!3m6!1s0x5335fabc2a66677f:0x9108b99c89271c2e!2s30+N+Gould+St+%235636,+Sheridan,+WY+82801,+USA!3b1!8m2!3d44.7977549!4d-106.9549678!4m7!1m0!1m5!1m1!1s0x5335fabc2a66677f:0x9108b99c89271c2e!2m2!1d-106.9549678!2d44.7977549">GET DIRECTIONS</a></p></td>
                          </tr>
                                             </table>
                 </div>
        </div>
        
            
    </div>
</div>
<!-- end contact form -->


    </div>
    
</div>
