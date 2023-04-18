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
			<h2>Login</h2>
			<p>
            <form action="index.php" method="get">
						<input type="text" name="email" value="email" onblur="this.value=!this.value?'Email':this.value;" onfocus="this.select()" onclick="this.value='';">
						<input type="text" name="password" value="password" onblur="this.value=!this.value?'Password':this.value;" onfocus="this.select()" onclick="this.value='';">
						<input type="hidden" name="login" value="try">
						<input type="submit" value="Login" id="submit">
					</form>
			</p>
			
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

