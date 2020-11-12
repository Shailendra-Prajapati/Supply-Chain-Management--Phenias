

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<?php
	//Start session
	session_start();
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>.::Maraba Cofee Chain.::</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
<body>

    <div id="wraper">
		<div id="bg">
			<div id="outer">
				<div id="header">
					<div id="logo">
						<h2><b>
							<a href="index.php">MARABA COFFEE SUPPLY CHAIN MANAGEMENT INFORMATION SYSTEM</a></b>
						</h2>
					</div>
					<div id="nav">
						<ul>
							<li class="first active">
								<a href="home.php">Home</a>
							</li>
							<li>
								<a href="first.php">New Product</a>
							</li>

							<li>
								<a href="update_stock.php">Update Stock</a>
							</li> 
                            <li>
								<a href="suppliers.php">Supplier</a>
							</li> <li>
								<a href="consumation.php">Export</a>
							</li>
							<li>
								<a href="supreport.php">Check Supplier</a>
							</li>
							<li>
								<a href="consproduct.php">Check Distributor</a>
							</li>
							<li>
								<a href="available_petrol.php">Product</a>
							</li>
							<li>
								<a href="distributors.php">Distributor</a>
							</li>
							<li>
								<a href="add_users.php">User</a>
							</li>
							<li>
								<a href="index.php"style="color:red;">exit</a>
							</li>
							

						</ul>
						<br class="clear" />
					</div>
				</div>
				
				<div id="main">
				
					<div id="content" style="width:1070px">
						<form  action="" method="post">
<center> <table width="800"  style="border-style:solid;" height="120">
  <tr>
    <td colspan="2">
		<!--the code bellow is used to display the message of the input validation-->
		 <?php
			if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
			echo '<ul class="err">';
			foreach($_SESSION['ERRMSG_ARR'] as $msg) {
				echo '<li>',$msg,'</li>';
				}
			echo '</ul>';
			unset($_SESSION['ERRMSG_ARR']);
			}
		?>
	</td>
  </tr>
  <tr>
 
                          <center><p>ENTER SUPPLIER'S INFORMATION<p/></center>
                          <tr>
                            <td><label><b>Suplier name</b></label></td>
                            <td ><input type="text" size="20" height="40"name="suplier_name" placeholder="" required style="height:25px"></td>
							<td><label><b>Supplier Address</b></label></td>
                            <td><input type="text" size="20" height="40"name="suplier_address" placeholder="" required style="height:25px"></td>
                          </tr>
						  
						  <tr>
                            <td ><label><b>Contact Number</b></label></td>
                            <td><input type="text" size="20" height="40"name="suplier_contact" placeholder="" required style="height:25px"></td>
                            <td><label><b>Contact Person</b></label></td>
                            <td><input type="text" size="20"height="40" name="contact_person" placeholder="" required style="height:25px"></td>
						  
						  </tr>
						  <tr>
                            <td ><label><b>Product Supplied</b></label></td>
                            <td><input type="text" size="20" height="40"name="prod_name" placeholder="" required style="height:25px"></td>
                            
						  
						  
                            <td><b>Register Here<b></td>
                            <td><input type="submit" value="Register" name="submit" style="width:155px"></td>
                      
                          </tr>

 </table></center>


 <?php
if (isset($_POST['submit']))
	{	   
	include 'connection.php';
$suplier_name=$_POST['suplier_name'] ;
$suplier_address=$_POST['suplier_address'] ;
$suplier_contact=$_POST['suplier_contact'] ;
$contact_person=$_POST['contact_person'] ;
$prod_name=$_POST['prod_name'] ;



											
		 
mysqli_query($db,"INSERT INTO supliers (suplier_name,suplier_address,suplier_contact,contact_person,prod_name) VALUES ('$suplier_name','$suplier_address','$suplier_contact','$contact_person','$prod_name')") 
		 or die($mysqli_error($db));



	     echo "The new supplier has been Added!";
		 header("location: suppliers.php");
							
    }
?>

</form>

                    </div>
 
					
			</div>
       <div id="copyright">
				&copy; 2015  All Right Reserved</a>
			</div>

        </div>
        </div>
        </div>
    </body>
</html>