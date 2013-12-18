<?php
App::uses('TmpUpload', 'Model');

/**
 * TmpUpload Test Case
 *
 */
class TmpUploadTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tmp_upload',
		'app.session'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TmpUpload = ClassRegistry::init('TmpUpload');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TmpUpload);

		parent::tearDown();
	}

}
