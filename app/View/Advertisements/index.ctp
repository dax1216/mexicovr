<div class="advertisements index">
	<h2><?php echo __('Advertisements'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('image'); ?></th>
			<th><?php echo $this->Paginator->sort('description1'); ?></th>
			<th><?php echo $this->Paginator->sort('description2'); ?></th>
			<th><?php echo $this->Paginator->sort('is_active'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('update'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($advertisements as $advertisement): ?>
	<tr>
		<td><?php echo h($advertisement['Advertisement']['id']); ?>&nbsp;</td>
		<td><?php echo h($advertisement['Advertisement']['title']); ?>&nbsp;</td>
		<td><?php echo h($advertisement['Advertisement']['image']); ?>&nbsp;</td>
		<td><?php echo h($advertisement['Advertisement']['description1']); ?>&nbsp;</td>
		<td><?php echo h($advertisement['Advertisement']['description2']); ?>&nbsp;</td>
		<td><?php echo h($advertisement['Advertisement']['is_active']); ?>&nbsp;</td>
		<td><?php echo h($advertisement['Advertisement']['created']); ?>&nbsp;</td>
		<td><?php echo h($advertisement['Advertisement']['update']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $advertisement['Advertisement']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $advertisement['Advertisement']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $advertisement['Advertisement']['id']), null, __('Are you sure you want to delete # %s?', $advertisement['Advertisement']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Advertisement'), array('action' => 'add')); ?></li>
	</ul>
</div>
