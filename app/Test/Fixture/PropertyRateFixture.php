<?php
/**
 * PropertyRateFixture
 *
 */
class PropertyRateFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'property_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'price' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => 10),
		'night_rate' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => 10),
		'week_rate' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => 10),
		'month_rate' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => 10),
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
			'price' => 1,
			'night_rate' => 1,
			'week_rate' => 1,
			'month_rate' => 1,
			'created' => '2013-10-24 08:20:18',
			'updated' => '2013-10-24 08:20:18'
		),
	);

}
