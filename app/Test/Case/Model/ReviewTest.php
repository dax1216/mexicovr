<?php
App::uses('Review', 'Model');

/**
 * Review Test Case
 *
 */
class ReviewTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.review',
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
		'app.reservation'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Review = ClassRegistry::init('Review');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Review);

		parent::tearDown();
	}

}
