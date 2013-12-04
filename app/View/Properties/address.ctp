	<div id="content">
			<div id="contact" class="members address">
				<h1 class="title">Your Property Address</h1>
				<div class="line"></div>
				<div class="form">
					<p>Your address will remain completely confidential, will not be displayed to the public, and will only show on the map upon your approval. If you wish not to disclose your address, please skip this step and click Next to proceed.</p>
					<form action="">
						<div class="left">
							<label>Address 1</label>
							<input type="text" />
							<label>City</label>
							<input type="text" class="city"/>
							<label>State / Province</label>
							<input type="text" class="state" /><input type="text" class="province"/>
						</div>
						<div class="right">
							<label>Address 2</label>
							<input type="text" />
							<label>Zip</label>
							<input type="text" class="city"/>
						</div>
						<div class="clear"></div>
						<div class="map">
							<label>( This information would show on google earth)</label>
							<img src="<?php echo $this->webroot; ?>images/map.jpg" />
						</div>
						<div class="buttons">
							<span class="back"><input type="submit" class="btnback" value="BACK" /></span>
							<span class="next"><input type="submit" class="btnnext" value="NEXT" /></span>
						</div>
						<div class="clear"></div>
					</form>

				</div>
			</div>

		</div>