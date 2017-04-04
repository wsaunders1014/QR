 <!--middle-->
        <section class="inner">
            <div class="row">
                <div class="col-left">
                    <img src="/assets/img/organic/icons/icon-user.jpg" alt="" title=""/>
                </div>
                <div class="col-right">
                    <h1 class="heading">Our Agents</h1>
                    <div class="clearfix"></div>
                    <div class="content-area our-agents-content">
                        <p>QuoteRunner uses a sophisticated lead validation system. Each data
                            entity is cross-validated to provide highest data quality possible.
                            This happens in real-time to ensure speedy delivery to our partners
                            while maintaining the highest possible quality.
                        </p>
                        <p>

                            To ensure that our partners will only be receiving leads that are of
                            highest value to them, we pass each lead through a strict set of filters
                            which guarantee the integrity and quality of our data.
                        </p>
                        <p>
                            Partners can filter the leads using a wide set of criterions - from
                            geo-specific such as state, area-code and zipcode, to practical like
                            cost, volume and even time of day. Contact information for each lead
                            is verified in real time to ensure accuracy.
                        </p>
                        <p>
                            If your company represents a reputable service network or lead
                            vendor, and you are interested in having access to sales inquiries
                            from QuoteRunner and other properties, please contact us at
                            <a href="mailto:agents@quoterunner.co" target="_blank"
                               class="email">agents@quoterunner.co</a> or fill out the form below:
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!--form start-->
                <?php $message = $this->session->flashdata('message'); ?>
                <form class="form form-inner" id="SubmitInfo"  action="" autocomplete="off" method="post">
                     <input type="hidden" id="type" name="type" value="agents"/>
                    <div class="block pull-left">
                        <label class="label label-space">YOUR NAME</label>
                        <input type="text" tabindex="0" placeholder="Enter valid name" id="your_name" name="your_name"/>
                    </div>
                    <div class="block pull-right">
                        <label class="label label-space">YOUR E-MAIL</label>
                        <input type="text" tabindex="0" placeholder="Enter valid email" id="email" name="email" />
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
							<div class="thank-you error-message text-center" style="display:none;"></div>
						</div>
						<div class="pull-right">
							<div class="submit-now-btn">
								<button type="submit" name="submit_information" class="submit-now" title="Submit">Submit</button>
							</div>
						</div>
					</div>	
                </form>
                <!--form end-->
            </div>
        </section>