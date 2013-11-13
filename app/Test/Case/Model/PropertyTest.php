<?php
App::uses('Property', 'Model');

/**
 * Property Test Case
 *
 */
class PropertyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.property',
		'app.city',
		'app.property_activity',
		'app.property_miscellaneous_item',
		'app.property_owner_message',
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
		$this->Property = ClassRegistry::init('Property');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Property);

		parent::tearDown();
	}

}
