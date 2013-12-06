<div class="propertyMiscellaneousItems index">
	<h2><?php echo __('Property Miscellaneous Items'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('property_id'); ?></th>
			<th><?php echo $this->Paginator->sort('miscellaneous_item_id'); ?></th>
			<th><?php echo $this->Paginator->sort('is_active'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($propertyMiscellaneousItems as $propertyMiscellaneousItem): ?>
	<tr>
		<td><?php echo h($propertyMiscellaneousItem['PropertyMiscellaneousItem']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($propertyMiscellaneousItem['Property']['id'], array('controller' => 'properties', 'action' => 'view', $propertyMiscellaneousItem['Property']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($propertyMiscellaneousItem['MiscellaneousItem']['name'], array('controller' => 'miscellaneous_items', 'action' => 'view', $propertyMiscellaneousItem['MiscellaneousItem']['id'])); ?>
		</td>
		<td><?php echo h($propertyMiscellaneousItem['PropertyMiscellaneousItem']['is_active']); ?>&nbsp;</td>
		<td><?php echo h($propertyMiscellaneousItem['PropertyMiscellaneousItem']['created']); ?>&nbsp;</td>
		<td><?php echo h($propertyMiscellaneousItem['PropertyMiscellaneousItem']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $propertyMiscellaneousItem['PropertyMiscellaneousItem']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $propertyMiscellaneousItem['PropertyMiscellaneousItem']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $propertyMiscellaneousItem['PropertyMiscellaneousItem']['id']), null, __('Are you sure you want to delete # %s?', $propertyMiscellaneousItem['PropertyMiscellaneousItem']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Property Miscellaneous Item'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Properties'), array('controller' => 'properties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Property'), array('controller' => 'properties', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Miscellaneous Items'), array('controller' => 'miscellaneous_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Miscellaneous Item'), array('controller' => 'miscellaneous_items', 'action' => 'add')); ?> </li>
	</ul>
</div>
