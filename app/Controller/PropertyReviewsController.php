<?php
App::uses('AppController', 'Controller');
/**
 * PropertyReviews Controller
 *
 * @property PropertyReview $PropertyReview
 */
class PropertyReviewsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PropertyReview->recursive = 0;
		$this->set('propertyReviews', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->PropertyReview->id = $id;
		if (!$this->PropertyReview->exists()) {
			throw new NotFoundException(__('Invalid property review'));
		}
		$this->set('propertyReview', $this->PropertyReview->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PropertyReview->create();
			if ($this->PropertyReview->save($this->request->data)) {
				$this->Session->setFlash(__('The property review has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The property review could not be saved. Please, try again.'));
			}
		}
		$properties = $this->PropertyReview->Property->find('list');
		$this->set(compact('properties'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->PropertyReview->id = $id;
		if (!$this->PropertyReview->exists()) {
			throw new NotFoundException(__('Invalid property review'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PropertyReview->save($this->request->data)) {
				$this->Session->setFlash(__('The property review has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The property review could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->PropertyReview->read(null, $id);
		}
		$properties = $this->PropertyReview->Property->find('list');
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
		$this->PropertyReview->id = $id;
		if (!$this->PropertyReview->exists()) {
			throw new NotFoundException(__('Invalid property review'));
		}
		if ($this->PropertyReview->delete()) {
			$this->Session->setFlash(__('Property review deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Property review was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
