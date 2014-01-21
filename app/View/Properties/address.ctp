	<div id="content">
			<div id="contact" class="members address">
				<h1 class="title">Your Property Address</h1>
				<div class="line"></div>
				<div class="form">
					<p>Your address will remain completely confidential, will not be displayed to the public, and will only show on the map upon your approval. If you wish not to disclose your address, please skip this step and click Next to proceed.</p>

                                   
                                           <?php echo $this->Form->create('Property', array('action' => 'address')); ?>
                                                        <?php echo $this->Form->hidden('package', array('value'=>$package, 'label' => false, 'div' => false)); ?>
						<div class="left">
							<label>Address 1</label>
					
                                                          <?php echo $this->Form->input('address1', array('tabindex'=>'1', 'label' => false, 'div' => false, 'value'=>isset($sess_address['address1'])?$sess_address['address1']:'')); ?>
                                                        
							<label>City</label>
							
                                                          <?php echo $this->Form->input('city', array('tabindex'=>'3','class' => 'city','label' => false, 'div' => false, 'value'=>isset($sess_address['city'])?$sess_address['city']:'')); ?>
                                                        
							<label>State / Province</label>
							
                                                          <?php echo $this->Form->input('state', array('class' => 'state','label' => false, 'div' => false, 'value'=>isset($sess_address['state'])?$sess_address['state']:'')); ?>
                                                   
                                                          <?php echo $this->Form->input('province', array('class' => 'province','label' => false, 'div' => false, 'value'=>isset($sess_address['province'])?$sess_address['province']:'')); ?>
						</div>
						<div class="right">
							<label>Address 2</label>
							<?php echo $this->Form->input('address2', array('tabindex'=>'2','label' => false, 'div' => false, 'value'=>isset($sess_address['address2'])?$sess_address['address2']:'')); ?>
							<label>Zip</label>
							<?php echo $this->Form->input('zip', array('tabindex'=>'4','label' => false, 'div' => false, 'value'=>isset($sess_address['zip'])?$sess_address['zip']:'')); ?>
						</div>
						<div class="clear"></div>
						<div class="map">
							<label>( This information would show on google earth)</label>
							<img src="<?php echo $this->webroot; ?>images/map.jpg" />
						</div>
						<div class="buttons">
							
							<span class="next"><input type="submit" class="btnnext" value="NEXT >>" /></span>
						</div>
						<div class="clear"></div>
                                                
					  <?php echo $this->Form->end(); ?>

				</div>
			</div>

		</div>