<div class="propertyReviews form">
<?php echo $this->Form->create('PropertyReview'); ?>
	<fieldset>
		<legend><?php echo __('Edit Property Review'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('property_id');
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('email_address');
		echo $this->Form->input('arrival');
		echo $this->Form->input('departure');
		echo $this->Form->input('review');
		echo $this->Form->input('rate');
		echo $this->Form->input('is_active');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PropertyReview.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('PropertyReview.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Property Reviews'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Properties'), array('controller' => 'properties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Property'), array('controller' => 'properties', 'action' => 'add')); ?> </li>
	</ul>
</div>
