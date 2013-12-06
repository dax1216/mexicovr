<?php
App::uses('AppController', 'Controller');
/**
 * PropertyPaymentTypes Controller
 *
 * @property PropertyPaymentType $PropertyPaymentType
 */
class PropertyPaymentTypesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PropertyPaymentType->recursive = 0;
		$this->set('propertyPaymentTypes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->PropertyPaymentType->id = $id;
		if (!$this->PropertyPaymentType->exists()) {
			throw new NotFoundException(__('Invalid property payment type'));
		}
		$this->set('propertyPaymentType', $this->PropertyPaymentType->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PropertyPaymentType->create();
			if ($this->PropertyPaymentType->save($this->request->data)) {
				$this->Session->setFlash(__('The property payment type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The property payment type could not be saved. Please, try again.'));
			}
		}
		$properties = $this->PropertyPaymentType->Property->find('list');
		$paymentTypes = $this->PropertyPaymentType->PaymentType->find('list');
		$this->set(compact('properties', 'paymentTypes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->PropertyPaymentType->id = $id;
		if (!$this->PropertyPaymentType->exists()) {
			throw new NotFoundException(__('Invalid property payment type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PropertyPaymentType->save($this->request->data)) {
				$this->Session->setFlash(__('The property payment type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The property payment type could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->PropertyPaymentType->read(null, $id);
		}
		$properties = $this->PropertyPaymentType->Property->find('list');
		$paymentTypes = $this->PropertyPaymentType->PaymentType->find('list');
		$this->set(compact('properties', 'paymentTypes'));
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
		$this->PropertyPaymentType->id = $id;
		if (!$this->PropertyPaymentType->exists()) {
			throw new NotFoundException(__('Invalid property payment type'));
		}
		if ($this->PropertyPaymentType->delete()) {
			$this->Session->setFlash(__('Property payment type deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Property payment type was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
