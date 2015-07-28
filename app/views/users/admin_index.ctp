<div class="user index">
	<table>
		<tr>
			<td><h2>
			<?php __('Manage User');?>
				</h2>
			</td>
			<td class="actions_top"><?php echo $this->Html->link($this->Html->image("icon/Add.png",array('alt'=>'Add New', 'title'=>'Add New')), array('action' => 'add'), array('escape' => false)); ?></td>
		</tr>
	</table>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('group_id');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('username');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th class="actions"><?php __('Actions');?></th>
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
		<td>
			<?php echo $this->Html->link($user['Group']['name'], array('controller' => 'group', 'action' => 'view', $user['Group']['group_id'])); ?>
		</td>
		<td><?php echo $user['User']['email']; ?>&nbsp;</td>
		<td><?php echo $user['User']['username']; ?>&nbsp;</td>
		<td><?php echo $user['User']['name']; ?>&nbsp;</td>
		<td class="list_actions">
			<?php echo $this->Html->link($this->Html->image("icon/document.png",array('alt'=>'View', 'title'=>'View', 'height'=>'25', 'width' => '25')), array('action' => 'view', $user['User']['user_id']), array('escape' => false));?>
			<?php echo $this->Html->link($this->Html->image("icon/Pencil.png",array('alt'=>'Edit', 'title'=>'Edit', 'height'=>'25', 'width' => '25')), array('action' => 'edit', $user['User']['user_id']), array('escape' => false)); ?>
			<?php echo $this->Html->link($this->Html->image("icon/Trash.png",array('alt'=>'Delete', 'title'=>'Delete', 'height'=>'25', 'width' => '25')), array('action' => 'delete', $user['User']['user_id']), array('escape' => false), sprintf(__('Are you sure you want to delete # %s?', true), $user['User']['user_id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
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
	</div>
</div>