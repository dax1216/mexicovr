<div class="reservations view">
<h2><?php  echo __('Reservation'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($reservation['Reservation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Property'); ?></dt>
		<dd>
			<?php echo $this->Html->link($reservation['Property']['id'], array('controller' => 'properties', 'action' => 'view', $reservation['Property']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($reservation['Reservation']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Active'); ?></dt>
		<dd>
			<?php echo h($reservation['Reservation']['is_active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($reservation['Reservation']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($reservation['Reservation']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Reservation'), array('action' => 'edit', $reservation['Reservation']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Reservation'), array('action' => 'delete', $reservation['Reservation']['id']), null, __('Are you sure you want to delete # %s?', $reservation['Reservation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Reservations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reservation'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Properties'), array('controller' => 'properties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Property'), array('controller' => 'properties', 'action' => 'add')); ?> </li>
	</ul>
</div>
