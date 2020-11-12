
 

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
					
 <form method="post">
 <table border="0" width="500px" align="left" cellpadding="3" class="mytable" cellspacing="0">
<tr align='center'>
 
                          <p>NEW USER REGISTRATION<p/>



						  <tr><td><label><b>Name</b></label></td>
                            <td><input type="text" size="20" name="names" placeholder="" required style="height:25px"></td></tr>
                          </tr>
						  <tr>

                            <td><label><b>User name</b></label></td>
                            <td><input type="text" size="20" name="username" placeholder="" required style="height:25px"></td>
							
                          </tr>
						  
						  <tr>
                            <td ><label><b>Password</b></label></td>
                            <td><input type="text" size="20" name="password" placeholder="" required style="height:25px"></td>
                            
						  
						  </tr>

<tr>
                            <td ><label><b>Level</b></label></td>
                            <td><select name="userlevel" style="height:30px">
					
					<option>USERS POSITION</option>
					<option value="admin">admin</option>
					<option value="worker">storekeeper</option>
					
			</select></td>
                            
						  
						  </tr>

                          <tr>
                            <td></td>
                            <td><input type="submit" value="Register" name="submit"style="height:25px"></td>
                      
                          </tr>

 </table> </td></tr></table>

 <table border="0"cellpadding="1" style="; height: ;" align="right" width="560" >
  <tr>

    <td><b>No</b></td>
	<td><b>User's Name</b></td>
	<td><b>User's Username</b></td>
	<td><b>User's Password</b></td>
		
	<td><b>User level</b></td>
	<td><b>Delete</b></td>
	</tr>
	
			<?php
			include 'connection.php';			
            $sql = "SELECT * FROM user_levels";			
			$result=mysqli_query($db,$sql);			
			while($test = mysqli_fetch_array($result,MYSQLI_ASSOC))
			{
				$id = $test['id'];	
				echo "<tr align='center'>";	
				echo"<td><font color='black'>" .$test['id']."</font></td>";
				echo"<td><font color='black'>" .$test['names']."</font></td>";
				echo"<td><font color='black'>" .$test['username']."</font></td>";
				echo"<td><font color='black'>" .$test['password']."</font></td>";
				echo"<td><font color='black'>" .$test['userlevel']."</font></td>";
				
				
				
				
				echo" <td><a href ='delete_user.php?id=$id'><center>Delete</center></a></td>";								
				echo "</tr>";
			}
			
			?>
</table>

					</div>
					
				</div>


 



<?php

?>
<div class="clearfix"></div>
</div>
</div>
</div>
</div>
</body>

</html>
<?php
if (isset($_POST['submit']))
	{	   
	include 'connection.php';
$names=$_POST['names'] ;
$username=$_POST['username'] ;
$password=$_POST['password'] ;
$userlevel=$_POST['userlevel'] ;



											
		 
mysqli_query($db,"INSERT INTO user_levels (names,username,password,userlevel)VALUES('$names','$username','$password','$userlevel')") 
		 or die($mysqli_error($db));



	     echo "The new user has been Added!";
		 header("location: add_users.php");
							
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