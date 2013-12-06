<div class="propertyPaymentTypes index">
	<h2><?php echo __('Property Payment Types'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('property_id'); ?></th>
			<th><?php echo $this->Paginator->sort('payment_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('is_active'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($propertyPaymentTypes as $propertyPaymentType): ?>
	<tr>
		<td><?php echo h($propertyPaymentType['PropertyPaymentType']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($propertyPaymentType['Property']['id'], array('controller' => 'properties', 'action' => 'view', $propertyPaymentType['Property']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($propertyPaymentType['PaymentType']['name'], array('controller' => 'payment_types', 'action' => 'view', $propertyPaymentType['PaymentType']['id'])); ?>
		</td>
		<td><?php echo h($propertyPaymentType['PropertyPaymentType']['is_active']); ?>&nbsp;</td>
		<td><?php echo h($propertyPaymentType['PropertyPaymentType']['created']); ?>&nbsp;</td>
		<td><?php echo h($propertyPaymentType['PropertyPaymentType']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $propertyPaymentType['PropertyPaymentType']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $propertyPaymentType['PropertyPaymentType']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $propertyPaymentType['PropertyPaymentType']['id']), null, __('Are you sure you want to delete # %s?', $propertyPaymentType['PropertyPaymentType']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Property Payment Type'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Properties'), array('controller' => 'properties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Property'), array('controller' => 'properties', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payment Types'), array('controller' => 'payment_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment Type'), array('controller' => 'payment_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
