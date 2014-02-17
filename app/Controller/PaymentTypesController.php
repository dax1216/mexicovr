<?php
App::uses('AppController', 'Controller');
/**
 * PaymentTypes Controller
 *
 * @property PaymentType $PaymentType
 */
class PaymentTypesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PaymentType->recursive = 0;
		$this->set('paymentTypes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->PaymentType->id = $id;
		if (!$this->PaymentType->exists()) {
			throw new NotFoundException(__('Invalid payment type'));
		}
		$this->set('paymentType', $this->PaymentType->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PaymentType->create();
			if ($this->PaymentType->save($this->request->data)) {
				$this->Session->setFlash(__('The payment type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The payment type could not be saved. Please, try again.'));
			}
		}
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
		$this->PaymentType->id = $id;
		if (!$this->PaymentType->exists()) {
			throw new NotFoundException(__('Invalid payment type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PaymentType->save($this->request->data)) {
				$this->Session->setFlash(__('The payment type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The payment type could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->PaymentType->read(null, $id);
		}
		$properties = $this->PaymentType->Property->find('list');
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
		$this->PaymentType->id = $id;
		if (!$this->PaymentType->exists()) {
			throw new NotFoundException(__('Invalid payment type'));
		}
		if ($this->PaymentType->delete()) {
			$this->Session->setFlash(__('Payment type deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Payment type was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
