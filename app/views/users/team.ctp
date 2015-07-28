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
	<tr<?php echo $class;?>> <?php if($session->read('Auth.User.group_id')=='1') { ?> 
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
			<?php echo $this->Html->link(__('View Evaluation', true), array('controller' => 'infringements','action' => 'viewevalution', $user['User']['id'])); ?>
			
		</td>
			<td class="actions">
			<?php echo $this->Html->link(__('Add Evaluation', true), array('controller' => 'infringements','action' => 'addevalution', $user['User']['id'])); ?>
			
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
			<?php echo $this->Html->link(__('View Evaluation', true), array('controller' => 'searches','action' => 'viewsearch', $user['User']['id'])); ?>
			
		</td>
			<td class="actions">
			<?php echo $this->Html->link(__('Add Evaluation', true), array('controller' => 'searches','action' => 'addsearch', $user['User']['id'])); ?>
			
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
			<?php echo $this->Html->link(__('View Evaluation', true), array('controller' => 'pharmas','action' => 'viewpharma', $user['User']['id'])); ?>
			
		</td>
			<td class="actions">
			<?php echo $this->Html->link(__('Add Evaluation', true), array('controller' => 'pharmas','action' => 'addpharma', $user['User']['id'])); ?>
			
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
			<?php echo $this->Html->link(__('View Evaluation', true), array('controller' => 'landscapes','action' => 'viewlandscape', $user['User']['id'])); ?>
			
		</td>
			<td class="actions">
			<?php echo $this->Html->link(__('Add Evaluation', true), array('controller' => 'landscapes','action' => 'addlandscape', $user['User']['id'])); ?>
			
		</td>
		<?php }  ?>
		<?php } 
		
		 else if(($session->read('Auth.User.group_id')=='5') ||($session->read('Auth.User.group_id')=='6') ||($session->read('Auth.User.group_id')=='7')) 
		 { 
			 if ($session->read('Auth.User.team_id')=='3') {
			  if($session->read('Auth.User.group_id')=='5') {
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
			<?php echo $this->Html->link(__('View Evaluation', true), array('controller' => 'pharmas','action' => 'viewpharma', $user['User']['id'])); ?>
			
		</td>
			<td class="actions">
			<?php echo $this->Html->link(__('Add Evaluation', true), array('controller' => 'pharmas','action' => 'addpharma', $user['User']['id'])); ?>
			
		</td>
		<?php }  ?>
		<?php } ?>
	<?php 	if(($session->read('Auth.User.group_id')=='6') ||($session->read('Auth.User.group_id')=='7')) {
				 		 if((($user['User']['group_id'] == '6') || ($user['User']['group_id'] == '7')) && ($user['User']['team_id'] == '3') && ($user['User']['id'] == $session->read('Auth.User.id'))) 
{ ?>
		<td><?php echo $user['User']['username']; ?>&nbsp;</td>

		<td>
			<?php echo $user['Group']['name']; ?>
			
		</td>
		<td>
			<?php echo $user['Team']['team_name']; ?>
		</td>
				<td class="actions">
			<?php echo $this->Html->link(__('View Evaluation', true), array('controller' => 'pharmas','action' => 'viewpharma', $user['User']['id'])); ?>
			
		</td>
			
		<?php }  ?>
		<?php } ?>


		
		<?php } ?>
		
		<?php  if ($session->read('Auth.User.team_id')=='1') { 
		 	  if($session->read('Auth.User.group_id')=='5') {
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
			<?php echo $this->Html->link(__('View Evaluation', true), array('controller' => 'infringements','action' => 'viewevalution', $user['User']['id'])); ?>
			
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Add Evaluation', true), array('controller' => 'infringements','action' => 'addevalution', $user['User']['id'])); ?>
			
		</td>
			
		<?php }  ?>
		<?php } ?>
	<?php 	if(($session->read('Auth.User.group_id')=='6') ||($session->read('Auth.User.group_id')=='7')) {
				 		 if((($user['User']['group_id'] == '6') || ($user['User']['group_id'] == '7')) && ($user['User']['team_id'] == '1') && ($user['User']['id'] == $session->read('Auth.User.id'))) 
{ ?>
		<td><?php echo $user['User']['username']; ?>&nbsp;</td>

		<td>
			<?php echo $user['Group']['name']; ?>
			
		</td>
		<td>
			<?php echo $user['Team']['team_name']; ?>
		</td>
				<td class="actions">
			<?php echo $this->Html->link(__('View Evaluation', true), array('controller' => 'infringements','action' => 'viewevalution', $user['User']['id'])); ?>
			
		</td>
			
		<?php }  ?>
		<?php } ?>
		
		<?php } ?>
		
		<?php  if ($session->read('Auth.User.team_id')=='2') { 
		 	  if($session->read('Auth.User.group_id')=='5') {
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
			<?php echo $this->Html->link(__('View Evaluation', true), array('controller' => 'searches','action' => 'viewsearch', $user['User']['id'])); ?>
			
		</td>
			<td class="actions">
			<?php echo $this->Html->link(__('Add Evaluation', true), array('controller' => 'searches','action' => 'addsearch', $user['User']['id'])); ?>
			
		</td>
			
		<?php }  ?>
		<?php } ?>
	<?php 	if(($session->read('Auth.User.group_id')=='6') ||($session->read('Auth.User.group_id')=='7')) {
				 		 if((($user['User']['group_id'] == '6') || ($user['User']['group_id'] == '7')) && ($user['User']['team_id'] == '2') && ($user['User']['id'] == $session->read('Auth.User.id'))) 
{ ?>
		<td><?php echo $user['User']['username']; ?>&nbsp;</td>

		<td>
			<?php echo $user['Group']['name']; ?>
			
		</td>
		<td>
			<?php echo $user['Team']['team_name']; ?>
		</td>
				<td class="actions">
			<?php echo $this->Html->link(__('View Evaluation', true), array('controller' => 'searches','action' => 'viewsearch', $user['User']['id'])); ?>
			
		</td>
			
			
		<?php }  ?>
		<?php } ?>
		
		<?php } ?>
		
		
		<?php  if ($session->read('Auth.User.team_id')=='4') { 
		 	  if($session->read('Auth.User.group_id')=='5') {
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
			<?php echo $this->Html->link(__('View Evaluation', true), array('controller' => 'landscapes','action' => 'viewlandscape', $user['User']['id'])); ?>
			
		</td>
			<td class="actions">
			<?php echo $this->Html->link(__('Add Evaluation', true), array('controller' => 'landscapes','action' => 'addlandscape', $user['User']['id'])); ?>
			
		</td>
			
		<?php }  ?>
		<?php } ?>
	<?php 	if(($session->read('Auth.User.group_id')=='6') ||($session->read('Auth.User.group_id')=='7')) {
				 		 if((($user['User']['group_id'] == '6') || ($user['User']['group_id'] == '7')) && ($user['User']['team_id'] == '4') && ($user['User']['id'] == $session->read('Auth.User.id'))) 
{ ?>
		<td><?php echo $user['User']['username']; ?>&nbsp;</td>

		<td>
			<?php echo $user['Group']['name']; ?>
			
		</td>
		<td>
			<?php echo $user['Team']['team_name']; ?>
		</td>
				<td class="actions">
			<?php echo $this->Html->link(__('View Evaluation', true), array('controller' => 'landscapes','action' => 'viewlandscape', $user['User']['id'])); ?>
			
		</td>
			
			
		<?php }  ?>
		<?php } ?>
		
		<?php } ?>
		
		
		
		
		
		<?php } ?>
		</tr>
<?php endforeach; ?>
	</table>
	
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
<ul>
 
        <?php if($session->read('Auth.User.group_id')=='1') {?>
        <li><?php echo $this->Html->link(__('New Project', true), array('controller'=>'projects','action' => 'add')); ?></li> <?php  } ?>
		<li><?php echo $this->Html->link(__('List Projects', true), array('controller'=>'projects','action' => 'index')); ?> </li>
		<?php if($session->read('Auth.User.group_id')=='1') {?>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li> <?php } ?>
		<li><?php echo $this->Html->link(__('Employee Evaluation', true), array('controller' => 'users', 'action' => 'team')); ?> </li>
</ul>

</div> 

