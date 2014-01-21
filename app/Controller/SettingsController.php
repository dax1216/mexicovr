<?php
App::uses('AppController', 'Controller');
App::uses('AttachmentBehavior', 'Uploader.Model/Behavior');
/**
 * Activities Controller
 *
 * @property Activity $Activity
 */
class SettingsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	 public function admin_index(){
              $this->layout = "admin";
        }

}
