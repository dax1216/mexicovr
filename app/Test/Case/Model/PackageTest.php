<?php
App::uses('Package', 'Model');

/**
 * Package Test Case
 *
 */
class PackageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.package',
		'app.property',
		'app.user',
		'app.role',
		'app.property_activity',
		'app.activity',
		'app.property_miscellaneous_item',
		'app.miscellaneous_item',
		'app.property_payment_type',
		'app.payment_type',
		'app.property_photo',
		'app.property_rate',
		'app.reservation',
		'app.review'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Package = ClassRegistry::init('Package');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Package);

		parent::tearDown();
	}

}
