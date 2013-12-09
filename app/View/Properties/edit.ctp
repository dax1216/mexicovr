<div class="properties form">
<?php echo $this->Form->create('Property'); ?>
	<fieldset>
		<legend><?php echo __('Edit Property'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('address1');
		echo $this->Form->input('address2');
		echo $this->Form->input('city_id');
		echo $this->Form->input('zip');
		echo $this->Form->input('state');
		echo $this->Form->input('province');
		echo $this->Form->input('description');
		echo $this->Form->input('bedrooms');
		echo $this->Form->input('bathrooms');
		echo $this->Form->input('rate');
		echo $this->Form->input('video');
		echo $this->Form->input('audio');
		echo $this->Form->input('listing_package');
		echo $this->Form->input('additional_information');
		echo $this->Form->input('listing_type');
		echo $this->Form->input('is_active');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Property.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Property.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Properties'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Cities'), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Property Activities'), array('controller' => 'property_activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Property Activity'), array('controller' => 'property_activities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Property Miscellaneous Items'), array('controller' => 'property_miscellaneous_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Property Miscellaneous Item'), array('controller' => 'property_miscellaneous_items', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Property Owner Messages'), array('controller' => 'property_owner_messages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Property Owner Message'), array('controller' => 'property_owner_messages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Property Payment Types'), array('controller' => 'property_payment_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Property Payment Type'), array('controller' => 'property_payment_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Property Photos'), array('controller' => 'property_photos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Property Photo'), array('controller' => 'property_photos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Property Rates'), array('controller' => 'property_rates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Property Rate'), array('controller' => 'property_rates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Property Reservations'), array('controller' => 'property_reservations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Property Reservation'), array('controller' => 'property_reservations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Property Reviews'), array('controller' => 'property_reviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Property Review'), array('controller' => 'property_reviews', 'action' => 'add')); ?> </li>
	</ul>
</div>
