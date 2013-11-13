<div class="propertyReviews view">
<h2><?php  echo __('Property Review'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($propertyReview['PropertyReview']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Property'); ?></dt>
		<dd>
			<?php echo $this->Html->link($propertyReview['Property']['id'], array('controller' => 'properties', 'action' => 'view', $propertyReview['Property']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($propertyReview['PropertyReview']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($propertyReview['PropertyReview']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email Address'); ?></dt>
		<dd>
			<?php echo h($propertyReview['PropertyReview']['email_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Arrival'); ?></dt>
		<dd>
			<?php echo h($propertyReview['PropertyReview']['arrival']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Departure'); ?></dt>
		<dd>
			<?php echo h($propertyReview['PropertyReview']['departure']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Review'); ?></dt>
		<dd>
			<?php echo h($propertyReview['PropertyReview']['review']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rate'); ?></dt>
		<dd>
			<?php echo h($propertyReview['PropertyReview']['rate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Active'); ?></dt>
		<dd>
			<?php echo h($propertyReview['PropertyReview']['is_active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($propertyReview['PropertyReview']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($propertyReview['PropertyReview']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Property Review'), array('action' => 'edit', $propertyReview['PropertyReview']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Property Review'), array('action' => 'delete', $propertyReview['PropertyReview']['id']), null, __('Are you sure you want to delete # %s?', $propertyReview['PropertyReview']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Property Reviews'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Property Review'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Properties'), array('controller' => 'properties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Property'), array('controller' => 'properties', 'action' => 'add')); ?> </li>
	</ul>
</div>
