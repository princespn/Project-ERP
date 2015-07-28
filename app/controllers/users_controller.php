<?php 

class UsersController extends AppController 
		{
	var $name = 'Users';
	var $components = array('Acl', 'Auth', 'Session');
	var $helpers = array('Access','Js','Javascript');
	
	function beforeFilter() 
				{    
		parent::beforeFilter();
		$this->Auth->allow(array('login','logout','index','edit','view','groups'));
		$this->Auth->userModel = 'User';  
       //$this->Auth->allow('*');  
   		$this->Session->activate();
				}
		 
			function login() {
				if (!empty($this->data))
				 {
					if ($this->Auth->login($this->data)) 
							{
						$this->redirect(array('controller' => 'projects', 'action' => 'index'));
							} 
					else 
							{
						$this->Session->setFlash('Your username or password was incorrect.');
							}
					}
								}

function logout()
    {
  
    		
    		$this->Session->destroy();
    		//$this->redirect($this->facebook->getLogoutUrl($params));
    
    	
       $this->Session->setFlash('You have succesfully logged out');
       $this->redirect($this->Auth->logout());
      
    }




    function add() {
		if (!empty($this->data)) {
			$this->User->create();
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The Users was created successfully.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->data = null;
				$this->Session->setFlash(__('The Users was not created. Please check the fields and try again.', true));
				
			}
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

						
						
		function index() {
				$this->User->recursive = 1;
				$this->paginate = array('limit' => 1000,'totallimit' => 2000,'order'=>'User.created  desc');
				$this->set('users', $this->paginate());
					
				
			}
			
	function view($id = null) {
						if (!$id) {
							$this->Session->setFlash(__('Invalid user', true));
							$this->redirect(array('action' => 'index'));
						}
						$this->set('user', $this->User->read(null, $id));
					}
	function edit($id = null) 
	{
			if (!$id && empty($this->data))
			 {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
			}
			if (!empty($this->data))
				 {
			 $user = $this->Session->read('User.username');
			  $someone = $this->User->findById($this->User->id);
					if (!empty($this->data['User']['new_password']))
							{
								if($this->data['User']['new_password'] != $this->data['User']['confirm_password']) 
								{
								$this->Session->setFlash(__('Your passwords do not match.', true));
								}
								else
								{
								$newpass = $this->Auth->password($this->data['User']['new_password']);
								$this->data['User']['password'] = $newpass;
									if ($this->User->save($this->data))
									{
									$this->Session->setFlash(__('The user has been updated successfully.', true));
									$this->redirect(array('action' => 'index'));
									} 
									else
									{
									$this->Session->setFlash(__('ERROR!! Please check the fields and try again.', true));
									}
								}												
				}			
			else
			{
				if ($this->User->save($this->data))
				{
				$this->Session->setFlash(__('The user has been updated successfully.', true));
				$this->redirect(array('action' => 'index'));
				} 
				else
				{
				$this->Session->setFlash(__('ERROR!! Please check the fields and try again.', true));
				}	
			}
	}
			if (empty($this->data))
			{
			$this->data = $this->User->read(null, $id);
			}
			$groups = $this->User->Group->find('list');
			$teams = $this->User->Team->find('list');
			$this->set(compact('teams'));
			$this->set(compact('groups'));
}
	
	function forgatepw ($id = null)
		{
		// $id = $this->User->findByUsername($this->data['User']['username']); 
			if (!$id && empty($this->data))
			 {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('controller' => 'projects', 'action' => 'index'));
			}
			if (!empty($this->data))
				 {
					 $dbuser = $this->User->findByUsername($this->data['User']['username']);
					 if(!empty($dbuser) && ($dbuser['User']['password'] == $this->Auth->password($this->data['User']['old_password'])))
			 					//if (!empty($this->data['User']['old_password']))
						{
								if($this->data['User']['new_password'] != $this->data['User']['confirm_password']) 
								{
								$this->Session->setFlash(__('Your passwords do not match.', true));
								}
								else
								{
								$newpass = $this->Auth->password($this->data['User']['new_password']);
								$this->data['User']['password'] = $newpass;
									if ($this->User->save($this->data))
									{
									$this->Session->setFlash(__('The user has been updated successfully.', true));
									$this->redirect(array('controller' => 'projects', 'action' => 'index'));
									} 
									else
									{
									$this->Session->setFlash(__('ERROR!! Please check the fields and try again.', true));
									}
								}												
						}			
					else
					{
							if ($this->User->save($this->data))
							{
							$this->Session->setFlash(__('The user has been updated successfully.', true));
							$this->redirect(array('controller' => 'projects', 'action' => 'index'));
							} 
							else
							{
							$this->Session->setFlash(__('ERROR!! Please fill correct old Password and try again.', true));
							}	
					}
		}
			if (empty($this->data))
			{
			$this->data = $this->User->read(null, $id);
			}
			$groups = $this->User->Group->find('list');
			$teams = $this->User->Team->find('list');
			$this->set(compact('teams'));
			$this->set(compact('groups'));
}

	function delete($id = null) {
					if (!$id) {
						$this->Session->setFlash(__('Invalid id for user', true));
						$this->redirect(array('action'=>'index'));
					}
					if ($this->User->delete($id)) {
						$this->Session->setFlash(__('The user was deleted successfully!', true));
						$this->redirect(array('action'=>'index'));
					}
					$this->Session->setFlash(__('ERROR!! The user could not be deleted!', true));
					$this->redirect(array('action' => 'index'));
				}

		function team() {
		$this->User->recursive = 1;
		//pr($this->Project->find('all'));
		$this->paginate = array('limit' => 1000,'totallimit' => 2000,'order'=>'User.team_id  ASC');
		$this->set('users', $this->paginate());
			
		//$this->User->recursive = 0;
		//$this->set('users', $this->paginate());
	}		

		}
