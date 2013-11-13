<div class="miscellaneousItems view">
<h2><?php  echo __('Miscellaneous Item'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($miscellaneousItem['MiscellaneousItem']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($miscellaneousItem['MiscellaneousItem']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Icon'); ?></dt>
		<dd>
			<?php echo h($miscellaneousItem['MiscellaneousItem']['icon']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Active'); ?></dt>
		<dd>
			<?php echo h($miscellaneousItem['MiscellaneousItem']['is_active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($miscellaneousItem['MiscellaneousItem']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($miscellaneousItem['MiscellaneousItem']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Miscellaneous Item'), array('action' => 'edit', $miscellaneousItem['MiscellaneousItem']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Miscellaneous Item'), array('action' => 'delete', $miscellaneousItem['MiscellaneousItem']['id']), null, __('Are you sure you want to delete # %s?', $miscellaneousItem['MiscellaneousItem']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Miscellaneous Items'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Miscellaneous Item'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Properties'), array('controller' => 'properties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Property'), array('controller' => 'properties', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Properties'); ?></h3>
	<?php if (!empty($miscellaneousItem['Property'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Address1'); ?></th>
		<th><?php echo __('Address2'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th><?php echo __('Zip'); ?></th>
		<th><?php echo __('State'); ?></th>
		<th><?php echo __('Province'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Bedrooms'); ?></th>
		<th><?php echo __('Bathrooms'); ?></th>
		<th><?php echo __('Rate'); ?></th>
		<th><?php echo __('Video'); ?></th>
		<th><?php echo __('Audio'); ?></th>
		<th><?php echo __('Package Id'); ?></th>
		<th><?php echo __('Additional Information'); ?></th>
		<th><?php echo __('Listing Type'); ?></th>
		<th><?php echo __('Is Active'); ?></th>
		<th><?php echo __('Is Deleted'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($miscellaneousItem['Property'] as $property): ?>
		<tr>
			<td><?php echo $property['id']; ?></td>
			<td><?php echo $property['user_id']; ?></td>
			<td><?php echo $property['address1']; ?></td>
			<td><?php echo $property['address2']; ?></td>
			<td><?php echo $property['city']; ?></td>
			<td><?php echo $property['zip']; ?></td>
			<td><?php echo $property['state']; ?></td>
			<td><?php echo $property['province']; ?></td>
			<td><?php echo $property['description']; ?></td>
			<td><?php echo $property['bedrooms']; ?></td>
			<td><?php echo $property['bathrooms']; ?></td>
			<td><?php echo $property['rate']; ?></td>
			<td><?php echo $property['video']; ?></td>
			<td><?php echo $property['audio']; ?></td>
			<td><?php echo $property['package_id']; ?></td>
			<td><?php echo $property['additional_information']; ?></td>
			<td><?php echo $property['listing_type']; ?></td>
			<td><?php echo $property['is_active']; ?></td>
			<td><?php echo $property['is_deleted']; ?></td>
			<td><?php echo $property['created']; ?></td>
			<td><?php echo $property['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'properties', 'action' => 'view', $property['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'properties', 'action' => 'edit', $property['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'properties', 'action' => 'delete', $property['id']), null, __('Are you sure you want to delete # %s?', $property['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Property'), array('controller' => 'properties', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
