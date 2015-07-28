<?php if($session->read('Auth.User.username')!='admin' && $session->read('Auth.User.group_id')!='1') 
{
header("Location: /greyb/users/logout/");

}
?>

<div class="groups index">
	<h2><?php __('Groups');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr style="background:#2f4f4f;color:#e0ffff;">
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($groups as $group):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $group['Group']['id']; ?>&nbsp;</td>
		<td><?php echo $group['Group']['name']; ?>&nbsp;</td>
		<td><?php echo $group['Group']['created']; ?>&nbsp;</td>
		<td><?php echo $group['Group']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $group['Group']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $group['Group']['id'])); ?>
					</td>
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
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
