<?php
App::uses('TmpUploadPhoto', 'Model');

/**
 * TmpUploadPhoto Test Case
 *
 */
class TmpUploadPhotoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tmp_upload_photo',
		'app.session'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TmpUploadPhoto = ClassRegistry::init('TmpUploadPhoto');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TmpUploadPhoto);

		parent::tearDown();
	}

}
