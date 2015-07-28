

<head><script src='http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js'></script>
<script src="https://gj37765.googlecode.com/svn/trunk/html/[www.gj37765.blogspot.com]jquery.colorbox-min.js"></script>
<link rel="stylesheet" href="https://gj37765.googlecode.com/svn/trunk/html/%5Bwww.gj37765.blogspot.com%5Dfbpopup.css" type="text/css" />


<script type="text/javascript">

function foo()

{
 
// var o = document.getElementById('commentmain');
// var id = document.getElementById('hello1').value;
// jQuery.colorbox({width:"800px", inline:true, href:"#mdfb"});
var id=document.getElementById("hello1").value;
window.focus(); 
var jm="http://192.168.0.120/dashboard/projects/coment/"+id;
window.open(jm);
this.cancel(); 
var colorcode= document.getElementsById("innerdiv");
colorcode.style.backgroundColor="white";

}








</script>
</head>
<div class="noti"> <iframe src="/training/desktop1" width="300" height="70" style="display:none;"></iframe> </div>

<div class="projects index">

<div style="float:left;">
<?php
     echo '<h2>'."Notifications Update".'</h4>' ;
  // echo $_SESSION['logger'];
 
$logger= $session->read('Auth.User.username') ;
 $_SESSION['logger'] = $logger;
$logid= $session->read('Auth.User.id') ;
$color=1;

$con = mysql_connect("localhost","root","admin12#");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

else {
	
//	echo "Connection eastablished"; 

//	  echo "<br />";

	
}

mysql_select_db("myproject", $con);



$res = mysql_query("SELECT * FROM users WHERE id = $logid");

while($row = mysql_fetch_array($res))

{
	$admin=$row['group_id'];
//	$admins=explode(",",$admin);
}

 $result1 = mysql_query("SELECT * FROM users WHERE id = $logid ");
     while($row = mysql_fetch_array($result1))
  {     $un= $row['unreadmail'];
   
   
   }

?> 





<?php


$result2 = mysql_query("SELECT * FROM coments ORDER BY modified DESC LIMIT 20");
while($row = mysql_fetch_array($result2))

{
	$project_id=$row['project_id'] ;
	$creator_id=$row['creator_id'];
	$comment=$row['comment'];
	$model=$row['model'];
	
	$result3 = mysql_query("SELECT * FROM projects WHERE id = $project_id");
	while($row = mysql_fetch_array($result3))
	
	{
    
      $assigned_to=$row['assigned_to'] ;
      $sr_research_associate=$row['sr_research_associate'];
      $research_associate=$row['research_associate'];
       $total=explode(",",$research_associate);
        
       
       
       $totals=explode(",",$sr_research_associate);
        
        
        
       
       if( ($admin == 1 ) || $_SESSION['logger'] == $assigned_to || (in_array($_SESSION['logger'], $total)) || (in_array($_SESSION['logger'], $totals)) )
       {
		   
		  
	      $result4 = mysql_query("SELECT * FROM users WHERE id = $creator_id");
	      while($row = mysql_fetch_array($result4)) 
	      
	      {  $username=$row['username'];  ?>
	        
	   <?php 
	   
	   
	   
	   if($color <= $un) { ?>   
<div class ="allnotifications2" onclick="foo();" > 

<?php } else { ?>

<div class ="allnotifications1" onclick="foo();" > 
<?php  } 
    $color++ ;
?>



<div id ="innerdiv">
 <?php
	         
		   
		 echo   '<b>'.$username.'</b>'." "."commented on project"." ".'<b>'.$model.'</b>'." ".":".$comment.'</br>' ;   ?> 
		 
		     <textarea  style="display:none;" id="hello1" >  <?php echo $project_id;?> </textarea>
  

		 </div>
</div>





		  <?php   }
	   } 
   
   
   
    }	


}
?>

</div>
</div>








<div class="actions">
	<h3><?php __('Actions'); ?></h3>

	<ul><?php if($session->read('Auth.User.group_id')=='1' || $session->read('Auth.User.group_id')=='4') {
//echo $this->Html->link($project['User']['username'], array('controller' => 'users', 'action' => 'view', $project['User']['id']));
?>       
       
		
		<li><?php echo $this->Html->link(__('New Project', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Projects', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Employee Evaluation', true), array('controller' => 'users', 'action' => 'team')); ?> </li>
<?php 
}
 elseif($session->read('Auth.User.group_id')=='2')
{
?>
<li><?php echo $this->Html->link(__('List Projects', true), array('action' => 'index')); ?> </li>
<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>

<?php 
}
 elseif($session->read('Auth.User.group_id')=='5')
{
?>
<li><?php echo $this->Html->link(__('List Projects', true), array('action' => 'index')); ?> </li>
<li><?php echo $this->Html->link(__('Employee Evaluation', true), array('controller' => 'users', 'action' => 'team')); ?> </li>




<?php }else{ ?>
<li><?php echo $this->Html->link(__('List Projects', true), array('action' => 'index')); ?> </li>
<li><?php echo $this->Html->link(__('Employee Evaluation', true), array('controller' => 'users', 'action' => 'team')); ?> </li>

<?php } ?>
</ul>
<?php  $_SESSION['logger']= $session->read('Auth.User.username') ;  ?>

<?php  $_SESSION['loggerid']= $session->read('Auth.User.id') ;  ?>

<ul>
<li><?php echo $this->Html->link(__('Notifications', true), array('controller' => 'projects', 'action' => 'allnotifications')); ?> </li>
</ul>
</div>



