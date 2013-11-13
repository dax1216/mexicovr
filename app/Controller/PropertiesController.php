<?php
App::uses('AppController', 'Controller');
/**
 * Properties Controller
 *
 * @property Property $Property
 */
class PropertiesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Property->recursive = 0;
		$this->set('properties', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Property->id = $id;
		if (!$this->Property->exists()) {
			throw new NotFoundException(__('Invalid property'));
		}
		$this->set('property', $this->Property->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Property->create();
			if ($this->Property->save($this->request->data)) {
				$this->Session->setFlash(__('The property has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The property could not be saved. Please, try again.'));
			}
		}
		$cities = $this->Property->City->find('list');
		$this->set(compact('cities'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Property->id = $id;
		if (!$this->Property->exists()) {
			throw new NotFoundException(__('Invalid property'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Property->save($this->request->data)) {
				$this->Session->setFlash(__('The property has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The property could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Property->read(null, $id);
		}
		$cities = $this->Property->City->find('list');
		$this->set(compact('cities'));
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
		$this->Property->id = $id;
		if (!$this->Property->exists()) {
			throw new NotFoundException(__('Invalid property'));
		}
		if ($this->Property->delete()) {
			$this->Session->setFlash(__('Property deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Property was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
