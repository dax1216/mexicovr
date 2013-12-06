<div class="seasons form">
<?php echo $this->Form->create('Season'); ?>
	<fieldset>
		<legend><?php echo __('Edit Season'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('is_active');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Season.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Season.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Seasons'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Property Rates'), array('controller' => 'property_rates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Property Rate'), array('controller' => 'property_rates', 'action' => 'add')); ?> </li>
	</ul>
</div>
