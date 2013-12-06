<?php
App::uses('PropertyActivity', 'Model');

/**
 * PropertyActivity Test Case
 *
 */
class PropertyActivityTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.property_activity',
		'app.property',
		'app.city',
		'app.property_miscellaneous_item',
		'app.property_owner_message',
		'app.property_payment_type',
		'app.property_photo',
		'app.property_rate',
		'app.property_reservation',
		'app.property_review',
		'app.activity'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PropertyActivity = ClassRegistry::init('PropertyActivity');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PropertyActivity);

		parent::tearDown();
	}

}
