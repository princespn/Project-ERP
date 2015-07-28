<?php if($session->read('Auth.User.username')!='admin' && $session->read('Auth.User.group_id')!='1' && $session->read('Auth.User.group_id')!='5' && $session->read('Auth.User.group_id')!='2' && $session->read('Auth.User.group_id')!='6' && $session->read('Auth.User.group_id')!='7') 
{
header("Location: /greyb/users/logout/");

}
?>


<div class="users form">
		 <h3> <legend><?php __('Evaluation History'); ?></legend> </h3>
		
	<table>
<tr><td style="width:500px;">
<div style="width:500px;">
<table style="float:left;width:100%;"> 
<tr style="background: none repeat  0% 0% rgb(102,102,102); color: rgb(255,255,255);"> <th>Parameters</th> </tr>
<tr class="altrow"><td><div style="height:50px;">Badge Obtained</div></td> </tr>
<tr> <td><div style="height:50px;"> <b> 1.</b>Percentage of total projects delivered on time</div></td> </tr>
<tr class="altrow"><td><div style="height:50px;"><b> 2.</b>Percentage of total projects delivered without errors</div></td> </tr>
<tr><td><div style="height:50px;"><b> 3.</b>Average number of errors found in each project</div> </td> </tr>
<tr class="altrow"><td><div style="height:50px;"><b> 4.</b>Did RA correctly identify the novelty of the invention</div>  </td></tr>
<tr> <td><div style="height:50px;"><b> 5.</b>Was a comprehensive search performed by RA, as judged by mentor</div></td></tr>
<tr class="altrow"><td><div style="height:50px;"><b> 6.</b>Were relevant results(Bang on Results) found during prior art searches.(With the possiblity that relevant patent does exsist)
</div></td> </tr>
<tr> <td><div style="height:50px;"><b> 7.</b>Percentage of total of reports, delivered without any result identification</div> </td></tr>
<tr class="altrow"><td><div style="height:50px;"><b> 8.</b>Percentage of errors found in keystrings prepared by RA.
</div></td> </tr>
<tr> <td><div style="height:50px;"><b> 9.</b> Were comprehensive keywords identified by RA</div></td> </tr>
<tr class="altrow"><td><div style="height:50px;"><b> 10.</b>Were there any additional results/patents suggested by mentor, which were not included in the RA's search.</div></td> </tr>
<tr> <td><div style="height:50px;"><b> 11.</b>Were there any errors found in patent mapping (In Invalidation Searches) 

</div></td> </tr>
<tr class="altrow"><td><div style="height:50px;"><b> 12.</b>Did RA provide all the updates for the quality team to mentor on time. (Considered for all the projects done by RA)

</div></td> </tr>
<tr> <td><div style="height:50px;"><b> 13.</b> Were project findings share by the RA on client email by himself.</div></td> </tr>
<tr class="altrow"><td><div style="height:50px;"><b> 14.</b>Failure to acknowledge emails</div></td> </tr>
<tr> <td><div style="height:50px;"> <b> 15.</b>Quality rating of E-mails sent. (Based on content and clarity, Flow of sentences, English language)</div> </td> </tr>
<tr class="altrow"><td><div style="height:50px;"><b> 16.</b>Type of verbal communication with team members, colleagues and project  managers in the office.</div></td> </tr>
<tr> <td><div style="height:50px;"><b> 17.</b> Percentage of errors in written Communication (Reports): Report Writing, Comments in Deliverable etc
</div></td> </tr>
<tr class="altrow"><td><div style="height:50px;"><b> 18.</b>Self Motivation for perform projects</div></td> </tr>
<tr> <td><div style="height:50px;"><b> 19.</b> Independent Learning</div></td> </tr>
<tr class="altrow"><td><div style="height:50px;"><b> 20.</b>Adaption to new processes and protocols of the organization</div></td> 
</tr>
<tr> <td><div style="height:50px;"> <b> 21.</b> Undertook the project responsibility</div></td> </tr>
<tr class="altrow"><td><div style="height:50px;"><b>22.</b>Efforts to understand & share new technologies</div></td> </tr>
<tr> <td><div style="height:50px;"><b> 23.</b> If the RA share's new technologies, then - Number of new findings shared with everyone-for e.g. -News, Blogs, Discussions, project findings/learnings etc.</div></td> </tr>
<tr class="altrow"><td><div style="height:50px;"><b> 24.</b>Average rating for project quality (Given by Quality Team)</div></td> </tr>

<tr><td><div style="height:50px;"><b> 25.</b>Co-opertated as a part of team.(Coming on time, helped team members perform their work, shared the work, if required etc)</div></td> </tr>


<tr class="altrow"><td><div style="height:50px;"><b> 26.</b> Number of new approaches suggested to solve problems. For Example: suggesting new techniques in patent searching</div></td> </tr>
<tr><td><div style="height:50px;"><b> 27.</b>Takes internal initiatives for knowledge sharing and project learning</div></td> </tr>
<tr class="altrow"> <td><div style="height:50px;"><b> 28.</b>Discovering new excel functions & advanced excel knowledge</div></td> </tr>
<tr><td><div style="height:50px;"><b> 29.</b>Efforts to understand various advanced aspects of Intellectual Property</div></td> </tr>
<tr class="altrow"><td><div style="height:50px;"><b> 30.</b>Efforts to understand US patent laws and their interpretation</div></td> </tr>
<tr> <td><div style="height:50px;"><b> 31.</b> Efforts to know new law suits/cases currently going across the world</div></td> </tr>


<tr class="altrow"> <td><div style="height:50px;"> <b> 32.</b>Suggesting new strategy for expediting the project process</div></td> </tr>
<tr> <td><div style="height:50px;"> <b> 33.</b>Quality of project deliverable preparation</div></td> </tr>
<tr class="altrow"><td><div style="height:50px;"><b> 34.</b>Average rating for project quality (given by mentor)</div></td> </tr>



 </table>
</div>
</td>

 

 <td>
 <table style=" float:right;">
  <tr style="background: none repeat  0% 0% rgb(102,102,102); color: rgb(255,255,255);">
       <?php foreach ($searches as $search): ?>  
           
    <?php 
 
   $dd =$search['Search']['month'];
   $dmonth= date ("M",strtotime($dd));
   $dyear=date("Y",strtotime($dd));?>
<th style="text-align:center;"> <?php echo $dmonth; ?> <?php echo $dyear;?>
 </th>  
 

<?php endforeach; ?> 

 
<?php $hello =array ('delivery','without_error','number_of_errors','capture_novelty','comprehensive_search','bang','reports','keyerror','compkey','mentor_suggestion','error_mapping','on_time_update','client','acknowledge_emails','quality_emails','verbal_comm','written_comm_error','motivation','independent_learning','adaptation','responsibility','new_tech_share','no_of_share','project_quality_rating','cooperate','new_approach','initiative','excel_function','intellectual_property','patent_laws','lawsuit','expediting_project','deliver_quality','project_quality4','deliveryt','without_errort','number_of_errorst','capture_noveltyt','comprehensive_searcht','bangt','reportst','keyerrort','compkeyt','mentor_suggestiont','error_mappingt','on_time_updatet','clientt','acknowledge_emailst','quality_emailst','verbal_commt','written_comm_errort','motivationt','independent_learningt','adaptationt','responsibilityt','new_tech_sharet','no_of_sharet','project_quality_ratingt','cooperatet','new_approacht','initiativet','excel_functiont','intellectual_propertyt','patent_lawst','lawsuitt','expediting_projectt','deliver_qualityt','project_quality4t'); ?>

<tr class="altrow"> 
<?php foreach ($searches as $search): ?>  
        
       

  
<td><div style="height:50px;text-align:center;">
<?php 

 if($search['Search'][$hello[0]]>=9 && $search['Search'][$hello[1]]>=9 && $search['Search'][$hello[2]]==0 && $search['Search'][$hello[3]]=="yes" && $search['Search'][$hello[4]]=="yes" && $search['Search'][$hello[5]]=="yes" && $search['Search'][$hello[6]]==0 && $search['Search'][$hello[7]]==0 && $search['Search'][$hello[8]]=="yes" && $search['Search'][$hello[9]]=="no" && $search['Search'][$hello[10]]=="no" && $search['Search'][$hello[11]]=="yes" && $search['Search'][$hello[12]]=="yes" && $search['Search'][$hello[13]]=="no" && $search['Search'][$hello[14]]=="formal" && $search['Search'][$hello[15]]=="formal" && $search['Search'][$hello[16]]==0 && $search['Search'][$hello[17]]=="yes" && $search['Search'][$hello[18]]=="yes" && $search['Search'][$hello[19]]=="yes" && $search['Search'][$hello[20]]=="yes" && $search['Search'][$hello[21]]=="yes" && $search['Search'][$hello[22]]>=3 && $search['Search'][$hello[23]]=="green" && $search['Search'][$hello[24]]=="yes" && $search['Search'][$hello[33]]>=8) 
{
  if($search['Search'][$hello[25]]=="yes" && $search['Search'][$hello[26]]=="yes" && $search['Search'][$hello[27]]=="yes" && $search['Search'][$hello[28]]=="yes" && $search['Search'][$hello[29]]=="yes" && $search['Search'][$hello[30]]=="yes" && $search['Search'][$hello[33]]>=9.5)
    {
      if($search['Search'][$hello[31]]=="yes" && $search['Search'][$hello[32]]=="yes" && $search['Search'][$hello[33]]==10)
        {
           
           echo "Gold";
        
        }
        
       else 
        {
           echo "Silver";
        
        } 
    }
    
    else
    
    {
    
       echo "Bronze";
    }
}


else 


{
    echo "None";
}




?>  </div>
</td>
 

<?php endforeach; ?>   

</tr>

<?php 
 for ($i=0 ; $i < 34;$i++)
 { 
 
  $class = null;
		
		if ($i % 2 != 0) {
			$class = ' class="altrow"';
		}
		
		else 
		
		{
		    $class = null;
		}

 
 ?>
<tr <?php echo $class;?>>
       <?php foreach ($searches as $search): ?>  
           

<td><div style="height:50px; width:250px;ooverflow-y:scroll;overflow-x:hidden;"> <b> <font color="blue" ><?php echo $search['Search'][$hello[$i]]; ?> </font> </b> :: <?php echo $search['Search'][$hello[$i+34]]; ?> </div> </td>  
 

<?php endforeach; ?> 

 </tr> 
<?php  } ?>
    
       
       
 </table>
 </td>
</tr>
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
