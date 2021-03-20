<?php
 require('db_connectivity.php');
 if(isset($_GET['id']))
 {
	$id=$_GET['id'];
	$sql="delete from plcementnotificatiob_tb where noti_id=$id";
	if(mysqli_query($mysql,$sql))
	{
		header("Location:admin_view_notification.php");
	}
 }
?>