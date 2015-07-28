<div class="projects index">
<h2><?php __('Projects');?></h2>
<table cellpadding="0" cellspacing="0">
<tr>
			
			<th><?php echo $this->Paginator->sort('project_name');?></th>
			<th><?php echo $this->Paginator->sort('project_status');?></th>
			<th><?php echo $this->Paginator->sort('project_code');?></th>
			<th><?php echo $this->Paginator->sort('action_steps');?></th>
		<?php 
if($session->read('Auth.User.group_id')!='2'){ ?>
			<th><?php echo $this->Paginator->sort('project_cost');?></th>
<?php } ?>
			<th><?php echo $this->Paginator->sort('start_date');?></th>
			<th><?php echo $this->Paginator->sort('end_date');?></th>
			<th><?php echo "Download Reports";?></th>
			<th class="actions"><?php __('Actions');?></th>
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
if(($session->read('Auth.User.group_id')=='1') || ($session->read('Auth.User.group_id')=='4' && ($session->read('Auth.User.username') == $project['Project']['created_by'])))
{
 ?>
		
		<td><?php echo $project['Project']['project_name']; ?>&nbsp;</td>
		<td><?php echo $project['Project']['project_status']; ?>&nbsp;</td>
		<td><?php echo $project['Project']['project_code']; ?>&nbsp;</td>
		<td><?php echo $project['Project']['action_steps']; ?>&nbsp;</td>
		<td><?php echo $project['Project']['project_cost']; ?>&nbsp;</td>
		<td><?php echo date('d-m-Y', strtotime($project['Project']['start_date'])); ?>&nbsp;</td>
		<td><?php echo date('d-m-Y', strtotime($project['Project']['end_date'])); ?>&nbsp;</td>
		<td><?php
		$i = 0;
		foreach ($project['Upload'] as $upload):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>

	<?php echo $this->Html->link($upload['name'], array('controller' => 'Projects', 'action' => 'download',$upload['name'])); ?>&nbsp;
<?php endforeach; ?>
	</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $project['Project']['id'])); ?>
					</td>
<?php 
}
elseif($session->read('Auth.User.group_id')=='2')
{
?>

		<td><?php echo $project['Project']['project_name']; ?>&nbsp;</td>
		<td><?php echo $project['Project']['project_status']; ?>&nbsp;</td>
		<td><?php echo $project['Project']['project_code']; ?>&nbsp;</td>
		<td><?php echo $project['Project']['action_steps']; ?>&nbsp;</td>
		<td><?php echo date('d-m-Y', strtotime($project['Project']['start_date'])); ?>&nbsp;</td>
		<td><?php echo date('d-m-Y', strtotime($project['Project']['end_date'])); ?>&nbsp;</td>
		<td><?php
		$i = 0;
		foreach ($project['Upload'] as $upload):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>

	<?php echo $this->Html->link($upload['name'], array('controller' => 'Projects', 'action' => 'download',$upload['name'])); ?>&nbsp;
<?php endforeach; ?>
	</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $project['Project']['id'])); ?>
					</td>

<?php }
elseif($session->read('Auth.User.username')== $project['User']['username']) {

?>

		<td><?php echo $project['Project']['project_name']; ?>&nbsp;</td>
		<td><?php echo $project['Project']['project_status']; ?>&nbsp;</td>
		<td><?php echo $project['Project']['project_code']; ?>&nbsp;</td>
		<td><?php echo $project['Project']['action_steps']; ?>&nbsp;</td>
		<td><?php echo $project['Project']['project_cost']; ?>&nbsp;</td>
		<td><?php echo date('d-m-Y', strtotime($project['Project']['start_date'])); ?>&nbsp;</td>
		<td><?php echo date('d-m-Y', strtotime($project['Project']['end_date'])); ?>&nbsp;</td>
		<td><?php
		$i = 0;
		foreach ($project['Upload'] as $upload):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>

	<?php echo $this->Html->link($upload['name'], array('controller' => 'Projects', 'action' => 'download',$upload['name'])); ?>&nbsp;
<?php endforeach; ?>
	</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $project['Project']['id'])); ?>
			
		</td>
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

	<ul><?php if($session->read('Auth.User.group_id')=='1' || $session->read('Auth.User.group_id')=='4') {
//echo $this->Html->link($project['User']['username'], array('controller' => 'users', 'action' => 'view', $project['User']['id']));
?>

		<li><?php echo $this->Html->link(__('New Project', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
<?php 
}
 else
{
?>
<li><?php echo $this->Html->link(__('List Projects', true), array('action' => 'index')); ?> </li>
<?php } ?>
</ul>
</div>
