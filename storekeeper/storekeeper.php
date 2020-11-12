<?php
	//require_once('auth.php');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">

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
								<a href="storekeeper.php">Home</a>
							</li>
							<li>
								<a href="first.php">New Product</a>
							</li>

							<li>
								<a href="update_stock.php">Update Stock</a>
							</li> 
                             
							
							
							<li>
								<a href="available_petrol.php">Product</a>
							</li>
							
							<li>
								<a href="../index.php"style="color:red;">exit</a>
							</li>
							

						</ul>
						<br class="clear" />
					</div>
				</div>
				
				<div id="main">
				
					<div id="content">
					<center> <p>MARABA COFEE MAIN STOCK</p><table width="800"  style="border-style:solid;" height="120">
  <tr>
						<tr>
						<th>Product Type</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Quality</th>
						<th>Supplier</th>
					
						
						</tr>
  <tr>
    <th scope="col"><?php
			include 'connection.php';			
            $sql = "SELECT * FROM available ORDER BY id DESC limit 7";			
			$result=mysqli_query($db,$sql);			
			while($test = mysqli_fetch_array($result,MYSQLI_ASSOC))
			{
				$id = $test['id'];	
				echo "<tr align='center'>";	
				
				echo"<td><font color='black'>" .$test['prod_name']."</font></td>";
				echo"<td><font color='black'>" .$test['price']."</font></td>";
				echo"<td><font color='black'>" .$test['quantity']."</font></td>";
				echo"<td><font color='black'>" .$test['quality']."</font></td>";
				echo"<td><font color='black'>" .$test['supplier']."</font></td>";
				
				
																	
				echo "</tr>";
			}
			
			?></th>
    <th scope="col">&nbsp;</th>
  </tr>
</table></center>

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