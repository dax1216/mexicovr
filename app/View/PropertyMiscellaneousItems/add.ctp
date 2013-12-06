<div class="propertyMiscellaneousItems form">
<?php echo $this->Form->create('PropertyMiscellaneousItem'); ?>
	<fieldset>
		<legend><?php echo __('Add Property Miscellaneous Item'); ?></legend>
	<?php
		echo $this->Form->input('property_id');
		echo $this->Form->input('miscellaneous_item_id');
		echo $this->Form->input('is_active');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Property Miscellaneous Items'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Properties'), array('controller' => 'properties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Property'), array('controller' => 'properties', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Miscellaneous Items'), array('controller' => 'miscellaneous_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Miscellaneous Item'), array('controller' => 'miscellaneous_items', 'action' => 'add')); ?> </li>
	</ul>
</div>
