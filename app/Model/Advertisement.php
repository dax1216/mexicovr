<?php
App::uses('AppModel', 'Model');
App::uses('AttachmentBehavior', 'Uploader.Model/Behavior');
/**
 * Advertisement Model
 *
 */
class Advertisement extends AppModel {

/**
 * Validation rules Daisy Tudtud
 *
 * @var array
 */
	public $validate = array(
		'title' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		/*'image' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),*/
		'description1' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'description2' => array(
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
		'update' => array(
			'datetime' => array(
				'rule' => array('datetime'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
        
        
        public $actsAs = array(
                'Uploader.Attachment' => array(
                        // Do not copy all these settings, it's merely an example
                        'image' => array(
                                'tempDir' => TMP,
                                //'uploadDir' => '/var/www/app/webroot/img/uploads/',
                                //'finalPath' => '/img/uploads/'
//                                'nameCallback' => '',
//                                'append' => '',
//                                'prepend' => '',
//                                'tempDir' => TMP,
//                                'uploadDir' => '',
//                                'transportDir' => '',
//                                'finalPath' => '',
//                                'dbColumn' => '',
//                                'metaColumns' => array(),
//                                'defaultPath' => '',
//                                'overwrite' => false,
//                                'stopSave' => true,
                                'allowEmpty' => false,
//                                'transforms' => array(),
//                                'transformers' => array(),
//                                'transport' => array(),
//                                'transporters' => array(),
//                                'curl' => array()
                            
                                'overwrite' => true,
                                'transforms' => array(
                                        'image_small' => array(
                                                'method' => 'resize',
                                                'append' => '-small',
                                                'overwrite' => true,
                                                'self' => false,
                                                'width' => 215,
                                                'height' => 115
                                        ),
//                                        'imageMedium' => array(
//                                                'class' => 'resize',
//                                                'append' => '-medium',
//                                                'width' => 800,
//                                                'height' => 600,
//                                                'aspect' => false
//                                        )
                                )
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
