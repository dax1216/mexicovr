<div class="propertyMiscellaneousItems view">
<h2><?php  echo __('Property Miscellaneous Item'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($propertyMiscellaneousItem['PropertyMiscellaneousItem']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Property'); ?></dt>
		<dd>
			<?php echo $this->Html->link($propertyMiscellaneousItem['Property']['id'], array('controller' => 'properties', 'action' => 'view', $propertyMiscellaneousItem['Property']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Miscellaneous Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($propertyMiscellaneousItem['MiscellaneousItem']['name'], array('controller' => 'miscellaneous_items', 'action' => 'view', $propertyMiscellaneousItem['MiscellaneousItem']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Active'); ?></dt>
		<dd>
			<?php echo h($propertyMiscellaneousItem['PropertyMiscellaneousItem']['is_active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($propertyMiscellaneousItem['PropertyMiscellaneousItem']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($propertyMiscellaneousItem['PropertyMiscellaneousItem']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Property Miscellaneous Item'), array('action' => 'edit', $propertyMiscellaneousItem['PropertyMiscellaneousItem']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Property Miscellaneous Item'), array('action' => 'delete', $propertyMiscellaneousItem['PropertyMiscellaneousItem']['id']), null, __('Are you sure you want to delete # %s?', $propertyMiscellaneousItem['PropertyMiscellaneousItem']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Property Miscellaneous Items'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Property Miscellaneous Item'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Properties'), array('controller' => 'properties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Property'), array('controller' => 'properties', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Miscellaneous Items'), array('controller' => 'miscellaneous_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Miscellaneous Item'), array('controller' => 'miscellaneous_items', 'action' => 'add')); ?> </li>
	</ul>
</div>
