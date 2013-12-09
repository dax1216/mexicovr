<?php
App::uses('AppController', 'Controller');
/**
 * PropertyReservations Controller
 *
 * @property PropertyReservation $PropertyReservation
 */
class PropertyReservationsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PropertyReservation->recursive = 0;
		$this->set('propertyReservations', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->PropertyReservation->id = $id;
		if (!$this->PropertyReservation->exists()) {
			throw new NotFoundException(__('Invalid property reservation'));
		}
		$this->set('propertyReservation', $this->PropertyReservation->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PropertyReservation->create();
			if ($this->PropertyReservation->save($this->request->data)) {
				$this->Session->setFlash(__('The property reservation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The property reservation could not be saved. Please, try again.'));
			}
		}
		$properties = $this->PropertyReservation->Property->find('list');
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
		$this->PropertyReservation->id = $id;
		if (!$this->PropertyReservation->exists()) {
			throw new NotFoundException(__('Invalid property reservation'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PropertyReservation->save($this->request->data)) {
				$this->Session->setFlash(__('The property reservation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The property reservation could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->PropertyReservation->read(null, $id);
		}
		$properties = $this->PropertyReservation->Property->find('list');
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
		$this->PropertyReservation->id = $id;
		if (!$this->PropertyReservation->exists()) {
			throw new NotFoundException(__('Invalid property reservation'));
		}
		if ($this->PropertyReservation->delete()) {
			$this->Session->setFlash(__('Property reservation deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Property reservation was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
