<?php
App::uses('AppController', 'Controller');
/**
 * MiscellaneousItems Controller
 *
 * @property MiscellaneousItem $MiscellaneousItem
 */
class MiscellaneousItemsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->MiscellaneousItem->recursive = 0;
		$this->set('miscellaneousItems', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->MiscellaneousItem->id = $id;
		if (!$this->MiscellaneousItem->exists()) {
			throw new NotFoundException(__('Invalid miscellaneous item'));
		}
		$this->set('miscellaneousItem', $this->MiscellaneousItem->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MiscellaneousItem->create();
			if ($this->MiscellaneousItem->save($this->request->data)) {
				$this->Session->setFlash(__('The miscellaneous item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The miscellaneous item could not be saved. Please, try again.'));
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
		$this->MiscellaneousItem->id = $id;
		if (!$this->MiscellaneousItem->exists()) {
			throw new NotFoundException(__('Invalid miscellaneous item'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->MiscellaneousItem->save($this->request->data)) {
				$this->Session->setFlash(__('The miscellaneous item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The miscellaneous item could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->MiscellaneousItem->read(null, $id);
		}
		$properties = $this->MiscellaneousItem->Property->find('list');
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
		$this->MiscellaneousItem->id = $id;
		if (!$this->MiscellaneousItem->exists()) {
			throw new NotFoundException(__('Invalid miscellaneous item'));
		}
		if ($this->MiscellaneousItem->delete()) {
			$this->Session->setFlash(__('Miscellaneous item deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Miscellaneous item was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
