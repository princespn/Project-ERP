<?php 
$divId = 'coments_'.$_model.'_'.$_project_id;
//$ajax->div($divId); ?>

<?php
$paginator->options(array(
	'update' => $divId,
	'url' => $this->params['pass'], 
));
?>

<?php
echo $this->requestAction('/coments/add/'.$_model.'/'.$_project_id, array('return'));
?>
<table cellpadding="0" cellspacing="0">
<tr>
</tr>

<?php 
$i = 0;
foreach ($coments as $coment):

$class = null;
		
		if ($i++ % 2 == 0) {
			//$class = ' class="altrow"';
		}
	?>
	<tr<?php //echo $class;?>>


<?php if ( empty($coments) ) : ?>
<td>
<em>No Comments Posted</em>
</td>
<?php endif; ?>
 <div id="coment_<?php e($coment['Coment']['model']); ?>_<?php e($coment['Coment']['project_id']); ?>" style="background:none;height=20em;">
 <td style="width:14em;background:#dedede;border:1px solid #ffffff;" ><b><?php e($coment['User']['username']);?><i style="font-size:8.5px;">&nbsp;said <?php e($time->relativeTime($coment['Coment']['created'])); ?></i>:</b></td>
 <td style="background:none;"><?php e(nl2br($coment['Coment']['comment'])); echo '<br/>'; if(!empty($coment['Attachment']['0']['name'])) { echo $this->Html->link($coment['Attachment']['0']['name'], array('controller' => 'coments', 'action' => 'download',$coment['Attachment']['0']['name'])); } ?></td></div>
		
<?php endforeach; ?>
</tr>

</table>

<?php //echo $ajax->divEnd($divId); ?>
