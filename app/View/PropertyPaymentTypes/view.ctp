<div class="propertyPaymentTypes view">
<h2><?php  echo __('Property Payment Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($propertyPaymentType['PropertyPaymentType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Property'); ?></dt>
		<dd>
			<?php echo $this->Html->link($propertyPaymentType['Property']['id'], array('controller' => 'properties', 'action' => 'view', $propertyPaymentType['Property']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payment Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($propertyPaymentType['PaymentType']['name'], array('controller' => 'payment_types', 'action' => 'view', $propertyPaymentType['PaymentType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Active'); ?></dt>
		<dd>
			<?php echo h($propertyPaymentType['PropertyPaymentType']['is_active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($propertyPaymentType['PropertyPaymentType']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($propertyPaymentType['PropertyPaymentType']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Property Payment Type'), array('action' => 'edit', $propertyPaymentType['PropertyPaymentType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Property Payment Type'), array('action' => 'delete', $propertyPaymentType['PropertyPaymentType']['id']), null, __('Are you sure you want to delete # %s?', $propertyPaymentType['PropertyPaymentType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Property Payment Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Property Payment Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Properties'), array('controller' => 'properties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Property'), array('controller' => 'properties', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payment Types'), array('controller' => 'payment_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment Type'), array('controller' => 'payment_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
