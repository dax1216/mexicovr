<?php
App::uses('PropertyOwnerMessage', 'Model');

/**
 * PropertyOwnerMessage Test Case
 *
 */
class PropertyOwnerMessageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.property_owner_message',
		'app.owner',
		'app.property',
		'app.city',
		'app.property_activity',
		'app.activity',
		'app.property_miscellaneous_item',
		'app.miscellaneous_item',
		'app.property_payment_type',
		'app.property_photo',
		'app.property_rate',
		'app.property_reservation',
		'app.property_review'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PropertyOwnerMessage = ClassRegistry::init('PropertyOwnerMessage');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PropertyOwnerMessage);

		parent::tearDown();
	}

}
