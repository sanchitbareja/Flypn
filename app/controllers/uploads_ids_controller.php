<?php
class UploadsIdsController extends AppController {

	var $name = 'UploadsIds';

	function index() {
		$this->UploadsId->recursive = 0;
		$this->set('uploadsIds', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid uploads id', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('uploadsId', $this->UploadsId->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->UploadsId->create();
			if ($this->UploadsId->save($this->data)) {
				$this->Session->setFlash(__('The uploads id has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The uploads id could not be saved. Please, try again.', true));
			}
		}
		$uploads = $this->UploadsId->Upload->find('list');
		$tags = $this->UploadsId->Tag->find('list');
		$this->set(compact('uploads', 'tags'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid uploads id', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->UploadsId->save($this->data)) {
				$this->Session->setFlash(__('The uploads id has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The uploads id could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->UploadsId->read(null, $id);
		}
		$uploads = $this->UploadsId->Upload->find('list');
		$tags = $this->UploadsId->Tag->find('list');
		$this->set(compact('uploads', 'tags'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for uploads id', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->UploadsId->delete($id)) {
			$this->Session->setFlash(__('Uploads id deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Uploads id was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>