<?php
class LandscapesController extends AppController {

	var $name = 'Landscapes';
	var $components = array('Acl', 'Auth', 'Session','LoadsysAuth');
	var $helpers = array('Html', 'Form','Ajax','Javascript');
	
	
	function beforeFilter()
	{
		parent::beforeFilter();
		//$this->Auth->allow('*');
		//$this->Auth->allowedActions = array('index', 'view');
		 $this->Auth->allow(array('login','logout','team','viewlandscape'));
	}
	
	function addlandscape($id = null) {
		if (!empty($this->data)) {
			$this->Landscape->create();
			if ($this->Landscape->save($this->data)) {
				$this->Session->setFlash(__('The Landscapes Team Evalution was created successfully.', true));
				$this->redirect(array('controller'=>'users','action' => 'team'));
			} else {
				$this->Session->setFlash(__('ERROR!! Please check the fields and try again.', true));
			}
		}
		$conditions = array('User.id' => $id);
		$users = $this->Landscape->User->find('list',array('conditions' =>$conditions));
		$this->set(compact('users'));		
	}
	
	function viewlandscape($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Landscapes Team Evalution', true));
			$this->redirect(array('controller'=>'users','action' => 'team'));
		}
		$this->Landscape->recursive = 1;
		$conditions=array('Landscape.user_id'=>$id) ;
		$this->paginate = array('limit' => 1000,'totallimit' => 2000,'conditions'=>$conditions,'order'=>'Landscape.id desc');
		$this->set('landscapes', $this->paginate());
		
	}
	
}
