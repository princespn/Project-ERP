<?php
class Project extends AppModel {
	var $name = 'Project';
	var $displayField = 'project_name';

	var $validate = array(
		'project_name' => array(
			'notempty' => array(
               		 'rule' => 'notempty',              
               		 'required' => true,
               		 'message' => 'Please enter project name.'

			),
		),
		
		'total_ hours' => array(
			'rule' => 'numeric',
			'required' => true,
               		 'message' => 'Project hours should be numeric.'
			
		),
		
		'project_status' => array(
			'rule' => 'notempty',
			'required' => true,
               		 'message' => 'Please select a project staus.'
			
		),
		'project_code' => array(
			'rule' => 'notempty',              
               		 'required' => true,
               		 'message' => 'Please enter Project Code,Project code should be Unique.'	
		
		),
		
		'action_steps' => array(
			'rule' => 'notempty',
			'required' => false,
			'message' => 'Please Select Action Steps.'
		),
		
		
		'start_date' => array(
        	'rule' => array('compareDates'),
		'required' => false,
        	'message' => 'Start date does not Max to End date.',
    		),

		'end_date' => array(
        	'rule' => array('notempty'),
		'required' => false,
        	'message' => 'End date is required',
    		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

public function paginateCount($conditions = null, $recursive = 0, $extra = array()) {

if( isset($extra['totallimit']) ) return $extra['totallimit'];

}


public function compareDates()
{
return ($this->data[$this->alias]['start_date'] <
$this->data[$this->alias]['end_date']) ? true : false;
}



	
	
	var $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
			
	);
	var $hasMany = array(
		
	'Attachment' => array(
			'className' => 'Attachment',
			'foreignKey' => 'project_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Upload' => array(
			'className' => 'Upload',
			'foreignKey' => 'project_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Timesheet' => array(
			'className' => 'Timesheet',
			'foreignKey' => 'project_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
}
