<div class="advertisements view" id="content">
	<h2>
		<?php  echo __('Advertisement'); ?>
	</h2>
	<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
				<li><?php echo $this->Html->link(__('Edit Advertisement'), array('action' => 'edit', $advertisement['Advertisement']['id'])); ?> </li>
				<li><?php echo $this->Form->postLink(__('Delete Advertisement'), array('action' => 'delete', $advertisement['Advertisement']['id']), null, __('Are you sure you want to delete # %s?', $advertisement['Advertisement']['id'])); ?> </li>
				<li><?php echo $this->Html->link(__('List Advertisements'), array('action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Advertisement'), array('action' => 'add')); ?> </li>
			</ul>
	</div>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($advertisement['Advertisement']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($advertisement['Advertisement']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php echo h($advertisement['Advertisement']['image']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description1'); ?></dt>
		<dd>
			<?php echo h($advertisement['Advertisement']['description1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description2'); ?></dt>
		<dd>
			<?php echo h($advertisement['Advertisement']['description2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Active'); ?></dt>
		<dd>
			<?php echo h($advertisement['Advertisement']['is_active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($advertisement['Advertisement']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Update'); ?></dt>
		<dd>
			<?php echo h($advertisement['Advertisement']['update']); ?>
			&nbsp;
		</dd>
	</dl>
</div>