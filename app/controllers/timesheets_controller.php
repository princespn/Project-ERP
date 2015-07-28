<?php
class TimesheetsController extends AppController {

	var $name = 'Timesheets';
	var $components = array('Acl', 'Auth', 'Session','Email');
	var $helpers = array('Html', 'Form','Ajax','Javascript');
	
	function beforeFilter()
	{
		parent::beforeFilter();
		$this->Auth->allow('*');
	
	
		//$this->Auth->allowedActions = array('index', 'view');
		// $this->Auth->allow(array('login','logout','index','edit','view','groups'));
	}
	
	function index() {
		 $this->Timesheet->recursive = 1;
		$this->paginate = array('limit' => 1000,'totallimit' => 2000,'order'=>'Timesheet.user_id  desc');
		$this->set('timesheets', $this->paginate());
				
		}
		
	function add($id=null) {
			
			if (!empty($this->data)) {
			$this->Timesheet->create();
			if ($this->Timesheet->save($this->data)) 
			{
				
				$this->redirect(array('controller'=>'timesheets','action' => 'index'));
			} else {
				$this->Session->setFlash(__('ERROR!! Please check the fields and try again.', true));
			}
		}
		
		$users = $this->Timesheet->Project->find();
		$this->set(compact('projects')); 
	}
		
		
		function projectsralist() {
			
					$usercondition = $this->Auth->user('username');			
					
					$allprojects = $this->Timesheet->Project->find('list', array(
					'fields' => array('Project.id', 'Project.project_code'),
					'conditions' => array('Project.project_status' =>'In Process'),
					'recursive' => 0));
					return $allprojects;
					}
					
		function projectralist() {
			
					$usercondition = $this->Auth->user('username');			
					
					$allprojects = $this->Timesheet->Project->find('list', array(
					'fields' => array('Project.id', 'Project.project_code'),
					'conditions' => array('Project.project_status' =>'In Process'),
					'recursive' => 0));
					return $allprojects;
					}
			function projecttllist() {
			
						$usercondition = $this->Auth->user('username');			
						
						$allprojects = $this->Timesheet->Project->find('list', array(
						'fields' => array('Project.id', 'Project.project_code'),
						'conditions' => array('Project.project_status' =>'In Process','Project.assigned_to' =>$usercondition),
						//'conditions' => array('Project.project_status' =>'In Process','Project.project_status' =>'Re Opened'),
						'recursive' => 0));
						return $allprojects;
					}

		function userlist() {
		$usercondition = $this->Auth->user('username');			

		
		$allusers = $this->Timesheet->User->find('list', array(
		'fields' => array('User.id', 'User.username'),
		'conditions' => array('User.group_id' => array(6,7,5),'User.username' =>$usercondition),
		'order'=> array('User.id DESC'),
		'recursive' => 0));
		return $allusers;
					}
	
	function teamlist() {
			$usercondition = $this->Auth->user('username');	
			$allteams = $this->Timesheet->User->find('list', array(
		'fields' => array('User.team_id', 'User.team_id'),
		'conditions' => array('User.username'=>$usercondition),
		'recursive' => 0));
		return $allteams;
					}
	
	
				function edit($id = null) {
					
					if (!$id && empty($this->data)) {
						$this->Session->setFlash(__('Invalid project', true));
						$this->redirect(array('action' => 'index'));
					}
					
			
			if (!empty($this->data)) {
			
			if ($this->Timesheet->save($this->data['Timesheet'])) 
			{
				$this->Session->setFlash(__('The Timesheet was saved successfully', true));
				$this->redirect(array('controller'=>'timesheets','action' => 'index'));
			} else {
				$this->Session->setFlash(__('ERROR!! Please check the fields and try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Timesheet->read(null, $id);
		}
		$users = $this->Timesheet->User->find('list');
		$this->set(compact('users'));
	}
	
	
			function view($id = null) {
					if (!$id) {
					$this->Session->setFlash(__('Invalid project', true));
					$this->redirect(array('action' => 'index'));
				}
				$this->set('timesheet', $this->Timesheet->read(null, $id));
			}
					
	function email($id =null){
			
	$User = $this->User->read(null,$id);
	
    $this->Email->to = array('amit.tiwari@in.greyb.com'); 
    $this->Email->from = 'amit.tiwari@in.greyb.com';
    $this->Email->subject = 'Welcome to leave management system';
    $this->Email->template = 'template'; 
    $this->Email->sendAs = 'text'; 
    $this->Email->smtpOptions = array(
        'port'=>'465', 
        'timeout'=>'30',
        'auth' => true,
        'host' => 'ssl://smtp.gmail.com',
        'username'=>'amit.tiwari@in.greyb.com',
        'password'=>'amit321',);
        
    $this->set('User', $User);
    $this->Email->delivery = 'smtp';
    $this->Email->send();
    $this->set('smtp_errors', $this->Email->smtpError);

		}

	}
