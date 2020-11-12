
	<?php
if (isset($_POST['submit']))
	{	   
	include 'connection.php';
$names=$_POST['names'] ;
$cmilk=$_POST['cmilk'] ;
$smilk=$_POST['smilk'] ;
$yaourt=$_POST['yaourt'] ;
$fromage=$_POST['fromage'] ;
											
		 mysql_query("UPDATE available SET yaourt = yaourt - $smilk") 
		 or die($mysql_error());
		 mysql_query("INSERT INTO soldp(names,cmilk,smilk,yaourt,fromage) VALUES ('$names','$cmilk','$smilk','$yaourt','$fromage')") 
		 or die($mysql_error()); 
	     echo "Parameters Saved!";
							
    }
?>