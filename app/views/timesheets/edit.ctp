<?php 
if($session->read('Auth.User.group_id')!='7' && $session->read('Auth.User.group_id')!='6' && $session->read('Auth.User.group_id')!='5' && $session->read('Auth.User.group_id')!='2' && $session->read('Auth.User.group_id')!='1' && $session->read('Auth.User.group_id')!='4' && $session->read('Auth.User.group_id')!='3')
{
$this->requestAction('/users/logout/', array('return'));
}
?>
<div class="users form">
<?php echo $this->Form->create('Timesheet');?>
	<fieldset>
		<legend><?php __('Edit daily Times Sheets'); ?></legend>
	<?php
		echo $this->Form->input('id');
		//$option = $this->requestAction('/timesheets/projectlist');
		if($session->read('Auth.User.group_id') =='6')
		{
		$option = $this->requestAction('/timesheets/projectsralist');
		}
		else if($session->read('Auth.User.group_id') =='7')
		{
		$option = $this->requestAction('/timesheets/projectralist');
		}
		else
		{
			$option = $this->requestAction('/timesheets/projecttllist');
		}
		
		
		echo $this->Form->input('project_id',array( 'type' => 'select','options'=>$option));
		$useroption = $this->requestAction('/timesheets/userlist');
		if($session->read('Auth.User.group_id')=='1'){
		echo $this->Form->input('user_id');
		}else{
		echo $this->Form->input('user_id',array( 'type' => 'select','options'=>$useroption));
		}
		$teamoption = $this->requestAction('/timesheets/teamlist');
		
		echo $this->Form->input('team_id',array( 'type' => 'select','options'=>$teamoption,'readonly'=>'readonly'));
				echo $this->Form->input('task'); 
		echo $this->Form->input('status'); 
		echo $this->Form->input('specification');
		
		$currentYear=date('Y');
		$maxYear = $currentYear +3;
		$minYear = $currentYear -3;
		
		echo $this->Form->input('working_hours',array('type'=>'time','timeFormat' =>'24'));	
		
		$modify_by = $session->read('Auth.User.username');
		echo $this->Form->hidden('modify_by',array('value'=>$modify_by));
		
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
