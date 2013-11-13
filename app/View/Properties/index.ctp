<div class="properties index">
	<h2><?php echo __('Properties'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('address1'); ?></th>
			<th><?php echo $this->Paginator->sort('address2'); ?></th>
			<th><?php echo $this->Paginator->sort('city_id'); ?></th>
			<th><?php echo $this->Paginator->sort('zip'); ?></th>
			<th><?php echo $this->Paginator->sort('state'); ?></th>
			<th><?php echo $this->Paginator->sort('province'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('bedrooms'); ?></th>
			<th><?php echo $this->Paginator->sort('bathrooms'); ?></th>
			<th><?php echo $this->Paginator->sort('rate'); ?></th>
			<th><?php echo $this->Paginator->sort('video'); ?></th>
			<th><?php echo $this->Paginator->sort('audio'); ?></th>
			<th><?php echo $this->Paginator->sort('listing_package'); ?></th>
			<th><?php echo $this->Paginator->sort('additional_information'); ?></th>
			<th><?php echo $this->Paginator->sort('listing_type'); ?></th>
			<th><?php echo $this->Paginator->sort('is_active'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($properties as $property): ?>
	<tr>
		<td><?php echo h($property['Property']['id']); ?>&nbsp;</td>
		<td><?php echo h($property['Property']['address1']); ?>&nbsp;</td>
		<td><?php echo h($property['Property']['address2']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($property['City']['name'], array('controller' => 'cities', 'action' => 'view', $property['City']['id'])); ?>
		</td>
		<td><?php echo h($property['Property']['zip']); ?>&nbsp;</td>
		<td><?php echo h($property['Property']['state']); ?>&nbsp;</td>
		<td><?php echo h($property['Property']['province']); ?>&nbsp;</td>
		<td><?php echo h($property['Property']['description']); ?>&nbsp;</td>
		<td><?php echo h($property['Property']['bedrooms']); ?>&nbsp;</td>
		<td><?php echo h($property['Property']['bathrooms']); ?>&nbsp;</td>
		<td><?php echo h($property['Property']['rate']); ?>&nbsp;</td>
		<td><?php echo h($property['Property']['video']); ?>&nbsp;</td>
		<td><?php echo h($property['Property']['audio']); ?>&nbsp;</td>
		<td><?php echo h($property['Property']['listing_package']); ?>&nbsp;</td>
		<td><?php echo h($property['Property']['additional_information']); ?>&nbsp;</td>
		<td><?php echo h($property['Property']['listing_type']); ?>&nbsp;</td>
		<td><?php echo h($property['Property']['is_active']); ?>&nbsp;</td>
		<td><?php echo h($property['Property']['created']); ?>&nbsp;</td>
		<td><?php echo h($property['Property']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $property['Property']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $property['Property']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $property['Property']['id']), null, __('Are you sure you want to delete # %s?', $property['Property']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Property'), array('action' => 'add')); ?></li>
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
