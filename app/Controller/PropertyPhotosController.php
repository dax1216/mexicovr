<?php
App::uses('AppController', 'Controller');
/**
 * PropertyPhotos Controller
 *
 * @property PropertyPhoto $PropertyPhoto
 */
class PropertyPhotosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PropertyPhoto->recursive = 0;
		$this->set('propertyPhotos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->PropertyPhoto->id = $id;
		if (!$this->PropertyPhoto->exists()) {
			throw new NotFoundException(__('Invalid property photo'));
		}
		$this->set('propertyPhoto', $this->PropertyPhoto->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PropertyPhoto->create();
			if ($this->PropertyPhoto->save($this->request->data)) {
				$this->Session->setFlash(__('The property photo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The property photo could not be saved. Please, try again.'));
			}
		}
		$properties = $this->PropertyPhoto->Property->find('list');
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
		$this->PropertyPhoto->id = $id;
		if (!$this->PropertyPhoto->exists()) {
			throw new NotFoundException(__('Invalid property photo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PropertyPhoto->save($this->request->data)) {
				$this->Session->setFlash(__('The property photo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The property photo could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->PropertyPhoto->read(null, $id);
		}
		$properties = $this->PropertyPhoto->Property->find('list');
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
		$this->PropertyPhoto->id = $id;
		if (!$this->PropertyPhoto->exists()) {
			throw new NotFoundException(__('Invalid property photo'));
		}
		if ($this->PropertyPhoto->delete()) {
			$this->Session->setFlash(__('Property photo deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Property photo was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
