<?php
App::uses('AppController', 'Controller');
/**
 * TmpUploadPhotos Controller
 *
 * @property TmpUploadPhoto $TmpUploadPhoto
 */
class TmpUploadPhotosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->TmpUploadPhoto->recursive = 0;
		$this->set('tmpUploadPhotos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->TmpUploadPhoto->id = $id;
		if (!$this->TmpUploadPhoto->exists()) {
			throw new NotFoundException(__('Invalid tmp upload photo'));
		}
		$this->set('tmpUploadPhoto', $this->TmpUploadPhoto->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TmpUploadPhoto->create();
			if ($this->TmpUploadPhoto->save($this->request->data)) {
				$this->Session->setFlash(__('The tmp upload photo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tmp upload photo could not be saved. Please, try again.'));
			}
		}
		$sessions = $this->TmpUploadPhoto->Session->find('list');
		$this->set(compact('sessions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->TmpUploadPhoto->id = $id;
		if (!$this->TmpUploadPhoto->exists()) {
			throw new NotFoundException(__('Invalid tmp upload photo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TmpUploadPhoto->save($this->request->data)) {
				$this->Session->setFlash(__('The tmp upload photo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tmp upload photo could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->TmpUploadPhoto->read(null, $id);
		}
		$sessions = $this->TmpUploadPhoto->Session->find('list');
		$this->set(compact('sessions'));
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
		$this->TmpUploadPhoto->id = $id;
		if (!$this->TmpUploadPhoto->exists()) {
			throw new NotFoundException(__('Invalid tmp upload photo'));
		}
		if ($this->TmpUploadPhoto->delete()) {
			$this->Session->setFlash(__('Tmp upload photo deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Tmp upload photo was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
