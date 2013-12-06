<?php
/**
 * PackageFixture
 *
 */
class PackageFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 64, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'photo_limit' => array('type' => 'integer', 'null' => false, 'default' => null),
		'is_audio_enabled' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4),
		'is_video_enabled' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4),
		'is_active' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'updated' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'photo_limit' => 1,
			'is_audio_enabled' => 1,
			'is_video_enabled' => 1,
			'is_active' => 1,
			'created' => '2013-10-28 05:09:14',
			'updated' => '2013-10-28 05:09:14'
		),
	);

}
