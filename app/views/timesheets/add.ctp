<?php 
if($session->read('Auth.User.group_id')!='7' && $session->read('Auth.User.group_id')!='6' && $session->read('Auth.User.group_id')!='5')
{
$this->requestAction('/users/logout/', array('return'));
}
?>
<div class="users form">
<?php echo $this->Form->create('Timesheet');?>
	<fieldset>
		<legend><?php __('Add daily Times Sheets'); ?></legend>
		
	<?php
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
		
		echo $this->Form->input('user_id',array( 'type' => 'select','options'=>$useroption));
		$teamoption = $this->requestAction('/timesheets/teamlist');
		
		//echo  $teamoption = $session->read('Auth.User.team_id');
		echo $this->Form->input('team_id',array( 'type' => 'select','options'=>$teamoption,'readonly'=>'readonly'));
		echo $this->Form->input('task'); 
		echo $this->Form->input('status'); 
		echo $this->Form->input('specification');
		$currentYear=date('Y');
		$maxYear = $currentYear +3;
		$minYear = $currentYear -3;
		
		//echo $this->Form->input('from_date',array('id'=>'from_date','type'=>'datetime','empty' => true,'maxYear'=>$maxYear,'minYear'=>$minYear,'orderYear'=>'asc'));
				 
		//$options=array('1'=>'1','1.5'=>'1.5','2'=>'2','2.5'=>'2.5','3'=>'3','3.5'=>'3.5','4'=>'4','4.5'=>'4.5','5'=>'5','5.5'=>'5.5','6'=>'6','6.5'=>'6.5','7'=>'7','7.5'=>'7.5','8'=>'8','8.5'=>'8.5','9'=>'9','9.5'=>'9.5','10'=>'10','10.5'=>'10.5','11'=>'11','11.5'=>'11.5','12'=>'12');
		echo $this->Form->input('working_hours',array('type'=>'time','timeFormat'=>'24'));
		$created_by = $session->read('Auth.User.username');
		echo $this->Form->hidden('created_by',array('value'=>$created_by));
		
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
		<li><?php echo $this->Html->link(__('New Project', true), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<?php } ?>
		<li><?php echo $this->Html->link(__('List Projects', true), array('controller' => 'projects', 'action' => 'index')); ?> </li>
	</ul>
</div>
