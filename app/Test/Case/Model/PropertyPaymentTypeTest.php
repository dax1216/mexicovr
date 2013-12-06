<?php
App::uses('PropertyPaymentType', 'Model');

/**
 * PropertyPaymentType Test Case
 *
 */
class PropertyPaymentTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.property_payment_type',
		'app.property',
		'app.city',
		'app.property_activity',
		'app.activity',
		'app.property_miscellaneous_item',
		'app.miscellaneous_item',
		'app.property_owner_message',
		'app.owner',
		'app.property_photo',
		'app.property_rate',
		'app.property_reservation',
		'app.property_review',
		'app.payment_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PropertyPaymentType = ClassRegistry::init('PropertyPaymentType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PropertyPaymentType);

		parent::tearDown();
	}

}
