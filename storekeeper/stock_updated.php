 <?php
   if(isset($_POST['submit']))
	{	   
	require("connection.php");
$prod_name=$_POST['prod_name'] ;
$price=$_POST['price'] ;
$quantity=$_POST['quantity'] ;
$quality=$_POST['quality'] ;
$supplier=$_POST['supplier'] ;
$supcontact=$_POST['supcontact'] ;
$address=$_POST['address'] ;
$payappointment=$_POST['payappointment'] ;
$tot_amount=$_POST['quantity']*$_POST['price'] ;
$paystatus=$_POST['paystatus'] ;
//$time=$_POST['time'] ;
										 
               
mysqli_query($db,"INSERT INTO stock(prod_name,price,quantity,quality,supplier,supcontact,address,payappointment,tot_amount,paystatus) VALUES('$prod_name','$price','$quantity','$quality','$supplier','$supcontact','$address','$payappointment','$tot_amount','$paystatus')")
		  or die(mysqli_error($db));
		  
				
				 

				
				
	        }
?>
<center><p><b>THANK YOU !!</b></p></center>
<center><p><b>WELCOME AGAIN!!</b></p></center>
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
						</tr>
  <tr>
    <th scope="col"><?php
			include 'connection.php';
			
            $sql = "SELECT * FROM stock where time=NOW() ";			
			$result=mysqli_query($db,$sql);			
			while($test = mysqli_fetch_array($result,MYSQLI_ASSOC))
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
																	
				echo "</tr>";
			}
			
			?></th>
    <th scope="col">&nbsp;</th>
  </tr>
</table>
