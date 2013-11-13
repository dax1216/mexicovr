<?php

App::uses('AppController', 'Controller');

/**
 * Advertisements Controller
 *
 * @property Advertisement $Advertisement
 */
class AdvertisementsController extends AppController {

    public function beforeFilter() {
        //parent::beforeFilter();

        $this->Auth->allow();
    }

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Advertisement->recursive = 0;
        $this->set('advertisements', $this->paginate());
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
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Advertisement->create();
            if ($this->Advertisement->save($this->request->data)) {
                $this->Session->setFlash(__('The advertisement has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The advertisement could not be saved. Please, try again.'));
            }
        }
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
    
    
    public function advertise(){
        
    }

}
