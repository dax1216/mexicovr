<?php
App::uses('AppModel', 'Model');
/**
 * TmpUploadAudio Model
 *
 * @property Session $Session
 */
class TmpUploadAudio extends AppModel {

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
//		'audio' => array(
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
                        'audio' => array(
                                'tempDir' => TMP,
                                'allowEmpty' => false,
                                'uploadDir' => 'files/uploads/properties/tmp_audios/',
                                'finalPath' => 'files/uploads/properties/tmp_audios/'
                        )
                ),
                'Uploader.FileValidation' => array(
                        'audio' => array(
                                'extension' => array('mp3'),
//                                'required' => array(
//                                        'value' => true,
//                                        'error' => 'File required'
//                                )
                        )
                )
        );
}
