
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
					
					<div id="content">
					<form  action="consumationreg.php" method="post">
 <center><table width="800"  style="border-style:solid">
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
 
                          <p><b>ENTER PRODUCT TO EXPORT</b><p/>
                          <tr>



						  <tr>
                            <td ><label><b>Distributor</b></label></td>
                            <td><select name="names" style="width:150px;" style="height:30px;">
					
					<option>SELECT DISTRIBUTOR</option>
					<?php
						include 'connection.php';
			
						$result = mysqli_query($db,"SELECT * FROM distributors")or die (mysqli_error($db));
						while ($row= mysqli_fetch_array ($result,MYSQLI_ASSOC) ){
						?>
							<option><?php echo $row['names']; ?></option>
						<?php
						}
						?>
					
						
			</select></td>
                            <td><label><b>Product</b></label></td>
                            <td><select name="prod_name" style="width:150px;" style="height:30px;">
					
					<option>SELECT PRODUCT</option>
						<?php
						include 'connection.php';
			
						$result = mysqli_query($db,"SELECT * FROM available")or die (mysqli_error($db));
						while ($row= mysqli_fetch_array ($result,MYSQLI_ASSOC) ){
						?>
							<option><?php echo $row['prod_name']; ?></option>
						<?php
						}
						?>
			</select></td>
						  </TR>

						  <td><label><b>Price</b></label></td>
                            <td><select name="price" style="width:150px;" style="height:30px;">
					
					<option>SELECT PRICE</option>
						<?php
						include 'connection.php';
			
						$result = mysqli_query($db,"SELECT * FROM available")or die (mysqli_error($db));
						while ($row= mysqli_fetch_array ($result,MYSQLI_ASSOC) ){
						?>
							<option><?php echo $row['price']; ?></option>
						<?php
						}
						?>
			</select></td>
                          </tr>
						  
						  <tr>
                            <td ><label><b>Quantity</b></label></td>
                            <td><input type="text" size="20" height="40"name="quantity" placeholder="" required style="height:24px"></td>
                            <td><label><b>Quality</b></label></td>
                            <td><select name="quality" style="width:150px;" style="height:30px;">
					
					<option>SELECT QUALITY</option>
						<?php
						include 'connection.php';
			
						$result = mysqli_query($db,"SELECT * FROM available")or die (mysqli_error($db));
						while ($row= mysqli_fetch_array ($result,MYSQLI_ASSOC) ){
						?>
							<option><?php echo $row['quality']; ?></option>
						<?php
						}
						?>
			</select></td>
						  
						  </tr>
						 



                          <tr>
                            <td></td>
                            <td><input type="submit" value="Register" name="submit"></td>
                      
                          </tr>

 </table></center>
</form>


                    </div>
 <!--<div id="sidebar2">
					  Utundi hano
					</div> -->
					
			</div>
       <div id="copyright">
				&copy; 2015  All Right Reserved</a>
			</div>

        </div>
        </div>
        </div>
    </body>
</html>
						
						
						
						
						
					
			
		
		
		
	</body>
</html>