<?php
App::uses('AppController', 'Controller');
/**
 * TmpUploads Controller
 *
 * @property TmpUpload $TmpUpload
 */
class TmpUploadsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->TmpUpload->recursive = 0;
		$this->set('tmpUploads', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->TmpUpload->id = $id;
		if (!$this->TmpUpload->exists()) {
			throw new NotFoundException(__('Invalid tmp upload'));
		}
		$this->set('tmpUpload', $this->TmpUpload->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TmpUpload->create();
			if ($this->TmpUpload->save($this->request->data)) {
				$this->Session->setFlash(__('The tmp upload has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tmp upload could not be saved. Please, try again.'));
			}
		}
		$sessions = $this->TmpUpload->Session->find('list');
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
		$this->TmpUpload->id = $id;
		if (!$this->TmpUpload->exists()) {
			throw new NotFoundException(__('Invalid tmp upload'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TmpUpload->save($this->request->data)) {
				$this->Session->setFlash(__('The tmp upload has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tmp upload could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->TmpUpload->read(null, $id);
		}
		$sessions = $this->TmpUpload->Session->find('list');
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
		$this->TmpUpload->id = $id;
		if (!$this->TmpUpload->exists()) {
			throw new NotFoundException(__('Invalid tmp upload'));
		}
		if ($this->TmpUpload->delete()) {
			$this->Session->setFlash(__('Tmp upload deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Tmp upload was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
