<div class="paymentTypes form">
<?php echo $this->Form->create('PaymentType', array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Add Payment Type'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('icon', array('type'=>'file'));
//		echo $this->Form->input('is_active');
//		echo $this->Form->input('Property');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Payment Types'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Properties'), array('controller' => 'properties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Property'), array('controller' => 'properties', 'action' => 'add')); ?> </li>
	</ul>
</div>
