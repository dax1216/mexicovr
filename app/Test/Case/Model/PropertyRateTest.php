<?php
App::uses('PropertyRate', 'Model');

/**
 * PropertyRate Test Case
 *
 */
class PropertyRateTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.property_rate',
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
		$this->PropertyRate = ClassRegistry::init('PropertyRate');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PropertyRate);

		parent::tearDown();
	}

}
