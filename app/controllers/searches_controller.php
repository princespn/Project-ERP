<?php
class SearchesController extends AppController {

	var $name = 'Searches';
	var $components = array('Acl', 'Auth', 'Session','LoadsysAuth');
	var $helpers = array('Html', 'Form','Ajax','Javascript');
	
	
	function beforeFilter()
	{
		parent::beforeFilter();
		//$this->Auth->allow('*');
		//$this->Auth->allowedActions = array('index', 'view');
		 $this->Auth->allow(array('login','logout','team','viewsearch'));
	}
	
	function addsearch($id = null) {
		        

		if (!empty($this->data)) {
			$this->Search->create();
			if ($this->Search->save($this->data)) {
				$this->Session->setFlash(__('The Search Team Evalution was created successfully.', true));
				$this->redirect(array('controller'=>'users','action' => 'team'));
			} else {
				$this->Session->setFlash(__('ERROR!! Please check the fields and try again.', true));
			}
		}
		$conditions = array('User.id' => $id);
		$users = $this->Search->User->find('list',array('conditions' =>$conditions));
		$this->set(compact('users')); 
	}
	
	function viewsearch($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Search Team Evalution', true));
			$this->redirect(array('controller'=>'users','action' => 'team'));
			
		}
                $this->Search->recursive = 1;
		$conditions=array('Search.user_id'=>$id) ;
		$this->paginate = array('limit' => 1000,'totallimit' => 2000,'conditions'=>$conditions,'order'=>'Search.id desc');
		$this->set('searches', $this->paginate());
		
		
	}
	
}
