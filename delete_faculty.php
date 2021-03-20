<?php
  require('db_connectivity.php');
  if(isset($_GET['id']))
  {
	$id=$_GET['id'];
	$sql="delete from faculty_details where login_id=$id";
	if(mysqli_query($mysql,$sql))
	{
		$sql1="delete from login_page where login_id=$id";
		if(mysqli_query($mysql,$sql))
		{
			header("Location:view_faculty.php");
		}
	}
  }
  
  
?>