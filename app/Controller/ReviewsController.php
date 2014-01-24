<?php

App::uses('AppController', 'Controller');

/**
 * Reviews Controller
 *
 * @property Review $Review
 */
class ReviewsController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Review->recursive = 0;
        $this->set('reviews', $this->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->Review->id = $id;
        if (!$this->Review->exists()) {
            throw new NotFoundException(__('Invalid review'));
        }
        $this->set('review', $this->Review->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Review->create();
            $this->request->data['Review']['arrival'] = date("Y-m-d", strtotime($this->request->data['Review']['arrival']));
            $this->request->data['Review']['departure'] = date("Y-m-d", strtotime($this->request->data['Review']['departure']));
            $this->request->data['Review']['is_active'] = 1;
            if ($this->Review->save($this->request->data)) {
                if ($this->request->is('ajax')) {
                    echo json_encode(array('message' => 'Thank you for your feedback.'));
                } else {
                    $this->Session->setFlash(__('The review has been saved'));
                    $this->redirect(array('action' => 'index'));
                }
            } else {
                if ($this->request->is('ajax')) {
                    echo json_encode(array('test' => 'Error encountered. Failed to add your review.'));
                } else {
                    $this->Session->setFlash(__('The review could not be saved. Please, try again.'));
                }
            }
        }
        $properties = $this->Review->Property->find('list');
        $this->set(compact('properties'));
        if ($this->request->is('ajax')) {
            $this->layout = 'ajax';
            $this->autoRender = false;
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
        $this->Review->id = $id;
        if (!$this->Review->exists()) {
            throw new NotFoundException(__('Invalid review'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Review->save($this->request->data)) {
                $this->Session->setFlash(__('The review has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The review could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Review->read(null, $id);
        }
        $properties = $this->Review->Property->find('list');
        $this->set(compact('properties'));
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
        $this->Review->id = $id;
        if (!$this->Review->exists()) {
            throw new NotFoundException(__('Invalid review'));
        }
        if ($this->Review->delete()) {
            $this->Session->setFlash(__('Review deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Review was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

    public function display_review_element($propertyId) {
        $this->set('property_id', $propertyId);
        $this->render('/Elements/review');
    }

}
