 <!--middle-->
        <section class="inner">
            <div class="row">
                <div class="col-left">
                    <img src="/assets/img/organic/icons/icon-user.jpg" alt="" title=""/>
                </div>
                <div class="col-right">
                    <h1 class="heading">Partners</h1>
                    <div class="clearfix"></div>
                    <div class="content-area partners-content">
                        <h6 class="title-03">Service Partners</h6>
                        <p>If you would like your business included in the QuoteRunner <br> database and receive sales
                            inquiry alerts in real time, please <br>contact us at partners@quoterunner.co, or use the
                            form
                            below.</p>

                        <h6 class="title-03">How does it work?</h6>
                        <p>Simply give us your criteria, and when matching requests for <br>quotes come in you will be
                            notified in real time. You will have<br> access to a full user interface where you can
                            easily
                            update your criteria and manage your billing options.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!--form start-->
                <?php $message = $this->session->flashdata('message'); ?>
                <form class="form form-inner partners-forms" id="SubmitInfo" action="" autocomplete="off" method="post">
                    <input type="hidden" name="type" id="type" value="partner">
                    <div class="block pull-left">
                        <label class="label label-space">YOUR NAME</label>
                        <input type="text" tabindex="0" placeholder="Enter valid name" id="your_name" name="your_name"/>
                    </div>
                    <div class="block pull-right">
                        <label class="label label-space">YOUR E-MAIL</label>
                        <input type="text" tabindex="0" placeholder="Enter valid email" id="email" name="email" />
                    </div>
                    <div class="clearfix"></div>
                    <div class="block_1 pull-left">
                        <label class="label label-space">PHONE NUMBER</label>
                        <input type="text" tabindex="0" id="phone_number" name="phone_number"
                               placeholder="Enter valid phone"/>
                    </div>
                    <div class="block pull-right">
                        <label class="label label-space">SUBJECT</label>
                        <select id="subject" name="subject">
                            <option>Business Inquiry</option>
                        </select>
                    </div>
                    <div class="clearfix"></div>
                    <div class="block-full">
                        <label class="label label-space">MESSAGE</label>
                        <textarea cols="" rows="" placeholder="Let us know how we can help you…" id="your_message"
                                  name="your_message"></textarea>
                    </div>
                    <div class="clearfix"></div>
					<div class="btn_block">
						<div class="pull-left">
                                                <div class="thank-you error-message text-center"  style="display:none;"></div>
							
						</div>
						<div class="pull-right">
							<div class="submit-now-btn">
								<button type="submit" class="submit-now" title="Submit">Submit</button>
							</div>
						</div>
					</div>	
                </form>
                <!--form end-->
            </div>
        </section>