<div class="propertyReservations view">
<h2><?php  echo __('Property Reservation'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($propertyReservation['PropertyReservation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Property'); ?></dt>
		<dd>
			<?php echo $this->Html->link($propertyReservation['Property']['id'], array('controller' => 'properties', 'action' => 'view', $propertyReservation['Property']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($propertyReservation['PropertyReservation']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Active'); ?></dt>
		<dd>
			<?php echo h($propertyReservation['PropertyReservation']['is_active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($propertyReservation['PropertyReservation']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($propertyReservation['PropertyReservation']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Property Reservation'), array('action' => 'edit', $propertyReservation['PropertyReservation']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Property Reservation'), array('action' => 'delete', $propertyReservation['PropertyReservation']['id']), null, __('Are you sure you want to delete # %s?', $propertyReservation['PropertyReservation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Property Reservations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Property Reservation'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Properties'), array('controller' => 'properties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Property'), array('controller' => 'properties', 'action' => 'add')); ?> </li>
	</ul>
</div>
