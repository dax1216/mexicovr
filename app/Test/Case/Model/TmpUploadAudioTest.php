<?php
App::uses('TmpUploadAudio', 'Model');

/**
 * TmpUploadAudio Test Case
 *
 */
class TmpUploadAudioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tmp_upload_audio',
		'app.session'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TmpUploadAudio = ClassRegistry::init('TmpUploadAudio');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TmpUploadAudio);

		parent::tearDown();
	}

}
