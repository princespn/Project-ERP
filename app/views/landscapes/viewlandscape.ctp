<?php if($session->read('Auth.User.username')!='admin' && $session->read('Auth.User.group_id')!='1' && $session->read('Auth.User.group_id')!='5' && $session->read('Auth.User.group_id')!='2' && $session->read('Auth.User.group_id')!='6' && $session->read('Auth.User.group_id')!='7') 
{
header("Location: /greyb/users/logout/");

}
?>


<div class="users form">
	<h3>	<legend><?php __('Evaluation History'); ?></legend> </h3>
		
	<table>
<tr><td style="width:500px;">
<div style="width:500px;">


<table style="float:left;width:100%;"> 
<tr style="background: none repeat  0% 0% rgb(102,102,102); color: rgb(255,255,255);"> <th>Parameters</th> </tr>
<tr class="altrow"><td><div style="height:50px;">Badge Obtained</div></td> </tr>
<tr> <td><div style="height:50px;"> <b> 1.</b>Percentage of total projects delivered on time</div></td> </tr>
<tr class="altrow"><td><div style="height:50px;"><b> 2.</b>Percentage of total projects delivered without error</div></td> </tr>
<tr><td><div style="height:50px;"><b> 3.</b>Were the key string logics made for landscape comprehensive
</div></td> </tr>
<tr class="altrow"><td><div style="height:50px;"><b> 4.</b>Were there any patents, which were not captured in the key strings.
 </div></td></tr>
<tr> <td><div style="height:50px;"><b> 5.</b>Were there any patents, which were missed in the analysis. Check for comprehensiveness was not made.</div>
</td></tr>
<tr class="altrow"><td><div style="height:50px;"><b> 6.</b>Did the resource made sure that analysis done by team is correct 
</div></td> </tr>
<tr> <td><div style="height:50px;"><b> 7.</b>Was the categorization done by resource incorrect or insufficient.
</div></td></tr>
<tr class="altrow"><td><div style="height:50px;"><b> 8.</b>Did the resource make sure that the team working on the analysis has the same understanding.

</div></td> </tr>
<tr> <td><div style="height:50px;"> <b> 9.</b>Were the daily project meeting done.</div>
</td> </tr>
<tr class="altrow"><td><div style="height:50px;"><b> 10.</b>Were there any errors in file collation
</div></td> </tr>
<tr> <td><div style="height:50px;"><b> 11.</b>Did the resource co-ordinate with other teams (Asian analysis team , chart preparation team) for follow up on the work in progress

</div></td> </tr>
<tr class="altrow"><td><div style="height:50px;"><b> 12.</b>Did the resource, plan/took necessary steps for efficiently managing/completing the project. 

</div></td> </tr>
<tr> <td><div style="height:50px;"><b> 13.</b> Was a exhaustive taxonomy made by resource
</div></td> </tr>
<tr class="altrow"><td><div style="height:50px;"><b> 14.</b>Average number of formatting errors found in each project.(In the final deliverable, which was reviewed by resource)
</div></td> </tr>
<tr> <td><div style="height:50px;"><b> 15.</b> Was a proper usage of English done while writing insights
 </div></td> </tr>
<tr class="altrow"><td><div style="height:50px;"><b> 16.</b>Were there any data errors In charts, which were not captured by the resource
</div></td> </tr>
<tr> <td><div style="height:50px;"><b> 17.</b> Did resource customize the deliverable according to client requirement (by addition of charts which might be useful to client)
</div></td> </tr>
<tr class="altrow"> <td><div style="height:50px;"> <b> 18.</b>Did resource customize the deliverable according to client requirement (by addition of insights which might be useful to client)
</div></td> </tr>
<tr><td><div style="height:50px;"><b> 19.</b>Was there any error in the work file which needs to be send to Chart Preparation Team
</div></td> </tr>
<tr class="altrow"> <td><div style="height:50px;"><b> 20.</b> Any deadlines missed by resource
</div></td> </tr>
<tr><td><div style="height:50px;"><b> 21.</b>In case of any anomalous situations was the resource able to take the necessary decisions for bringing the project on corrective course.</div></td> </tr>
<tr class="altrow"><td><div style="height:50px;"><b> 22.</b>Were there any delays in the tasks provided.
</div></td> </tr>
<tr> <td><div style="height:50px;"><b> 23.</b>Were the corrections suggested by PM implemented in the deliverable
</div></td> </tr>
<tr class="altrow"><td><div style="height:50px;"><b> 24.</b>Were project findings shared in client email.</div></td> </tr>
<tr> <td><div style="height:50px;"><b> 25.</b> Failure to acknowledge emails.</div></td> </tr>
<tr class="altrow"><td><div style="height:50px;"><b> 26.</b>Quality rating of E-mails sent. (Based on content and clarity, Flow of sentences, English language, client emails) 
</div></td> </tr>
<tr> <td><div style="height:50px;"><b> 27.</b>Type of verbal communication with team members, colleagues and project  managers in the office.
</div></td> </tr>
<tr class="altrow"><td><div style="height:50px;"><b> 28.</b>Self Motivation for perform projects</div></td> </tr>
<tr> <td><div style="height:50px;"><b> 29.</b> Independent Learning</div></td> </tr>
<tr class="altrow"><td><div style="height:50px;"><b> 30.</b>Adaption to new processes and protocols of the organization</div></td> 
</tr>
<tr> <td><div style="height:50px;"><b> 31.</b>Undertook the project responsibility</div></td> </tr>
<tr class="altrow"><td><div style="height:50px;"><b> 32.</b>Efforts to understand & share new technologies</div></td> </tr>
<tr> <td><div style="height:50px;"> <b> 33.</b>If above parameter is "YES", then - Number of new findings shared with everyone(weekly)-for e.g. -News, Blogs, Discussions, project findings/learnings etc.</div></td> </tr>
<tr class="altrow"><td><div style="height:50px;"><b> 34.</b>Co-opertated as a part of team.(Coming on time, helped team members perform their work, shared the work, if required etc)</div></td> </tr>
<tr><td><div style="height:50px;"><b> 35.</b>Was a proper plan sent to PM , resource and quality team.
</div></td> </tr>
<tr class="altrow"><td><div style="height:50px;"><b> 36.</b>During managing the project, were the project risks identified and proper actions were taken to mitigate the risks.
</div></td> </tr>
<tr><td><div style="height:50px;"><b> 37.</b>Co-ordination with Quality Team, RA and Report Generation team.
</div></td> </tr>
<tr class="altrow"><td><div style="height:50px;"><b> 38.</b>Presentation Skills</div></td> </tr>
<tr><td><div style="height:50px;"><b> 39.</b>Was the final deliverable sent from resource in a client deliverable form</div></td> </tr>
<tr class="altrow"><td><div style="height:50px;"><b> 40.</b>Were there any client queries reverting back on deliverables, resulting in pointing of errors in deliverables.</div></td> </tr>
<tr><td><div style="height:50px;"><b> 41.</b>Delegation of work while managing the project</div></td> </tr>
<tr class="altrow"><td><div style="height:50px;"><b> 42.</b>Formal attitude</div></td> </tr>



<tr> <td><div style="height:50px;"><b> 43.</b> Number of new approaches suggested to solve problems. For Example: suggesting new techniques in patent searching</div></td> </tr>
<tr class="altrow"><td><div style="height:50px;"><b> 44.</b>Takes internal initiatives for knowledge sharing and project learning</div></td> </tr>
<tr> <td><div style="height:50px;"><b> 45.</b>Discovering new excel functions & advanced excel knowledge</div></td> </tr>
<tr class="altrow"><td><div style="height:50px;"><b> 46.</b>Efforts to understand various advanced aspects of Intellectual Property</div></td> </tr>
<tr><td><div style="height:50px;"><b> 47.</b>Efforts to understand US patent laws and their interpretation</div></td> </tr>
<tr class="altrow"> <td><div style="height:50px;"><b> 48.</b> Efforts to know new law suits/cases currently going across the world</div></td> </tr>


<tr> <td><div style="height:50px;"><b> 49.</b> Suggesting new strategy for expediting the project process</div></td> </tr>
<tr class="altrow"> <td><div style="height:50px;"> <b> 50.</b>Quality of project deliverable preparation </div></td> </tr>
<tr><td><div style="height:50px;"><b> 51.</b>Average rating for project quality (given by mentor)</div></td> </tr>

 </table> 
</div>

</td>
<td>
 <table style=" float:right;">
  <tr style="background: none repeat 0% 0% rgb(102,102,102); color: rgb(255,255,255);">
       <?php foreach ($landscapes as $landscape): ?>  
           <?php 
 
   $dd =$landscape['Landscape']['month'];
   $dmonth= date ("M",strtotime($dd)); 
$dyear=date("Y",strtotime($dd));?>


<th style="text-align:center;"> <?php echo $dmonth; ?> <?php echo $dyear;?>
 </th>  
  
<?php endforeach; ?> 

 
<?php $hello =array ('delivery','deliver_errors','keylogic','judge','bang','include','includecat','mapping','mappingc','coll','updates','plan','ackn','fdeliver_errors','english','charts','customize','insight','chartprep','respdead','share','delay','qualityflag','clientshare','ackmail','qualityemail','vcomm','self','indp','adapt','undert','newt','findings','teamwork','planz','risk','coord','skills','clientform','clientq','delegation','attitude','approach','initiative','excel','ip','patent','law','new','deliprep','quality_rate3','deliveryt','deliver_errorst','keylogict','judget','bangt','includet','includecatt','mappingt','mappingct','collt','updatest','plant','acknt','fdeliver_errorst','englisht','chartst','customizet','insightt','chartprept','respdeadt','sharet','delayt','qualityflagt','clientsharet','ackmailt','qualityemailt','vcommt','selft','indpt','adaptt','undertt','newtt','findingst','teamworkt','planzt','riskt','coordt','skillst','clientformt','clientqt','delegationt','attitudet','approacht','initiativet','excelt','ipt','patentt','lawt','new_t','deliprept','quality_rate3t'); ?>
<tr class="altrow"> 
<?php foreach ($landscapes as $landscape): ?>  
        
       

  
<td><div style="height:50px;text-align:center;">
<?php 

 if($landscape['Landscape'][$hello[0]]>=9 && $landscape['Landscape'][$hello[1]]>=9 && $landscape['Landscape'][$hello[2]]=="yes" && $landscape['Landscape'][$hello[3]]=="no" && $landscape['Landscape'][$hello[4]]=="no" && $landscape['Landscape'][$hello[5]]=="yes" && $landscape['Landscape'][$hello[6]]=="no" && $landscape['Landscape'][$hello[7]]=="yes" && $landscape['Landscape'][$hello[8]]=="yes" && $landscape['Landscape'][$hello[9]]=="yes" && $landscape['Landscape'][$hello[10]]=="yes" && $landscape['Landscape'][$hello[11]]=="yes" && $landscape['Landscape'][$hello[12]]=="yes" && $landscape['Landscape'][$hello[13]]==0 && $landscape['Landscape'][$hello[14]]=="yes" && $landscape['Landscape'][$hello[15]]=="no" && $landscape['Landscape'][$hello[16]]=="yes" && $landscape['Landscape'][$hello[17]]=="yes" && $landscape['Landscape'][$hello[18]]=="no" && $landscape['Landscape'][$hello[19]]=="no" && $landscape['Landscape'][$hello[20]]=="yes" && $landscape['Landscape'][$hello[21]]=="yes" && $landscape['Landscape'][$hello[22]]=="yes" && $landscape['Landscape'][$hello[23]]=="yes" && $landscape['Landscape'][$hello[24]]=="no" && $landscape['Landscape'][$hello[25]]=="formal" && $landscape['Landscape'][$hello[26]]=="formal" && $landscape['Landscape'][$hello[27]]=="yes" && $landscape['Landscape'][$hello[28]]=="yes" && $landscape['Landscape'][$hello[29]]=="yes" && $landscape['Landscape'][$hello[30]]=="yes" && $landscape['Landscape'][$hello[31]]=="yes" && $landscape['Landscape'][$hello[32]]>=3 && $landscape['Landscape'][$hello[33]]=="yes" && $landscape['Landscape'][$hello[34]]=="yes" && $landscape['Landscape'][$hello[35]]=="yes" && $landscape['Landscape'][$hello[36]]=="Perfect Co-ordination" && $landscape['Landscape'][$hello[37]]=="good" && $landscape['Landscape'][$hello[38]]=="yes" && $landscape['Landscape'][$hello[39]]=="no" && $landscape['Landscape'][$hello[40]]=="yes" && $landscape['Landscape'][$hello[41]]=="yes" && $landscape['Landscape'][$hello[50]]==10) 
{
  if($landscape['Landscape'][$hello[42]]=="yes" && $landscape['Landscape'][$hello[43]]=="yes" && $landscape['Landscape'][$hello[44]]=="yes" && $landscape['Landscape'][$hello[45]]=="yes" && $landscape['Landscape'][$hello[46]]=="yes" && $landscape['Landscape'][$hello[47]]=="yes" && $landscape['Landscape'][$hello[50]]==10)
    {
      if($landscape['Landscape'][$hello[48]]=="yes" && $landscape['Landscape'][$hello[49]]=="yes" && $landscape['Landscape'][$hello[50]]==10)
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
 for ($i=0 ; $i < 51;$i++)
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
       <?php foreach ($landscapes as $landscape): ?>  
           

<td> <div style="height:50px; width:250px;ooverflow-y:scroll;overflow-x:hidden;"> <b> <font color="blue"> <?php echo $landscape['Landscape'][$hello[$i]]; ?> </font> </b> :: <?php echo $landscape['Landscape'][$hello[$i+51]]; ?> </div></td>  
 

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
