<?php 
class Team extends AppModel {
	var $name = 'Team';
	var $displayField = 'team_name';
	var $validate = array(
		'team_name' => array(
			'notempty' => array(
               		 'rule' => 'notempty',              
               		 'required' => true,
               		 'message' => 'Team name is required.'
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'User' => array(
			'className' => 'User',
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
 		var $actsAs = array('Acl' => array('type' => 'requester'));
		function parentNode() {
		return null;
		}

	
	
}
?>
