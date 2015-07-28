<?php
class TeamsController extends AppController {
	var $components = array('Acl', 'Auth', 'Session');
	var $helpers = array('Access');
	var $name = 'Teams';
	
	
	function beforeFilter()
	{
		parent::beforeFilter();
		//$this->Auth->allow('*');
		//$this->Auth->allowedActions = array('index', 'view');
		 $this->Auth->allow(array('login','logout','team'));
	}


		function index() {
					
		$this->Team->recursive = 1;
		$this->paginate = array('limit' => 1000,'totallimit' => 2000);
		$this->set('teams', $this->paginate());
	}	


}
