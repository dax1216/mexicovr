<?php
App::uses('Reservation', 'Model');

/**
 * Reservation Test Case
 *
 */
class ReservationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.reservation',
		'app.property',
		'app.user',
		'app.role',
		'app.package',
		'app.property_activity',
		'app.activity',
		'app.property_miscellaneous_item',
		'app.miscellaneous_item',
		'app.property_payment_type',
		'app.payment_type',
		'app.property_photo',
		'app.property_rate',
		'app.season',
		'app.review'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Reservation = ClassRegistry::init('Reservation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Reservation);

		parent::tearDown();
	}

}
