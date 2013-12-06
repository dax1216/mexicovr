<?php
/**
 * PropertyActivityFixture
 *
 */
class PropertyActivityFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'property_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'activity_id' => array('type' => 'integer', 'null' => false, 'default' => null),
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
			'property_id' => 1,
			'activity_id' => 1,
			'is_active' => 1,
			'created' => '2013-10-24 08:19:47',
			'updated' => '2013-10-24 08:19:47'
		),
	);

}
