<div class="reviews view">
<h2><?php  echo __('Review'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($review['Review']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Property'); ?></dt>
		<dd>
			<?php echo $this->Html->link($review['Property']['id'], array('controller' => 'properties', 'action' => 'view', $review['Property']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($review['Review']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($review['Review']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email Address'); ?></dt>
		<dd>
			<?php echo h($review['Review']['email_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Arrival'); ?></dt>
		<dd>
			<?php echo h($review['Review']['arrival']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Departure'); ?></dt>
		<dd>
			<?php echo h($review['Review']['departure']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Review'); ?></dt>
		<dd>
			<?php echo h($review['Review']['review']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rate'); ?></dt>
		<dd>
			<?php echo h($review['Review']['rate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Active'); ?></dt>
		<dd>
			<?php echo h($review['Review']['is_active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($review['Review']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($review['Review']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Review'), array('action' => 'edit', $review['Review']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Review'), array('action' => 'delete', $review['Review']['id']), null, __('Are you sure you want to delete # %s?', $review['Review']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Reviews'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Review'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Properties'), array('controller' => 'properties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Property'), array('controller' => 'properties', 'action' => 'add')); ?> </li>
	</ul>
</div>
