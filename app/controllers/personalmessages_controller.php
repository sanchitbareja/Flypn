<?php
class PersonalmessagesController extends AppController {

	var $name = 'Personalmessages';

	function index() {
		$this->Personalmessage->recursive = 0;
		$this->set('personalmessages', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid personalmessage', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('personalmessage', $this->Personalmessage->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Personalmessage->create();
			if ($this->Personalmessage->save($this->data)) {
				$this->Session->setFlash(__('The personalmessage has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The personalmessage could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid personalmessage', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Personalmessage->save($this->data)) {
				$this->Session->setFlash(__('The personalmessage has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The personalmessage could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Personalmessage->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for personalmessage', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Personalmessage->delete($id)) {
			$this->Session->setFlash(__('Personalmessage deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Personalmessage was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>