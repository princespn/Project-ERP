<?php

class User extends AppModel {
	var $name = 'User';
	var $displayField = 'username';
	
	 function beforeSave() {
        $this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
        return true;
    }
	var $validate = array(
			'username' => array(
			'notempty' => array(
               		 'rule' => 'isUnique',              
               		 'required' => true,
               		 'message' => 'User name is required.'

			),
		),
		'password' => array(
			'notempty' => array(
               		 'rule' => 'notempty',              
               		 'required' => true,
               		 'message' => 'Password must be required.'

			),
		),
		
		'email' => array(
			'notempty' => array(
				'rule' => array('email',true),
				'notempty' => array(
               		 'rule' => 'notempty',              
               		 'required' => true,
               		 'message' => 'E-mail is required.'

			),
		),
		),
	
		
		
		'city' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'notempty' => array(
               		 'rule' => 'notempty',              
               		 'required' => true,
               		 'message' => 'City name is required.'

			),
		),
		),
		'state' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'notempty' => array(
               		 'rule' => 'notempty',              
               		 'required' => true,
               		 'message' => 'State name is required.'

			),
		),
		),
			'pin_code' => array(
			'notempty' => array(
				'rule' => array('numeric'),
				'notempty' => array(
               		 'rule' => array('postal', null, 'us'),            
               		 'required' => true,
               		 'message' => 'Please enter Pin Code.'

			),
		),
		),
		
	
		'country' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'notempty' => array(
               		 'rule' => 'notempty',              
               		 'required' => true,
               		 'message' => 'country name is required.'

			),
		),
		),
		'group_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'notempty' => array(
               		 'rule' => 'notempty',              
               		 'required' => true,
               		'message' => 'User Group name is required.'),
			
			),
		),
	);
	

	var $belongsTo = array(
		'Group' => array(
			'className' => 'Group',
			'foreignKey' => 'group_id',
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
	
		
	);

	var $hasMany = array(
		'Project' => array(
			'className' => 'Project',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		
		'Timesheet' => array(
			'className' => 'Timesheet',
			'foreignKey' => 'user_id',
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
if (!$this->id && empty($this->data)) {
return null;
}
if (isset($this->data['User']['group_id'])) {
$groupId = $this->data['User']['group_id'];
} else {
$groupId = $this->field('group_id');
}
if (!$groupId) {
return null;
} else {
return array('Group' => array('id' => $groupId));
}
}


    function bindNode($user) {
    return array('model' => 'Group', 'foreign_key' => $user['User']['group_id']);
    }


}
