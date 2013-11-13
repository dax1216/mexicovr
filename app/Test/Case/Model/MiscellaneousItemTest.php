<?php
App::uses('MiscellaneousItem', 'Model');

/**
 * MiscellaneousItem Test Case
 *
 */
class MiscellaneousItemTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.miscellaneous_item',
		'app.property',
		'app.property_miscellaneous_item'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MiscellaneousItem = ClassRegistry::init('MiscellaneousItem');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MiscellaneousItem);

		parent::tearDown();
	}

}
