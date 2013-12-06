<div class="propertyReviews index">
	<h2><?php echo __('Property Reviews'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('property_id'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('email_address'); ?></th>
			<th><?php echo $this->Paginator->sort('arrival'); ?></th>
			<th><?php echo $this->Paginator->sort('departure'); ?></th>
			<th><?php echo $this->Paginator->sort('review'); ?></th>
			<th><?php echo $this->Paginator->sort('rate'); ?></th>
			<th><?php echo $this->Paginator->sort('is_active'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($propertyReviews as $propertyReview): ?>
	<tr>
		<td><?php echo h($propertyReview['PropertyReview']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($propertyReview['Property']['id'], array('controller' => 'properties', 'action' => 'view', $propertyReview['Property']['id'])); ?>
		</td>
		<td><?php echo h($propertyReview['PropertyReview']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($propertyReview['PropertyReview']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($propertyReview['PropertyReview']['email_address']); ?>&nbsp;</td>
		<td><?php echo h($propertyReview['PropertyReview']['arrival']); ?>&nbsp;</td>
		<td><?php echo h($propertyReview['PropertyReview']['departure']); ?>&nbsp;</td>
		<td><?php echo h($propertyReview['PropertyReview']['review']); ?>&nbsp;</td>
		<td><?php echo h($propertyReview['PropertyReview']['rate']); ?>&nbsp;</td>
		<td><?php echo h($propertyReview['PropertyReview']['is_active']); ?>&nbsp;</td>
		<td><?php echo h($propertyReview['PropertyReview']['created']); ?>&nbsp;</td>
		<td><?php echo h($propertyReview['PropertyReview']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $propertyReview['PropertyReview']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $propertyReview['PropertyReview']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $propertyReview['PropertyReview']['id']), null, __('Are you sure you want to delete # %s?', $propertyReview['PropertyReview']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Property Review'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Properties'), array('controller' => 'properties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Property'), array('controller' => 'properties', 'action' => 'add')); ?> </li>
	</ul>
</div>
