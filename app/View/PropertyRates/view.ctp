<div class="propertyRates view">
<h2><?php  echo __('Property Rate'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($propertyRate['PropertyRate']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Property'); ?></dt>
		<dd>
			<?php echo $this->Html->link($propertyRate['Property']['id'], array('controller' => 'properties', 'action' => 'view', $propertyRate['Property']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($propertyRate['PropertyRate']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Season Id'); ?></dt>
		<dd>
			<?php echo h($propertyRate['PropertyRate']['season_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('From'); ?></dt>
		<dd>
			<?php echo h($propertyRate['PropertyRate']['from']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('To'); ?></dt>
		<dd>
			<?php echo h($propertyRate['PropertyRate']['to']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Night Rate'); ?></dt>
		<dd>
			<?php echo h($propertyRate['PropertyRate']['night_rate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Week Rate'); ?></dt>
		<dd>
			<?php echo h($propertyRate['PropertyRate']['week_rate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Month Rate'); ?></dt>
		<dd>
			<?php echo h($propertyRate['PropertyRate']['month_rate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($propertyRate['PropertyRate']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($propertyRate['PropertyRate']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Property Rate'), array('action' => 'edit', $propertyRate['PropertyRate']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Property Rate'), array('action' => 'delete', $propertyRate['PropertyRate']['id']), null, __('Are you sure you want to delete # %s?', $propertyRate['PropertyRate']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Property Rates'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Property Rate'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Properties'), array('controller' => 'properties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Property'), array('controller' => 'properties', 'action' => 'add')); ?> </li>
	</ul>
</div>
