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
					
                <center><p>SUPPLIER'S REPORT</p></center>

<center>
<form action="supreport_exec.php" method="POST" style="width: 90%; "  style="height: 100%; " >	
					<div id="search">
						</br>&nbsp; <b>SELECT SINGLE SUPPLIER TO CHECK FOR REPOTING</b>
							<select name="supplier" style="height:30px" style="width:100px" REQUIRED MAXLENGTH>
					
					<option><?php
						include 'connection.php';
			
						$result = mysqli_query($db,"SELECT * FROM stock")or die (mysqli_error($db));
						while ($row= mysqli_fetch_array ($result,MYSQLI_ASSOC) ){
						?>
							<option><?php echo $row['supplier']; ?></option>
						<?php
						}
						?></option>
                         
							<input type="submit" name="submit" class="sbutton"  size="100" maxlength="" value="Check Supplier" style="height:35px" />
						</div>
					</form></center>


					<center>
<form action="supreport_date.php" method="POST" style="width: 90%; "  style="height: 100%; " >	
					<div id="search">
						</br>&nbsp; <b>SELECT MOUNTH AND CHECK SUPPLIER TO BE PAID</b>
							<select name="payappointment" style="height:30px" style="width:100px" REQUIRED MAXLENGTH>
					
					<option><?php
						include 'connection.php';
			
						$result = mysqli_query($db,"SELECT * FROM stock")or die (mysqli_error($db));
						while ($row= mysqli_fetch_array ($result,MYSQLI_ASSOC) ){
						?>
							<option><?php echo $row['payappointment']; ?></option>
						<?php
						}
						?></option>
                         
							<input type="submit" name="submit" class="sbutton"  size="100" maxlength="" value="Check Supplier" style="height:35px" />
						</div>
					</form></center>



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