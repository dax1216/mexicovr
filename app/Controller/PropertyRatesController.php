<?php
App::uses('AppController', 'Controller');
/**
 * PropertyRates Controller
 *
 * @property PropertyRate $PropertyRate
 */
class PropertyRatesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PropertyRate->recursive = 0;
		$this->set('propertyRates', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->PropertyRate->id = $id;
		if (!$this->PropertyRate->exists()) {
			throw new NotFoundException(__('Invalid property rate'));
		}
		$this->set('propertyRate', $this->PropertyRate->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PropertyRate->create();
			if ($this->PropertyRate->save($this->request->data)) {
				$this->Session->setFlash(__('The property rate has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The property rate could not be saved. Please, try again.'));
			}
		}
		$properties = $this->PropertyRate->Property->find('list');
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
		$this->PropertyRate->id = $id;
		if (!$this->PropertyRate->exists()) {
			throw new NotFoundException(__('Invalid property rate'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PropertyRate->save($this->request->data)) {
				$this->Session->setFlash(__('The property rate has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The property rate could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->PropertyRate->read(null, $id);
		}
		$properties = $this->PropertyRate->Property->find('list');
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
		$this->PropertyRate->id = $id;
		if (!$this->PropertyRate->exists()) {
			throw new NotFoundException(__('Invalid property rate'));
		}
		if ($this->PropertyRate->delete()) {
			$this->Session->setFlash(__('Property rate deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Property rate was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
