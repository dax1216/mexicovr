<div id="content" class="property">
			<div class="title">
				<h1>Choose your Listing</h1>
				<div class="line"></div>
			</div>
			<?php if(isset($authUser['account_type']) && $authUser['account_type']=='renter'){ ?>
                            <div class="rent">
                                    <h1>Property for Rent?</h1>
                                    <ul>
                                            <li>
                                                    <a href="<?php echo $this->webroot; ?>properties/address/<?php echo "for-rent-standard" ?>"> <img src="<?php echo $this->webroot; ?>images/standard.jpg" /> </a>
                                                    <div class="price"><h3>FREE</h3></div>
                                            </li>
                                            <li>
                                                    <a href="<?php echo $this->webroot; ?>properties/address/<?php echo "for-rent-premium" ?>"><img src="<?php echo $this->webroot; ?>images/premium.png" /></a>
                                                    <div class="price"><h3>$99.99</h3></div>
                                            </li>
                                            <li>
                                                    <a href="<?php echo $this->webroot; ?>properties/address/<?php echo "for-rent-plus" ?>"><img src="<?php echo $this->webroot; ?>images/plus.jpg" /></a>
                                                    <div class="price"><h3>$149.99</h3></div>
                                            </li>
                                    </ul>
                            </div>
                            <div class="clear"></div>
                        <?php }else{ ?>
<!--			<div class="line-property"></div>-->
			<div class="rent">
				<h1>Property for Sale?</h1>
				<ul>
					<li>
						<a href="<?php echo $this->webroot; ?>properties/address/<?php echo "for-sale-standard" ?>"><img src="<?php echo $this->webroot; ?>images/standard.jpg" /></a>
						<div class="price"><h3>$199.99</h3></div>
					</li>
					<li>
						<a href="<?php echo $this->webroot; ?>properties/address/<?php echo "for-sale-premium" ?>"><img src="<?php echo $this->webroot; ?>images/premium.png" /></a>
						<div class="price"><h3>$299.99</h3></div>
					</li>
					<li>
						<a href="<?php echo $this->webroot; ?>properties/address/<?php echo "for-sale-plus" ?>"><img src="<?php echo $this->webroot; ?>images/plus.jpg" /></a>
						<div class="price"><h3>$349.99</h3></div>
					</li>
				</ul>
			</div>
                        <div class="clear"></div>
                        <?php } ?>
		</div>