<?php
/**
 * PropertyOwnerMessageFixture
 *
 */
class PropertyOwnerMessageFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'owner_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'property_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'first_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 64, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'last_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 64, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'email_address' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'home_phone' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 64, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'arrival' => array('type' => 'date', 'null' => false, 'default' => null),
		'departure' => array('type' => 'date', 'null' => false, 'default' => null),
		'number_of_adults' => array('type' => 'integer', 'null' => false, 'default' => null),
		'number_of_children' => array('type' => 'integer', 'null' => false, 'default' => null),
		'have_pets' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4),
		'comments_questions' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'owner_id' => 1,
			'property_id' => 1,
			'first_name' => 'Lorem ipsum dolor sit amet',
			'last_name' => 'Lorem ipsum dolor sit amet',
			'email_address' => 'Lorem ipsum dolor sit amet',
			'home_phone' => 'Lorem ipsum dolor sit amet',
			'arrival' => '2013-10-24',
			'departure' => '2013-10-24',
			'number_of_adults' => 1,
			'number_of_children' => 1,
			'have_pets' => 1,
			'comments_questions' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2013-10-24 08:19:59',
			'updated' => '2013-10-24 08:19:59'
		),
	);

}
