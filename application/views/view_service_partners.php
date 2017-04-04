<div class="contact-top">
	<div class="container">
    	<div class="row">
            <div class="col-xs-8 title">
                <h1>Service Partners</h1>
               <!-- <h2>Reach us using the form below or details on right side.</h2> -->
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
                  <i class="icon-home"></i>&nbsp;&nbsp;&raquo;&nbsp;&nbsp;Service Partners
            </div>
        </div>
    </div>
</div>




<div class="row contactblock1">
  <div class="container con">
          
          <h3>Service Partners</h3>
          <p> If you would like your business included in the QuoteRunner database and receive sales inquiry alerts in real time, please contact us at <a href="mailto:partners@quoterunner.co">partners@quoterunner.co</a>, or use the form below.</p>
<h4>How does it work?</h4>
          <p>
          Simply give us your criteria, and when matching requests for quotes come in you will be notified in real time.  You will have access to a full user interface where you can easily update your criteria and manage your billing options.</p>
         
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
                                             <option value="Service Partner Inquiry" selected>Service Partner Inquiry</option>
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
  </div>
</div>
