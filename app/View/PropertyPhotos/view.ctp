<div class="propertyPhotos view">
<h2><?php  echo __('Property Photo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($propertyPhoto['PropertyPhoto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Property'); ?></dt>
		<dd>
			<?php echo $this->Html->link($propertyPhoto['Property']['id'], array('controller' => 'properties', 'action' => 'view', $propertyPhoto['Property']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo'); ?></dt>
		<dd>
			<?php echo h($propertyPhoto['PropertyPhoto']['photo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($propertyPhoto['PropertyPhoto']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($propertyPhoto['PropertyPhoto']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Property Photo'), array('action' => 'edit', $propertyPhoto['PropertyPhoto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Property Photo'), array('action' => 'delete', $propertyPhoto['PropertyPhoto']['id']), null, __('Are you sure you want to delete # %s?', $propertyPhoto['PropertyPhoto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Property Photos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Property Photo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Properties'), array('controller' => 'properties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Property'), array('controller' => 'properties', 'action' => 'add')); ?> </li>
	</ul>
</div>
