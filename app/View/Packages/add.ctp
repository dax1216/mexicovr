<div class="packages form">
<?php echo $this->Form->create('Package'); ?>
	<fieldset>
		<legend><?php echo __('Add Package'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('photo_limit');
		echo $this->Form->input('is_audio_enabled');
		echo $this->Form->input('is_video_enabled');
		echo $this->Form->input('is_active');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Packages'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Properties'), array('controller' => 'properties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Property'), array('controller' => 'properties', 'action' => 'add')); ?> </li>
	</ul>
</div>
