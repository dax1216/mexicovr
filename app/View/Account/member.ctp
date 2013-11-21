<script type="text/javascript">

  jQuery(document).ready(function() {
      jQuery.noConflict();
  		jQuery('#my_modal').popup();

      	jQuery('.btnSub').click(function(){
  	 		window.setTimeout(function() {
			    window.location.href = 'index.html';
			}, 3000);
  	 	});
  });
</script>



 <div id="content">
			<div id="contact" class="members">
				<h1 class="title">Login</h1>
				<div class="line"></div>
				<div class="form">
					<?php echo $this->Form->create('User', array('class' => 'form-signin'));?>
						<div class="left">
							<label>Email Address</label>
							 <?php echo $this->Form->input('email_address', array('label' => false)); ?>
							<label>Password</label>
							    <?php echo $this->Form->input('password', array('label' => false)); ?>
                                                        <span class="forgot"><a href="/account/forgot_password/">Forgot your password?</a></span>
							<div class="radio">
								<input type="radio" name="title" value="Renter" id="renter" checked="checked" />RENTER<br/>
								<input type="radio" name="title" value="Seller" id="seller" />SELLER
							</div>
							<div class="buttons">
								<span class="next"><input type="submit" class="btnnext my_modal_open" value="LOGIN" /></span>
							</div>
							<div class="clear"></div>
						</div>
					<?php echo $this->Form->end();?>
                                    <div id="my_modal" style="visibility: hidden">
					    <div class="message">
					    	<h1>Your message has been sent. <br/>One of our agents will contact you<br/>within 5 business days.</h1>
						</div>
					</div>
				</div>
			</div>

		</div>
