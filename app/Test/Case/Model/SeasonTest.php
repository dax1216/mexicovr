<?php
App::uses('Season', 'Model');

/**
 * Season Test Case
 *
 */
class SeasonTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.season',
		'app.property_rate',
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
		$this->Season = ClassRegistry::init('Season');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Season);

		parent::tearDown();
	}

}
