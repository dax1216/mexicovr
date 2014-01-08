
		<div id="content" class="purchase">
			<div class="title">
				<h1>REVIEW YOUR PURCHASE</h1>
			</div>
			<div id="contact">
				<div class="form">
					<label class="lbltitle left">Listings Options</label>
					<div class="edit right"><a href="#">Edit</a></div>
					<div class="clear"></div>
					<div class="number1"><img src="/images/num1.png" /></div>
						<div class="line-black"></div>
						<div class="left">
							<label>RENT YOUR PROPETY</label>
							<label><em>Standard:</em> <strong>FREE</strong></label>
							
						</div>
						<div class="right">
							<label>SELL YOUR PROPERTY</label>
							<label><em>Premium</em> <storng>$249.99</strong></label>
						</div>
					<div class="clear"></div>
					<label class="lbltitle left">Payment</label>
					<div class="edit right"><a href="#">Edit</a></div>
					<div class="clear"></div>
					<div class="number2"><img src="/images/num2.png" /></div>
						<div class="line-black"></div>
						<div class="left">
							<label><?php echo $advertisementData['name']; ?></label>
							<label><?php echo $advertisementData['address1']; ?></label>
							<label><?php echo $advertisementData['address2']; ?></label>
							<label><?php echo $advertisementData['city']; ?></label>
							<label><?php echo $advertisementData['state']; ?></label>
							<label><?php echo $advertisementData['zip']; ?></label>
							<label><?php echo $advertisementData['country']; ?></label>
						</div>
						<div class="right">
							<label><?php echo $advertisementData['cardType']; ?></label>
							<label><?php echo $advertisementData['creditCardNumber']; ?></label>
							<label><?php echo $advertisementData['expirationMonth'] .'-'.$advertisementData['expirationYear']; ?></label>
							<label><?php echo $advertisementData['securityCode']; ?></label>
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
				</div>
			</div>
			<div class="buttons">
				<a href="advertising-next.html"><span class="purchase"><input type="submit" class="btnPurchase my_modal_open" value="SUBMIT YOUR PURCHASE" /></span></a>
			</div>
			<div id="my_modal">
			    <div class="message">
			    	<h1>Thank you for advertising with us. <br/>A copy of your receipt<br/>will be sent to your email.</h1>
				</div>
			</div>
		</div>
		<div id="sidebar">
			<div class="area"><h1><span>area for</span><br/> advertising</h1></div>
			<div class="area"><h1><span>area for</span><br/> advertising</h1></div>
			<div class="area"><h1><span>area for</span><br/> advertising</h1></div>
		</div>