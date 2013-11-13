<div class="propertyRates form">
<?php echo $this->Form->create('PropertyRate'); ?>
	<fieldset>
		<legend><?php echo __('Add Property Rate'); ?></legend>
	<?php
		echo $this->Form->input('property_id');
		echo $this->Form->input('price');
		echo $this->Form->input('season_id');
		echo $this->Form->input('from');
		echo $this->Form->input('to');
		echo $this->Form->input('night_rate');
		echo $this->Form->input('week_rate');
		echo $this->Form->input('month_rate');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Property Rates'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Properties'), array('controller' => 'properties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Property'), array('controller' => 'properties', 'action' => 'add')); ?> </li>
	</ul>
</div>
