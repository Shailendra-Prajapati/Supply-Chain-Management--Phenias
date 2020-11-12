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
		<title>.::DMIS.::</title>
		<link rel="stylesheet" type="text/css" href="./css/style.css" />
    </head>
<body>

    <div id="wraper">
		<div id="bg">
			<div id="outer">
				<div id="header">
					<div id="logo">
						<h1>
							<a href="#">DAIRY MANAGEMENT INFORMATION SYSTEM</a>
						</h1>
					</div>
					<div id="nav">
						<ul>
							<li class="first active">
								<a href="#">Home</a>
							</li>
							<li>
								<a href="#">About Us</a>
							</li>

							<li>
								<a href="#">Products</a>
							</li> 
                            <li>
								<a href="#">Contact Us</a>
							</li> <li>
								<a href="#">Users</a>
							</li>

						</ul>
						<br class="clear" />
					</div>
				</div>
				
				<div id="main">
					
					<div id="content" style="heigt:230px;">
<form  action="insert_sold_product.php" method="post">
 <table cellpadding="2" style="width: 300px; height: 200px; border-size: 1px; float: left">
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
  </tr>             <h3> Dear customer choose a product to purchase<h3/>
                         <tr>
                          <td><label>Names:</label></td>
                            <td><input type="text" size="20" name="names" placeholder="" required></td>
                          </tr>
						  <tr>
                          <td><label>Cold milk:</label></td>
                            <td><input type="text" size="20" name="cmilk" placeholder="" required></td>
                          </tr>
                          <tr>
                            <td><label>Soft milk:</label></td>
                            <td><input type="text" size="20" name="smilk" placeholder="" required></td>
                          </tr>
						  <tr>
                            <td><label>Yaourt:</label></td>
                            <td><input type="text" size="20" name="yaourt" placeholder="" required></td>
                          </tr> 
						  <tr>
                            <td><label>Cheeses:</label></td>
                            <td><input type="text" size="20" name="fromage" placeholder="" required></td>
                          </tr>

                          <tr>
                            <td></td>
                            <td><input type="submit" value="Book" name="submit"></td>
                      
                          </tr>

 </table>
</form>
</div>
 <!--<div id="sidebar2">
					  Utundi hano
					</div> -->
					
			</div>
       <div id="copyright">
				&copy; 2013 Anabelle All Right Reserved</a>
			</div>

        </div>
        </div>
        </div>
    </body>
</html>