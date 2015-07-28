<?php
class Coment extends ComentsAppModel {

	var $name = 'Coment';
	var $validate = array(
			'comment' => array('notempty'),
		'model' => array('notempty'),
		'foreign_key' => array('numeric'),
		'creator_id' => array('numeric'),
		'modifier_id' => array('numeric')

		/*'comment' => array('notempty'),
		'model' => array('notempty'),
		'foreign_key' => array('numeric'),
		'creator_id' => array('numeric'),
		'modifier_id' => array('numeric')*/
	);
/*
var $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	var $hasMany = array(
		'Project' => array(
			'className' => 'Project',
			'foreignKey' => 'project_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
*/

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
			'User' => array('className' => 'User',
								'foreignKey' => 'user_id',
								'conditions' => '',
								'fields' => '',
								'order' => ''
			),
			'Project' => array('className' => 'Project',
								'foreignKey' => 'project_id',
								'conditions' => '',
								'fields' => '',
								'order' => ''
			)
	);
	var $hasMany = array(
		'Attachment' => array(
			'className' => 'Attachment',
			'foreignKey' => 'coment_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>
