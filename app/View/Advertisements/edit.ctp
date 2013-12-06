<div class="advertisements form">
<?php echo $this->Form->create('Advertisement'); ?>
	<fieldset>
		<legend><?php echo __('Edit Advertisement'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('image');
		echo $this->Form->input('description1');
		echo $this->Form->input('description2');
		echo $this->Form->input('is_active');
		echo $this->Form->input('update');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Advertisement.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Advertisement.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Advertisements'), array('action' => 'index')); ?></li>
	</ul>
</div>
