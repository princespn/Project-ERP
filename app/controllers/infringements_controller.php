<?php
class InfringementsController extends AppController {

	var $name = 'Infringements';
	var $components = array('Acl', 'Auth', 'Session','LoadsysAuth');
	var $helpers = array('Html', 'Form','Ajax','Javascript');
	
	
	function beforeFilter()
	{
		parent::beforeFilter();
		//$this->Auth->allow('*');
		//$this->Auth->allowedActions = array('index', 'view');
		 $this->Auth->allow(array('login','logout','team','viewevalution'));
	}
	
	function addevalution($id = null)
	 {
		
		
		if (!empty($this->data)) {
			$this->Infringement->create();
			if ($this->Infringement->save($this->data)) {
			//	$this->Session->setFlash(__('The Infringement Team Evalution was created successfully.', true));
				$this->redirect(array('controller'=>'users','action' => 'team'));
			} else {
				$this->Session->setFlash(__('ERROR!! Please check the fields and try again.', true));
			}
		}
		
		$conditions = array('User.id' => $id);
		$users = $this->Infringement->User->find('list',array('conditions' =>$conditions));
		$this->set(compact('users')); 

				
	
	}
	
	function viewevalution($id = null) {
		 
		if (!$id) {
		
			
			$this->Session->setFlash(__('Invalid Infringement Team Evalution', true));
			$this->redirect(array('controller'=>'users','action' => 'team'));
		}
			 
	   
		$this->Infringement->recursive = 1;
		$conditions=array('Infringement.user_id'=>$id) ;
		$this->paginate = array('limit' => 1000,'totallimit' => 2000,'conditions'=>$conditions,'order'=>'Infringement.id desc');
		$this->set('infringements', $this->paginate());
		
	}
	
}
