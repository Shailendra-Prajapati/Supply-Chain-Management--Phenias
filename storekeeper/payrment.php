 <?php


   if(isset($_POST['submit']))
	{	   
	require("connection.php");
	//$id =$_GET['id'];

	$paystatus=$_POST['paystatus'];	
	$supplier=$_POST['supplier'];	
	$prod_name=$_POST['prod_name'];	
	$quantity=$_POST['quantity'];
	$quality=$_POST['quality'];	
	$tot_amount=$_POST['tot_amount'];
	$time=$_POST['time'];
	$id=$_POST['id'];
               
 mysql_query("UPDATE stock SET paystatus = '$paystatus' where supplier='$supplier' AND time='$time'" )
		 or die($mysql_error());
		 						
							
				
	        }
?>
<center><p><b>THANK YOU !!</b></p></center>
<center><p><b>YOU HAVE BEEN PAID!!</b></p></center>
<center><p><b>Contact: +2507878787</b></p></center><hr width="200"/>
<table width="800" style="border-style:solid" align="center">
						<tr>
						<th>Product Name</th>
                        <th>Price</th>
						<th>Quantity</th>
						<th>Quality</th>
						<th>Your Contact</th>
						<th>Your Address</th>
						<th>Pay Appointment</th>
						<th>Amount</th>
						<th>Pay Status</th>
						</tr>
  <tr>
    <th scope="col"><?php
	
	//$id=$_REQUEST['id'];
			include 'connection.php';
			
			$id=$_POST['id'];
            $sql = "SELECT * FROM stock where paystatus='PAID' AND id='$id'";			
			$result=mysql_query($sql);			
			while($test = mysql_fetch_array($result))
			{
				$id = $test['id'];	
				echo "<tr align='center'>";	
				
				echo"<td><font color='black'>" .$test['prod_name']."</font></td>";
				echo"<td><font color='black'>" .$test['price']."</font></td>";
				echo"<td><font color='black'>" .$test['quantity']."</font></td>";
				echo"<td><font color='black'>" .$test['quality']."</font></td>";
				echo"<td><font color='black'>" .$test['supcontact']."</font></td>";
				echo"<td><font color='black'>" .$test['address']."</font></td>";
				echo"<td><font color='black'>" .$test['payappointment']."</font></td>";
				
				
				echo"<td><font color='black'>" .$test['tot_amount']."</font></td>";
				echo"<td><font color='black'>" .$test['paystatus']."</font></td>";
																	
																	
				echo "</tr>";
			}
			
			?></th>
    <th scope="col">&nbsp;</th>
  </tr>
</table>
