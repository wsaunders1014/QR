<!--middle-->
<section class="inner">
    <div class="row">
        <div class="col-left">
            <img src="/assets/img/organic/icons/icon-user.jpg" alt="" title=""/>
        </div>
        <div class="col-right">
            <h1 class="heading">Contacts</h1>
            <div class="clearfix"></div>
            <div class="content-area partners-content">
                <div class="email-box">
                    <p>
                        <i>Email:</i>
                        <a href="mailto:Contact@quoterunner.co">&nbsp;Contact@quoterunner.co</a>
                    </p>
                    <p>
                        <i>Phone:</i>
                        <b>&nbsp;(888) 976-6067</b>
                    </p>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!--form start-->
        <?php $message = $this->session->flashdata('message'); ?>
            <form class="form form-inner partners-forms" id="SubmitInfo" action="" autocomplete="off" method="post">
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
                    <option value="Business Inquiry">Business Inquiry</option>
                    <option value="General Inquiry">General Inquiry</option>
                    <option value="Sales">Sales</option>
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
						<div class="thank-you text-center error-message"  style="display:none;"></div>
					
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