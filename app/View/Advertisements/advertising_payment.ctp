	<div id="content" class="payment">
		<div class="title">
			<h1>PAYMENT</h1>
		</div>
		<div id="contact">
			<div class="form">
				<p><strong>Enter credit card information below</strong></p>
				<div class="line-black"></div>
					<?php
						echo $this->Form->create('Advertisement', array('type' => 'post', 'action' => 'advertising_purchase'));
					?>
						<div class="left">
							<label>Name (as it appears on card)</label>
								<?php echo $this->Form->input('name', array('value' => 'Name', 'label' => false)); ?>
							<label>Address 1</label>
								<?php echo $this->Form->input('address1', array('value' => 'Address1', 'label' => false)); ?>
							<label>Address 2</label>
								<?php echo $this->Form->input('address2', array('value' => 'Address2', 'label' => false)); ?>
							<label>City</label>
								<?php echo $this->Form->input('city', array('value' => 'City', 'label' => false)); ?>
							<label>State</label>
								<!--
								<div id="dd" class="wrapper-dropdown-1" tabindex="1">
									<span></span>
								    <ul class="dropdown" tabindex="1">
								        <li><a href="#"> State 1 </a></li>
								        <li><a href="#"> State 2 </a></li>
								    </ul>
								</div>
								-->
								<?php
									$states = array('AL' => 'Alabama',
													'AK' => 'Alaska',
													'AZ' => 'Arizona',
													'AR' => 'Arkansas',
													'CA' => 'California',
													'CO' => 'Colorado',
													'CT' => 'Connecticut',
													'DE' => 'Delaware',
													'FL' => 'Florida',
													'GA' => 'Georgia',
													'HI' => 'Hawaii',
													'ID' => 'Idaho',
													'IL' => 'Illinois',
													'IN' => 'Indiana',
													'IA' => 'Iowa',
													'KS' => 'Kansas',
													'KY' => 'Kentucky',
													'LA' => 'Louisiana',
													'ME' => 'Maine',
													'MD' => 'Maryland',
													'MA' => 'Massachusetts',
													'MI' => 'Michigan',
													'MN' => 'Minnesota',
													'MS' => 'Mississippi',
													'MO' => 'Missouri',
													'MT' => 'Montana',
													'NE' => 'Nebraska',
													'NV' => 'Nevada',
													'NH' => 'New Hampshire',
													'NJ' => 'New Jersey',
													'NM' => 'New Mexico',
													'NY' => 'New York',
													'NC' => 'North Carolina',
													'ND' => 'North Dakota',
													'OH' => 'Ohio',
													'OK' => 'Oklahoma',
													'OR' => 'Oregon',
													'PA' => 'Pennsylvania',
													'RI' => 'Rhode Island',
													'SC' => 'South Carolina',
													'SD' => 'South Dakota',
													'TN' => 'Tennessee',
													'TX' => 'Texas',
													'UT' => 'Utah',
													'VT' => 'Vermont',
													'VA' => 'Virginia',
													'WA' => 'Washington',
													'WV' => 'West Virginia',
													'WI' => 'Wisconsin',
													'WY' => 'wyoming'
												   );

										echo $this->Form->input('state', array('options' => $states, 'default' => 'AL', 'label' => false));
 								?>
							<label>Zip</label>
								<?php echo $this->Form->input('zip', array('value' => '111', 'label' => false)); ?>
							<label>Country</label>
								<!--
								<div id="dd1" class="wrapper-dropdown-1" tabindex="1">
									<span></span>
								    <ul class="dropdown" tabindex="1">
								        <li><a href="#"> Country 1 </a></li>
								        <li><a href="#"> Country 2 </a></li>
								    </ul>
								</div>
								-->
								<?php
									$countries = array('US' => 'United States of America');
									echo $this->Form->input('country', array('options' => $countries, 'default' => '', 'label' => false));
								?>
						</div>
						<div class="right">
							<label>Type of Card</label>
								<!--
								<div id="dd2" class="wrapper-dropdown-1" tabindex="1">
									<span></span>
								    <ul class="dropdown" tabindex="1">
								        <li><a href="#"> Card 1 </a></li>
								        <li><a href="#"> Card 2 </a></li>
								    </ul>
								</div>
								-->
								<?php
									$creditCards = array('visa' 		   => 'VISA',
														 'discover' 	   => 'Discover Card',
														 'americanExpress' => 'American Express',
														 'mastercard' 	   => 'Mastercard',
														 'jcb' 			   => 'JCB',
														 'unionpay' 	   => 'UnionPay',
														 'dinersClub' 	   => 'Diners Club'
														);
									echo $this->Form->input('cardType', array('options' => $creditCards, 'label' => false));
								?>
							<label>Credit Card Number</label>
								<?php echo $this->Form->input('creditCardNumber', array('value' => 'XXXX XXXX XXXX XXXX')); ?>
							<label>MM</label>
								<!--
								<div id="dd3" class="wrapper-dropdown-1" tabindex="1">
									<span>MM</span>
								    <ul class="dropdown" tabindex="1">
								        <li><a href="#"> January </a></li>
								        <li><a href="#"> February </a></li>
								        <li><a href="#"> March </a></li>
								        <li><a href="#"> April </a></li>
								        <li><a href="#"> May </a></li>
								        <li><a href="#"> June </a></li>
								        <li><a href="#"> July </a></li>
								        <li><a href="#"> August </a></li>
								        <li><a href="#"> September </a></li>
								        <li><a href="#"> October </a></li>
								        <li><a href="#"> November </a></li>
								        <li><a href="#"> December </a></li>
								    </ul>
								</div>
								-->
								    <?php
								    	$months = array('jan' => 'January',
														'feb' => 'February',
														'mar' => 'March',
														'apr' => 'April',
														'may' => 'May',
														'jun' => 'June',
														'jul' => 'July',
														'aug' => 'August',
														'sep' => 'September',
														'oct' => 'October',
														'nov' => 'November',
														'dec' => 'December'
													   );
								    	echo $this->Form->input('expirationMonth', array('options' => $months, 'label' => false));
								    ?>

								<!--	
								<div id="dd4" class="wrapper-dropdown-1" tabindex="1">
									<span>YYYY</span>
								    <ul class="dropdown" tabindex="1">
								        <li><a href="#"> Year 1 </a></li>
								        <li><a href="#"> Year 2 </a></li>
								    </ul>
								</div>
								-->
								<label>YYYY</label>
								<?php
									$years = array();

									for($counter = 2014; $counter < 2044; $counter++)
									{
										$years[$counter] = $counter;
									}

									echo $this->Form->input('expirationYear', array('options' => $years, 'label' => false));
								?>
	
							<div class="clear"></div>
							<label>Security Code</label>
								<!-- <input class="code" type="text" /> -->
								<?php
									echo $this->Form->input('securityCode', array('value' => 'security code', 'label' => false, 'class' => 'code')); 
								?>
								<img class="icon" src="/images/icon.png" />
							<label class="lbltotal"><h1>TOTAL</h1></label>
							<div class="bg-total">
								<div class="top"></div>
								<div class="total">
									<h1>$ 99.<span>95</span></h1>
								</div>
								<div class="bottom"></div>
							</div>
						</div>
						<div class="clear"></div>
					<?php echo $this->Form->end(); ?>
			</div>
		</div>
		<div class="buttons">
			<a href="/advertisements"><span class="back"><input type="submit" class="btnback" value="<< BACK" /></span></a>
			<a href="/advertisements/advertising_purchase"><span class="next"><input id="next" type="submit" class="btnnext" value="NEXT >>" /></span></a>
		</div>
	</div>
	
	<script type="text/javascript">
		jQuery("#next").click(function(event)
							  {
								event.preventDefault();
								jQuery("#AdvertisementAdvertisingPurchaseForm").submit();
							  }
							 );
	</script>