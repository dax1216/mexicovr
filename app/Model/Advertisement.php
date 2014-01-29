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
    public $validate = array('title' => array('notempty' => array('rule' => array('notempty'),
                'message' => 'Please add a title',
                'allowEmpty' => false,
                'required' => true
            ),
        ),
        'description1' => array('notempty' => array('rule' => array('notempty'),
                'message' => 'Please add 1st Description',
                'allowEmpty' => false,
                'required' => true
            ),
        ),
        'address' => array('notempty' => array('rule' => array('notempty'),
                'message' => 'Please add Property Address',
                'allowEmpty' => false,
                'required' => true
            )
        ),
//        'description2' => array('notempty' => array('rule' => array('notempty'),
//                'message' => 'Please add 2nd Description',
//                'allowEmpty' => false,
//                'required' => false
//            ),
//        ),
        'contact_number' => array('notempty' => array('rule' => 'notempty',
                'message' => 'Please add property contact details',
                'allowEmpty' => false,
                'required' => true
            ),
            'phone' =>array(
                'rule' => array('phone', null, 'us'),
                'message' => 'Must be a valid Phone No. i.e. 123-456-7890',
            ),
        ),
//        'price' => array('notempty' => array('rule' => array('notempty'),
//                'message' => 'Please add 2nd Description',
//                'allowEmpty' => false,
//                'required' => true
//            ),
//            'alphaNumeric' => array('rule' => 'alphaNumeric',
//                'message' => 'Please enter numbers only',
//                'allowEmpty' => false,
//                'required' => true
//            )
//        ),
        'is_active' => array('numeric' => array('rule' => array('numeric'),
                'required' => true,
            ),
        )
    );
    public $actsAs = array(
                'Uploader.Attachment' => array(
                        // Do not copy all these settings, it's merely an example
                        'image' => array(
                                'tempDir' => TMP,
                                'allowEmpty' => false,
                                'overwrite' => true,
                        		'uploadDir' => 'files/uploads/advertisements/',
                        		'finalPath' => 'files/uploads/advertisements/',
                                'transforms' => array(
                                        'image_small' => array(
                                                'method' => 'resize',
                                                'append' => '-small',
                                                'overwrite' => true,
                                                'self' => false,
                                                'width' => 215,
                                                'height' => 115
                                        ),
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

	public $findMethods = array('randomAdvertisment' => true);
	
	protected function _findRandomAdvertisment($state, $query, $results = array())
	{
		if('before' === $state)
		{
			$query['order'] = 'rand()';
			$query['limit'] = 1;
			return $query;
		}
		
		if('after' === $state)
		{
			return $results;
		}
		
		return $results;
	}
		
}