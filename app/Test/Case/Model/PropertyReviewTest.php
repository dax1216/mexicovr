<?php
App::uses('PropertyReview', 'Model');

/**
 * PropertyReview Test Case
 *
 */
class PropertyReviewTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.property_review',
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
		'app.property_reservation'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PropertyReview = ClassRegistry::init('PropertyReview');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PropertyReview);

		parent::tearDown();
	}

}
