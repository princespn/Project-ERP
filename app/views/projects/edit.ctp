<?php 
if($session->read('Auth.User.group_id')!='5' && $session->read('Auth.User.group_id')!='2' && $session->read('Auth.User.group_id')!='1' && $session->read('Auth.User.group_id')!='4')
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
<?php $currentYear=date('Y');
		$maxYear = $currentYear +3;
		$minYear = $currentYear -3;
?>
<?php echo $this->Form->create('Project',array('enctype'=>'multipart/form-data'));?>
	<fieldset>
		<legend><?php __('Edit Project'); ?></legend>
	<?php
	    echo $this->Form->hidden('id',array('value'=>$this->data['Project']['id']));
		if(($session->read('Auth.User.group_id')=='2') || ($session->read('Auth.User.group_id')=='5'))  {
		    echo $this->Form->input('project_name',array('readonly'=>'readonly'));
			 echo $this->Form->input('total_ hours',array('readonly'=>'readonly'));
			
		}
		    else
		    {
		echo $this->Form->input('project_name');
		echo $this->Form->input('total_ hours');
		
		}
if($session->read('Auth.User.group_id')=='5')
{
echo "<div class='input text'>";
 $option = $this->requestAction('/projects/srauserlist');
echo $this->Form->input('sr_research_associate',array( 'type' => 'select','options'=>$option,'multiple' => true,'empty' => true));
echo "</div>";
echo "<div class='input text'>";
 $optionra = $this->requestAction('/projects/rauserlist');
echo $this->Form->input('research_associate',array( 'type' => 'select','options'=>$optionra, 'multiple' => true,'empty' => true));
echo "</div>";
}
elseif($session->read('Auth.User.group_id')=='2'){
echo "<div class='input text'><label for='ProjectProjectName'>Assign Project TL</label>";
 $options = $this->requestAction('/projects/userlist');
echo $this->Form->select('assigned_to',array($options));
echo "</div>";
}
elseif($session->read('Auth.User.group_id')=='1')
{
echo "<div class='input text'><label for='ProjectProjectName'>Assign Project TL</label>";
 $options = $this->requestAction('/projects/userlist');
echo $this->Form->select('assigned_to',array($options));
echo "</div>";

echo "<div class='input text'>";
 $option = $this->requestAction('/projects/srauserlist');
echo $this->Form->input('sr_research_associate',array( 'type' => 'select','options'=>$option,'multiple' => true,'empty' => true));
echo "</div>";
echo "<div class='input text'>";
 $optionra = $this->requestAction('/projects/rauserlist');
echo $this->Form->input('research_associate',array( 'type' => 'select','options'=>$optionra, 'multiple' => true,'empty' => true));
echo "</div>";
}else{}

if(($session->read('Auth.User.group_id')!='2') && ($session->read('Auth.User.group_id')!='5')) {
 echo"<div class='input text'><label for='ProjectProjectName'>Client name</label>";
		//echo $this->Form->input('user_id');
		$options = $this->requestAction('/projects/clientlist');
		echo $this->Form->select('user_id',array($options));
		echo "</div>";
} ?>
		<div class='input text'><label for='ProjectProjectName'>Project Status</label><?php echo $this->Form->select('project_status',array('Proposed'=>'Proposed','In Process'=>'In Process','On Hold'=>'On Hold','Completed'=>'Completed','Closed'=>'Closed','Re Opened'=>'Re Opened')); ?></div>
	<?php 
		if($session->read('Auth.User.group_id')!='2' && $session->read('Auth.User.group_id')!='5') {		
		echo $this->Form->input('project_code');
		}
else
{
echo $this->Form->input('project_code',array('readonly'=>'readonly'));
}
		echo $this->Form->input('action_steps');
		//echo $this->Form->input('comments');
		echo $this->Form->input('comments',array('type'=>'textarea','rows'=>'4','cols'=>'15'));
		
	 if($session->read('Auth.User.group_id')!='5')
	 {
		echo $this->Form->input('start_date',array('id'=>'start_date','type'=>'date','empty' => true,'empty' => true,'maxYear'=>$maxYear,'minYear'=>$minYear,'orderYear'=>'asc'));
		echo $this->Form->input('end_date',array('id'=>'end_date','type'=>'date','empty' => true,'empty' => true,'maxYear'=>$maxYear,'minYear'=>$minYear, 'orderYear'=>'asc'));
	}
	else
	{
		echo $this->Form->input('start_date',array('disabled'=>'disabled'));
		echo $this->Form->input('end_date',array('disabled'=>'disabled'));
	}		
	 
	 if($session->read('Auth.User.group_id')!='2' && $session->read('Auth.User.group_id')!='4')
	 {
				
			echo $this->Form->input('actual_start_date',array('id'=>'actual_start_date','type'=>'date','empty' => true,'empty' => true,'maxYear'=>$maxYear,'minYear'=>$minYear,'orderYear'=>'asc'));
	  		echo $this->Form->input('actual_end_date',array('id'=>'actual_end_date','type'=>'date','empty' => true,'empty' => true,'maxYear'=>$maxYear,'minYear'=>$minYear, 'orderYear'=>'asc'));

		   
		
	  }
	 if($session->read('Auth.User.group_id')!='2' && $session->read('Auth.User.group_id')!='5') {
		    
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
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php  __('Actions'); ?></h3>
	<ul>

		
		<li><?php echo $this->Html->link(__('List Projects', true), array('action' => 'index'));?></li>
		
	</ul>
</div>
