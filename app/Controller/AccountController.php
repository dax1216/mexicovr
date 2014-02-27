<?php

App::uses('AppController', 'Controller');

class AccountController extends AppController {

    public $uses = array('User');
    public $components = array('Recaptcha.Recaptcha', 'Email');

    public function beforeFilter() {
        parent::beforeFilter();

        $this->Auth->allow(array('register','activate','login','forgot_password'));
//        $this->Auth->allow();
        $this->layout = "property";
    }

    /**
     * User registration
     */
    public function register() {
        if($this->Auth->loggedIn()){
            $this->redirect($this->Auth->loginRedirect);
        }else{
            if ($this->request->is('post')) {

                $this->User->create();

                $this->request->data['User']['role_id'] = Configure::read('site_config.role_user'); //temporary assignment
                $this->request->data['User']['is_active'] = false; //temporary assignment
                $this->request->data['User']['confirmation_key'] = md5(serialize($this->request->data));
                $this->request->data['User']['terms_and_conditions'] = @DboSource::expression('NOW()');
                $this->request->data['User']['role_id'] = 2;

                if ($this->User->save($this->request->data)) {
                    $this->confirm_registration($this->encode_string($this->request->data['User']['email_address']), $this->request->data['User']['confirmation_key']);
                    $this->Session->setFlash('Registration successful. Please check your email and confirm your registration to activate your account.', 'default', array('class' =>'alert alert-success'));
                    $this->redirect(array('action'=>'login'));
                } else {
                    $this->Session->setFlash('Error in registration process.', 'default', array('class' => 'alert alert-error'));
                }
            }
        }
    }
    
    private function confirm_registration($email, $confirmation_key) {
        if($this->Auth->loggedIn()){
            $this->redirect($this->Auth->loginRedirect);
        }else{
            $emailData = array(
                'to'=>'daisy@localhost.com', //temporary email
                'from'=>'noreply@mexicovr.com',
                'subject'=>'Confirm Registration for MexicoVR',
                'viewVars'=>array(
                    'emailContent'=>'Click on the link below to complete registration. \n<a href="' . APP_URL . 'account/activate/u:' . $email . '/key:' . $confirmation_key.'">'.APP_URL . 'account/activate/u:' . $email . '/key:' . $confirmation_key.'</a>',
                    'user'=>array('User'=>$this->request->data['User'])

                    )
                );
            $this->send_mail($emailData);
        }
    }

    /**
     * User registration activation
     */
    public function activate() {
        if($this->Auth->loggedIn()){
            $this->redirect($this->Auth->loginRedirect);
        }else{
            $this->autoRender = false;
            
            if(!isset($this->passedArgs['u']) || !isset($this->passedArgs['u'])){
                $this->Session->setFlash('Invalid user and key entered.', 'default', array('class' => 'alert alert-error'));
            }else{
                $username = $this->decode_string($this->passedArgs['u']);
                $key = $this->passedArgs['key'];

                $user = $this->User->find('first', array('conditions' => array("User.email_address" => $username, "User.confirmation_key" => $key), 'recursive' => -1));

                if (empty($user)) {
                    $this->Session->setFlash('Invalid user and key entered.', 'default', array('class' => 'alert alert-error'));
                } else {
                    if ($user['User']['is_email_confirmed'] == 1) {
                        $this->Session->setFlash('User already activated. Please login to continue.', 'default', array('class' => 'alert alert-success'));
                    } else {
                        $this->User->read(null, $user['User']['user_id']);
                        $this->User->set(array('is_email_confirmed'=>1, 'is_active'=>1));
                        if($this->User->save()){
                            $this->Session->setFlash('You are now activated. Welcome!', 'default', array('class' => 'alert alert-success'));
                        }else{
                            $this->Session->setFlash('Error activating account.', 'default', array('class' => 'alert alert-error'));
                        }
                    }
                }
            }
            $this->redirect(array('action'=>'login'));
        }
    }

    /**
     * User profile page
     */
    public function index() {
//        if (!$this->Access->check($this->params['controller'] . '/' . $this->params['action'])) {
//            $this->Session->setFlash('Access denied.', 'default', array('class' => 'alert alert-error'));
//            $this->redirect('/');
//        }

        $this->User->id = $user_id = $this->Auth->user('user_id');

        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->request->data('change_password') == '1') {
                $this->_change_password();
            } else {
                if ($this->User->save($this->request->data)) {
                    $this->Session->write('Auth', $this->User->read(null, $user_id));

                    $this->Session->setFlash(__('Account details saved'), 'default', array('class' => 'alert alert-success'));
                    $this->redirect(array('action' => 'index'));
                } else {
                    $this->Session->setFlash(__('Error in saving account details. Please, try again.'), 'default', array('class' => 'alert alert-error'));
                }
            }
        } else {
            $this->request->data = $user_data = $this->User->find('first', array('conditions' => array('User.user_id' => $user_id), 'recursive' => -1));
        }
    }

    public function login() {
        if($this->Auth->loggedIn()){
            $this->redirect($this->Auth->loginRedirect);
        }else{
            if ($this->request->is('post')) {
                if ($this->Auth->login()) {
//                    $this->Session->setFlash('Successfully logged in!', 'default', array('class' => 'alert alert-success'));
                    $this->redirect($this->Auth->loginRedirect);
                } else {
                    $this->Session->setFlash($this->Auth->authError, 'default', array('class' => 'alert alert-error'));
                }
            }
        }
    }

     public function member() {
        if ($this->request->is('post')) {

            if ($this->Auth->login()) {
                $this->Session->setFlash('Successfully logged in!', 'default', array('class' => 'alert alert-success'));
                $this->redirect($this->Auth->loginRedirect);
            } else {
                $this->Session->setFlash($this->Auth->authError, 'default', array('class' => 'alert alert-error'));
            }
        }
    }

    /**
     * Change user password
     */
    private function _change_password() {
        $user_id = $this->Auth->user('user_id');

        $current_password = AuthComponent::password($this->request->data['User']['current_password']);

        $user = $this->User->find('first', array('conditions' => array('User.user_id' => $user_id), 'recursive' => -1));

        if ($user['User']['password'] == AuthComponent::password($this->request->data['User']['password'])) {
            $this->Session->setFlash(__('The new password you entered is the same with the current password'), 'default', array('class' => 'alert alert-error'));
            $this->redirect('/account/index#change-password');
        }

        if ($user['User']['password'] != $current_password) {
            $this->Session->setFlash(__('The current password you entered is not valid'), 'default', array('class' => 'alert alert-error'));
            $this->redirect('/account/index#change-password');
        }

        $this->request->data['User']['updated'] = date('Y-m-d H:i:s');
        unset($this->request->data['User']['current_password']);

        $this->User->set($this->request->data);

        if ($this->User->validates(array('fieldList' => array('password', 'password_confirm')))) {

            $this->User->save();

            $this->Session->setFlash(__('Password successfully updated'), 'default', array('class' => 'alert alert-success'));

            $this->redirect('/account/index#change-password');
        } else {
            $this->Session->setFlash(__('The new password could not be saved. Please try again.'), 'default', array('class' => 'alert alert-error'));

            $this->request->data = $user;
        }
    }

    public function logout() {
        $this->Session->destroy();

        $this->redirect($this->Auth->logout());
    }

    public function forgot_password() {
        if ($this->request->is('post') || $this->request->is('put')) {
            //Bypass email confirm field
            //$this->request->data['User']['email_address_confirm'] = $this->request->data['User']['email_address'];
            
            //bypass tos
            $this->request->data['User']['tos'] = 1;
            $this->User->set($this->request->data);

            if (filter_var($this->request->data['User']['email_address'], FILTER_VALIDATE_EMAIL)) {
                $user_email = $this->request->data['User']['email_address'];


                $user = $this->User->find('first', array('conditions' => array('User.email_address' => $user_email),
                    'recursive' => -1
                        ));
                if (!empty($user)) {
                    $temp_password = $this->_generateRandomString(8);

                        $this->User->id = $user['User']['user_id'];

                        $this->User->set('password', $temp_password);

                        if($this->User->save()){
                            $Email = new CakeEmail();
                            $Email->emailFormat('html')
                                ->template('forgot_password')
                                ->to('daisy@localhost.com') //temporary email
                                ->from('noreply@mexicovr.com')
                                ->subject('MexicoVR Account Recovery')
                                ->viewVars(array('user' => $user, 'temp_password' => $temp_password,'login_url'=>APP_URL . 'account/login'))
                                ->send();
                        }

                    $this->Session->setFlash('Account recovery email sent.', 'default', array('class' => 'alert alert-success'));
                    $this->redirect('login');
                } else {
                    $this->Session->setFlash(__('The account data you entered does not exist in our records.'), 'default', array('class' => 'alert alert-error'));
                    $this->redirect('forgot_password');
                }
            }else{
                $this->Session->setFlash(__('Invalid email address.'), 'default', array('class' => 'alert alert-error'));
            }
        }
    }

    private function _generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $randomString;
    }
}

?>
