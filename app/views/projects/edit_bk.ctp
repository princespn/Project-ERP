<?php if($session->read('Auth.User.group_id')!='2' && $session->read('Auth.User.group_id')!='1' && $session->read('Auth.User.group_id')!='4') 
{
header("Location: /greyb/users/logout/");

}
?>
<script>
	$(function() {
		$( "#start_date" ).datepicker();
	});
	</script>
<script>
	$(function() {
		$( "#end_date" ).datepicker();
	});
	</script>
<script>
	$(function() {
		$( "#invoice_date" ).datepicker();
	});
	</script>
<script type="text/javascript">
function _add_more() {
	  var txt = "<br><input type=\"file\" id =\"ProjectFile\" name=\"data[Project][file][]\">";
	  document.getElementById("dvFile").innerHTML += txt;
	}


function removeRow(e)
{
    var targ;
    if (!e) var e = window.event;
    if (e.target) targ = e.target;
    else if (e.srcElement) targ = e.srcElement;
    if (targ.nodeType == 3) // defeat Safari bug
        targ = targ.parentNode;

    var index=targ.parentNode.parentNode.rowIndex;
    document.getElementById('ImageTable').deleteRow(index);
}

function addrow(element)
{
    var table=document.getElementById(element);
    var totalRows=table.rows.length;
    if(totalRows<5)
        {
    var file=document.createElement('input');
    file.setAttribute('type','file');
    file.setAttribute('name','image[]');
    file.setAttribute('id','image[]');

    var removeBtn=document.createElement('input');
    removeBtn.setAttribute('type','button');
    removeBtn.setAttribute('value','Remove File');

    /*var removeDesc=document.createElement('input');
    removeDesc.setAttribute('type','text');
    removeDesc.setAttribute('value','');
    removeDesc.setAttribute('id','desc[]');
    removeDesc.setAttribute('name','desc[]');
    removeDesc.setAttribute('maxlength','50');*/

    if (removeBtn.addEventListener)
    {    removeBtn.addEventListener ("click",removeRow,false);    }  //IE
    else if (removeBtn.attachEvent)
    {     removeBtn.attachEvent ("onclick",removeRow);    } // Firefox
    else
    {     removeBtn.onclick = removeRow;   // default
    }

    var td=document.createElement('td');
    td.appendChild(file);

    var td1=document.createElement('td');
    td1.appendChild(removeBtn);

   /*  var td2=document.createElement('td');
    td2.appendChild(removeDesc);*/

    var newRow = table.insertRow(totalRows);
    newRow.appendChild(td);
    //newRow.appendChild(td2);
    newRow.appendChild(td1);
    return 0;
}

else
    {

        alert("You can upload max 5 files at a time");
    }
}
</script>
<div class="projects form">
<?php //pr($this->data);?>
<?php echo $this->Form->create('Project',array('enctype'=>'multipart/form-data'));?>
	<fieldset>
		<legend><?php __('Edit Project'); ?></legend>
	<?php
	    echo $this->Form->hidden('id',array('value'=>$this->data['Project']['id']));
		if($session->read('Auth.User.group_id')!='2') {
	
		echo $this->Form->input('project_name');
		}
else
{
echo $this->Form->input('project_name',array('readonly'=>'readonly'));
}
if($session->read('Auth.User.group_id')!='2') {

		echo $this->Form->input('user_id');
}
		//echo $this->Form->input('project_status');?><div class="input text"><label for="ProjectProjectName">Project Status</label><?php echo $this->Form->select('project_status',array('Completed'=>'Completed','In Process'=>'In Process','Proposed'=>'Proposed')); ?></div>
	<?php 
		if($session->read('Auth.User.group_id')!='2') {		
		echo $this->Form->input('project_code');
		}
else
{
echo $this->Form->input('project_code',array('readonly'=>'readonly'));
}
		echo $this->Form->input('action_steps');
		//echo $this->Form->input('comments');
		echo $this->Form->input('comments',array('type'=>'textarea','rows'=>'4','cols'=>'15'));
		echo $this->Form->input('start_date',array('id'=>'start_date','type'=>'date'));
		echo $this->Form->input('end_date',array('id'=>'end_date','type'=>'date'));
		if($session->read('Auth.User.group_id')!='2') {
		echo $this->Form->input('project_cost');
		echo $this->Form->input('project_actual_cost');
?>
<div class="input text"><label for="ProjectProjectName">Project Invoice</label><?php echo $this->Form->select('project_invoiced',array('Yes'=>'Yes','No'=>'No')); ?></div>

		<?php
echo $this->Form->input('invoice_date',array('id'=>'invoice_date','type'=>'date'));
	?>

<div class="input text"><label for="ProjectProjectName">Payment Received</label><?php echo $this->Form->select('payment_received',array('Yes'=>'Yes','No'=>'No')); ?></div>

<?php }
		//echo $this->Form->input('file', array('type'=>'file'));
		?> 
		
		<?php 	
		$modify_by = $session->read('Auth.User.username');

		echo $this->Form->hidden('modify_by',array('value'=>$modify_by));
		?>
		<div id="dvFile">
		<?php  echo $this->Form->input('file', array('type' => 'file','id'=>'ProjectFile','name'=>'data[Upload][file][]'));?>
		</div>
		<?php echo $this->Form->button('Add another', array('onclick'=>'_add_more()','type' => 'button', 'title' => 'Add another file upload'));
?>		
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php  __('Actions'); ?></h3>
	<ul>

		<li><?php //echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Project.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Project.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Projects', true), array('action' => 'index'));?></li>
		<li><?php //echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
