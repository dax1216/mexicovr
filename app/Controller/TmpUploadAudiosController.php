<?php
App::uses('AppController', 'Controller');
/**
 * TmpUploadAudios Controller
 *
 * @property TmpUploadAudio $TmpUploadAudio
 */
class TmpUploadAudiosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->TmpUploadAudio->recursive = 0;
		$this->set('tmpUploadAudios', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->TmpUploadAudio->id = $id;
		if (!$this->TmpUploadAudio->exists()) {
			throw new NotFoundException(__('Invalid tmp upload audio'));
		}
		$this->set('tmpUploadAudio', $this->TmpUploadAudio->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TmpUploadAudio->create();
			if ($this->TmpUploadAudio->save($this->request->data)) {
				$this->Session->setFlash(__('The tmp upload audio has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tmp upload audio could not be saved. Please, try again.'));
			}
		}
		$sessions = $this->TmpUploadAudio->Session->find('list');
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
		$this->TmpUploadAudio->id = $id;
		if (!$this->TmpUploadAudio->exists()) {
			throw new NotFoundException(__('Invalid tmp upload audio'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TmpUploadAudio->save($this->request->data)) {
				$this->Session->setFlash(__('The tmp upload audio has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tmp upload audio could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->TmpUploadAudio->read(null, $id);
		}
		$sessions = $this->TmpUploadAudio->Session->find('list');
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
		$this->TmpUploadAudio->id = $id;
		if (!$this->TmpUploadAudio->exists()) {
			throw new NotFoundException(__('Invalid tmp upload audio'));
		}
		if ($this->TmpUploadAudio->delete()) {
			$this->Session->setFlash(__('Tmp upload audio deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Tmp upload audio was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
