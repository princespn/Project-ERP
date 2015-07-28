<?php
class PharmasController extends AppController {

	var $name = 'Pharmas';
	var $components = array('Acl', 'Auth', 'Session','LoadsysAuth');
	var $helpers = array('Html', 'Form','Ajax','Javascript');
	
	
	function beforeFilter()
	{
		parent::beforeFilter();
		//$this->Auth->allow('*');
		//$this->Auth->allowedActions = array('index', 'view');
		 $this->Auth->allow(array('login','logout','team','viewpharma'));
	}
	
	
	function addpharma($id = null) {
		if (!empty($this->data)) {
			$this->Pharma->create();
			if ($this->Pharma->save($this->data)) {
				$this->Session->setFlash(__('The Pharmas Team Evalution was created successfully.', true));
				$this->redirect(array('controller'=>'users','action' => 'team'));
			} else {
				$this->Session->setFlash(__('ERROR!! Please check the fields and try again.', true));
			}
		}
		$conditions = array('User.id' => $id);
		$users = $this->Pharma->User->find('list',array('conditions' =>$conditions));
		$this->set(compact('users'));
	}
	
	function viewpharma($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Pharmas Team Evalution', true));
			$this->redirect(array('controller'=>'users','action' => 'team'));
		}
		$this->Pharma->recursive = 1;
		$conditions=array('Pharma.user_id'=>$id) ;
		$this->paginate = array('limit' => 1000,'totallimit' => 2000,'conditions'=>$conditions,'order'=>'Pharma.id desc');
		$this->set('pharmas', $this->paginate());
		
	}
	
}
