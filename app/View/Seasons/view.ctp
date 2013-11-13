<div class="seasons view">
<h2><?php  echo __('Season'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($season['Season']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($season['Season']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Active'); ?></dt>
		<dd>
			<?php echo h($season['Season']['is_active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($season['Season']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($season['Season']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Season'), array('action' => 'edit', $season['Season']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Season'), array('action' => 'delete', $season['Season']['id']), null, __('Are you sure you want to delete # %s?', $season['Season']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Seasons'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Season'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Property Rates'), array('controller' => 'property_rates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Property Rate'), array('controller' => 'property_rates', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Property Rates'); ?></h3>
	<?php if (!empty($season['PropertyRate'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Property Id'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Season Id'); ?></th>
		<th><?php echo __('From'); ?></th>
		<th><?php echo __('To'); ?></th>
		<th><?php echo __('Night Rate'); ?></th>
		<th><?php echo __('Week Rate'); ?></th>
		<th><?php echo __('Month Rate'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($season['PropertyRate'] as $propertyRate): ?>
		<tr>
			<td><?php echo $propertyRate['id']; ?></td>
			<td><?php echo $propertyRate['property_id']; ?></td>
			<td><?php echo $propertyRate['price']; ?></td>
			<td><?php echo $propertyRate['season_id']; ?></td>
			<td><?php echo $propertyRate['from']; ?></td>
			<td><?php echo $propertyRate['to']; ?></td>
			<td><?php echo $propertyRate['night_rate']; ?></td>
			<td><?php echo $propertyRate['week_rate']; ?></td>
			<td><?php echo $propertyRate['month_rate']; ?></td>
			<td><?php echo $propertyRate['created']; ?></td>
			<td><?php echo $propertyRate['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'property_rates', 'action' => 'view', $propertyRate['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'property_rates', 'action' => 'edit', $propertyRate['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'property_rates', 'action' => 'delete', $propertyRate['id']), null, __('Are you sure you want to delete # %s?', $propertyRate['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Property Rate'), array('controller' => 'property_rates', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
