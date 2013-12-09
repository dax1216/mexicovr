<div class="miscellaneousItems form">
<?php echo $this->Form->create('MiscellaneousItem'); ?>
	<fieldset>
		<legend><?php echo __('Add Miscellaneous Item'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('icon');
		echo $this->Form->input('is_active');
		echo $this->Form->input('Property');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Miscellaneous Items'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Properties'), array('controller' => 'properties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Property'), array('controller' => 'properties', 'action' => 'add')); ?> </li>
	</ul>
</div>
