		<div id="content" class="features premium">
			<div class="title">
				<h1>Advertising</h1>
				<div class="line"></div>
			</div>
			<div class="left">
				<h1 class="title">Premium</h1>
					<div class="boxs">
						<?php echo $this->Form->create('Advertisement', array('type' => 'file', 'action' => 'advertising_advertise')); ?>
							<div class="lines"></div>
							<div class="text">
								<?php echo $this->Form->input('title', array('value' => 'title', 'label' => false)); ?>
							</div>
							<div class="lines"></div>
							<div class="images">
								<?php echo $this->Form->input('image', array('value' => 'DOWNLOAD IMAGE', 'type' => 'file', 'label' => false)) ?>
							</div>
							<div class="lines"></div>
							<div class="text">
								<?php echo $this->Form->input('description1', array('type' => 'textarea', 'class' => 'area', 'value' => 'description 1', 'label' => false)); ?>
								<div class="lines"></div>
								<?php echo $this->Form->textarea('propertyAddress', array('type' => 'textarea', 'class' => 'area', 'value' => 'property address', 'label' => false)); ?>
								<div class="lines"></div>
							</div>
							<div class="text">
								<?php echo $this->Form->input('description2', array('type' => 'textarea', 'class' => 'area', 'value' => 'description 2', 'label' => false)); ?>
								<div class="lines"></div>
							</div>
							<div class="text">
								<?php echo $this->Form->input('propertyContact', array('value' => 'property contact', 'label' => false)); ?>
								<div class="lines"></div>
							</div>
							<div class="text">
								<?php echo $this->Form->input('propertyPrice', array('value' => 'property price', 'type' => 'text', 'label' => false)); ?>
						</div>
					</div>
					<?php echo $this->Form->end(); ?>
				<div class="button">
					<span class="sub"><input type="submit" id="submitAdvertisement" value="NEXT" class="btnPre"/></span>
				</div>
			</div>

			<div class="right">
				<div id="content">
					<div class="title">
						<h1>Features</h1>
					</div>
					<div class="white">
						<div class="scroll">
							<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<script type="text/javascript">
		jQuery("#submitAdvertisement").click(function()
											 {
											  jQuery("#AdvertisementAdvertisingAdvertiseForm").submit();
											 }
										    );
		</script>