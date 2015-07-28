<?php if($session->read('Auth.User.username')!='admin' && $session->read('Auth.User.group_id')!='1' && $session->read('Auth.User.group_id')!='5' && $session->read('Auth.User.group_id')!='2') 
{
	
	$this->requestAction('/users/logout/', array('return'));
}
?>

<?php
echo $javascript->link('test.js');    
?>

<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
		<legend><?php __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		
		echo $this->Form->input('username',array('error' => 'Username Exist in database.'));
		echo $this->Form->input('email',array('error' => 'Please Enter a valid email'));
		//echo $this->Form->input('password', array());
		$modify_by = $session->read('Auth.User.username');
		echo $this->Form->hidden('modify_by',array('value'=>$modify_by));
		echo $this->Form->input('new_password', array('type' => 'password','error' => 'Please Enter a valid password,Password between 5 and 25 chars.')); 
		echo $this->Form->input('confirm_password', array('type' => 'password','error' => 'Please Enter a valid password,Password between 5 and 25 chars.')); 
		
		echo $this->Form->input('phone_no',array('error' => 'Please specify a valid phone no'));
		echo $this->Form->input('fax_no',array('error' => 'Please specify a valid fax no'));
		echo $this->Form->input('address',array('error' => 'Please specify a valid address'));
		echo $this->Form->input('city',array('error' => 'Please Enter a city'));
		echo $this->Form->input('state',array('error' => 'Please Enter a state'));
		echo $this->Form->input('pin_code',array('error' => 'Please specify a valid pin code'));
		echo $this->Form->input('country',array('error' => 'Please Enter a country'));

		if($session->read('Auth.User.group_id')=='1'){
		//echo $this->Form->input('group_id');
		echo $this->Form->input('group_id',array('onChange'=>'test1()','empty'=>'Choose One'));
		echo '<div class="input text"><label for="ProjectProjectName"><b>Team</b></label>';
		echo $this->Form->select('team_id',array('1'=>'Infringement','2'=>'Search','3'=>'Search Pharma','4'=>'Landscape'));
		echo '</div>';
	}else
	{
	?>

<?php 
$options = array('3'=>'Client');
echo $this->Form->input('group_id',array('type' => 'select','options' =>$options));	?>
	<?php
	}
		//echo $this->Form->input('team_id',array('empty'=>''));
		//echo $this->Form->input('team_id',array('1'=>'Infringement','2'=>'Search','3'=>'Search Pharma','4'=>'Landscape'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users', true), array('action' => 'index'));?></li>
		<?php if($session->read('Auth.User.group_id')=='1'){ ?>
		<li><?php echo $this->Html->link(__('List Groups', true), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<?php } ?>
		<li><?php echo $this->Html->link(__('List Projects', true), array('controller' => 'projects', 'action' => 'index')); ?> </li>		<li><?php echo $this->Html->link(__('New Project', true), array('controller' => 'projects', 'action' => 'add')); ?> </li>

	</ul>
</div>
