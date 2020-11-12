 <?php
   if(isset($_POST['submit']))
	{	   
	require("connection.php");
$prod_name=$_POST['prod_name'] ;
$price=$_POST['price'] ;
$quantity=$_POST['quantity'] ;
$quality=$_POST['quality'] ;
$supplier=$_POST['supplier'] ;

//$time=$_POST['time'] ;
										 
                                        				
		 mysqli_query($db,"INSERT INTO available(prod_name,price,quantity,quality,supplier) VALUES('$prod_name','$price','$quantity','$quality','$supplier')")
		  or die(mysqli_error($db));
		  
				
				 header("location: first.php"); 

				
				
	        }
?>
