<?php
App::uses('AppModel', 'Model');
App::uses('AttachmentBehavior', 'Uploader.Model/Behavior');
/**
 * Activity Model
 *
 * @property Property $Property
 */
class Activity extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'is_active' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
//		'Property' => array(
//			'className' => 'Property',
//			'joinTable' => 'property_activities',
//			'foreignKey' => 'activity_id',
//			'associationForeignKey' => 'property_id',
//			'unique' => 'keepExisting',
//			'conditions' => '',
//			'fields' => '',
//			'order' => '',
//			'limit' => '',
//			'offset' => '',
//			'finderQuery' => '',
//			'deleteQuery' => '',
//			'insertQuery' => ''
//		)
	);
        
        public $actsAs = array(
                'Uploader.Attachment' => array(
                        'icon' => array(
                                'tempDir' => TMP,
                                'allowEmpty' => false,
                                'overwrite' => true,
                                'uploadDir' => 'files/uploads/activities/',
                                'finalPath' => 'files/uploads/activities/',
//                                'transforms' => array(
//                                        'image_small' => array(
//                                                'method' => 'resize',
//                                                'append' => '-small',
//                                                'overwrite' => true,
//                                                'self' => false,
//                                                'width' => 215,
//                                                'height' => 115
//                                        ),
//                                )
                        )
                ),
                'Uploader.FileValidation' => array(
                        'icon' => array(
                                'extension' => array('gif', 'jpg', 'png', 'jpeg'),
                                'required' => array(
                                        'value' => true,
                                        'error' => 'File required'
                                )
                        ),
                        'thumbnail' => array(
                                'required' => false
                        )
                )
        );

}
