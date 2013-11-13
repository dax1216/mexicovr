<div class="advertisements form">
<?php echo $this->Form->create('Advertisement', array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Add Advertisement'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('image', array('type'=>'file'));
		echo $this->Form->input('description1');
		echo $this->Form->input('description2');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

