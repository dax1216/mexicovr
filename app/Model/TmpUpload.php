<?php
App::uses('AppModel', 'Model');
App::uses('AttachmentBehavior', 'Uploader.Model/Behavior');
/**
 * TmpUpload Model
 *
 * @property Session $Session
 */
class TmpUpload extends AppModel {

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
		'tag' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
//		'path' => array(
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
	public $belongsTo = array(
		/*'Session' => array(
			'className' => 'Session',
			'foreignKey' => 'session_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)*/
	);
        
        public $actsAs = array(
                'Uploader.Attachment' => array(
                        'path' => array(
                                'tempDir' => TMP,
                                'allowEmpty' => false,
                                'overwrite' => true,
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
                        'image' => array(
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
