
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>SMS</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link rel="stylesheet" type="text/css" href="css/style_view.css" />
        
		
    </head>
    <body>
<?php
if (isset($_POST['submit']))
	{	   
	include 'connection.php';
$payappointment=$_POST['payappointment'] ;


							
    }
?>


 </br><table border="1" width="900px" align="center" cellpadding="3" class="mytable" cellspacing="0" style="border-style:solid">
<tr align='center'>
   <th><b>Suplier name</b></th>
    <th><b>Suplier address</b></th>
	<th><b>Suplier contact</b></th>
	
	<th><b>Product name</b></th>
	<th><b>Quantity</b></th>
	<th><b>Tot Amount</b></th>
	<th><b>Appointment</b></th>
	<th><b>Pay Status</b></th>
	<th><b>Pay the supplier</b></th>
	
    
</tr>

			<?php
			include 'connection.php';
			
			
            $sql = "SELECT * FROM stock  WHERE payappointment='$payappointment' and paystatus='NOTPAID'";			
			$result=mysqli_query($db,$sql);			
			while($test = mysqli_fetch_array($result,MYSQLI_ASSOC))
			{
					
				echo "<tr align='center'>";	
				$id = $test['id'];
				echo"<td><font color='black'>" .$test['supplier']."</font></td>";
				echo"<td><font color='black'>" .$test['address']."</font></td>";
				echo"<td><font color='black'>" .$test['supcontact']."</font></td>";
				
				echo"<td><font color='black'>" .$test['prod_name']."</font></td>";
				echo"<td><font color='black'>" .$test['quantity']."</font></td>";
				echo"<td><font color='black'>" .$test['tot_amount']."</font></td>";
				echo"<td><font color='black'>" .$test['payappointment']."</font></td>";
				echo"<td><font color='black'>" .$test['paystatus']."</font></td>";
				echo"<td> <a href ='payement.php?id=$id'><center>Pay this supplier</center></a>";
																	
				echo "</tr>";
			}
			
			?>
</table>
<CENTER><h3 align=\"center\"><a href="index.php" title="" class="active">Back to admin</a></h3></CENTER>







<?php

?>


</body>

</html>
