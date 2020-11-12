<?php
//Start session
session_start();

include 'connection.php';
$tbl_name="user_levels"; // Table name 

$username=$_POST['username']; // username sent from form 
$password=$_POST['password']; // password sent from form 


// To protect MySQL injection 
//$username = stripslashes($username);
//$password = stripslashes($password);
$username = mysqli_real_escape_string($db,$username);
$password = mysqli_real_escape_string($db,$password);

//Query
$sql="SELECT * FROM $tbl_name WHERE username='$username' and password='$password'";
$result=mysqli_query($db,$sql);
// Mysql_num_row is counting table row
$rows = mysqli_fetch_assoc($result);
printf ("%s \n",$rows["username"]);

//Direct pages with different user levels
if ($rows["userlevel"] == "admin") {
	header('location: home.php'); //User1 
	session_register("username");
	session_register("password");
	
}
else
if ($rows['userlevel'] == 'storekeeper') {
	header('location:storekeeper/storekeeper.php'); //User2 
	session_register("username");
	session_register("password"); 
	
} 
else
if ($rows['userlevel'] == '3') {
	header('location: user3.html'); //user 3 
	session_register("username");
	session_register("password"); 

} 
else
if ($rows['userlevel'] == '4') {
	header('location: user4.html'); // user4 
	session_register("username");
	session_register("password"); 
	
} 
else
{ 
printf ("%s \n",$rows["username"]);
	// Error login
echo "<script>alert('Access Denied!');

						//window.location='index.php';
						</script>";
}

?>