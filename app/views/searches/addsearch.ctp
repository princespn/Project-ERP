<?php if($session->read('Auth.User.username')!='admin' && $session->read('Auth.User.group_id')!='1' && $session->read('Auth.User.group_id')!='5' && $session->read('Auth.User.group_id')!='2') 
{
header("Location: /greyb/users/logout/");

}
?>


<div class="users form">
<?php echo $this->Form->create('Search',array('controller'=>'teams','method'=>'post','action'=>'addsearch')); ?>
	<fieldset>
		<legend><?php __('Evaluation form'); ?></legend>
		<?php
		$currentYear=date('Y');
		$maxYear = $currentYear +3;
		$minYear = $currentYear -3;
		echo $this->Form->input('month',array('id'=>'month','type'=>'date','empty' => true,'maxYear'=>$maxYear,'minYear'=>$minYear,'orderYear'=>'asc'));
		 
		//echo $this->Form->input('month',array('label'=>'','id'=>'month','type'=>'date'));?>
		
		
<table>
 <tr style="background: none repeat scroll 0% 0% rgb(102,102,102); color: rgb(255,255,255);"><th> Evaluation Parameters </th>
     <th>  Ratings      </th> <th> Comments </th>
</tr>
    <?php echo $this->Form->input('user_id');?> 
  <?php echo $this->Form->input('team_id',array('label'=>'','id'=>'team_id','type'=>'hidden','value'=>'2'));?> 

<tr class="altrow"> <td> <b> 1.</b> Percentage of total projects delivered on time <font  size= "3" color="red">*</font> </td>
<td> <?php $options=array('k'=>'','0'=>'0','1.0'=>'1.0','1.5'=>'1.5','2.0'=>'2.0','2.5'=>'2.5','3.0'=>'3.0','3.5'=>'3.5','4.0'=>'4.0','4.5'=>'4.5','5.0'=>'5.0','5.5'=>'5.5','6.0'=>'6.0','6.5'=>'6.5','7.0'=>'7.0','7.5'=>'7.5','8.0'=>'8.0','8.5'=>'8.5','9.0'=>'9.0','9.5'=>'9.5','10'=>'10'); ?>
<?php echo $this->Form->input('delivery',array('label'=>'','id'=>'delivery','type'=>'select','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('deliveryt',array('label'=>'','id'=>'deliveryt','type'=>'text'));?>  </td>
 </tr>

 

<tr>
<td><b> 2.</b>  Percentage of total projects delivered without errors <font  size= "3" color="red">*</font></td>
<td> <?php $options=array('k'=>'','0'=>'0','1.0'=>'1.0','1.5'=>'1.5','2.0'=>'2.0','2.5'=>'2.5','3.0'=>'3.0','3.5'=>'3.5','4.0'=>'4.0','4.5'=>'4.5','5.0'=>'5.0','5.5'=>'5.5','6.0'=>'6.0','6.5'=>'6.5','7.0'=>'7.0','7.5'=>'7.5','8.0'=>'8.0','8.5'=>'8.5','9.0'=>'9.0','9.5'=>'9.5','10'=>'10'); ?>
<?php echo $this->Form->input('without_error',array('label'=>'','id'=>'without_error','type'=>'select','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('without_errort',array('label'=>'','id'=>'without_errort','type'=>'text'));?>  </td>
</tr>

<tr class="altrow">
<td><b> 3.</b> Average number of errors found in each project <font  size= "3" color="red">*</font></td>
<td> <?php $options=array('k'=>'','0'=>'0','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10'); ?>
<?php echo $this->Form->input('number_of_errors',array('label'=>'','id'=>'number_of_errors','type'=>'select','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('number_of_errorst',array('label'=>'','id'=>'number_of_errorst','type'=>'text'));?>  </td>
</tr>

<tr>
<td> <b> 4.</b> Did RA correctly identify  the novelty of the invention <font  size= "3" color="red">*</font> </td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('capture_novelty',array('legend'=>'','label'=>'false','id'=>'capture_novelty','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('capture_noveltyt',array('label'=>'','id'=>'capture_noveltyt','type'=>'text'));?>  </td>
</tr>


<tr class="altrow">
<td><b> 5.</b>  Was a comprehensive search performed by RA, as judged by mentor<font  size= "3" color="red">*</font></td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('comprehensive_search',array('legend'=>'','label'=>'false','id'=>'comprehensive_search','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('comprehensive_searcht',array('label'=>'','id'=>'comprehensive_searcht','type'=>'text'));?>  </td>
</tr>

<tr>
<td><b> 6.</b> Were relevant results(Bang on Results) found during prior art searches (With the possiblity that relevant patent does exsist)<font  size= "3" color="red">*</font></td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('bang',array('legend'=>'','label'=>'false','id'=>'bang','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('bangt',array('label'=>'','id'=>'bangt','type'=>'text'));?>  </td>
</tr>

<tr class="altrow">
<td><b> 7.</b>  Percentage of total of reports, delivered without any result identification.<font  size= "3" color="red">*</font> </td>
<td> <?php $options=array('k'=>'','0'=>'0','1.0'=>'1.0','1.5'=>'1.5','2.0'=>'2.0','2.5'=>'2.5','3.0'=>'3.0','3.5'=>'3.5','4.0'=>'4.0','4.5'=>'4.5','5.0'=>'5.0','5.5'=>'5.5','6.0'=>'6.0','6.5'=>'6.5','7.0'=>'7.0','7.5'=>'7.5','8.0'=>'8.0','8.5'=>'8.5','9.0'=>'9.0','9.5'=>'9.5','10'=>'10'); ?>
<?php echo $this->Form->input('reports',array('label'=>'','id'=>'reports','type'=>'select','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('reportst',array('label'=>'','id'=>'reportst','type'=>'text'));?>  </td>
</tr>



<tr>
<td><b> 8.</b>  Percentage of errors found in keystrings prepared by RA.
<font  size= "3" color="red">*</font></td>
<td> <?php $options=array('k'=>'','0'=>'0','1.0'=>'1.0','1.5'=>'1.5','2.0'=>'2.0','2.5'=>'2.5','3.0'=>'3.0','3.5'=>'3.5','4.0'=>'4.0','4.5'=>'4.5','5.0'=>'5.0','5.5'=>'5.5','6.0'=>'6.0','6.5'=>'6.5','7.0'=>'7.0','7.5'=>'7.5','8.0'=>'8.0','8.5'=>'8.5','9.0'=>'9.0','9.5'=>'9.5','10'=>'10'); ?>
<?php echo $this->Form->input('keyerror',array('label'=>'','id'=>'keyerror','type'=>'select','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('keyerrort',array('label'=>'','id'=>'keyerrort','type'=>'text'));?>  </td>
</tr>



<tr class="altrow">
<td><b> 9.</b> Were comprehensive keywords identified by RA
<font  size= "3" color="red">*</font></td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('compkey',array('legend'=>'','label'=>'false','id'=>'compkey','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('compkeyt',array('label'=>'','id'=>'compkeyt','type'=>'text'));?>  </td>
</tr>

<tr>
<td><b> 10.</b> Were there any additional results/patents suggested by mentor, which were not included in the RA's search.
<font  size= "3" color="red">*</font></td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('mentor_suggestion',array('legend'=>'','label'=>'false','id'=>'mentor_suggestion','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('mentor_suggestiont',array('label'=>'','id'=>'mentor_suggestiont','type'=>'text'));?>  </td>
</tr>

<tr class="altrow">
<td> <b> 11.</b> Were there any errors found in patent mapping (In Invalidation Searches)<font  size= "3" color="red">*</font></td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('error_mapping',array('legend'=>'','label'=>'false','id'=>'mentor_suggestion','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('error_mappingt',array('label'=>'','id'=>'error_mappingt','type'=>'text'));?>  </td>
</tr>

<tr>
<td> <b> 12.</b> Did RA provide all the updates for the quality team to mentor on time. (Considered for all the projects done by RA)
<font  size= "3" color="red">*</font></td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('on_time_update',array('legend'=>'','label'=>'false','id'=>'on_time_update','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('on_time_updatet',array('label'=>'','id'=>'on_time_updatet','type'=>'text'));?>  </td>
</tr>

<tr class="altrow">
<td> <b> 13.</b> Project findings share by the RA on client email.
<font  size= "3" color="red">*</font></td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('client',array('legend'=>'','label'=>'false','id'=>'client','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('clientt',array('label'=>'','id'=>'clientt','type'=>'text'));?>  </td>
</tr>

<tr>
<td><b> 14.</b> Failure to acknowledge emails.
<font  size= "3" color="red">*</font>
</td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('acknowledge_emails',array('legend'=>'','label'=>'false','id'=>'acknowledge_emails','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('acknowledge_emailst',array('label'=>'','id'=>'acknowledge_emailst','type'=>'text'));?>  </td>
</tr>

<tr class="altrow">
<td><b> 15.</b> Quality rating of E-mails sent. (Based on content and clarity, Flow of sentences, English language) 
<font  size= "3" color="red">*</font>
</td>
<td> <?php $options=array('formal'=>'formal','informal'=>'informal'); ?>
<?php echo $this->Form->input('quality_emails',array('legend'=>'','label'=>'false','id'=>'quality_emails','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('quality_emailst',array('label'=>'','id'=>'quality_emailst','type'=>'text'));?>  </td>
</tr>

<tr>
<td><b> 16.</b> Type of verbal communication with team members, colleagues and project  managers in the office.
<font  size= "3" color="red">*</font>
</td>
<td> <?php $options=array('formal'=>'formal','informal'=>'informal'); ?>
<?php echo $this->Form->input('verbal_comm',array('legend'=>'','label'=>'false','id'=>'verbal_comm','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('verbal_commt',array('label'=>'','id'=>'verbal_commt','type'=>'text'));?>  </td>
</tr>


<tr class="altrow">
<td><b> 17.</b>  Percentage of errors in written Communication (Reports): Report Writing, Comments in Deliverable etc
<font  size= "3" color="red">*</font></td>
<td> <?php $options=array('k'=>'','0'=>'0','1.0'=>'1.0','1.5'=>'1.5','2.0'=>'2.0','2.5'=>'2.5','3.0'=>'3.0','3.5'=>'3.5','4.0'=>'4.0','4.5'=>'4.5','5.0'=>'5.0','5.5'=>'5.5','6.0'=>'6.0','6.5'=>'6.5','7.0'=>'7.0','7.5'=>'7.5','8.0'=>'8.0','8.5'=>'8.5','9.0'=>'9.0','9.5'=>'9.5','10'=>'10'); ?>
<?php echo $this->Form->input('written_comm_error',array('label'=>'','id'=>'written_comm_error','type'=>'select','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('written_comm_errort',array('label'=>'','id'=>'written_comm_errort','type'=>'text'));?>  </td>
</tr>

<tr>
<td><b> 18.</b> Self Motivation for perform projects
<font  size= "3" color="red">*</font>
</td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('motivation',array('legend'=>'','label'=>'false','id'=>'motivation','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('motivationt',array('label'=>'','id'=>'motivationt','type'=>'text'));?>  </td>
</tr>

<tr class="altrow">
<td><b> 19.</b> Independent Learning </td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('independent_learning',array('legend'=>'','label'=>'false','id'=>'independent_learning','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('independent_learningt',array('label'=>'','id'=>'independent_learningt','type'=>'text'));?>  </td>
</tr>


<tr>
<td><b> 20.</b> Adaption to new processes and protocols of the organization <font  size= "3" color="red">*</font></td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('adaptation',array('legend'=>'','label'=>'false','id'=>'adaptation','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('adaptationt',array('label'=>'','id'=>'adaptationt','type'=>'text'));?>  </td>
</tr>

<tr class="altrow">
<td><b> 21.</b>Undertook the project responsibility
<font  size= "3" color="red">*</font></td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('responsibility',array('legend'=>'','label'=>'false','id'=>'responsibility','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('responsibilityt',array('label'=>'','id'=>'responsibilityt','type'=>'text'));?>  </td>
</tr>

<tr>
<td> <b> 22.</b>Efforts to understand & share new technologies
<font  size= "3" color="red">*</font></td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('new_tech_share',array('legend'=>'','label'=>'false','id'=>'new_tech_share','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('new_tech_sharet',array('label'=>'','id'=>'new_tech_sharet','type'=>'text'));?>  </td>
</tr>


<tr class="altrow">
<td><b> 23.</b>If the RA share's new technologies, then - Number of new findings shared with everyone-for e.g. -News, Blogs, Discussions, project findings/learnings etc.<font  size= "3" color="red">*</font></td>
<td> <?php $options=array('k'=>'','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5'); ?>
<?php echo $this->Form->input('no_of_share',array('label'=>'','id'=>'no_of_share','type'=>'select','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('no_of_sharet',array('label'=>'','id'=>'no_of_sharet','type'=>'text'));?>  </td>
</tr>



<tr>
<td><b> 24.</b>Average rating for project quality (Given by Quality Team)
<font  size= "3" color="red">*</font></td>
<td> <?php $options=array('green'=>'green','orange'=>'orange','red'=>'red'); ?>
<?php echo $this->Form->input('project_quality_rating',array('legend'=>'','label'=>'false','id'=>'project_quality_rating','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('project_quality_ratingt',array('label'=>'','id'=>'project_quality_ratingt','type'=>'text'));?>  </td>
</tr>

<tr class="altrow">
<td><b> 25.</b>Co-opertated as a part of team.(Coming on time, helped team members perform their work, shared the work, if required etc)
<font  size= "3" color="red">*</font></td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('cooperate',array('legend'=>'','label'=>'false','id'=>'cooperate','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('cooperatet',array('label'=>'','id'=>'cooperatet','type'=>'text'));?>  </td>
</tr>


<tr>
<td><b> 26.</b>Number of new approaches suggested to solve problems. For Example: suggesting new techniques in patent searching
</td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('new_approach',array('legend'=>'','label'=>'false','id'=>'new_approach','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('new_approacht',array('label'=>'','id'=>'new_approacht','type'=>'text'));?>  </td>
</tr>

<tr class="altrow">
<td><b> 27.</b>Takes internal initiatives for knowledge sharing and project learning
</td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('initiative',array('legend'=>'','label'=>'false','id'=>'initiative','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('initiativet',array('label'=>'','id'=>'initiativet','type'=>'text'));?>  </td>
</tr>

<tr>
<td><b> 28.</b>Discovering new excel functions & advanced excel knowledge
</td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('excel_function',array('legend'=>'','label'=>'false','id'=>'excel_function','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('excel_functiont',array('label'=>'','id'=>'excel_functiont','type'=>'text'));?>  </td>
</tr>

<tr class="altrow">
<td><b> 29.</b> Efforts to understand various advanced aspects of Intellectual Property
</td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('intellectual_property',array('legend'=>'','label'=>'false','id'=>'intellectual_property','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('intellectual_propertyt',array('label'=>'','id'=>'intellectual_propertyt','type'=>'text'));?>  </td>
</tr>

<tr>
<td><b> 30.</b> Efforts to understand US patent laws and their interpretation
</td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('patent_laws',array('legend'=>'','label'=>'false','id'=>'patent_laws','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('patent_lawst',array('label'=>'','id'=>'patent_lawst','type'=>'text'));?>  </td>
</tr>

<tr class="altrow" >
<td> <b> 31.</b> Efforts to know new law suits/cases currently going across the world
</td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('lawsuit',array('legend'=>'','label'=>'false','id'=>'lawsuit','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('lawsuitt',array('label'=>'','id'=>'lawsuitt','type'=>'text'));?>  </td>
</tr>

<tr>
<td><b> 32.</b> Suggesting new strategy for expediting the project process
</td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('expediting_project',array('legend'=>'','label'=>'false','id'=>'expediting_project','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('expediting_projectt',array('label'=>'','id'=>'dexpediting_projectt','type'=>'text'));?>  </td>
</tr>

<tr class="altrow">
<td> <b> 33.</b>Quality of project deliverable preparation
</td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('deliver_quality',array('legend'=>'','label'=>'false','id'=>'deliver_quality','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('deliver_qualityt',array('label'=>'','id'=>'deliver_qualityt','type'=>'text'));?>  </td>
</tr>

<tr>
<td> <b> 34.</b>Average rating for project quality (given by Mentor)
<font  size= "3" color="red">*</font></td>
<td> <?php $options=array('k'=>'','0'=>'0','1.0'=>'1.0','1.5'=>'1.5','2.0'=>'2.0','2.5'=>'2.5','3.0'=>'3.0','3.5'=>'3.5','4.0'=>'4.0','4.5'=>'4.5','5.0'=>'5.0','5.5'=>'5.5','6.0'=>'6.0','6.5'=>'6.5','7.0'=>'7.0','7.5'=>'7.5','8.0'=>'8.0','8.5'=>'8.5','9.0'=>'9.0','9.5'=>'9.5','10'=>'10'); ?>
<?php echo $this->Form->input('project_quality4',array('label'=>'','id'=>'project_quality4','type'=>'select','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('project_quality4t',array('label'=>'','id'=>'project_quality4t','type'=>'text'));?>  </td>
</tr>


</table>

	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
	<li><?php echo $this->Html->link(__('List Projects', true), array('controller' => 'projects', 'action' => 'index')); ?> </li>		<li><?php echo $this->Html->link(__('New Project', true), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
