<?php 
class Timesheet extends AppModel {
	var $name = 'Timesheet';
	var $validate = array(
		'project_id' => array(
			'notempty' => array(
               		 'rule' => 'notempty',              
               		 'required' => true,
               		 'message' => 'Project name is required.'
			),
		),
		'user_id' => array(
			'notempty' => array(
               		 'rule' => 'notempty',              
               		 'required' => true,
               		 'message' => 'User name is required.'
			),
		),
		
		
		'task' => array(
			'notempty' => array(
               		 'rule' => 'notempty',              
               		 'required' => true,
               		 'message' => 'Task is required.'
			),
		),
		'status' => array(
			'notempty' => array(
               		 'rule' => 'notempty',              
               		 'required' => true,
               		 'message' => 'Status is required.'
			),
		),
		'working_hours' => array(
			'notempty' => array(
               		 'rule' => 'notempty',              
               		 'required' => true,
               		 'message' => 'Working Hours is required.'
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed


	var $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Team' => array(
			'className' => 'Team',
			'foreignKey' => 'team_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Project' => array(
			'className' => 'Project',
			'foreignKey' => 'project_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		
		
			
	);
	var $hasMany = array(
		'Timesheet' => array(
			'className' => 'Timesheet',
			'foreignKey' => 'team_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
}
?>
