<?php
	require_once('auth.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>
BRMS
</title>
 <link href="css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
  
  <link rel="stylesheet" href="css/font-awesome.min.css">
    <style type="text/css">
    
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('a[rel*=facebox]').facebox({
      loadingImage : 'src/loading.gif',
      closeImage   : 'src/closelabel.png'
    })
  })
</script>
<?php
	require_once('auth.php');
?>
<?php
function createRandomPassword() {
	$chars = "003232303232023232023456789";
	srand((double)microtime()*1000000);
	$i = 0;
	$pass = '' ;
	while ($i <= 7) {

		$num = rand() % 33;

		$tmp = substr($chars, $num, 1);

		$pass = $pass . $tmp;

		$i++;

	}
	return $pass;
}
$finalcode='RS-'.createRandomPassword();
?>

 <script language="javascript" type="text/javascript">
/* Visit http://www.yaldex.com/ for full source code
and get more free JavaScript, CSS and DHTML scripts! */
<!-- Begin
var timerID = null;
var timerRunning = false;
function stopclock (){
if(timerRunning)
clearTimeout(timerID);
timerRunning = false;
}
function showtime () {
var now = new Date();
var hours = now.getHours();
var minutes = now.getMinutes();
var seconds = now.getSeconds()
var timeValue = "" + ((hours >12) ? hours -12 :hours)
if (timeValue == "0") timeValue = 12;
timeValue += ((minutes < 10) ? ":0" : ":") + minutes
timeValue += ((seconds < 10) ? ":0" : ":") + seconds
timeValue += (hours >= 12) ? " P.M." : " A.M."
document.clock.face.value = timeValue;
timerID = setTimeout("showtime()",1000);
timerRunning = true;
}
function startclock() {
stopclock();
showtime();
}
window.onload=startclock;
// End -->
</SCRIPT>	
</head>
<body>
<?php include('navfixed.php');?>
	<?php
$position=$_SESSION['SESS_LAST_NAME'];
if($position=='cashier') {
?>

<a href="../index.php">Logout</a>
<?php
}
if($position=='admin') {
?>
	
	<div class="container-fluid">
      <div class="row-fluid">
	<div class="span2">
          <div class="well sidebar-nav">
               <ul class="nav nav-list">
              <li class="active"><a href="#"><i class="icon-dashboard icon-2x"></i> Home </a></li> 
			<li><a href="selling_form.php"><i class="icon-shopping-cart icon-2x"></i> Sales</a>  </li> 
			<li><a href="new_product_registration.php"><i class="icon-list-alt icon-2x"></i>New Item</a></li>
			<li><a href="update_stock.php"><i class="icon-list-alt icon-2x"></i> Update Stock</a></li>
			<li><a href="available_items.php"><i class="icon-group icon-2x"></i> Available Items</a></li>
			
			<li><a href="client_information.php"><i class="icon-group icon-2x"></i> Customers</a>                                    </li>
			
			<li><a href="sold_product.php"><i class="icon-bar-chart icon-2x"></i> Sales Report</a>                </li>

			<br><br><br><br><br><br>		
			<li>
			 <div class="hero-unit-clock">
		
			<form name="clock">
			<font color="white">Time: <br></font>&nbsp;<input style="width:150px;" type="submit" class="trans" name="face" value="">
			</form>
			  </div>
			</li>
				</ul>                               
          </div><!--/.well -->
        </div><!--/span-->
	<div class="span10">
	<div class="contentheader">
			<i class="icon-dashboard"></i> Home
			</div>
			<ul class="breadcrumb">
			<li class="active">Home</li>
			</ul>
			<font style=" font:bold 44px 'Aleo'; text-shadow:1px 1px 25px #000; color:#fff;"><center>Users List</center></font>



<div id="content">
					<div class="box">
					
						<form  action="new_product.php" method="post">
						<table align="center" border="1"><tr><td>
<table border="1"cellpadding="1" style="; height: ;" >
  <tr>

    <td><b>No</b></td>
	<td><b>User's Username</b></td>
	<td><b>User's Password</b></td>
	<td><b>User's Name</b></td>
	<td><b>User's Position</b></td>
	<td><b>Edit</b></td>
	<td><b>Delete</b></td>
	</tr>
	
			<?php
			include 'connection.php';			
            $sql = "SELECT * FROM user";			
			$result=mysql_query($sql);			
			while($test = mysql_fetch_array($result))
			{
				$id = $test['id'];	
				echo "<tr align='center'>";	
				echo"<td><font color='black'>" .$test['id']."</font></td>";
				echo"<td><font color='black'>" .$test['username']."</font></td>";
				echo"<td><font color='black'>" .$test['password']."</font></td>";
				echo"<td><font color='black'>" .$test['name']."</font></td>";
				echo"<td><font color='black'>" .$test['position']."</font></td>";
				
				
				echo" <td ><a href ='edit_user.php?id=$id' >Edit</a></td>";
				echo" <td><a href ='delete_user.php?id=$id'><center>Delete</center></a></td>";								
				echo "</tr>";
			}
			
			?>
</table>


<?php
}
?>
<div class="clearfix"></div>
</div>
</div>
</div>
</div>
</body>
<?php include('footer.php'); ?>
</html>
