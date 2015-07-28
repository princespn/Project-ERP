<?php 
if($session->read('Auth.User.group_id')!='7' && $session->read('Auth.User.group_id')!='6' && $session->read('Auth.User.group_id')!='5' && $session->read('Auth.User.group_id')!='2' && $session->read('Auth.User.group_id')!='1' && $session->read('Auth.User.group_id')!='4' && $session->read('Auth.User.group_id')!='3')
{
$this->requestAction('/users/logout/', array('return'));
}
?>

<script type="text/javascript">
$(document).ready(function(){

    $("#ProjectProjectStatus").change(function(){
        var ProjectProjectStatus = $(this).val();
        if(ProjectProjectStatus.length > 0)
        {
            window.location = "<?php echo Router::url(array('controller' => 'projects', 'action' => 'index'), true) ?>/" + ProjectProjectStatus;
        }
    });

});
</script>
<div class="projects index">

<div class="sortsearch"><?php
				echo $this->Form->create('Project',array('update' =>'divid'));
				$options = array('index/' => 'All Projects','index/Proposed'=>'Proposed','index/In Process' => 'In Process','index/On Hold' => 'On Hold','index/Completed' => 'Completed','index/Closed' => 'Closed','index/Re Opened' => 'Re Opened');
				//echo $this->Form->input('project_status',array('type' => 'select','selected' => 'yes','options'=> $options,'ONCHANGE' => 'location = this.options[this.selectedIndex].value;'));
				echo $this->Form->select('project_status',array($options));
				echo $this->Form->end();
			?></div><div class ="sortby"><h4><?php __('Filter by project status.');?></h4></div>
<h2><?php __('Projects');?></h2>
<table cellpadding="0" cellspacing="0">
<tr style="background:#666666;color:#ffffff;">
			
			
			<th><?php echo $this->Paginator->sort(htmlentities('project_name'));?></th>
			<?php 
if($session->read('Auth.User.group_id')!='3' && ($session->read('Auth.User.group_id')!='6') && ($session->read('Auth.User.group_id')!='7')){ ?>
			<th><?php echo $this->Paginator->sort(htmlentities('assigned_to'));?></th>
<?php } ?>
			<th><?php echo $this->Paginator->sort(htmlentities('project_status'));?></th>			
			<th><?php echo $this->Paginator->sort(htmlentities('project_code'));?></th>
			<th><?php echo $this->Paginator->sort(htmlentities('action_steps'));?></th>
		<?php 
if(($session->read('Auth.User.group_id')!='2') && ($session->read('Auth.User.group_id')!='5') && ($session->read('Auth.User.group_id')!='6') && ($session->read('Auth.User.group_id')!='7')){ ?>
			<th><?php echo $this->Paginator->sort(htmlentities('project_cost'));?></th>
<?php } ?>
<?php 
if(($session->read('Auth.User.group_id')!='6') && ($session->read('Auth.User.group_id')!='7')){ ?>
			<th><?php echo $this->Paginator->sort(htmlentities('start_date'));?></th>
			<th><?php echo $this->Paginator->sort(htmlentities('end_date'));?></th>
	<?php	}else {?>
			<th><?php echo $this->Paginator->sort(htmlentities('actual_start_date'));?></th>
			<th><?php echo $this->Paginator->sort(htmlentities('actual_end_date'));?></th>
			<?php } ?>
			<th style="color:#000;"><?php // __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($projects as $project):
		$class = null;
		
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>

	<?php 
if(($session->read('Auth.User.group_id')=='1') || (($session->read('Auth.User.group_id')=='4' && ($session->read('Auth.User.username') == $project['Project']['created_by']))))
{
 ?>
		
		<td><?php //echo $project['Project']['project_name']; 
		echo $this->Html->link($project['Project']['project_name'], array('action' => 'view', $project['Project']['id']));
		
		
		?>&nbsp;</td>
		<td><b><?php echo $project['Project']['assigned_to']; ?></b>&nbsp;</td>
		<td><?php echo $project['Project']['project_status']; ?>&nbsp;</td>
		<td><?php echo $project['Project']['project_code']; ?>&nbsp;</td>
		<td><?php echo $project['Project']['action_steps']; ?>&nbsp;</td>
		<td><?php echo $project['Project']['project_cost']; ?>&nbsp;</td>
		<td><?php echo date('d-m-Y', strtotime($project['Project']['start_date'])); ?>&nbsp;</td>
		<td><?php echo date('d-m-Y', strtotime($project['Project']['end_date'])); ?>&nbsp;</td>
		<td class="actions"><?php echo $this->Html->link(__('Team chat', true), array('action' => 'coment', $project['Project']['id'])); ?></td>
		
<?php 
}
elseif($session->read('Auth.User.group_id')=='2')
{
?>

		<td><?php 	echo $this->Html->link($project['Project']['project_name'], array('action' => 'view', $project['Project']['id'])); ?>&nbsp;</td>
		<td><b><?php echo $project['Project']['assigned_to']; ?></b>&nbsp;</td>
		<td><?php echo $project['Project']['project_status']; ?>&nbsp;</td>
		<td><?php echo $project['Project']['project_code']; ?>&nbsp;</td>
		<td><?php echo $project['Project']['action_steps']; ?>&nbsp;</td>
		<td><?php echo date('d-m-Y', strtotime($project['Project']['start_date'])); ?>&nbsp;</td>
		<td><?php echo date('d-m-Y', strtotime($project['Project']['end_date'])); ?>&nbsp;</td>
		<td class="actions"><?php echo $this->Html->link(__('Team chat', true), array('action' => 'coment', $project['Project']['id'])); ?></td>
		
<?php 
}
elseif($session->read('Auth.User.group_id')=='5' && ($session->read('Auth.User.username')== $project['Project']['assigned_to']))
{
?>

		<td><?php echo $this->Html->link($project['Project']['project_name'], array('action' => 'viewc', $project['Project']['id'])); ?>&nbsp;</td>
		<td><b><?php echo $project['Project']['assigned_to']; ?></b>&nbsp;</td>
		<td><?php echo $project['Project']['project_status']; ?>&nbsp;</td>
		<td><?php echo $project['Project']['project_code']; ?>&nbsp;</td>
		<td><?php echo $project['Project']['action_steps']; ?>&nbsp;</td>
		<td><?php echo date('d-m-Y', strtotime($project['Project']['start_date'])); ?>&nbsp;</td>
		<td><?php echo date('d-m-Y', strtotime($project['Project']['end_date'])); ?>&nbsp;</td>
		<td class="actions"><?php echo $this->Html->link(__('Team chat', true), array('action' => 'coment', $project['Project']['id'])); ?></td>
		
<?php 
}
elseif($session->read('Auth.User.group_id')=='6')
{
$research = explode(',', $project['Project']['sr_research_associate']);
//print_r(@$raname[3]);

	    if(($session->read('Auth.User.username')== $research[0]) || ($session->read('Auth.User.username')== @$research[1]) || ($session->read('Auth.User.username')== @$research[2]) || ($session->read('Auth.User.username')== @$research[3]) || ($session->read('Auth.User.username')== @$research[4]) || ($session->read('Auth.User.username')== @$research[5] || ($session->read('Auth.User.username')== @$research[6]))){
?>

		<td><?php 	echo $this->Html->link($project['Project']['project_name'], array('action' => 'viewc', $project['Project']['id'])); ?>&nbsp;</td>
		
		<td><?php echo $project['Project']['project_status']; ?>&nbsp;</td>
		<td><?php echo $project['Project']['project_code']; ?>&nbsp;</td>
		<td><?php echo $project['Project']['action_steps']; ?>&nbsp;</td>
		<td><?php echo $project['Project']['actual_start_date']; ?>&nbsp;</td>
		<td><?php echo $project['Project']['actual_end_date']; ?>&nbsp;</td>
		<td class="actions"><?php echo $this->Html->link(__('Team chat', true), array('action' => 'coment', $project['Project']['id'])); ?></td>
		
			<?php 
	    }
			?>
					
<?php 
}

elseif($session->read('Auth.User.group_id')=='7')
{
$raname = explode(',', $project['Project']['research_associate']);
//print_r(@$raname[3]);

	    if(($session->read('Auth.User.username')== $raname[0]) || ($session->read('Auth.User.username')== @$raname[1]) || ($session->read('Auth.User.username')== @$raname[2]) || ($session->read('Auth.User.username')== @$raname[3]) || ($session->read('Auth.User.username')== @$raname[4]) || ($session->read('Auth.User.username')== @$raname[5]) || ($session->read('Auth.User.username')== @$raname[6])){
?>

		<td><?php 	echo $this->Html->link($project['Project']['project_name'], array('action' => 'viewc', $project['Project']['id'])); ?>&nbsp;</td>
		
		<td><?php echo $project['Project']['project_status']; ?>&nbsp;</td>
		<td><?php echo $project['Project']['project_code']; ?>&nbsp;</td>
		<td><?php echo $project['Project']['action_steps']; ?>&nbsp;</td>
		<td><?php echo $project['Project']['actual_start_date']; ?>&nbsp;</td>
		<td><?php echo $project['Project']['actual_end_date']; ?>&nbsp;</td>
		<td class="actions"><?php echo $this->Html->link(__('Team chat', true), array('action' => 'coment', $project['Project']['id'])); ?></td>
					</td>

<?php 								}
}
elseif(($session->read('Auth.User.username')== $project['User']['username']) &&  ($session->read('Auth.User.group_id')!='4')) {

?>

		<td><?php 	echo $this->Html->link($project['Project']['project_name'], array('action' => 'view', $project['Project']['id'])); ?>&nbsp;</td>
		<td><?php echo $project['Project']['project_status']; ?>&nbsp;</td>
		<td><?php echo $project['Project']['project_code']; ?>&nbsp;</td>
		<td><?php echo $project['Project']['action_steps']; ?>&nbsp;</td>
		<td><?php echo $project['Project']['project_cost']; ?>&nbsp;</td>
		<td><?php echo date('d-m-Y', strtotime($project['Project']['start_date'])); ?>&nbsp;</td>
		<td><?php echo date('d-m-Y', strtotime($project['Project']['end_date'])); ?>&nbsp;</td>
		<td></td>
		
<?php }
else
{
}?>
	</tr>
<?php endforeach; ?>
	</table>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>

<ul><?php if($session->read('Auth.User.group_id')=='1') {
//echo $this->Html->link($project['User']['username'], array('controller' => 'users', 'action' => 'view', $project['User']['id']));
?>

		<li><?php echo $this->Html->link(__('New Project', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Projects', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Employee Evaluation', true), array('controller' => 'users', 'action' => 'team')); ?> </li>
		<li><?php echo $this->Html->link(__('Time Sheets', true), array('controller' => 'timesheets', 'action' => 'index')); ?> </li>
<?php 
}
 elseif($session->read('Auth.User.group_id')=='4')
{
?>


<li><?php echo $this->Html->link(__('New Project', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Projects', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Reset your password', true), array('controller' => 'users', 'action' => 'forgatepw',$session->read('Auth.User.id'))); ?></li>
		
<?php 
}
 elseif($session->read('Auth.User.group_id')=='2')
{
?>
<li><?php echo $this->Html->link(__('List Projects', true), array('action' => 'index')); ?> </li>
<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
<li><?php echo $this->Html->link(__('Time Sheets', true), array('controller' => 'timesheets', 'action' => 'index')); ?> </li>
<li><?php echo $this->Html->link(__('Reset your password', true), array('controller' => 'users', 'action' => 'forgatepw',$session->read('Auth.User.id'))); ?></li>
<?php 
}
 elseif($session->read('Auth.User.group_id')=='3')
{
?>
<li><?php echo $this->Html->link(__('List Projects', true), array('action' => 'index')); ?> </li>
<li><?php echo $this->Html->link(__('Reset your password', true), array('controller' => 'users', 'action' => 'forgatepw',$session->read('Auth.User.id'))); ?></li>



<?php }else{ ?>
<li><?php echo $this->Html->link(__('List Projects', true), array('action' => 'index')); ?> </li>
<li><?php echo $this->Html->link(__('Employee Evaluation', true), array('controller' => 'users', 'action' => 'team')); ?> </li>
<li><?php echo $this->Html->link(__('Time Sheets', true), array('controller' => 'timesheets', 'action' => 'index')); ?> </li>
<li><?php echo $this->Html->link(__('Reset your password', true), array('controller' => 'users', 'action' => 'forgatepw',$session->read('Auth.User.id'))); ?></li>

<?php } ?>
</ul>
</div>
