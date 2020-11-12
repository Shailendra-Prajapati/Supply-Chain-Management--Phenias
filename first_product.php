<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Welcome to SMSMS
		</title>
		<link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="styles/style.css" />
	</head>
	<body>
		<div id="bg1"></div>
		<div id="bg2"></div>
		<div id="outer">
			<div id="header">
				<div id="logo">
					<h1>
						
					</h1>
				</div>
				<!--  
				<div id="search">
					<form action="" method="post">
						<div>
							<input class="text" name="search" size="32" maxlength="64" />
						</div>
					</form>
				</div>-->
				<div id="nav">
					<ul>
						<li class="first">
							<a href="">Home</a></li>
						<li>
							<a href="customers/cust_login.php">Products</a></li>
						<li>
							<a href="#">Selling</a></li>
						<li>
							<a href="#">Suppliers</a></li>
						<li>
							<a href="login_form.php">Employees</a></li>
							<li>
							<a href="login_form.php">Clients</a></li>
							<li>
							<a href="login_form.php">dairly</a></li>
							<li>
							<a href="login_form.php">logout</a></li>
					</ul>
					<br class="clear" />
				</div>
			</div>
			<div id="banner">
				<div class="captions">
					<h2> SUPER MARKET SHOP MANAGEMENT SYSTEM</h2>
				</div>
				
				<img src="images/banner.jpg" alt="" style="width:951px;"/>
				
			</div>
			<div id="main">
				<div id="sidebar">
					<div class="box">
						<h3>
							TOP LINKS
						</h3>
						<div class="dateList">
							<ul class="linkedList dateList">
								<li class="first">
									<span class="date">1</span> <a href="#">Register New Product</a>
								</li>
								<li>
									<span class="date">2</span> <a href="#">Register New Supplier</a>
								</li>
								<li>
									<span class="date">3</span> <a href="#">Register New User</a>
								</li>
								<li>
									<span class="date">4</span> <a href="#">Mounthly Report</a>
								</li>
								<li class="first">
									<span class="date">5</span> <a href="first_product.php">Register First Product</a>
								</li>
								
							</ul>
						</div>
					</div>
				</div>
				<div id="content">
					<div class="box">
						<form  action="" method="post">
 <table width="600"  style="border-style:solid">
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
 
                          <h3>ENTER PRODUCT INFORMATION TO THE STOCK<h3/>
                          <tr>
                            <td><label><b>Product name</b></label></td>
                            <td ><input type="text" size="20" height="40"name="prod_name" placeholder="" required></td>
							<td><label><b>Price</b></label></td>
                            <td><input type="text" size="20" height="40"name="price" placeholder="" required></td>
                          </tr>
						  
						  <tr>
                            <td ><label><b>Quantity</b></label></td>
                            <td><input type="text" size="20" height="40"name="quantity" placeholder="" required></td>
                            <td><label><b>Quality</b></label></td>
                            <td><input type="text" size="20"height="40" name="quality" placeholder="" required></td>
						  
						  </tr>
						  <tr>
                            <td ><label><b>Supplier</b></label></td>
                            <td><input type="text" size="20" height="40"name="supplier" placeholder="" required></td>
                            <td><label><b>Expiration</b></label></td>
                            <td><input type="text" size="20" name="exp" placeholder="" required></td>
						  
						  </tr>
                          <tr>
                            <td></td>
                            <td><input type="submit" value="Register" name="submit"></td>
                      
                          </tr>

 </table>

 <?php
if (isset($_POST['submit']))
	{	   
	include 'connection.php';

$prod_name=$_POST['prod_name'] ;
$price=$_POST['price'] ;
$quantity=$_POST['quantity'] ;
$quality=$_POST['quality'] ;
$supplier=$_POST['supplier'] ;
$exp=$_POST['exp'] ;

											
		 
		 

		 mysql_query("INSERT INTO available(prod_name,price,quantity,quality,supplier,exp) VALUES ('$prod_name','$price','$quantity','$quality','$supplier','$exp')") 
		 or die($mysql_error());
	     echo "Stock Updated!";
							
    }

?>
</form>

					</div>
					
				</div><br class="clear" />
			</div>
		</div>
		<div id="copyright">
			&copy;  <a href="http://www.google.com/mutoni">MUTONI</a>.
		</div>
		
		<script type="text/javascript">
			//** jQuery Scroll to Top Control script- (c) Dynamic Drive DHTML code library: http://www.dynamicdrive.com.
//** Available/ usage terms at http://www.dynamicdrive.com (March 30th, 09')
//** v1.1 (April 7th, 09'):
//** 1) Adds ability to scroll to an absolute position (from top of page) or specific element on the page instead.
//** 2) Fixes scroll animation not working in Opera. 


var scrolltotop={
	//startline: Integer. Number of pixels from top of doc scrollbar is scrolled before showing control
	//scrollto: Keyword (Integer, or "Scroll_to_Element_ID"). How far to scroll document up when control is clicked on (0=top).
	setting: {startline:100, scrollto: 0, scrollduration:1000, fadeduration:[500, 100]},
	controlHTML: '<img src="images/up.png" style="width:48px; height:48px" />', //HTML for control, which is auto wrapped in DIV w/ ID="topcontrol"
	controlattrs: {offsetx:5, offsety:5}, //offset of control relative to right/ bottom of window corner
	anchorkeyword: '#top', //Enter href value of HTML anchors on the page that should also act as "Scroll Up" links

	state: {isvisible:false, shouldvisible:false},

	scrollup:function(){
		if (!this.cssfixedsupport) //if control is positioned using JavaScript
			this.$control.css({opacity:0}) //hide control immediately after clicking it
		var dest=isNaN(this.setting.scrollto)? this.setting.scrollto : parseInt(this.setting.scrollto)
		if (typeof dest=="string" && jQuery('#'+dest).length==1) //check element set by string exists
			dest=jQuery('#'+dest).offset().top
		else
			dest=0
		this.$body.animate({scrollTop: dest}, this.setting.scrollduration);
	},

	keepfixed:function(){
		var $window=jQuery(window)
		var controlx=$window.scrollLeft() + $window.width() - this.$control.width() - this.controlattrs.offsetx
		var controly=$window.scrollTop() + $window.height() - this.$control.height() - this.controlattrs.offsety
		this.$control.css({left:controlx+'px', top:controly+'px'})
	},

	togglecontrol:function(){
		var scrolltop=jQuery(window).scrollTop()
		if (!this.cssfixedsupport)
			this.keepfixed()
		this.state.shouldvisible=(scrolltop>=this.setting.startline)? true : false
		if (this.state.shouldvisible && !this.state.isvisible){
			this.$control.stop().animate({opacity:1}, this.setting.fadeduration[0])
			this.state.isvisible=true
		}
		else if (this.state.shouldvisible==false && this.state.isvisible){
			this.$control.stop().animate({opacity:0}, this.setting.fadeduration[1])
			this.state.isvisible=false
		}
	},
	
	init:function(){
		jQuery(document).ready(function($){
			var mainobj=scrolltotop
			var iebrws=document.all
			mainobj.cssfixedsupport=!iebrws || iebrws && document.compatMode=="CSS1Compat" && window.XMLHttpRequest //not IE or IE7+ browsers in standards mode
			mainobj.$body=(window.opera)? (document.compatMode=="CSS1Compat"? $('html') : $('body')) : $('html,body')
			mainobj.$control=$('<div id="topcontrol">'+mainobj.controlHTML+'</div>')
				.css({position:mainobj.cssfixedsupport? 'fixed' : 'absolute', bottom:mainobj.controlattrs.offsety, right:mainobj.controlattrs.offsetx, opacity:0, cursor:'pointer'})
				.attr({title:'Subira hejuru '})
				.click(function(){mainobj.scrollup(); return false})
				.appendTo('body')
			if (document.all && !window.XMLHttpRequest && mainobj.$control.text()!='') //loose check for IE6 and below, plus whether control contains any text
				mainobj.$control.css({width:mainobj.$control.width()}) //IE6- seems to require an explicit width on a DIV containing text
			mainobj.togglecontrol()
			$('a[href="' + mainobj.anchorkeyword +'"]').click(function(){
				mainobj.scrollup()
				return false
			})
			$(window).bind('scroll resize', function(e){
				mainobj.togglecontrol()
			})
		})
	}
}

scrolltotop.init()
			</script>
			
		
		
		
	</body>
</html>