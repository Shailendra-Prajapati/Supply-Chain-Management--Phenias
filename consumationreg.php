 <?php
   if(isset($_POST['submit']))
	{	   
	require("connection.php");
	$names=$_POST['names'] ;
$prod_name=$_POST['prod_name'] ;
$price=$_POST['price'] ;
$quantity=$_POST['quantity'] ;
$quality=$_POST['quality'] ;


			 mysqli_query($db,"UPDATE available SET quantity = quantity - $quantity where prod_name='$prod_name' and quality='$quality'" ) 
		 or die($mysqli_error($db));
		 							 
               
				
		 mysqli_query($db,"INSERT INTO consumation(names,prod_name,price,quantity,quality) VALUES('$names','$prod_name','$price','$quantity','$quality')")
		  or die(mysqli_error($db));
		  
				
				 echo "Process Updated!";
		 header("location: consumation.php");

				
				
	        }
?>

    <th scope="col"></th>
    <th scope="col">&nbsp;</th>
  </tr>
</table>
