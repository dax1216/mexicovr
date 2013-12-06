<div class="properties view">
<h2><?php  echo __('Property'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($property['Property']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address1'); ?></dt>
		<dd>
			<?php echo h($property['Property']['address1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address2'); ?></dt>
		<dd>
			<?php echo h($property['Property']['address2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo $this->Html->link($property['City']['name'], array('controller' => 'cities', 'action' => 'view', $property['City']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zip'); ?></dt>
		<dd>
			<?php echo h($property['Property']['zip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($property['Property']['state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Province'); ?></dt>
		<dd>
			<?php echo h($property['Property']['province']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($property['Property']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bedrooms'); ?></dt>
		<dd>
			<?php echo h($property['Property']['bedrooms']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bathrooms'); ?></dt>
		<dd>
			<?php echo h($property['Property']['bathrooms']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rate'); ?></dt>
		<dd>
			<?php echo h($property['Property']['rate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Video'); ?></dt>
		<dd>
			<?php echo h($property['Property']['video']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Audio'); ?></dt>
		<dd>
			<?php echo h($property['Property']['audio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Listing Package'); ?></dt>
		<dd>
			<?php echo h($property['Property']['listing_package']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Additional Information'); ?></dt>
		<dd>
			<?php echo h($property['Property']['additional_information']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Listing Type'); ?></dt>
		<dd>
			<?php echo h($property['Property']['listing_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Active'); ?></dt>
		<dd>
			<?php echo h($property['Property']['is_active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($property['Property']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($property['Property']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Property'), array('action' => 'edit', $property['Property']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Property'), array('action' => 'delete', $property['Property']['id']), null, __('Are you sure you want to delete # %s?', $property['Property']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Properties'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Property'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Property Activities'); ?></h3>
	<?php if (!empty($property['PropertyActivity'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Property Id'); ?></th>
		<th><?php echo __('Activity Id'); ?></th>
		<th><?php echo __('Is Active'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($property['PropertyActivity'] as $propertyActivity): ?>
		<tr>
			<td><?php echo $propertyActivity['id']; ?></td>
			<td><?php echo $propertyActivity['property_id']; ?></td>
			<td><?php echo $propertyActivity['activity_id']; ?></td>
			<td><?php echo $propertyActivity['is_active']; ?></td>
			<td><?php echo $propertyActivity['created']; ?></td>
			<td><?php echo $propertyActivity['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'property_activities', 'action' => 'view', $propertyActivity['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'property_activities', 'action' => 'edit', $propertyActivity['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'property_activities', 'action' => 'delete', $propertyActivity['id']), null, __('Are you sure you want to delete # %s?', $propertyActivity['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Property Activity'), array('controller' => 'property_activities', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Property Miscellaneous Items'); ?></h3>
	<?php if (!empty($property['PropertyMiscellaneousItem'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Property Id'); ?></th>
		<th><?php echo __('Miscellaneous Item Id'); ?></th>
		<th><?php echo __('Is Active'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($property['PropertyMiscellaneousItem'] as $propertyMiscellaneousItem): ?>
		<tr>
			<td><?php echo $propertyMiscellaneousItem['id']; ?></td>
			<td><?php echo $propertyMiscellaneousItem['property_id']; ?></td>
			<td><?php echo $propertyMiscellaneousItem['miscellaneous_item_id']; ?></td>
			<td><?php echo $propertyMiscellaneousItem['is_active']; ?></td>
			<td><?php echo $propertyMiscellaneousItem['created']; ?></td>
			<td><?php echo $propertyMiscellaneousItem['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'property_miscellaneous_items', 'action' => 'view', $propertyMiscellaneousItem['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'property_miscellaneous_items', 'action' => 'edit', $propertyMiscellaneousItem['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'property_miscellaneous_items', 'action' => 'delete', $propertyMiscellaneousItem['id']), null, __('Are you sure you want to delete # %s?', $propertyMiscellaneousItem['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Property Miscellaneous Item'), array('controller' => 'property_miscellaneous_items', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Property Owner Messages'); ?></h3>
	<?php if (!empty($property['PropertyOwnerMessage'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Owner Id'); ?></th>
		<th><?php echo __('Property Id'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Email Address'); ?></th>
		<th><?php echo __('Home Phone'); ?></th>
		<th><?php echo __('Arrival'); ?></th>
		<th><?php echo __('Departure'); ?></th>
		<th><?php echo __('Number Of Adults'); ?></th>
		<th><?php echo __('Number Of Children'); ?></th>
		<th><?php echo __('Have Pets'); ?></th>
		<th><?php echo __('Comments Questions'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($property['PropertyOwnerMessage'] as $propertyOwnerMessage): ?>
		<tr>
			<td><?php echo $propertyOwnerMessage['id']; ?></td>
			<td><?php echo $propertyOwnerMessage['owner_id']; ?></td>
			<td><?php echo $propertyOwnerMessage['property_id']; ?></td>
			<td><?php echo $propertyOwnerMessage['first_name']; ?></td>
			<td><?php echo $propertyOwnerMessage['last_name']; ?></td>
			<td><?php echo $propertyOwnerMessage['email_address']; ?></td>
			<td><?php echo $propertyOwnerMessage['home_phone']; ?></td>
			<td><?php echo $propertyOwnerMessage['arrival']; ?></td>
			<td><?php echo $propertyOwnerMessage['departure']; ?></td>
			<td><?php echo $propertyOwnerMessage['number_of_adults']; ?></td>
			<td><?php echo $propertyOwnerMessage['number_of_children']; ?></td>
			<td><?php echo $propertyOwnerMessage['have_pets']; ?></td>
			<td><?php echo $propertyOwnerMessage['comments_questions']; ?></td>
			<td><?php echo $propertyOwnerMessage['created']; ?></td>
			<td><?php echo $propertyOwnerMessage['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'property_owner_messages', 'action' => 'view', $propertyOwnerMessage['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'property_owner_messages', 'action' => 'edit', $propertyOwnerMessage['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'property_owner_messages', 'action' => 'delete', $propertyOwnerMessage['id']), null, __('Are you sure you want to delete # %s?', $propertyOwnerMessage['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Property Owner Message'), array('controller' => 'property_owner_messages', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Property Payment Types'); ?></h3>
	<?php if (!empty($property['PropertyPaymentType'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Property Id'); ?></th>
		<th><?php echo __('Payment Type Id'); ?></th>
		<th><?php echo __('Is Active'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($property['PropertyPaymentType'] as $propertyPaymentType): ?>
		<tr>
			<td><?php echo $propertyPaymentType['id']; ?></td>
			<td><?php echo $propertyPaymentType['property_id']; ?></td>
			<td><?php echo $propertyPaymentType['payment_type_id']; ?></td>
			<td><?php echo $propertyPaymentType['is_active']; ?></td>
			<td><?php echo $propertyPaymentType['created']; ?></td>
			<td><?php echo $propertyPaymentType['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'property_payment_types', 'action' => 'view', $propertyPaymentType['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'property_payment_types', 'action' => 'edit', $propertyPaymentType['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'property_payment_types', 'action' => 'delete', $propertyPaymentType['id']), null, __('Are you sure you want to delete # %s?', $propertyPaymentType['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Property Payment Type'), array('controller' => 'property_payment_types', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Property Photos'); ?></h3>
	<?php if (!empty($property['PropertyPhoto'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Property Id'); ?></th>
		<th><?php echo __('Photo'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($property['PropertyPhoto'] as $propertyPhoto): ?>
		<tr>
			<td><?php echo $propertyPhoto['id']; ?></td>
			<td><?php echo $propertyPhoto['property_id']; ?></td>
			<td><?php echo $propertyPhoto['photo']; ?></td>
			<td><?php echo $propertyPhoto['created']; ?></td>
			<td><?php echo $propertyPhoto['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'property_photos', 'action' => 'view', $propertyPhoto['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'property_photos', 'action' => 'edit', $propertyPhoto['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'property_photos', 'action' => 'delete', $propertyPhoto['id']), null, __('Are you sure you want to delete # %s?', $propertyPhoto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Property Photo'), array('controller' => 'property_photos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Property Rates'); ?></h3>
	<?php if (!empty($property['PropertyRate'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Property Id'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Season'); ?></th>
		<th><?php echo __('Night Rate'); ?></th>
		<th><?php echo __('Week Rate'); ?></th>
		<th><?php echo __('Month Rate'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($property['PropertyRate'] as $propertyRate): ?>
		<tr>
			<td><?php echo $propertyRate['id']; ?></td>
			<td><?php echo $propertyRate['property_id']; ?></td>
			<td><?php echo $propertyRate['price']; ?></td>
			<td><?php echo $propertyRate['season']; ?></td>
			<td><?php echo $propertyRate['night_rate']; ?></td>
			<td><?php echo $propertyRate['week_rate']; ?></td>
			<td><?php echo $propertyRate['month_rate']; ?></td>
			<td><?php echo $propertyRate['created']; ?></td>
			<td><?php echo $propertyRate['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'property_rates', 'action' => 'view', $propertyRate['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'property_rates', 'action' => 'edit', $propertyRate['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'property_rates', 'action' => 'delete', $propertyRate['id']), null, __('Are you sure you want to delete # %s?', $propertyRate['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Property Rate'), array('controller' => 'property_rates', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Property Reservations'); ?></h3>
	<?php if (!empty($property['PropertyReservation'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Property Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Is Active'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($property['PropertyReservation'] as $propertyReservation): ?>
		<tr>
			<td><?php echo $propertyReservation['id']; ?></td>
			<td><?php echo $propertyReservation['property_id']; ?></td>
			<td><?php echo $propertyReservation['date']; ?></td>
			<td><?php echo $propertyReservation['is_active']; ?></td>
			<td><?php echo $propertyReservation['created']; ?></td>
			<td><?php echo $propertyReservation['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'property_reservations', 'action' => 'view', $propertyReservation['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'property_reservations', 'action' => 'edit', $propertyReservation['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'property_reservations', 'action' => 'delete', $propertyReservation['id']), null, __('Are you sure you want to delete # %s?', $propertyReservation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Property Reservation'), array('controller' => 'property_reservations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Property Reviews'); ?></h3>
	<?php if (!empty($property['PropertyReview'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Property Id'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Email Address'); ?></th>
		<th><?php echo __('Arrival'); ?></th>
		<th><?php echo __('Departure'); ?></th>
		<th><?php echo __('Review'); ?></th>
		<th><?php echo __('Rate'); ?></th>
		<th><?php echo __('Is Active'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($property['PropertyReview'] as $propertyReview): ?>
		<tr>
			<td><?php echo $propertyReview['id']; ?></td>
			<td><?php echo $propertyReview['property_id']; ?></td>
			<td><?php echo $propertyReview['first_name']; ?></td>
			<td><?php echo $propertyReview['last_name']; ?></td>
			<td><?php echo $propertyReview['email_address']; ?></td>
			<td><?php echo $propertyReview['arrival']; ?></td>
			<td><?php echo $propertyReview['departure']; ?></td>
			<td><?php echo $propertyReview['review']; ?></td>
			<td><?php echo $propertyReview['rate']; ?></td>
			<td><?php echo $propertyReview['is_active']; ?></td>
			<td><?php echo $propertyReview['created']; ?></td>
			<td><?php echo $propertyReview['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'property_reviews', 'action' => 'view', $propertyReview['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'property_reviews', 'action' => 'edit', $propertyReview['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'property_reviews', 'action' => 'delete', $propertyReview['id']), null, __('Are you sure you want to delete # %s?', $propertyReview['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Property Review'), array('controller' => 'property_reviews', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
