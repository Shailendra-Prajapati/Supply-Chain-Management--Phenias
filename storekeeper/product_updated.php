
	<?php
if (isset($_POST['submit']))
	{	   
	include 'connection.php';

$prod_name=$_POST['prod_name'] ;
$price=$_POST['price'] ;
$quantity=$_POST['quantity'] ;
$quality=$_POST['quality'] ;
$supplier=$_POST['supplier'] ;
$supcontact=$_POST['supcontact'] ;
$address=$_POST['address'] ;
$payappointment=$_POST['payappointment'] ;


	mysql_query("INSERT INTO 'stock'(prod_name,price,quantity,quality,supplier,supcontact,address,payappointment) VALUES('$prod_name','$price','$quantity','$quality','$supplier','$supcontact','$address','$payappointment')") 
		 or die($mysql_error());

	     echo "Stock Updated!";
							
    }

?>

