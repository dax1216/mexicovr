<?php
App::uses('Advertisement', 'Model');

/**
 * Advertisement Test Case
 *
 */
class AdvertisementTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.advertisement'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Advertisement = ClassRegistry::init('Advertisement');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Advertisement);

		parent::tearDown();
	}

}
