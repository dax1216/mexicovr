<?php
App::uses('PropertyMiscellaneousItem', 'Model');

/**
 * PropertyMiscellaneousItem Test Case
 *
 */
class PropertyMiscellaneousItemTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.property_miscellaneous_item',
		'app.property',
		'app.city',
		'app.property_activity',
		'app.activity',
		'app.property_owner_message',
		'app.property_payment_type',
		'app.property_photo',
		'app.property_rate',
		'app.property_reservation',
		'app.property_review',
		'app.miscellaneous_item'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PropertyMiscellaneousItem = ClassRegistry::init('PropertyMiscellaneousItem');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PropertyMiscellaneousItem);

		parent::tearDown();
	}

}
