<?php

/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Controller', 'Controller');
App::uses('CakeEmail', 'Network/Email');
/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

    public $components = array('Session',
        'Acl',
        'Auth' => array(
            'loginAction' => array('controller' => 'account', 'action' => 'login'),
            'authenticate' => array(
                'Form' => array(
                    'fields' => array('username' => 'email_address', 'password' => 'password'),
                    'scope' => array('User.is_active' => 1)
                )
            ),
            'authorize' => array(
                'Actions' => array('actionPath' => 'controllers')
            ),
            'authError' => 'Invalid username and/or password entered.',
            'loginRedirect' => array('controller' => 'properties', 'action' => 'choose_your_listings'),
            'logoutRedirect' => array('controller' => 'account', 'action' => 'login'),
        ),
        'DebugKit.Toolbar' => array('panels' => array('history' => false)),
        'Access',
        'RequestHandler');
    public $helpers = array('Session', 'Form', 'Html', 'Number', 'Time', 'Geography', 'Js');

    public function beforeFilter() {
//        $this->Auth->allow();

//        if (!$this->Access->check($this->params['controller'] . '/' . $this->params['action'])) {
//            $this->Session->setFlash('Access denied.', 'default', array('class' => 'alert alert-error'));
//            $this->redirect('/');
//        }
    }
    
    public function appError($error) {
        // custom logic goes here.
        $this->redirect('/');
    }

    protected function decode_string($string) {
        return base64_decode(strtr($string, '-_,', '+/='));
    }

    protected function encode_string($string) {
        return strtr(base64_encode($string), '+/=', '-_,');
    }

    protected function send_mail($emailData) {
        $Email = new CakeEmail();
        $Email->emailFormat('html')
                ->template(isset($emailData['template'])?$emailData['template']:'mexicovr_default')
                ->to($emailData['to']?$emailData['to']:'daisy@localhost.com') //temporary email
                ->from(isset($emailData['from'])?$emailData['from']:'noreply@mexicovr.com')
                ->subject($emailData['subject'])
                ->viewVars($emailData['viewVars'])
                ->send();
    }

}
