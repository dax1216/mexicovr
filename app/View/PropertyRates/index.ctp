<div class="propertyRates index">
	<h2><?php echo __('Property Rates'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('property_id'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th><?php echo $this->Paginator->sort('season_id'); ?></th>
			<th><?php echo $this->Paginator->sort('from'); ?></th>
			<th><?php echo $this->Paginator->sort('to'); ?></th>
			<th><?php echo $this->Paginator->sort('night_rate'); ?></th>
			<th><?php echo $this->Paginator->sort('week_rate'); ?></th>
			<th><?php echo $this->Paginator->sort('month_rate'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($propertyRates as $propertyRate): ?>
	<tr>
		<td><?php echo h($propertyRate['PropertyRate']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($propertyRate['Property']['id'], array('controller' => 'properties', 'action' => 'view', $propertyRate['Property']['id'])); ?>
		</td>
		<td><?php echo h($propertyRate['PropertyRate']['price']); ?>&nbsp;</td>
		<td><?php echo h($propertyRate['PropertyRate']['season_id']); ?>&nbsp;</td>
		<td><?php echo h($propertyRate['PropertyRate']['from']); ?>&nbsp;</td>
		<td><?php echo h($propertyRate['PropertyRate']['to']); ?>&nbsp;</td>
		<td><?php echo h($propertyRate['PropertyRate']['night_rate']); ?>&nbsp;</td>
		<td><?php echo h($propertyRate['PropertyRate']['week_rate']); ?>&nbsp;</td>
		<td><?php echo h($propertyRate['PropertyRate']['month_rate']); ?>&nbsp;</td>
		<td><?php echo h($propertyRate['PropertyRate']['created']); ?>&nbsp;</td>
		<td><?php echo h($propertyRate['PropertyRate']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $propertyRate['PropertyRate']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $propertyRate['PropertyRate']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $propertyRate['PropertyRate']['id']), null, __('Are you sure you want to delete # %s?', $propertyRate['PropertyRate']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Property Rate'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Properties'), array('controller' => 'properties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Property'), array('controller' => 'properties', 'action' => 'add')); ?> </li>
	</ul>
</div>
