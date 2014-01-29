<?php
App::uses('AppModel', 'Model');
/**
 * TmpUploadPhoto Model
 *
 * @property Session $Session
 */
class TmpUploadPhoto extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'session_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
//		'photo' => array(
//			'notempty' => array(
//				'rule' => array('notempty'),
//				//'message' => 'Your custom message here',
//				//'allowEmpty' => false,
//				//'required' => false,
//				//'last' => false, // Stop validation after this rule
//				//'on' => 'create', // Limit validation to 'create' or 'update' operations
//			),
//		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
//	public $belongsTo = array(
//		'Session' => array(
//			'className' => 'Session',
//			'foreignKey' => 'session_id',
//			'conditions' => '',
//			'fields' => '',
//			'order' => ''
//		)
//	);
        
        public $actsAs = array(
                'Uploader.Attachment' => array(
                        'photo' => array(
                                'tempDir' => TMP,
                                'allowEmpty' => false,
//                                'overwrite' => true,
                                'uploadDir' => 'files/uploads/properties/tmp_photos/',
                                'finalPath' => 'files/uploads/properties/tmp_photos/',
                                'transforms' => array(
                                        'image_small' => array(
                                                'method' => 'resize',
                                                'append' => '-s',
                                                'overwrite' => true,
                                                'self' => false,
                                                'width' => 65,
                                                'height' => 60,
                                                'nameCallback' => 'format_transform_name'
                                        ),
                                        'image_reg' => array(
                                                'method' => 'resize',
                                                'append' => '-r',
                                                'overwrite' => true,
                                                'self' => false,
                                                'width' => 465,
                                                'height' => 382,
                                                'nameCallback' => 'format_transform_name'
                                        ),
                                        'image_list' => array(
                                                'method' => 'resize',
                                                'append' => '-l',
                                                'overwrite' => true,
                                                'self' => false,
                                                'width' => 200,
                                                'height' => 167,
                                                'nameCallback' => 'format_transform_name'
                                        ),
                                )
                        )
                ),
                'Uploader.FileValidation' => array(
                        'photo' => array(
                                'extension' => array('gif', 'jpg', 'png', 'jpeg'),
//                                'required' => array(
//                                        'value' => true,
//                                        'error' => 'File required'
//                                )
                        ),
//                        'thumbnail' => array(
//                                'required' => false
//                        )
                )
        );
        
        public function format_transform_name($name, $file){
            return sprintf('%s', $name);
        }
}
