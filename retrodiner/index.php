<?php
$hostname="localhost";
$database="resto";
$db_login="root";
$db_pass="";

$dlink = mysql_connect($hostname, $db_login, $db_pass) or die("Could not connect");
mysql_select_db($database) or die("Could not select database");

if($_REQUEST['uname'] !=""){
   $query="insert into user(custname,address) values('".$_REQUEST['uname']."','".$_REQUEST['address']."')";
   $result = mysql_query($query) or die(mysql_error());
}
	?>





<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<head>
	<title>Retro Diner</title>
	<meta charset="utf-8">
	<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div id="header">
		<div>
			<a href="index.php"><img class="logo" src="images/logo.png" width="513" height="84" alt="" title=""></a>
			<a href="index.php"><img  src="images/waitress.png" width="332" height="205" alt="" title=""></a>
			<ul class="navigation">
				<li>
					<a class="active" href="index.php">Home</a>
				</li>
				<li>
					<a href="about.html">About</a>
				</li>
				<li>
					<a href="burger.html">Menu</a>
				</li>
				<li>
					<a href="contact.html">Contact</a>
				</li>
				<li>
					<a href="login.php">Login</a>
				</li>
				<li>
					<a href="register.php">Register</a>
				</li>
			</ul>


		</div>
	</div>

<div>
	


<!-- <form action=register.php method=post>
Enter Name<input type=text name=uname><br>
Enter Address<input type=text name=address><br>
<input type=submit value=submit>
</form> -->
</div>

	<div id="body">
		<div class="featured"> <a href="burger.html"><img src="images/burger-specials.png" width="960" height="590" alt=""></a>
			<h2>Welcome to Retro Diner!</h2>
			<p>
				This website template has been designed by <a href="http://www.freewebsitetemplates.com"> Free Website Templates</a> for you, for free. You can replace all this text with your own text. You can remove any link to our website from this website template, you're free to use this website template without linking back to us. If you're having problems editing this website template, then don't hesitate to ask for help on the <a href="http://www.freewebsitetemplates.com/forums"> Forums.</a>
			</p>
			<ul>
				<li>
					<a href="hotdog.html"><img src="images/hotdogs.jpg" width="284" height="214" alt=""></a>
				</li>
				<li>
					<a href="shake.html"><img src="images/shakes.jpg" alt="" width="284" height="214"></a>
				</li>
				<li>
					<a href="breakfast.html"><img src="images/breakfast.jpg" alt="" width="284" height="214"></a>
				</li>
			</ul>
		</div>
	</div>
	<div id="footer">
		<div>
			<ul>
				<li class="first">


				<li>
					<a href="index.php"><img class="logo" src="images/logo-footer.png" alt=""></a>
					<ul class="navigation">
						<li>
							<a href="index.php">Home</a>
						</li>
						<li>
							<a href="about.html">About Us</a>
						</li>
						<li>
							<a href="menu.html">Menu</a>
						</li>
						<li>
							<a href="contact.html">Contact Us</a>
						</li>
					</ul>
					<span>&copy; 2023 RetroDiner.com. All Rights Reserved</span>
				</li>
				<li class="last">
					<h2>Follow Us By Email</h2>
					<form action="index.php">
						<input type="text" name="subscribe" value="Enter Your Email Here...">
						<input type="submit" value="">
					</form>
				</li>
			</ul>
		</div>
	</div>
</body>
</html>

