<style type="text/css">
	@media (min-width:1281px) {
		.loading {
			float: none;
			text-align: center;
			font-family: 'CircularStd-Bold';
			font-size: 56px;
			color: #46DEB0;
			letter-spacing: -0.26px;
			/*margin-right: 10px;*/
			padding-top: 9px;
			display:none; position: absolute; margin: 0 auto 0 auto; left: 0; right: 0; width: 375px;
		}
	}
	@media (min-width:768px) {
		.loading {
			float: none;
			text-align: center;
			font-family: 'CircularStd-Bold';
			font-size: 56px;
			color: #46DEB0;
			letter-spacing: -0.26px;
			/*margin-right: 10px;*/
			padding-top: 9px;
			display:none; position: absolute; margin: 0 auto 0 auto; left: 0; right: 0; width: 375px;
		}
	}
	@media screen and (max-width:414px){
		.loading {
			float: none;
			text-align: center;
			font-family: 'CircularStd-Bold';
			font-size: 32px;
			color: #46DEB0;
			letter-spacing: -0.26px;
			/*margin-right: 10px;*/
			padding-top: 9px;
			display:none; position: absolute; margin: 0 auto 0 auto; left: 0; right: 0; width: 200px;
		}
	}
</style>
<div class="move-note">Next Our System will Display your Ballpark Estimate.</div>
<div class="move-note-new hidden">Please Verify Your Number.</div>
<div class="move-note-new hidden">Enter Conformation Code.</div>

<form action="#" method="post" id="formquote" name="formquote" autocomplete="off">
        <input type="hidden" id="email" name="email" value="<?php echo $email; ?>" />
<div class="name-number-container ">
        <?php 	
        $show_name_input = ((isset($first_name) && isset($last_name))  || isset($first_name)) ? false :true;
//        var_dump($show_name_input);
//        var_dump((isset($first_name))
//            var_dump(isset($last_name)));
        
//        exit;
        if($show_name_input == true) {
//            $name = isset($first_name) ? $first_name : '';
//            $name2 = isset($last_name) ?  $last_name : $first_name ;
//            $full_name = $name.' '.$name2;
        }
        ?>
	<div id="name-container" style="display: <?php echo $show_name_input == true ? 'block':'none'; ?>"  >
		<h1>My Name is</h1> 
		<!--<input type="text" placeholder="Abraham Goldstein" class="center-text name-number-field" value="<?php //echo $full_name; ?>" />-->
		 <div class="block">
                   
                    <input type="text" placeholder="First" id="first_name" name="first_name" class="center-text name-number-field" value="<?php echo $first_name; ?>" />
                 </div>
                 <div class="block" style="margin-left: 5px;">
		<input type="text" placeholder="Last" id="last_name" name="last_name" class="center-text name-number-field" value="<?php echo $last_name; ?>" />
		<!--<a class="submit-btn" id="next-btn">NEXT</a>-->
                   </div>
                <div class="block">
                    <button type="submit" class="submit-btn" id="next-btn">NEXT</button>
                </div>
	</div>
	<div id="number-container" style="display: <?php echo $show_name_input == true ? 'none':'block'; ?>"  >
		 <div class="">
                    <h1>My number is</h1> 
                    <div class="block">
                        <input type="tel" placeholder="xxx-xxx-xxxx" name="phone" maxlength="12"  id="phone" class="center-text name-number-field" value="<?php echo isset($phone) ? $phone : ''; ?>"/>
                     </div>
                    <div class="block ">
                        <button type="submit" class="submit-btn" id="getquotebtn">View My Quotes</button>
                    </div>
                    
                    <div class="clearfix"></div>
                    <div class="btn-block hidden">
                        <div class="btn-container">
                            <button class="submit-buttons" type="button" id="validate-by-text">Validate by Text</button>
                        </div>
                        <div class="btn-container">
                            <button class="submit-buttons" type="button" id="validate-by-phone">Validate by Phone</button>
                        </div>
                    </div>
                 </div>
                <div class="hidden">
                            <h1 class="digit-code">My 2-digit code is</h1>
                            <div class="block">
                                    <input type="tel" name="digits" id="digits" value="" placeholder="00" class="center-text digit-code" maxlength="2"/>
                            </div>
                            <div class="block">
                                    <div for="digits" class="error error_mobile">Code was invalid</div>
                                    <button type="button" class="submit_btn" id="digitsubmit">SUBMIT</button>
                            </div>
                    </div>
                <!--<a class="submit-btn" id="getquotebtn">SUBMIT</a>-->
	</div>
        
        
        <!-- Phone number targus score check and confirmation code end -->
        <div id="quote-loading" style="" class="loading">
			<div class="pull-left">Calculating</div>
			<div class="text-loader pull-left"></div>
		</div>
        <div id="quote-container" class="relative" style="display: none;">
            <h1 class="for-thankU">Your quote range is <span id="quoteRange">$1,227 - $4,140</span></h1>
            <p class="sub-title">Professional movers will contact you shortly with exact quotes.</p>
        </div>
<style type="text/css">
</style>
</div>

<div id="moving-details">
	<div class="full-width row">
        <input type="hidden" id="source"  name="source" value="<?php echo $source; ?>" />
		<span>Moving From: </span>
		<section id="moving-from-place">
			<span class="place" id="span_from_zip"><?php echo $from_city.', '.$from_state.' '.$from_zip_code; ?> <img src="/assets/img/success-icon.png" width="14" height="14" alt="Success"/></span> <a class="edit" id="from-place-edit-btn">Edit</a>
		</section>
		<section id="moving-from-place-edit">
			<span class="zip-container">
				<input type="text" class="zip-field number" placeholder="From ZIP" id="zip_from" name="zip_from" maxlength="5" value="<?php echo $from_zip_code; ?>"/>
				<a class="zip-help-btn" id="from-zip-help-btn">ZIP Help</a>
				<div class="sticky-zip-help-container" id="from-zip-help">
					<span>ZipCode Helper</span>
					<div class="search-result">
						<input type="text" placeholder="City, State" class="auto-address"/>
						<div class="zip-helper-result" id="results">
							<ul>
								
							</ul>
						</div>
					</div>
				</div>
			</span>
			<a class="update" id="from-place-update-btn">UPDATE</a>
		</section>
	</div>
	<div class="full-width row">
		<span>Moving To: </span>
		<section id="moving-to-place">
			<span class="place" id="span_to_zip"> <?php echo $to_city.', '.$to_state.' '.$to_zip_code; ?> <img src="/assets/img/success-icon.png" width="14" height="14" alt="Success"/></span> <a class="edit" id="to-place-edit-btn">Edit</a>
		</section>
		<section id="moving-to-place-edit">
			<span class="zip-container">
				<input type="text" class="zip-field number" placeholder="To ZIP" id="zip_to" name="zip_to" maxlength="5" value="<?php echo $to_zip_code; ?>" />
				<a class="zip-help-btn" id="to-zip-help-btn">ZIP Help</a>
				<div class="sticky-zip-help-container" id="to-zip-help">
					<span>ZipCode Helper</span>
					<div class="search-result">
						<input type="text" placeholder="City, State" class="auto-address"/>
						<div class="zip-helper-result" id="results">
							<ul>
								
							</ul>
						</div>
					</div>
				</div>
			</span>
			<a class="update" id="to-place-update-btn">UPDATE</a>
		</section>
	</div>
	<div class="full-width row">
		<span>Moving Date: </span>
		<section id="moving-date">
			<span class="place"><?php echo date('m/d/Y',strtotime($move_date)); ?> <img src="/assets/img/success-icon.png" width="14" height="14" alt="Success"/></span> <a class="edit" id="moving-date-edit-btn">Edit</a>
		</section>
		<section id="moving-date-edit">
			<span class="datepicker-container"><input id="move_date" name="move_date" placeholder="Move Date" type="text" value="<?php echo date('m/d/Y',strtotime($move_date)); ?>" /></span> <a class="update" id="moving-date-update-btn">UPDATE</a>
		</section>
	</div>
	<div class="full-width row">
		<span>Moving Size: </span>
		<section id="moving-size">
                    <?php 
                    $rooms = explode(' ',$move_size);
                    if(in_array($rooms[0],array('one','two')))
                            $move_size = $rooms[0].' '.$rooms[1].' apartment';
                    else if(in_array($rooms[0],array('three','four','five'))) 
                            $move_size = $rooms[0].' '.$rooms[1].' house';
                    else if(in_array($rooms[0],array('six'))) {
                           $move_size = '';
                           for($i = 0 ; $i < count($rooms) - 1; $i++)
                                $move_size .= $rooms[$i].' ';
                           $move_size .= 'house';
                    }
                    ?>
                            <?php $options = array(
							'studio'                        =>	'Studio',
							'one bedrooms apartment'	=>	'1 Bedroom',
							'two bedrooms apartment'	=>	'2 Bedroom',
							'three bedrooms house'          =>	'3 Bedroom',
							'four bedrooms house'         =>	'4 Bedroom',
							'five bedrooms house'          =>	'5 Bedroom',
							'six bedrooms house'          =>	'6 Bedroom',
							'six bedrooms and more house'   =>	'6 or more Bedroom',
							
						);?>
			<span class="place" id="span_move_size"><?php echo $options[$move_size]; ?><img src="/assets/img/success-icon.png" width="14" height="14" alt="Success"/></span> <a class="edit" id="moving-size-edit-btn">Edit</a>
		</section>
		<section id="moving-size-edit">
			<span>
                            
                            
				<select id="number_of_rooms" name="number_of_rooms">
					<?php
                                        foreach($options as $key => $value){
                                                    if($key == $move_size){
                                                            echo '<option value="'.$key.'" selected="selected">'.$value.'</option>'."\n";
                                                    }else{
                                                            echo '<option value="'.$key.'">'.$value.'</option>'."\n";
                                                    }
                                            }
                                        ?>
				</select>
			</span> <a class="update" id="moving-size-update-btn">UPDATE</a>
		</section>
	</div>
</div>
</form>
<div id="terms">
By clicking the "View My Quotes" button, you agree as follows: You have reviewed, agree to and will honor our Terms of Use and Privacy Policy; You authorize a maximum of 6 moving carriers to contact you by telephone regardless of whether you have registered on a federal or state Do Not Call (DNC) registry or previously opted out or unsubscribed from QuoteRunner,co, Set Media Lab, moving carriers or other persons or entities; You authorize QuoteRunner,co., Set Media Lab, moving carriers and third party lead generators/aggregators/distributors to transmit text/SMS marketing messages to you and to utilize an automatic dialing system in connection with calls made or text/SMS messages sent to the telephone number you have provided; I understand that I am not required to click the "View My Quotes" button or otherwise sign this agreement or agree (directly or indirectly) to enter into an agreement to receive automated telephone dialing system marketing calls or text/SMS messages as a condition of purchasing any property, goods or services; By clicking the "View My Quotes" button, your electronic signature shall have the same force and effect as if you hand signed this agreement.
</div>

<!--<div class="full-width learn-more">
	<img src="/assets/img/info-icon.png" width="17" height="17" alt="Info Icon"/> Learn More About QuoteRunner
</div>-->