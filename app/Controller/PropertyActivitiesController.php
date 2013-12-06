<?php
App::uses('AppController', 'Controller');
/**
 * PropertyActivities Controller
 *
 * @property PropertyActivity $PropertyActivity
 */
class PropertyActivitiesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PropertyActivity->recursive = 0;
		$this->set('propertyActivities', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->PropertyActivity->id = $id;
		if (!$this->PropertyActivity->exists()) {
			throw new NotFoundException(__('Invalid property activity'));
		}
		$this->set('propertyActivity', $this->PropertyActivity->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PropertyActivity->create();
			if ($this->PropertyActivity->save($this->request->data)) {
				$this->Session->setFlash(__('The property activity has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The property activity could not be saved. Please, try again.'));
			}
		}
		$properties = $this->PropertyActivity->Property->find('list');
		$activities = $this->PropertyActivity->Activity->find('list');
		$this->set(compact('properties', 'activities'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->PropertyActivity->id = $id;
		if (!$this->PropertyActivity->exists()) {
			throw new NotFoundException(__('Invalid property activity'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PropertyActivity->save($this->request->data)) {
				$this->Session->setFlash(__('The property activity has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The property activity could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->PropertyActivity->read(null, $id);
		}
		$properties = $this->PropertyActivity->Property->find('list');
		$activities = $this->PropertyActivity->Activity->find('list');
		$this->set(compact('properties', 'activities'));
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
		$this->PropertyActivity->id = $id;
		if (!$this->PropertyActivity->exists()) {
			throw new NotFoundException(__('Invalid property activity'));
		}
		if ($this->PropertyActivity->delete()) {
			$this->Session->setFlash(__('Property activity deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Property activity was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
