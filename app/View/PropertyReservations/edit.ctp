<div class="propertyReservations form">
<?php echo $this->Form->create('PropertyReservation'); ?>
	<fieldset>
		<legend><?php echo __('Edit Property Reservation'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('property_id');
		echo $this->Form->input('date');
		echo $this->Form->input('is_active');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PropertyReservation.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('PropertyReservation.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Property Reservations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Properties'), array('controller' => 'properties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Property'), array('controller' => 'properties', 'action' => 'add')); ?> </li>
	</ul>
</div>
