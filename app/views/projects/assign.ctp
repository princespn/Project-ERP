<?php if($session->read('Auth.User.group_id')!='2' && $session->read('Auth.User.group_id')!='1' && $session->read('Auth.User.group_id')!='4') 
{
header("Location: /greyb/users/logout/");

}
?>
<script type="text/javascript">
function _add_more() {
	  var txt = "<br><input type=\"file\" id =\"ProjectFile\" name=\"data[Project][file][]\">";
	  document.getElementById("dvFile").innerHTML += txt;
	}

</script>
<div class="projects form">
<?php $currentYear=date('Y');
		$maxYear = $currentYear +3;
		$minYear = $currentYear -3;
?>
<?php echo $this->Form->create('Project',array('enctype'=>'multipart/form-data'));?>
	<fieldset>
		<legend><?php __('Assign Project'); ?></legend>
	<?php
	    echo $this->Form->hidden('id',array('value'=>$this->data['Project']['id']));
		if($session->read('Auth.User.group_id')!='2') {
	
		echo $this->Form->input('project_name');
		}
else
{
echo $this->Form->input('project_name',array('readonly'=>'readonly'));
 $options = $this->requestAction('/projects/userlist');
?>
<div class='input text'><label for='ProjectProjectName'>Assign Project</label><?php
echo $this->Form->select('assigned_to',array($options)); ?></div>
<?php

}
if($session->read('Auth.User.group_id')!='2') {

		echo $this->Form->input('user_id');
} ?>
		<div class='input text'><label for='ProjectProjectName'>Project Status</label><?php echo $this->Form->select('project_status',array('Proposed'=>'proposed','In Process'=>'in-process','On Hold'=>'on-hold','Completed'=>'completed','Closed'=>'closed','Re Opened'=>'re-opened')); ?></div>
	<?php 
		if($session->read('Auth.User.group_id')!='2') {		
		echo $this->Form->input('project_code');
		}
else
{
echo $this->Form->input('project_code',array('readonly'=>'readonly'));
}
		echo $this->Form->input('action_steps');
		//echo $this->Form->input('comments');
		echo $this->Form->input('comments',array('type'=>'textarea','rows'=>'4','cols'=>'15'));
	       echo $this->Form->input('start_date',array('disabled'=>'disabled'));
		echo $this->Form->input('end_date',array('disabled'=>'disabled'));
 	
		    
		if($session->read('Auth.User.group_id')!='2') {
		echo $this->Form->input('project_cost');
		echo $this->Form->input('project_actual_cost');
?>
<div class="input text"><label for="ProjectProjectName">Project Invoice</label><?php echo $this->Form->select('project_invoiced',array('Yes'=>'Yes','No'=>'No')); ?></div>

		<?php
echo $this->Form->input('invoice_date',array('id'=>'invoice_date','type'=>'date','options' => 'options',
'empty' => true,'empty' => true,'maxYear'=>$maxYear,'minYear'=>$minYear,'orderYear'=>'asc'));

	?>

<div class="input text"><label for="ProjectProjectName">Payment Received</label><?php echo $this->Form->select('payment_received',array('Yes'=>'Yes','No'=>'No')); ?></div>

<?php }
		//echo $this->Form->input('file', array('type'=>'file'));
		?> 
		
		<?php 	
		$modify_by = $session->read('Auth.User.username');

		echo $this->Form->hidden('modify_by',array('value'=>$modify_by));
		?>
		
	</fieldset>
<?php echo $this->Form->end(__('Assign', true));?>
</div>
<div class="actions">
	<h3><?php  __('Actions'); ?></h3>
	<ul>

		<li><?php //echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Project.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Project.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Projects', true), array('action' => 'index'));?></li>
		<li><?php //echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
