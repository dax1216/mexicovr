<div class="propertyActivities index">
	<h2><?php echo __('Property Activities'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('property_id'); ?></th>
			<th><?php echo $this->Paginator->sort('activity_id'); ?></th>
			<th><?php echo $this->Paginator->sort('is_active'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($propertyActivities as $propertyActivity): ?>
	<tr>
		<td><?php echo h($propertyActivity['PropertyActivity']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($propertyActivity['Property']['id'], array('controller' => 'properties', 'action' => 'view', $propertyActivity['Property']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($propertyActivity['Activity']['name'], array('controller' => 'activities', 'action' => 'view', $propertyActivity['Activity']['id'])); ?>
		</td>
		<td><?php echo h($propertyActivity['PropertyActivity']['is_active']); ?>&nbsp;</td>
		<td><?php echo h($propertyActivity['PropertyActivity']['created']); ?>&nbsp;</td>
		<td><?php echo h($propertyActivity['PropertyActivity']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $propertyActivity['PropertyActivity']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $propertyActivity['PropertyActivity']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $propertyActivity['PropertyActivity']['id']), null, __('Are you sure you want to delete # %s?', $propertyActivity['PropertyActivity']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Property Activity'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Properties'), array('controller' => 'properties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Property'), array('controller' => 'properties', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Activities'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activity'), array('controller' => 'activities', 'action' => 'add')); ?> </li>
	</ul>
</div>
