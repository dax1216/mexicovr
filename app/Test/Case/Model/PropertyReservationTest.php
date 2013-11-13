<?php
App::uses('PropertyReservation', 'Model');

/**
 * PropertyReservation Test Case
 *
 */
class PropertyReservationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.property_reservation',
		'app.property',
		'app.city',
		'app.property_activity',
		'app.activity',
		'app.property_miscellaneous_item',
		'app.miscellaneous_item',
		'app.property_owner_message',
		'app.owner',
		'app.property_payment_type',
		'app.payment_type',
		'app.property_photo',
		'app.property_rate',
		'app.property_review'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PropertyReservation = ClassRegistry::init('PropertyReservation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PropertyReservation);

		parent::tearDown();
	}

}
