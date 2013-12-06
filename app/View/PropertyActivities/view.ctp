<div class="propertyActivities view">
<h2><?php  echo __('Property Activity'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($propertyActivity['PropertyActivity']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Property'); ?></dt>
		<dd>
			<?php echo $this->Html->link($propertyActivity['Property']['id'], array('controller' => 'properties', 'action' => 'view', $propertyActivity['Property']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activity'); ?></dt>
		<dd>
			<?php echo $this->Html->link($propertyActivity['Activity']['name'], array('controller' => 'activities', 'action' => 'view', $propertyActivity['Activity']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Active'); ?></dt>
		<dd>
			<?php echo h($propertyActivity['PropertyActivity']['is_active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($propertyActivity['PropertyActivity']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($propertyActivity['PropertyActivity']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Property Activity'), array('action' => 'edit', $propertyActivity['PropertyActivity']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Property Activity'), array('action' => 'delete', $propertyActivity['PropertyActivity']['id']), null, __('Are you sure you want to delete # %s?', $propertyActivity['PropertyActivity']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Property Activities'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Property Activity'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Properties'), array('controller' => 'properties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Property'), array('controller' => 'properties', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Activities'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activity'), array('controller' => 'activities', 'action' => 'add')); ?> </li>
	</ul>
</div>
