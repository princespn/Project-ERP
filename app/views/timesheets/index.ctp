<?php 
if($session->read('Auth.User.group_id')!='7' && $session->read('Auth.User.group_id')!='6' && $session->read('Auth.User.group_id')!='5' && $session->read('Auth.User.group_id')!='2' && $session->read('Auth.User.group_id')!='1' && $session->read('Auth.User.group_id')!='4' && $session->read('Auth.User.group_id')!='3')
{
$this->requestAction('/users/logout/', array('return'));
}
?>
<div class="users index">
<?php if(($session->read('Auth.User.group_id') == '6') || ($session->read('Auth.User.group_id') == '7') || ($session->read('Auth.User.group_id') == '5')){  ?>
<div class="sortsearch"><table><td class="actions" ><?php
						echo $this->Html->link(__('Add', true), array('controller' => 'timesheets','action' => 'add')); 
							?></td></table></div><div class ="sortby"><h4><?php __('Add Daily Working Time Sheets');?></h4></div>
							<?php } ?>
	<h2><?php __('My Working Time Sheets');?></h2>
	<table cellpadding="0" cellspacing="0">

	<tr style="background:#666666;">
			<th><?php echo $this->Paginator->sort('project_code');?></th>
			<th><?php echo $this->Paginator->sort('username');?></th>
			
			<th><?php echo $this->Paginator->sort('task');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('working_hours');?></th>						
			<th style="color:#000;" colspan ='2'><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($timesheets as $timesheet):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
	<?php //echo $timesheet['User']['team_id']; ?>
	<?php if(($session->read('Auth.User.username') == $timesheet['User']['username']) && ($session->read('Auth.User.group_id') !='5') || ($session->read('Auth.User.group_id') == '1' ) || ($session->read('Auth.User.group_id') == '2')) {?>
		
		<td><?php echo $timesheet['Project']['project_code']; ?>&nbsp;</td>

		<td>
			<?php echo $timesheet['User']['username']; ?>
		</td>
		<td><?php echo $timesheet['Timesheet']['task']; ?>&nbsp;</td>
		<td><?php echo $timesheet['Timesheet']['created']; ?>&nbsp;</td>
		<td><?php echo $timesheet['Timesheet']['modified']; ?>&nbsp;</td>
		
		
		<td><?php echo $timesheet['Timesheet']['working_hours']; ?>&nbsp;</td>
		<?php if(($session->read('Auth.User.username') == $timesheet['User']['username'])){ ?>
	<td class="actions">
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $timesheet['Timesheet']['id'])); ?>
					</td>
					<?php } ?>
<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $timesheet['Timesheet']['id'])); ?>
					</td>

	<?php } else if(($session->read('Auth.User.username') == $timesheet['User']['username']) || ($session->read('Auth.User.team_id') == $timesheet['Timesheet']['team_id']) && ($session->read('Auth.User.group_id') !='7') && ($session->read('Auth.User.group_id') !='6')) {?>
	<td><?php echo $timesheet['Project']['project_code']; ?>&nbsp;</td>

		<td>
			<?php echo $timesheet['User']['username']; ?>
		</td>
		<td><?php echo $timesheet['Timesheet']['task']; ?>&nbsp;</td>
		<td><?php echo $timesheet['Timesheet']['created']; ?>&nbsp;</td>
		<td><?php if($timesheet['Timesheet']['modify_by']=='') { echo "";} else { echo $timesheet['Timesheet']['modified'];} ?>&nbsp;</td>
		
		
		<td><?php echo $timesheet['Timesheet']['working_hours']; ?>&nbsp;</td>
		<?php if(($session->read('Auth.User.username') == $timesheet['User']['username'])){ ?>

	<td class="actions">
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $timesheet['Timesheet']['id'])); ?>
					</td>
					<?php } else { echo "<td></td>";}?>
<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $timesheet['Timesheet']['id'])); ?>
					</td>

		<?php } else { }?>
	</tr>
<?php endforeach; ?>
</table>
	
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		
	<?php if($session->read('Auth.User.group_id')=='1'){ ?>
		<li><?php echo $this->Html->link(__('List Groups', true), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project', true), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users','action' => 'add')); ?></li>
		<?php } ?>
	<li><?php echo $this->Html->link(__('List Projects', true), array('controller' => 'projects', 'action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('Employee Evaluation', true), array('controller' => 'users', 'action' => 'team')); ?> </li>
	<li><?php echo $this->Html->link(__('Time Sheets', true), array('controller' => 'timesheets', 'action' => 'index')); ?> </li>
		
	</ul>
</div>
