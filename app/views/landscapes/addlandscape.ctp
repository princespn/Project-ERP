<?php if($session->read('Auth.User.username')!='admin' && $session->read('Auth.User.group_id')!='1' && $session->read('Auth.User.group_id')!='5' && $session->read('Auth.User.group_id')!='2') 
{
header("Location: /greyb/users/logout/");

}
?>


<div class="users form">
<?php echo $this->Form->create('Landscape',array('controller'=>'landscapes','method'=>'post','action'=>'addlandscape')); ?>
	<fieldset>
		<legend><?php __('Evaluation form'); ?></legend>
		<?php 
		$currentYear=date('Y');
		$maxYear = $currentYear +3;
		$minYear = $currentYear -3;
		echo $this->Form->input('month',array('id'=>'month','type'=>'date','empty' => true,'maxYear'=>$maxYear,'minYear'=>$minYear,'orderYear'=>'asc'));
		
		
		// echo $this->Form->input('',array('label'=>'','id'=>'month','type'=>'date'));?>

 <table>
 <tr style="background: none repeat scroll 0% 0% rgb(102,102,102); color: rgb(255,255,255);"><th> Evaluation Parameters </th>
     <th>  Ratings      </th> <th> Comments </th>
</tr>
  <?php echo $this->Form->input('user_id');?> 
  <?php echo $this->Form->input('team_id',array('label'=>'','id'=>'team_id','type'=>'hidden','value'=>'4'));?> 
.
<tr class="altrow"> <td> <b> 1.</b>Percentage of total projects delivered on time <font  size= "3" color="red">*</font> </td>
<td> <?php $options=array('k'=>'','0'=>'0','1.0'=>'1.0','1.5'=>'1.5','2.0'=>'2.0','2.5'=>'2.5','3.0'=>'3.0','3.5'=>'3.5','4.0'=>'4.0','4.5'=>'4.5','5.0'=>'5.0','5.5'=>'5.5','6.0'=>'6.0','6.5'=>'6.5','7.0'=>'7.0','7.5'=>'7.5','8.0'=>'8.0','8.5'=>'8.5','9.0'=>'9.0','9.5'=>'9.5','10'=>'10'); ?>
<?php echo $this->Form->input('delivery',array('label'=>'','id'=>'delivery','type'=>'select','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('deliveryt',array('label'=>'','id'=>'deliveryt','type'=>'text'));?>  </td>
 </tr>

 

<tr>
<td> <b> 2.</b>Percentage of total projects delivered without errors <font  size= "3" color="red">*</font></td>
<td> <?php $options=array('k'=>'','0'=>'0','1.0'=>'1.0','1.5'=>'1.5','2.0'=>'2.0','2.5'=>'2.5','3.0'=>'3.0','3.5'=>'3.5','4.0'=>'4.0','4.5'=>'4.5','5.0'=>'5.0','5.5'=>'5.5','6.0'=>'6.0','6.5'=>'6.5','7.0'=>'7.0','7.5'=>'7.5','8.0'=>'8.0','8.5'=>'8.5','9.0'=>'9.0','9.5'=>'9.5','10'=>'10'); ?>
<?php echo $this->Form->input('deliver_errors',array('label'=>'','id'=>'deliver_errors','type'=>'select','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('deliver_errorst',array('label'=>'','id'=>'deliver_errorst','type'=>'text'));?>  </td>
</tr>

<tr class="altrow">
<td><b> 3.</b> Were the key string logics made for landscape comprehensive<font  size= "3" color="red">*</font></td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('keylogic',array('legend'=>'','id'=>'keylogic','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('keylogict',array('label'=>'','id'=>'keylogict','type'=>'text'));?>  </td>
</tr>

<tr>
<td><b> 4.</b> Were there any patents, which were not captured in the key strings.<font  size= "3" color="red">*</font></td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('judge',array('legend'=>'','label'=>'false','id'=>'judge','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('judget',array('label'=>'','id'=>'judget','type'=>'text'));?>  </td>
</tr>


<tr class="altrow">
<td> <b> 5.</b>Were there any patents, which were missed in the analysis. Check for comprehensiveness was not made.<font  size= "3" color="red">*</font></td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('bang',array('legend'=>'','label'=>'false','id'=>'bang','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('bangt',array('label'=>'','id'=>'bangt','type'=>'text'));?>  </td>
</tr>

<tr>
<td><b> 6.</b>Did the resource made sure that analysis done by team is correct <font  size= "3" color="red">*</font></td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('include',array('legend'=>'','label'=>'false','id'=>'include','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('includet',array('label'=>'','id'=>'includet','type'=>'text'));?>  </td>
</tr>


<tr class="altrow">
<td> <b> 7.</b>Was the categorization done by resource incorrect or insufficient.
<font  size= "3" color="red">*</font>
</td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('includecat',array('legend'=>'','label'=>'false','id'=>'includecat','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('includecatt',array('label'=>'','id'=>'includecatt','type'=>'text'));?>  </td>
</tr>

<tr>
<td><b> 8.</b> Did the resource make sure that the team working on the analysis has the same understanding.<font  size= "3" color="red">*</font></td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('mapping',array('legend'=>'','label'=>'false','id'=>'mapping','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('mappingt',array('label'=>'','id'=>'mappingt','type'=>'text'));?>  </td>
</tr>

<tr class="altrow">
<td> <b> 9.</b>Were the daily project meeting done.
<font  size= "3" color="red">*</font></td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('mappingc',array('legend'=>'','label'=>'false','id'=>'mappingc','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('mappingct',array('label'=>'','id'=>'mappingct','type'=>'text'));?>  </td>
</tr>

<tr>
<td><b> 10.</b> Were there any errors in file collation
<font  size= "3" color="red">*</font></td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('coll',array('legend'=>'','label'=>'false','id'=>'coll','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('collt',array('label'=>'','id'=>'collt','type'=>'text'));?>  </td>
</tr>

<tr class="altrow">
<td><b> 11.</b>Did the resource co-ordinate with other teams (Asian analysis team , chart preparation team) for follow up on the work in progress
<font  size= "3" color="red">*</font></td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('updates',array('legend'=>'','label'=>'false','id'=>'updates','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('updatest',array('label'=>'','id'=>'updatest','type'=>'text'));?>  </td>
</tr>

<tr>
<td><b> 12.</b>Did the resource, plan/took necessary steps for efficiently managing/completing the project. 
<font  size= "3" color="red">*</font>
</td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('plan',array('legend'=>'','label'=>'false','id'=>'plan','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('plant',array('label'=>'','id'=>'plant','type'=>'text'));?>  </td>
</tr>

<tr class="altrow">
<td><b> 13.</b>Was a exhaustive taxonomy made by resource
<font  size= "3" color="red">*</font>
</td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('ackn',array('legend'=>'','label'=>'false','id'=>'ackn','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('acknt',array('label'=>'','id'=>'acknt','type'=>'text'));?>  </td>
</tr>


<tr>
<td><b> 14.</b> Average number of formatting errors found in each project.(In the final deliverable, which was reviewed by resource)
<font  size= "3" color="red">*</font></td>
<td> <?php $options=array('k'=>'','0'=>'0','1.0'=>'1.0','1.5'=>'1.5','2.0'=>'2.0','2.5'=>'2.5','3.0'=>'3.0','3.5'=>'3.5','4.0'=>'4.0','4.5'=>'4.5','5.0'=>'5.0','5.5'=>'5.5','6.0'=>'6.0','6.5'=>'6.5','7.0'=>'7.0','7.5'=>'7.5','8.0'=>'8.0','8.5'=>'8.5','9.0'=>'9.0','9.5'=>'9.5','10'=>'10'); ?>
<?php echo $this->Form->input('fdeliver_errors',array('label'=>'','id'=>'fdeliver_errors','type'=>'select','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('fdeliver_errorst',array('label'=>'','id'=>'fdeliver_errorst','type'=>'text'));?>  </td>
</tr>

<tr class="altrow">
<td><b> 15.</b>Was a proper usage of English done while writing insights
<font  size= "3" color="red">*</font>
</td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('english',array('legend'=>'','label'=>'false','id'=>'english','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('englisht',array('label'=>'','id'=>'englisht','type'=>'text'));?>  </td>
</tr>

<tr>
<td><b> 16.</b>Were there any data errors In charts, which were not captured by the resource
<font  size= "3" color="red">*</font></td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('charts',array('legend'=>'','label'=>'false','id'=>'charts','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('chartst',array('label'=>'','id'=>'chartst','type'=>'text'));?>  </td>
</tr>


<tr class="altrow">
<td><b> 17.</b>Did resource customize the deliverable according to client requirement (by addition of charts which might be useful to client)
<font  size= "3" color="red">*</font> </td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('customize',array('legend'=>'','label'=>'false','id'=>'customize','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('customizet',array('label'=>'','id'=>'customizet','type'=>'text'));?>  </td>
</tr>

<tr>
<td><b> 18.</b>Did resource customize the deliverable according to client requirement (by addition of insights which might be useful to client)
<font  size= "3" color="red">*</font></td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('insight',array('legend'=>'','label'=>'false','id'=>'insight','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('insightt',array('label'=>'','id'=>'insightt','type'=>'text'));?>  </td>
</tr>

<tr class="altrow">
<td><b> 19.</b> Was there any error in the work file which needs to be send to Chart Preparation Team
<font  size= "3" color="red">*</font></td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('chartprep',array('legend'=>'','label'=>'false','id'=>'chartprep','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('chartprept',array('label'=>'','id'=>'chartprept','type'=>'text'));?>  </td>
</tr>


<tr>
<td><b> 20.</b>Any deadlines missed by resource
<font  size= "3" color="red">*</font></td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('respdead',array('legend'=>'','label'=>'false','id'=>'respdead','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('respdeadt',array('label'=>'','id'=>'respdeadt','type'=>'text'));?>  </td>
</tr>

<tr class="altrow">
<td><b> 21.</b>In case of any anomalous situations was the resource able to take the necessary decisions for bringing the project on corrective course.
<font  size= "3" color="red">*</font></td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('share',array('legend'=>'','label'=>'false','id'=>'share','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('sharet',array('label'=>'','id'=>'sharet','type'=>'text'));?>  </td>
</tr>


<tr>
<td><b> 22.</b>Were there any delays in the tasks provided.
<font  size= "3" color="red">*</font></td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('delay',array('legend'=>'','label'=>'false','id'=>'delay','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('delayt',array('label'=>'','id'=>'delayt','type'=>'text'));?>  </td>
</tr>

<tr class="altrow">
<td><b> 23.</b>Were the corrections suggested by PM implemented in the deliverable
<font  size= "3" color="red">*</font></td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('qualityflag',array('legend'=>'','label'=>'false','id'=>'qualityflag','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('qualityflagt',array('label'=>'','id'=>'qualityflagt','type'=>'text'));?>  </td>
</tr>

<tr>
<td><b> 24.</b>Were project findings shared in client email.
<font  size= "3" color="red">*</font></td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('clientshare',array('legend'=>'','label'=>'false','id'=>'clientshare','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('clientsharet',array('label'=>'','id'=>'clientsharet','type'=>'text'));?>  </td>
</tr>

<tr class="altrow">
<td><b> 25.</b>Failure to acknowledge emails.
<font  size= "3" color="red">*</font>
</td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('ackmail',array('legend'=>'','label'=>'false','id'=>'ackmail','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('ackmailt',array('label'=>'','id'=>'ackmailt','type'=>'text'));?>  </td>
</tr>

<tr>
<td><b> 26.</b>Quality rating of E-mails sent. (Based on content and clarity, Flow of sentences, English language) 
<font  size= "3" color="red">*</font>
</td>
<td> <?php $options=array('formal'=>'formal','informal'=>'informal'); ?>
<?php echo $this->Form->input('qualityemail',array('legend'=>'','label'=>'false','id'=>'qualityemail','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('qualityemailt',array('label'=>'','id'=>'qualityemailt','type'=>'text'));?>  </td>
</tr>

<tr class="altrow">
<td><b> 27.</b>Type of verbal communication with team members, colleagues and project  managers in the office.
<font  size= "3" color="red">*</font>
</td>
<td> <?php $options=array('formal'=>'formal','informal'=>'informal'); ?>
<?php echo $this->Form->input('vcomm',array('legend'=>'','label'=>'false','id'=>'vcomm','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('vcommt',array('label'=>'','id'=>'vcommdeliveryt','type'=>'text'));?>  </td>
</tr>

<tr>
<td><b> 28.</b>Self Motivation for perform projects
<font  size= "3" color="red">*</font>
</td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('self',array('legend'=>'','label'=>'false','id'=>'self','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('selft',array('label'=>'','id'=>'selft','type'=>'text'));?>  </td>
</tr>

<tr class="altrow">
<td><b> 29.</b>Independent Learning<font  size= "3" color="red">*</font> </td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('indp',array('legend'=>'','label'=>'false','id'=>'indp','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('indpt',array('label'=>'','id'=>'indpt','type'=>'text'));?>  </td>
</tr>


<tr>
<td><b> 30.</b>Adaption to new processes and protocols of the organization <font  size= "3" color="red">*</font></td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('adapt',array('legend'=>'','label'=>'false','id'=>'adapt','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('adaptt',array('label'=>'','id'=>'adaptt','type'=>'text'));?>  </td>
</tr>

<tr class="altrow">
<td><b> 31.</b>Undertook the project responsibility
<font  size= "3" color="red">*</font></td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('undert',array('legend'=>'','label'=>'false','id'=>'undert','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('undertt',array('label'=>'','id'=>'undertt','type'=>'text'));?>  </td>
</tr>

<tr>
<td> <b> 32.</b>Efforts to understand & share new technologies
<font  size= "3" color="red">*</font></td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('newt',array('legend'=>'','label'=>'false','id'=>'newt','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('newtt',array('label'=>'','id'=>'newtt','type'=>'text'));?>  </td>
</tr>


<tr class="altrow">
<td><b> 33.</b>If the RA share's new technologies, then - Number of new findings shared with everyone-for e.g. -News, Blogs, Discussions, project findings/learnings etc.<font  size= "3" color="red">*</font></td>
<td> <?php $options=array('k'=>'','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5'); ?>
<?php echo $this->Form->input('findings',array('label'=>'','id'=>'findings','type'=>'select','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('findingst',array('label'=>'','id'=>'findingst','type'=>'text'));?>  </td>
</tr>


<tr>
<td><b> 34.</b>Co-opertated as a part of team.(Coming on time, helped team members perform their work, shared the work, if required etc)
<font  size= "3" color="red">*</font></td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('teamwork',array('legend'=>'','label'=>'false','id'=>'teamwork','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('teamworkt',array('label'=>'','id'=>'teamworkt','type'=>'text'));?>  </td>
</tr>

<tr class="altrow">
<td><b> 35.</b>Was a proper plan sent to PM , resource and quality team.
<font  size= "3" color="red">*</font></td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('planz',array('legend'=>'','label'=>'false','id'=>'planz','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('planzt',array('label'=>'','id'=>'planzt','type'=>'text'));?>  </td>
</tr>


<tr>
<td><b> 36.</b>During managing the project, were the project risks identified and proper actions were taken to mitigate the risks.
<font  size= "3" color="red">*</font></td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('risk',array('legend'=>'','label'=>'false','id'=>'risk','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('riskt',array('label'=>'','id'=>'riskt','type'=>'text'));?>  </td>
</tr>

<tr class="altrow">
<td><b> 37.</b>Co-ordination with Quality Team, RA and Report Generation team.
<font  size= "3" color="red">*</font></td>
<td> <?php $options=array('Perfect Co-ordination'=>'Perfect Co-ordination','Poor Co-ordination'=>'Poor Co-ordination'); ?>
<?php echo $this->Form->input('coord',array('legend'=>'','label'=>'false','id'=>'coord','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('coordt',array('label'=>'','id'=>'coordt','type'=>'text'));?>  </td>
</tr>

<tr>
<td> <b> 38.</b>Presentation Skills
<font  size= "3" color="red">*</font></td>
<td> <?php $options=array('good'=>'good','poor'=>'poor'); ?>
<?php echo $this->Form->input('skills',array('legend'=>'','label'=>'false','id'=>'skills','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('skillst',array('label'=>'','id'=>'skillst','type'=>'text'));?>  </td>
</tr>

<tr class="altrow">
<td> <b> 39.</b>Was the final deliverable sent from resource in a client deliverable form
<font  size= "3" color="red">*</font></td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('clientform',array('legend'=>'','label'=>'false','id'=>'clientform','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('clientformt',array('label'=>'','id'=>'clientformt','type'=>'text'));?>  </td>
</tr>

<tr>
<td><b> 40.</b> Were there any client queries reverting back on deliverables, resulting in pointing of errors in deliverables.
<font  size= "3" color="red">*</font></td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('clientq',array('legend'=>'','label'=>'false','id'=>'clientq','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('clientqt',array('label'=>'','id'=>'clientqt','type'=>'text'));?>  </td>
</tr>

<tr class="altrow">
<td> <b> 41.</b>Delegation of work while managing the project
<font  size= "3" color="red">*</font></td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('delegation',array('legend'=>'','label'=>'false','id'=>'delegation','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('delegationt',array('label'=>'','id'=>'delegationt','type'=>'text'));?>  </td>
</tr>

<tr>
<td> <b> 42.</b>Formal attitude
<font  size= "3" color="red">*</font></td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('attitude',array('legend'=>'','label'=>'false','id'=>'attitude','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('attitudet',array('label'=>'','id'=>'attitudet','type'=>'text'));?>  </td>
</tr>

<tr class="altrow">
<td><b> 43.</b>Number of new approaches suggested to solve problems. For Example: suggesting new techniques in patent searching
</td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('approach',array('legend'=>'','label'=>'false','id'=>'approach','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('approacht',array('label'=>'','id'=>'approacht','type'=>'text'));?>  </td>
</tr>

<tr>
<td><b> 44.</b>Takes internal initiatives for knowledge sharing and project learning
</td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('initiative',array('legend'=>'','label'=>'false','id'=>'initiative','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('initiativet',array('label'=>'','id'=>'initiativet','type'=>'text'));?>  </td>
</tr>

<tr class="altrow"> 
<td><b> 45.</b>Discovering new excel functions & advanced excel knowledge
</td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('excel',array('legend'=>'','label'=>'false','id'=>'excel','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('excelt',array('label'=>'','id'=>'excelt','type'=>'text'));?>  </td>
</tr>


<tr>
<td> <b> 46.</b>Efforts to understand various advanced aspects of Intellectual Property
</td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('ip',array('legend'=>'','label'=>'false','id'=>'ip','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('ipt',array('label'=>'','id'=>'ipt','type'=>'text'));?>  </td>
</tr>

<tr class="altrow">
<td> <b> 47.</b>Efforts to understand US patent laws and their interpretation
</td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('patent',array('legend'=>'','label'=>'false','id'=>'patent','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('patentt',array('label'=>'','id'=>'patentt','type'=>'text'));?>  </td>
</tr>

<tr>
<td> <b> 48.</b> Efforts to know new law suits/cases currently going across the world
</td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('law',array('legend'=>'','label'=>'false','id'=>'law','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('lawt',array('label'=>'','id'=>'lawt','type'=>'text'));?>  </td>
</tr>

<tr class="altrow">
<td> <b> 49.</b>Suggesting new strategy for expediting the project process
</td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('new',array('legend'=>'','label'=>'false','id'=>'new','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('new_t',array('label'=>'','id'=>'new_t','type'=>'text'));?>  </td>
</tr>


<tr>
<td><b> 50.</b>Quality of project deliverable preparation
</td>
<td> <?php $options=array('yes'=>'yes','no'=>'no'); ?>
<?php echo $this->Form->input('deliprep',array('legend'=>'','label'=>'false','id'=>'deliprep','type'=>'radio','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('deliprept',array('label'=>'','id'=>'deliprept','type'=>'text'));?>  </td>
</tr>


<tr class="altrow">
<td> <b> 51.</b>Average rating for project quality (given by Mentor)
<font  size= "3" color="red">*</font></td>
<td> <?php $options=array('k'=>'','0'=>'0','1.0'=>'1.0','1.5'=>'1.5','2.0'=>'2.0','2.5'=>'2.5','3.0'=>'3.0','3.5'=>'3.5','4.0'=>'4.0','4.5'=>'4.5','5.0'=>'5.0','5.5'=>'5.5','6.0'=>'6.0','6.5'=>'6.5','7.0'=>'7.0','7.5'=>'7.5','8.0'=>'8.0','8.5'=>'8.5','9.0'=>'9.0','9.5'=>'9.5','10'=>'10'); ?>
<?php echo $this->Form->input('quality_rate3',array('label'=>'','id'=>'quality_rate3','type'=>'select','options'=> $options));?> </td>
<td> <?php echo $this->Form->input('quality_rate3t',array('label'=>'','id'=>'quality_rate3t','type'=>'text'));?>  </td>
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
