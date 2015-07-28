function test1()
{
	var msg1=document.getElementById('UserGroupId').value ;
	if((msg1=='5')||(msg1=='6')||(msg1=='7'))
	{
     document.getElementById('UserTeamId').style.visibility="visible";
     document.getElementsByTagName("label")[11].style.visibility="visible";


	}
	
	else
	{ 
		document.getElementById('UserTeamId').style.visibility="hidden";
		document.getElementsByTagName("label")[11].style.visibility="hidden";


	}
}
	
