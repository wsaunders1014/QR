<div id="content">
	<div id="main">
		<div id="cloud-1"></div>
		<div id="cloud-2"></div>
		<div class="centered">
			<div class="status">Step 1 of 3</div>
			<div id="page-title" class="page-title">
				<span></span>
			</div>
			<div id="next-steps">
				<div id="one"><span class="checkmark"></span> Multiple Movers Found</div>
				<div id="arrow"></div>
				<div id="two">Next: View Prices</div>
			</div>
			<div class="page" id="step-0" style="display:block;">
				<h3 id="intro-2">Out of State Moves from $499 / Local from $250</h3>
				<h2 id="intro-1">Where are you moving from?</h2>
				<form>
					<div id="from-city"><span class="checkmark"></span>Los Angeles, CA</div>
					<div class="from-zip-container clearfix">
						<div class="error-msg">Please enter a valid ZIP.</div>
						<input type="tel" name="zip_from" id="zip_from" placeholder="From ZIP" autocomplete="off" maxlength="5">
						<div class="subtext"><span class="compass"></span>ZIP FINDER</div>
						<div class="results" id="from-results">
							<div><input type='text' id="search" placeholder="Search by City Name..." maxlength="19" autocomplete="off"></div>
							<ul>
							</ul>
						</div>
					</div>
					<button type="submit" id="get-quotes-btn">GO</button>
				</form>
			</div>
			<div class="page" id="step-1">
				<form>
					<div id="options" class="clearfix">
						<ul>
							<li class="top left" data-value="one bedrooms apartment" data-mask="One Bedroom">1 Bedroom</li>
							<li class="top right" data-value="two bedrooms apartment" data-mask="Two Bedrooms">2 Bedroom</li>
							<li class="middle left" data-value="three bedrooms house" data-mask="Three Bedrooms">3 Bedroom</li>
							<li class="middle right" data-value="four bedrooms house" data-mask="Four Bedrooms">4 Bedroom</li>
							<li class="bottom left" data-value="five bedrooms house" class="no-border-btm" data-mask="Five Bedrooms">5+ Bedroom</li>
							<li class="bottom right" data-value="two bedrooms house" class="no-border-btm" data-mask="Office">Office / Commercial</li>
						</ul>
					</div>
				</form>
			</div>
			<div class="page" id="step-2">
				<form>
					<div id="move_date"></div>
				</form>
			</div>
			<div class="page" id="step-3">
				<form class="clearfix">
					<span>I'm moving to</span> 
					<div class="to-zip-container clearfix">
						<div class="error-msg">Please enter a valid ZIP.</div>
						<input type="text" placeholder="ZIP" name="zip_to" id="zip_to" autocomplete="off">
						<div class="subtext">OR CITY NAME</div>
						<div class="results" id="to-results">
							<div>Please make a selection:</div>
							<ul>
							</ul>
						</div>
					</div>
					<div id="zip-btn" class="get-quotes">Calculate</div>
				</form>
			</div>
			<div class="page" id="step-4">
				<form>
					<div class="text-holder">
						<!-- <div id="grey-text">Searching For Movers...</div> -->
						<div id="blue-text">Calculating<span id="dots">...</span></div>
					</div>
				</form>
			</div>
			<div class="page" id="step-5">
				<form class="clearfix">
					<span class="hidden"></span>
					<div class="text">My email is</div>
					<div class="input-container">
						<div class="error-msg">Please enter a valid email.</div>
						<input type="email" name="email" id="email" placeholder="Enter Email" autocomplete="off" maxlength="60">
					
					</div>
					<button type="submit" id="email-btn" class="get-quotes">Submit</button>
				</form>
			</div>
			<div class="page" id="step-6">
				<form class="clearfix">
					<span class="hidden"></span>
					<span class="hidden"></span>
					<div class="text">My name is</div>
					<div class="input-container">
						<div class="error-msg">Please enter a valid first name.</div>
						<input type="text" name="fname" id="fname" placeholder="First" autocomplete="off">
						
					</div>
					<div class="input-container">
						<div class="error-msg">Please enter a valid last name.</div>
						<input type="text" name="lname" id="lname" placeholder="Last" autocomplete="off">
					
					</div>
					<button type="submit" id="name-btn" class="get-quotes">Submit</button>
				</form>
			</div>
			<div class="page" id="step-7">
				<form class="first clearfix">
					<div class="text">My number is</div>
					<div class="input-container">
						<div class="error-msg">Please enter a valid phone number.</div>
						<input type="tel" name="phone" id="phone" placeholder="xxx-xxx-xxxx" autocomplete="off" maxlength="12">
						<br/>
						<div id="validate-by-text" class="validate-btn">Validate by Text</div>
						<div id="validate-by-phone" class="validate-btn">Validate by Phone</div>
					</div>
					<button type="submit" id="final" class="get-quotes">Get My Quotes</button>
					<div class="disc">By clicking on the "GET MY QUOTES" button, I am verifying that I am over 18 years of age and agree to the <a class="terms" href="">Terms of Use</a> and <a class="privacy" href="#">Privacy Policy</a>. My "click" is my expressed written consent to be contacted via email, text, SMS or phone (including the use of autodialed calls or prerecorded calls) by Quote Runner LLC. and its moving partners that can quote or service my move, as well as companies offering other useful products or services. My consent supercedes any registration on any do-not-call list. Consent is required to proceed, but is not a condition of any purchase.</div>
				</form>
				<form class="second clearfix">
					<div class="text">My 2-digit code is </div>
					<div class="input-container">
						<div class="error-msg">Code was invalid.</div>
						<input type="tel" name="code" id="code" placeholder="00" autocomplete="off" maxlength="2">
						
					</div>
					<div class="code-btn" id="code-submit">Submit</div>	
				<!-- 	<div class="code-btn" id="code-resend">Resend</div> -->
					<div class="disc">By clicking on the "SUBMIT" button, I am verifying that I am over 18 years of age and agree to the <a class="terms" href="">Terms of Use</a> and <a class="privacy" href="#">Privacy Policy</a>. My "click" is my expressed written consent to be contacted via email, text, SMS or phone (including the use of autodialed calls or prerecorded calls) by Quote Runner LLC. and its moving partners that can quote or service my move, as well as companies offering other useful products or services. My consent supercedes any registration on any do-not-call list. Consent is required to proceed, but is not a condition of any purchase.</div>
				</form>
			</div>
			
			<div class="page" id="step-8">
				<h2>Your quote range is <span id='quoterange'>...</span></h2>
				<h3>Professional movers will contact you shortly with exact quotes.</h3>
			</div>
		</div>
		<div id="scene">
			<div class="centered">
				<div id="background">
					<div id="bg-scene-1" class="scene">
						<div class="bush"></div>
					</div>
					<div id="bg-scene-2" class="scene">
						<div class="snow-trees"></div>
					</div>
					<div id="bg-scene-3" class="scene">
						<div class="dunes"></div>
					</div>
					<div id="bg-scene-4" class="scene">
						<div class="hills"></div>
						<div class="trees"></div>
					</div>
					<div id="bg-scene-5" class="scene">
						<div class="rushmore"></div>
					</div>
					<div id="bg-scene-6" class="scene">
						<div class="skyline"></div>
					</div>
					<div id="bg-scene-7" class="scene">
						<div class="farm"></div>
					</div>
					<div id="bg-scene-8" class="scene">
						<div class="beach"></div>
					</div>
				</div>
				<div id="road"></div>
				<div id="stripes">
					<div class="stripe">
						<div class="square"></div>
						<div class="square"></div>
						<div class="square"></div>
					</div>
				</div>
				<div id="truck">
					<div class="truck" id="truck-0"></div>
					<div class="truck" id="truck-1"></div>
					<div class="truck" id="truck-2"></div>
					<div class="truck" id="truck-3"></div>
					<div class="truck" id="truck-4"></div>
					<div class="truck" id="truck-5"></div>
					<div class="truck" id="truck-6"></div>
					<div class="truck" id="truck-7"></div>
					<div class="truck" id="truck-8"></div>
				</div>				
				<div class="effects">
					<div id="ice"></div>
					<div id="rain"></div>
				</div>
				<div id="foreground">
					<div id="fg-scene-1" class="scene">
						<div class="box_plant"></div>
					</div>
					<div id="fg-scene-3" class="scene">
						<div class="cactus stage"></div>
						<div class="rock stage"></div>
					</div>
					<div id="fg-scene-4" class="scene">
						<div class="rail stage"></div>
					</div>
					<div id="fg-scene-5" class="scene">
						<div class="sign stage"></div>
					</div>
					<div id="fg-scene-7" class="scene">
						<div class="scarecrow stage"></div>
					</div>
					<div id="fg-scene-8" class="scene">
						<div class="box stage"></div> 
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="learn-more">
	<div id="info">
		<div class="centered clearfix">
			<div class="section half">
				<div class="section-title">Who We Are</div>
				<p>QuoteRunner is a quote comparison service that allows you to easily compare quotes and estimates from businesses local to your area. Our site can be used help you find services like finance companies, legal representation, getting a new roof for your home or business, and more.<br/><br/>

				<p>When it comes to paying for a service, everyone wants the best deal. Sometimes the amount of work that goes into finding that deal can be tiresome – that's where QuoteRunner comes in.
				</p>
			</div>
			<div class="section half">
				<div class="section-title">How It Works</div>
				<div class="step step-1">
					<div class="icon"></div>
					<div>
						<div class="bold">1. Select Move Details</div>
						<div>Select your Origin, Destination,
							Move Size, and Move Date.
						</div>
					</div>
				</div>
				<div class="step step-2">
					<div class="icon"></div>
					<div>
						<div class="bold">2. Help Us Reach You</div>
						<div>Enter your information so we can 
							get you your quotes quickly.
						</div>
					</div>
				</div>
				<div class="step step-3">
					<div class="icon"></div>
					<div>
						<div class="bold">3. Get Your Quotes Fast</div>
						<div>Our system will quickly match you 
							with the best movers for the job. 
						</div>
					</div>
				</div>
			</div>
			<div class="section full clearfix">
				<div class="section-title">Testimonials</div>
				<div class="quote">
					<div class="gender-icon female"></div>
					<div class="text">
						“QuoteRunner saved me time money and headaches! I have used them several times by now and they are always able to help me find the best deals from the best providers - highly recommended!”
					</div>
					<div class="name">Carol W, California</div>
				</div>
				<div class="quote">
					<div class="gender-icon male"></div>
					<div class="text">
						“I wasn't even sure where to start at first. Then I stumbled on QuoteRunner and I am very happy I did. I was able to get several quotes and ended up going with a contractor I was very happy with.”
					</div>
					<div class="name">Dan R, Colorado</div>
				</div>
			</div>
		</div>
	</div>
	<div id="call-out">
		<div class="centered clearfix">
			<div class="i-icon"></div> Learn More About QuoteRunner <div class="down-arrow-icon"></div>
		</div>
	</div>
</div>

 