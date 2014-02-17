<?php

App::uses('AppController', 'Controller');
App::uses('AttachmentBehavior', 'Uploader.Model/Behavior');

/**
 * Advertisements Controller
 *
 * @property Advertisement $Advertisement
 */
class AdvertisementsController extends AppController {

    public function beforeFilter() {
        $this->Auth->allow();
        $this->layout = "advertisments";
    }

    /**
     * index method
     *
     * @return void
     */
    public function index() {
//        if (NULL != $id) {
//            $neighbors = $this->Advertisement->find('neighbors', array('field' => 'id', 'value' => $id));
//            $this->set('previousAd', $neighbors['prev']);
//            $this->set('nextAd', $neighbors['next']);
//        }
////
//        $advertisement = $this->Advertisement->find('first', array('order' => array('Advertisement.created' => 'desc')));
//        $this->set('advertisement', $advertisement['Advertisement']);
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->Advertisement->id = $id;
        if (!$this->Advertisement->exists()) {
            throw new NotFoundException(__('Invalid advertisement'));
        }
        $this->set('advertisement', $this->Advertisement->read(null, $id));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->Advertisement->id = $id;
        if (!$this->Advertisement->exists()) {
            throw new NotFoundException(__('Invalid advertisement'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Advertisement->save($this->request->data)) {
                $this->Session->setFlash(__('The advertisement has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The advertisement could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Advertisement->read(null, $id);
        }
    }

    /**
     * delete method
     *
     * @throws MethodNotAllowedException
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->Advertisement->id = $id;
        if (!$this->Advertisement->exists()) {
            throw new NotFoundException(__('Invalid advertisement'));
        }
        if ($this->Advertisement->delete()) {
            $this->Session->setFlash(__('Advertisement deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Advertisement was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

    public function advertise() {
        if ($this->request->is('post')) {
            $this->Advertisement->create();
            if ($this->Advertisement->save($this->request->data, true)) {
                $this->Session->setFlash(__('The advertisement has been saved'));
                $this->redirect(array('action' => 'preview/' . $this->Advertisement->getLastInsertID()));
            } else {
                $this->Session->setFlash(__('The advertisement could not be saved. Please, try again.'));
            }
        }
    }

    public function preview($id = null) {
        $this->Advertisement->id = $id;
        if (!$this->Advertisement->exists()) {
            throw new NotFoundException(__('Invalid advertisement'));
        }
        $this->set('advertisement', $this->Advertisement->read(null, $id));
    }

    public function advertising_next() {
        $advertisment = $this->Advertisement->find('randomAdvertisment');
        $this->set('advertisment', $advertisment[0]['Advertisement']);
    }

    public function advertising_advertise($id=null) {
        if($id){
            $this->Advertisement->id = $id;
            $advertisement = $this->Advertisement->read(null, $id);
            if (!$this->Advertisement->exists()) {
                throw new NotFoundException(__('Invalid advertisement'));
            }
            $this->set('advertisement', $advertisement);
        }
        
        if ($this->request->is('post')) {
            $this->request->data['Advertisement']['is_active'] = 1;
            if(!$id){
                $this->Advertisement->create();
            }else{
                if($this->request->data['Advertisement']['image_2']['tmp_name']!=''){
                    $this->request->data['Advertisement']['image'] = $this->request->data['Advertisement']['image_2'];
                }else{
                    $this->Advertisement->Behaviors->unload('Uploader.Attachment');
                    $this->Advertisement->Behaviors->unload('Uploader.FileValidation');
                }
            }
            if ($this->Advertisement->save($this->request->data)) {
                $pId = $id?$id:$this->Advertisement->getLastInsertID();
                $this->redirect(array('action' => 'preview/'.$pId));
            }
            else {
//                var_dump($this->Advertisement->validationErrors);
                
//                $this->redirect(array('action' => 'advertising_advertise'));
            }
        }
    }

    public function first_step() {
         if ($this->request->is('post')) {
             $this->request->data['Advertisement']['is_active'] = 1;
            $this->Advertisement->create();
            if ($this->Advertisement->save($this->request->data, true)) {
                $this->Session->setFlash(__('The advertisement has been saved'));
                $this->redirect(array('action' => 'preview/' . $this->Advertisement->getLastInsertID()));
            } else {
                $this->Session->setFlash(__('The advertisement could not be saved. Please, try again.'));
            }
        }

    }

    public function advertising_payment() {

    }

    public function advertising_purchase() {
        // $this->request->data['Advertisement']  // we need this for populating the data for review
        $this->set('advertisementData', $this->request->data['Advertisement']);
    }

    public function show() {

        $activeAds = $this->Advertisement->find('all', array(
                    'conditions' => array('Advertisement.is_active' => '1'),
                    'limit' => 3,
                    'order' => array('Advertisement.counter ASC'),
                ));

        foreach ($activeAds as $adsData => $data) {
            $countAds = $data['Advertisement']['counter'] + 1;
            $data = array('id' => $data['Advertisement']['id'], 'counter' => $countAds);
            $this->Advertisement->save($data, false);
        }

        if ($this->request->is('requested')) {
            return $activeAds;
        }
    }

}
