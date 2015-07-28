<?php 

class AppController extends Controller 
		{
			var $components = array('Acl', 'Auth', 'Session');
			var $helpers = array('Html', 'Form', 'Session','Javascript','Ajax');
	
	
	
			function beforeFilter() {
					//Configure AuthComponent
					$this->Auth->authorize = 'actions';
					$this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
					$this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login');
					$this->Auth->loginRedirect = array('controller' => 'projects', 'action' => 'index');
					$this->Auth->Session->start();
					$this->Cookie->secure = false;
					//$auth = $this->Auth->user();
							}							
					
		}
