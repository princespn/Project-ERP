<?php
class ProjectsController extends AppController {

	var $name = 'Projects';
	//var $components = array('Acl', 'Auth', 'Session');
	//var $helpers = array('Html', 'Form','Ajax','Javascript','Access');
	
	var $components = array('Acl', 'Auth', 'Session','RequestHandler');
	var $helpers = array('Html', 'Form','Ajax','Javascript','Js','Access');
	
	function beforeFilter()
	{
		parent::beforeFilter();
		//$this->Auth->allow('*');
		//$this->Auth->allowedActions = array('index', 'view');
		 $this->Auth->allow(array('login','logout','index','edit','view','groups'));
	}
	
	function index($projectstatus = null) {
		if (!$projectstatus) {
			
		$this->Project->recursive = 1;
		//pr($this->Project->find('all'));
		$this->paginate = array('limit' => 1000,'totallimit' => 2000,'order'=>'Project.start_date  desc');
		$this->set('projects', $this->paginate());
				
		}
		else
		{
		$this->Project->recursive = 1;
		$conditions = array('Project.project_status' => $projectstatus);
		$this->paginate = array('limit' => 1000,'totallimit' => 2000,'order'=>'Project.start_date  desc','conditions' => $conditions);
		$this->set('projects', $this->paginate());
		
		}
	}
	function srauserlist() {
		// $allusers = $this->Project->User->find('list');
		$allusers = $this->Project->User->find('list', array(
		'fields' => array('User.username', 'User.username'),
		'conditions' => array('User.group_id' => '6'),
		'recursive' => 0));
		return $allusers;
	}
	
	function rauserlist() {
		// $allusers = $this->Project->User->find('list');
		$allusers = $this->Project->User->find('list', array(
		'fields' => array('User.username', 'User.username'),
		'conditions' => array('User.group_id' => '7'),
		'recursive' => 0));
		return $allusers;
	}
	
	function userlist() {
		// $allusers = $this->Project->User->find('list');
		$allusers = $this->Project->User->find('list', array(
		'fields' => array('User.username', 'User.username'),
		'conditions' => array('User.group_id' => '5'),
		'recursive' => 0));
		return $allusers;
		
	}
	function clientlist() {
		// $allusers = $this->Project->User->find('list');
		$allclients = $this->Project->User->find('list', array(
		'fields' => array('User.id', 'User.username'),
		'conditions' => array('User.group_id' => '3'),
		'recursive' => 0));
		return $allclients;
		
	}
	function assign($id = null) {
					
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid project', true));
			$this->redirect(array('action' => 'index'));
			}
		if (!empty($this->data)) {
			if(!empty($this->data['Project']['sr_research_associate']))
			{
					
			$this->data['Project']['sr_research_associate'] = implode(',', $this->data['Project']['sr_research_associate']);	
			$this->data['Project']['research_associate'] = implode(',', $this->data['Project']['research_associate']);
			}
				if ($this->Project->save($this->data['Project'])) {
						$this->Session->setFlash(__('The project was saved successfully', true));
						$this->redirect(array('action' => 'index'));
						} 
				else {
				$this->Session->setFlash(__('ERROR!! Please check the fields and try again.', true));
					}
		}
		if (empty($this->data)) {
			$this->data = $this->Project->read(null, $id);
		}
		$users = $this->Project->User->find('list');
		$this->set(compact('users'));
	}
	
	

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid project', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('project', $this->Project->read(null, $id));
	}
	function viewc($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid project', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('project', $this->Project->read(null, $id));
	}
	
	
	function coment($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid project', true));
			$this->redirect(array('action' => 'index'));
		}
		
		$this->set('project', $this->Project->read(null, $id));
	}
	
	function comentc($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid project', true));
			$this->redirect(array('action' => 'index'));
		}
		
		$this->set('project', $this->Project->read(null, $id));
			}
	
	
	
	
	
	
	
	function add($id = null) {
		if (!empty($this->data)) {
			
			if(!empty($this->data['Project']['sr_research_associate']))
			{
					
			$this->data['Project']['sr_research_associate'] = implode(',', $this->data['Project']['sr_research_associate']);	
			$this->data['Project']['research_associate'] = implode(',', $this->data['Project']['research_associate']);
			}
			
			if ($this->Project->save($this->data['Project'])) {
				$this->Session->setFlash(__('The project was created successfully.', true));
				$this->redirect(array('action' => 'index'));
					} 
			else {
				$this->Session->setFlash(__('ERROR!! Please check the fields and try again.', true));
			
				}
		}
		
		$users = $this->Project->User->find('list');
		$this->set(compact('users'));
	}
	

	function edit($id = null) {
		
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid project', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			 
			 if(!empty($this->data['Project']['sr_research_associate']))
			{
			
			$this->data['Project']['sr_research_associate'] = implode(',', $this->data['Project']['sr_research_associate']);	
			$this->data['Project']['research_associate'] = implode(',', $this->data['Project']['research_associate']);
			}
		
				if ($this->Project->save($this->data['Project'])) {
						$this->Session->setFlash(__('The project was saved successfully', true));
						$this->redirect(array('action' => 'index'));
						} 
				else {
				$this->Session->setFlash(__('ERROR!! Please check the fields and try again.', true));
			
					}
		}
		if (empty($this->data)) {
			$this->data = $this->Project->read(null, $id);
		}
		$users = $this->Project->User->find('list');
		$this->set(compact('users'));
	}
	
	
	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Project ID in database.', true));
			$this->redirect(array('action'=>'index'));
		}
		else  {
			
				if($this->Project->delete($id))
				{

					$this->Session->setFlash(__('Project and related attachments were deleted successfully.', true));
					$this->redirect(array('action'=>'index'));
				}
			
			}
		$this->Session->setFlash(__('ERROR!! Project could not be deleted!', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Project->recursive = 1;
		$this->set('projects', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid project',true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('project', $this->Project->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Project->create();
			if ($this->Project->save($this->data)) {
				$this->Session->setFlash(__('The project was created successfully.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('ERROR!! Please check the fields and try again.', true));
			}
		}
		$users = $this->Project->User->find('list');
		$this->set(compact('users'));
	}

	function admin_edit($id = null) {
		//print_r($this->data);die();
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid project', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {


			if ($this->Project->save($this->data)) {
				$this->Session->setFlash(__('The project was saved successfully', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('ERROR!! Please check the fields and try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Project->read(null, $id);
		}
		$users = $this->Project->User->find('list');
		$this->set(compact('users'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for project', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Project->delete($id)) {
			$this->Session->setFlash(__('Project was deleted successfully.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('ERROR!! Project could not be  deleted!', true));
		$this->redirect(array('action' => 'index'));
	}
}

