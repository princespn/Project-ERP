<?php if($session->read('Auth.User.username')!='admin' && $session->read('Auth.User.group_id')!='1' && $session->read('Auth.User.group_id')!='5' && $session->read('Auth.User.group_id')!='6' && $session->read('Auth.User.group_id')!='7') 
{
header("Location: /greyb/users/logout/");

}
?><div class="users index">
	<h2><?php __('Employees');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr style="background:#666666;">
			<th><?php echo 'Employee name';?></th>
			<th><?php echo 'Designation'?></th>
			<th><?php echo 'Team name'?></th>
			<th align="right" colspan ='2' style="color:#000;"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($users as $user):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
	<?php	
if((($user['User']['group_id'] == '6') || ($user['User']['group_id'] == '7')) && ($user['User']['team_id'] == '1'))
{ ?>
		<td><?php echo $user['User']['username']; ?>&nbsp;</td>

		<td>
			<?php echo $user['Group']['name']; ?>
			
		</td>
		<td>
			<?php echo $user['Team']['team_name']; ?>
		</td>
				<td class="actions">
			<?php echo $this->Html->link(__('View Evalution', true), array('controller' => 'infringements','action' => 'viewevalution', $user['User']['id'])); ?>
			
		</td>
			<td class="actions">
			<?php echo $this->Html->link(__('Add Evalution', true), array('controller' => 'infringements','action' => 'addevalution', $user['User']['id'])); ?>
			
		</td>
		<?php }  ?>
		<?php	
if((($user['User']['group_id'] == '6') || ($user['User']['group_id'] == '7')) && ($user['User']['team_id'] == '2'))
{ ?>
		<td><?php echo $user['User']['username']; ?>&nbsp;</td>

		<td>
			<?php echo $user['Group']['name']; ?>
			
		</td>
		<td>
			<?php echo $user['Team']['team_name']; ?>
		</td>
				<td class="actions">
			<?php echo $this->Html->link(__('View Evalution', true), array('controller' => 'searches','action' => 'viewsearch', $user['User']['id'])); ?>
			
		</td>
			<td class="actions">
			<?php echo $this->Html->link(__('Add Evalution', true), array('controller' => 'searches','action' => 'addsearch', $user['User']['id'])); ?>
			
		</td>
		<?php }  ?>
		<?php	
if((($user['User']['group_id'] == '6') || ($user['User']['group_id'] == '7')) && ($user['User']['team_id'] == '3'))
{ ?>
		<td><?php echo $user['User']['username']; ?>&nbsp;</td>

		<td>
			<?php echo $user['Group']['name']; ?>
			
		</td>
		<td>
			<?php echo $user['Team']['team_name']; ?>
		</td>
				<td class="actions">
			<?php echo $this->Html->link(__('View Evalution', true), array('controller' => 'pharmas','action' => 'viewpharma', $user['User']['id'])); ?>
			
		</td>
			<td class="actions">
			<?php echo $this->Html->link(__('Add Evalution', true), array('controller' => 'pharmas','action' => 'addpharma', $user['User']['id'])); ?>
			
		</td>
		<?php }  ?>
		<?php	
if((($user['User']['group_id'] == '6') || ($user['User']['group_id'] == '7')) && ($user['User']['team_id'] == '4'))
{ ?>
		<td><?php echo $user['User']['username']; ?>&nbsp;</td>

		<td>
			<?php echo $user['Group']['name']; ?>
			
		</td>
		<td>
			<?php echo $user['Team']['team_name']; ?>
		</td>
				<td class="actions">
			<?php echo $this->Html->link(__('View Evalution', true), array('controller' => 'landscapes','action' => 'viewlandscape', $user['User']['id'])); ?>
			
		</td>
			<td class="actions">
			<?php echo $this->Html->link(__('Add Evalution', true), array('controller' => 'landscapes','action' => 'addlandscape', $user['User']['id'])); ?>
			
		</td>
		<?php }  ?>
		
	</tr>
<?php endforeach; ?>
	</table>
	<!--<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>-->
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Projects', true), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		
	</ul>
</div>
