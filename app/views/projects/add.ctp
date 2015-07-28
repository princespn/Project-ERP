<?php 
if($session->read('Auth.User.group_id')!='1' && $session->read('Auth.User.group_id')!='4')
{
$this->requestAction('/users/logout/', array('return'));
}
?>


<script type="text/javascript">
function _add_more() {
	  var txt = "<br><input type=\"file\" id =\"ProjectFile\" name=\"data[Project][file][]\">";
	  document.getElementById("dvFile").innerHTML += txt;
}
</script>
<div class="projects form">
<?php //echo $this->Form->create('Project',array('encoding'=>'multipart/form-data'));?>
<?php echo $this->Form->create('Project',array('enctype'=>'multipart/form-data'));?>
	<fieldset>
		<legend><?php __('Add Project'); ?></legend>
	<?php
		$currentYear=date('Y');
		$maxYear = $currentYear +3;
		$minYear = $currentYear -3;

	    echo $this->Form->hidden('id',array('value'=>$this->data['Project']['id']));
		echo $this->Form->input('project_name');
		echo $this->Form->input('total_ hours');
		//echo $this->Form->input('user_id');
		if($session->read('Auth.User.group_id') !='4')
			      {
		echo "<div class='input text'><label for='ProjectProjectName'>Assign Project TL</label>";
		    $options = $this->requestAction('/projects/userlist');
		    echo $this->Form->select('assigned_to',array($options));
		    echo "</div>";

		    echo "<div class='input text'>";
		     $option = $this->requestAction('/projects/srauserlist');
		    echo $this->Form->input('sr_research_associate',array( 'type' => 'select','options'=>$option,'scrollable' => true,'multiple' => true,'empty' => true));
		    echo "</div>";
		    echo "<div class='input text'>";
		     $optionra = $this->requestAction('/projects/rauserlist');
		    echo $this->Form->input('research_associate',array( 'type' => 'select','options'=>$optionra,'scrollable' => true ,'multiple' => true,'empty' => true));
		    echo "</div>";

		}
		
		echo"<div class='input text'><label for='ProjectProjectName'>Client name<font color='red'>*</font></label>";
		$options = $this->requestAction('/projects/clientlist');
		echo $this->Form->select('user_id',array($options));
		echo "</div>";
		
	
?>
	<div class="input text"><label for="ProjectProjectName">Project Status<font color='red'>*</font></label>
	<?php echo $this->Form->select('project_status',array('Proposed'=>'Proposed','In Process'=>'In Process','On Hold'=>'On Hold','Completed'=>'Completed','Closed'=>'closed','Re Opened'=>'Re Opened'));
	?>
	</div>
	<?php 
		echo $this->Form->input('project_code');
		echo $this->Form->input('action_steps');
		//echo $this->Form->input('comments');
		echo $this->Form->input('comments',array('type'=>'textarea','rows'=>'4','cols'=>'15'));
		echo $this->Form->input('start_date',array('id'=>'start_date','type'=>'date','empty' => true,'maxYear'=>$maxYear,'minYear'=>$minYear,'orderYear'=>'asc'));
		echo $this->Form->input('end_date',array('id'=>'end_date','type'=>'date','empty' => true,'maxYear'=>$maxYear,'minYear'=>$minYear,'orderYear'=>'asc'));
		if($session->read('Auth.User.group_id') !='4')
		    {
		    echo $this->Form->input('actual_start_date',array('id'=>'actual_start_date','type'=>'date','empty' => true,'empty' => true,'maxYear'=>$maxYear,'minYear'=>$minYear,'orderYear'=>'asc'));
		echo $this->Form->input('actual_end_date',array('id'=>'actual_end_date','type'=>'date','empty' => true,'empty' => true,'maxYear'=>$maxYear,'minYear'=>$minYear, 'orderYear'=>'asc'));
		    }
		echo $this->Form->input('project_cost');
		echo $this->Form->input('project_actual_cost');
?>
<div class="input text"><label for="ProjectProjectName">Project Invoice</label><?php echo $this->Form->select('project_invoiced',array('Yes'=>'Yes','No'=>'No')); ?></div>

		<?php echo $this->Form->input('invoice_date',array('id'=>'invoice_date','type'=>'date','empty' => true,'maxYear'=>$maxYear,'minYear'=>$minYear,'orderYear'=>'asc'));
?>

<div class="input text"><label for="ProjectProjectName">Payment Received</label><?php echo $this->Form->select('payment_received',array('Yes'=>'Yes','No'=>'No')); ?></div>


		<?php 	
		$created_by = $session->read('Auth.User.username');

		echo $this->Form->hidden('created_by',array('value'=>$created_by));
		?> 
		
	</fieldset>
	<div class='reset'>
<?php 
echo $this->Form->button('Submit the Form', array('type'=>'submit'));
echo "&nbsp;&nbsp;&nbsp;&nbsp;";
echo $this->Form->button('Reset the Form', array('type'=>'reset'));

?>
</div>
<?php
echo $this->Form->end();?>

</div>

<div class="actions">
	<h3><?php  __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Projects', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
