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
<tr style="background: none repeat 0% 0% rgb(102,102,102); color: rgb(255,255,255);"> <th>Parameters</th> </tr>
<tr class="altrow"><td><div style="height:50px;">Badge Obtained </div></td> </tr> <?php $i=0;  ?>
   <tr>  <td> <div style="height:50px;"><b> 1.</b> Percentage of total projects delivered on time</div> </td> </tr>
   <tr class="altrow">   <td><div style="height:50px;"><b>2.</b> Percentage of total projects delivered without errors </div> </td> </tr>
   <tr>  <td><div style="height:50px;"><b> 3.</b>Average number of errors found in each project </div> </td> </tr>
   <tr class="altrow"><td><div style="height:50px;"><b> 4.</b> Did RA capture the novelty of the inventions correctly </div></td> </tr>
   <tr><td><div style="height:50px;"><b>5.</b> Was a comprehensive search performed by RA, as judged by mentor</div></td> </tr>  
   <tr class="altrow"><td><div style="height:50px;"><b> 6.</b>Were relevant results(Bang on Results) found during Infringement Analysis.(With the possiblity that product do exsist)</div></td></tr>
   <tr> <td><div style="height:50px;"><b> 7.</b>Percentage of total of reports, delivered without any product identification</div> </td></tr>
<tr class="altrow"><td><div style="height:50px;"><b> 8.</b>Were there any additional products/application areas/companies suggested by mentor, which were not included in the RA's search.
</div></td> </tr>
<tr> <td><div style="height:50px;"><b> 9.</b> Were there any errors found in patent mapping in claim charts or detail infringement reports. </div></td> </tr>
<tr class="altrow"><td><div style="height:50px;"><b> 10.</b>Was element by element mapping done while preparing the claim charts.</div></td> </tr>
<tr> <td><div style="height:50px;"><b> 11.</b>Percentage of projects in which products spotted during detailed infringement analysis were NOT converted into claim chart
</div></td> </tr>
<tr class="altrow"><td><div style="height:50px;"><b> 12.</b>Did RA provide all the updates for the quality team to SRA on time. (Considered for all the projects done by RA)
</div></td> </tr>
<tr> <td><div style="height:50px;"> <b> 13.</b>Project findings share by the RA on client email.</div></td> </tr>
<tr class="altrow"><td><div style="height:50px;"><b> 14.</b>Failure to acknowledge emails </div></td> </tr>
<tr> <td height="63"> <b> 15.</b>Quality rating of E-mails sent. (Based on content and clarity, Flow of sentences, English language) </td> </tr>
<tr class="altrow"><td><div style="height:50px;"><b> 16.</b>Type of verbal communication with team members, colleagues and project  managers in the office.</div></td> </tr>
<tr> <td><div style="height:50px;"><b> 17.</b> Percentage of errors in written Communication (Reports): Report Writing, Comments in Deliverable etc
</div></td> </tr>
<tr class="altrow"><td><div style="height:50px;"><b> 18.</b>Self Motivation for perform projects </div></td> </tr>
<tr> <td><div style="height:50px;"> <b> 19.</b>Independent Learning </div></td> </tr>
<tr class="altrow"><td><div style="height:50px;"><b> 20.</b>Adaption to new processes and protocols of the organization </div></td> 
</tr>
<tr> <td><div style="height:50px;"> <b> 21.</b>Undertook the project responsibility </div></td> </tr>
<tr class="altrow"><td><div style="height:50px;"><b> 22.</b>Efforts to understand & share new technologies</div></td> </tr>
<tr> <td><div style="height:50px;"><b> 23.</b> If the RA share's new technologies, then - Number of new findings shared with everyone-for e.g. -News, Blogs, Discussions, project findings/learnings etc.</div></td> </tr>
<tr class="altrow"><td><div style="height:50px;"><b> 24.</b>Average rating for project quality (Given by Quality Team)</div></td> </tr>

<tr><td><div style="height:50px;"><b> 25.</b>Co-opertated as a part of team.(Coming on time, helped team members perform their work, shared the work, if required etc)</div></td> </tr>


<tr class="altrow"> <td><div style="height:50px;"><b> 26.</b> Number of new approaches suggested to solve problems. For Example: suggesting new techniques in patent searching</div></td> </tr>
<tr><td><div style="height:50px;"><b> 27.</b>Takes internal initiatives for knowledge sharing and project learning</div></td> </tr>
<tr class="altrow"> <td><div style="height:50px;"><b> 28.</b>Discovering new excel functions & advanced excel knowledge</div></td> </tr>
<tr><td><div style="height:50px;"><b> 29.</b>Efforts to understand various advanced aspects of Intellectual Property</div></td> </tr>
<tr class="altrow"><td><div style="height:50px;"><b> 30.</b>Efforts to understand US patent laws and their interpretation</div></td> </tr>
<tr> <td><div style="height:50px;"><b> 31.</b> Efforts to know new law suits/cases currently going across the world</div></td> </tr>


<tr class="altrow"> <td><div style="height:50px;"> <b> 32.</b>Suggesting new strategy for expediting the project process</div></td> </tr>
<tr><td><div style="height:50px;"><b> 33.</b>Average rating for project quality (given by mentor)</div></td> </tr>



 </table> 
</div> 
</td>
 
 <td>
 
 <table style=" float:right;">
  <tr style="background: none repeat  0% 0% rgb(102,102,102); color: rgb(255,255,255);">
        
       <?php 
 foreach ($infringements as $infringement) :
 
    $dd =$infringement['Infringement']['month'];
     $dmonth= date ("M",strtotime($dd));
   $dyear=date("Y",strtotime($dd));?>
<th style="text-align:center;"> <?php echo $dmonth; echo "-".$dyear ?>
 </th>  
 
<?php endforeach ?>
 <?php   $hello =array ('delivery','without_error','number_of_errors','cap_novelty','comprehensive_search','bang','reports','mentor_suggestion','error_mapping','element_mapping_claim_chart','products_not_chart','on_time_update','client','acknowledge_emails','quality_emails','verbal_comm','written_comm_error','motivation','independent_learning','adaptation','responsibility','new_tech_share','no_of_share','project_quality_rating','cooperate','new_approach','initiative','excel_function','intellectual_property','patent_laws','lawsuit','expediting_project','project_quality4','deliveryt','without_errort','number_of_errorst','cap_noveltyt','comprehensive_searcht','bangt','reportst','mentor_suggestiont','error_mappingt','element_mapping_claim_chartt','products_not_chartt','on_time_updatet','clientt','acknowledge_emailst','quality_emailst','verbal_commt','written_comm_errort','motivationt','independent_learningt','adaptationt','responsibilityt','new_tech_sharet','no_of_sharet','project_quality_ratingt','cooperatet','new_approacht','initiativet','excel_functiont','intellectual_propertyt','patent_lawst','lawsuitt','expediting_projectt','project_quality4t'); ?>


<tr class="altrow"> 
<?php foreach ($infringements as $infringement): ?>  
        
       

  
<td><div style="height:50px;text-align:center;">
<?php 

 if($infringement['Infringement'][$hello[0]]>=9 && $infringement['Infringement'][$hello[1]]>=9 && $infringement['Infringement'][$hello[2]]==0 && $infringement['Infringement'][$hello[3]]=="yes" && $infringement['Infringement'][$hello[4]]=="yes" && $infringement['Infringement'][$hello[5]]=="yes" && $infringement['Infringement'][$hello[6]]==0 && $infringement['Infringement'][$hello[7]]=="yes" && $infringement['Infringement'][$hello[8]]=="no" && $infringement['Infringement'][$hello[9]]=="yes" && $infringement['Infringement'][$hello[10]]==0 && $infringement['Infringement'][$hello[11]]=="yes" && $infringement['Infringement'][$hello[12]]=="yes" && $infringement['Infringement'][$hello[13]]=="no" && $infringement['Infringement'][$hello[14]]=="formal" && $infringement['Infringement'][$hello[15]]=="formal" && $infringement['Infringement'][$hello[16]]==0 && $infringement['Infringement'][$hello[17]]=="yes" && $infringement['Infringement'][$hello[18]]=="yes" && $infringement['Infringement'][$hello[19]]=="yes" && $infringement['Infringement'][$hello[20]]=="yes" && $infringement['Infringement'][$hello[21]]=="yes" && $infringement['Infringement'][$hello[22]]>=3 && $infringement['Infringement'][$hello[23]]=="green" && $infringement['Infringement'][$hello[24]]=="yes" && $infringement['Infringement'][$hello[32]]>=8) 
{
  if($infringement['Infringement'][$hello[25]]=="yes" && $infringement['Infringement'][$hello[26]]=="yes" && $infringement['Infringement'][$hello[27]]=="yes" && $infringement['Infringement'][$hello[28]]=="yes" && $infringement['Infringement'][$hello[29]]=="yes" && $infringement['Infringement'][$hello[30]]=="yes" && $infringement['Infringement'][$hello[32]]>=9.5)
    {
      if($infringement['Infringement'][$hello[31]]=="yes" && $infringement['Infringement'][$hello[32]]==10)
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




?> </div>
</td>
 
  
 

<?php endforeach; ?>   

</tr> 


<?php 
 for ($i=0 ; $i < 33;$i++)
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
       <?php foreach ($infringements as $infringement): ?>  


<td> <div style="height:50px; width:250px;ooverflow-y:scroll;overflow-x:hidden;"> <b> <font size="2" color="blue"><?php echo $infringement['Infringement'][$hello[$i]]; ?></font> </b> :: <?php echo $infringement['Infringement'][$hello[$i+33]]; ?></div> </td> 
 

 
<?php  ?>
<?php endforeach; ?> 

 </tr> 
<?php }  ?>
 
  
       
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
