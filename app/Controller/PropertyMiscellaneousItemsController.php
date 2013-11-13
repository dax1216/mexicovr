<?php
App::uses('AppController', 'Controller');
/**
 * PropertyMiscellaneousItems Controller
 *
 * @property PropertyMiscellaneousItem $PropertyMiscellaneousItem
 */
class PropertyMiscellaneousItemsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PropertyMiscellaneousItem->recursive = 0;
		$this->set('propertyMiscellaneousItems', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->PropertyMiscellaneousItem->id = $id;
		if (!$this->PropertyMiscellaneousItem->exists()) {
			throw new NotFoundException(__('Invalid property miscellaneous item'));
		}
		$this->set('propertyMiscellaneousItem', $this->PropertyMiscellaneousItem->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PropertyMiscellaneousItem->create();
			if ($this->PropertyMiscellaneousItem->save($this->request->data)) {
				$this->Session->setFlash(__('The property miscellaneous item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The property miscellaneous item could not be saved. Please, try again.'));
			}
		}
		$properties = $this->PropertyMiscellaneousItem->Property->find('list');
		$miscellaneousItems = $this->PropertyMiscellaneousItem->MiscellaneousItem->find('list');
		$this->set(compact('properties', 'miscellaneousItems'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->PropertyMiscellaneousItem->id = $id;
		if (!$this->PropertyMiscellaneousItem->exists()) {
			throw new NotFoundException(__('Invalid property miscellaneous item'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PropertyMiscellaneousItem->save($this->request->data)) {
				$this->Session->setFlash(__('The property miscellaneous item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The property miscellaneous item could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->PropertyMiscellaneousItem->read(null, $id);
		}
		$properties = $this->PropertyMiscellaneousItem->Property->find('list');
		$miscellaneousItems = $this->PropertyMiscellaneousItem->MiscellaneousItem->find('list');
		$this->set(compact('properties', 'miscellaneousItems'));
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
		$this->PropertyMiscellaneousItem->id = $id;
		if (!$this->PropertyMiscellaneousItem->exists()) {
			throw new NotFoundException(__('Invalid property miscellaneous item'));
		}
		if ($this->PropertyMiscellaneousItem->delete()) {
			$this->Session->setFlash(__('Property miscellaneous item deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Property miscellaneous item was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
