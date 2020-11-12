<?php
 include 'connection.php'; 

	$id =$_REQUEST['id'];
	
	
	// sending query
	mysqli_query($db,"DELETE FROM user_levels WHERE id = '$id'")
	or die(mysqli_error($db));  	
	
	header("Location: add_users.php");
?>