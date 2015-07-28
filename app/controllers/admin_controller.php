<?php
class AdminController extends AppController {

	var $name = 'Admin';
	var $uses = null;
	
/**
	 * ==========================================================
	 * BEFOREFILTER
	 * ==========================================================
	 * 
	 * Purpose : Initialize the global setup
	 */
	function beforeFilter() 
	{
		parent::beforeFilter();
		$this->params['prefix'] = 'admin';
		$this->layout = 'administrator';
    }
    
    function index()
    {
    	
    }
    
    
   
}
