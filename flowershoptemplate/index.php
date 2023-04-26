




<!DOCTYPE html>
<!-- Template by freewebsitetemplates.com -->
<html>
<head>
<meta charset="utf-8" />
<title>Flower Shop</title>
<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
<!--[if IE 6]>
	<link rel="stylesheet" type="text/css" href="css/ie6.css" media="all" />
<![endif]-->
<!--[if IE 7]>
	<link rel="stylesheet" type="text/css" href="css/ie7.css" media="all" />
<![endif]-->
</head>
<body>
	<div id="header">
		<ul>
		
		<div id="login_form">
		<li class="selected"><a href="index.php">home</a></li>

<?php
    $hostname="localhost";
    $database="resto";
    $db_login="root";
    $db_pass="";

    $dlink = mysql_connect($hostname, $db_login, $db_pass) or die("Could not connect");
    mysql_select_db($database) or die("Could not select database");

	

    // Register

    if($_REQUEST['name'] !="" && $_REQUEST['email'] !="" && $_REQUEST['password'] !="" && $_REQUEST['contact'] !="" && $_REQUEST['address'] !=""){
        $query = "select * from user where email='". $_REQUEST['email'] . "'";
        $result = mysql_query($query) or die(mysql_error());
        $num_results = mysql_num_rows($result);

        if ($num_results==0){
            $query = "insert into user(email, paswrd, contact, custname, address, usertype, user_date, user_ip) values('" . $_REQUEST['email'] . "', '" . $_REQUEST['password'] . "', '". $_REQUEST['contact'] . "', '" . $_REQUEST['name'] . "' ,'" . $_REQUEST['address'] . "', 'customer', '" . date("Y-m-d h:i:s") . "', '". $_SERVER['REMOTE_ADDR'] ."')";
            $result = mysql_query($query) or die(mysql_error());
            echo "<meta http-equiv='refresh' content='0;url=index.php?action=login&#login_form'>";
        }else{
            echo "<meta http-equiv='refresh' content='0;url=index.php?registered=user&register=true&#register'>";
            echo '<script>alert("Account Already Registered")</script>';
        }
    }

    // End of Register

    // Login

    if ($_REQUEST['logging_in'] == true){
      $query = "select * from user where email='". $_REQUEST['email'] ."' and paswrd='". $_REQUEST['password'] ."'";
      $result = mysql_query($query) or die(mysql_error());
      $total_results = mysql_num_rows($result);
      if ($total_results == 0) {
        echo '<meta http-equiv="refresh" content="0;url=index.php?action=register&#login_form">';
      }else{
        echo '<meta http-equiv="refresh" content="0,url=index.php?user=logged_in">';
      }
    }

    // End of Login

    // Register Form

    if ($_REQUEST['action'] == 'register'){
        print('<h1>Registration Form</h1>');
        print('<form action=index.php method=post>');
        print('Enter Name<input type=text name=name><br>');
        print('Enter Email<input type=text name=email><br>');
        print('Enter Password<input type=text name=password><br>');
        print('Enter Contact<input type=text name=contact><br>');
        print('Enter Address<input type=text name=address><br>');
        print('<input type=submit value=submit>');
        print('</form>');
    }

    // End of Register Form

    // Login Form

    if ($_REQUEST['action'] == 'login'){
      print ('<h1 id="login">Login</h1>');
      print('<form action=index.php?logging_in=true method=post>');
      print('Enter Email<input type=text name=email><br>');
      print("Enter Password<input type=text name=password><br>");
      print('<input type=submit value=submit name=submit>');
      print('</form>');
    }

    // End of Login Form
  ?>
<?php
                  if ($_REQUEST['user'] != "logged_in"){
                    echo '<li class="nav-item"><a class="nav-link" href="index.php?action=login&#login_form">Login</a></li>';
                    echo '<li class="nav-item"> <a class="nav-link" href="index.php?action=register&#login_form">Register</a></li>';
                  }else if ($_REQUEST['user'] == "logged_in"){
                    echo '<li><a href="#">Welcome Customer to fiore flowers</a></li>';
                  }
                ?>
				<li><a href="contact.html">contact us</a></li>	
</div>
			
				
		</ul>
		<div class="logo">
			<a href="index.php"><img src="images/logo.gif" alt="" /></a>
		</div>

		
	</div>
				</div>
	<div id="body">
		<div class="featured">
			<div>
	
				<div class="section">
					<div>
						
					<br>
					<br>
					<br>
					<br>
					<br>
						<a href="index.php"><img src="images/bridal-bouquet.jpg" alt="" /></a>
						<br>
						<br>

						<h1>Bridal Bouquet</h1>	
					</div>	
				</div>
			</div>
		</div>
		<div class="content">
			<span class="heading"><img src="images/special-occasions-flowers.gif" alt="" /></span>
			<div>
				<div>
					<ul>
						<li>
							<a href="flowers.html">
							<img src="images/tulips.jpg" alt="" />
							<span>Tulips</span>
							</a>
						</li>	
						<li>
							<a href="flowers.html">
							<img src="images/bouquet.jpg" alt="" />
							<span>Bouquet</span>
							</a>
						</li>	
						<li>
							<a href="flowers.html">
							<img src="images/roses.jpg" alt="" />
							<span>Roses</span>
							</a>
						</li>	
						<li>
							<a href="flowers.html">
							<img src="images/bouquet2.jpg" alt="" />
							<span>Bouquet</span>
							</a>
						</li>	
						<li>
							<a href="flowers.html">
							<img src="images/roses2.jpg" alt="" />
							<span>Roses</span>
							</a>
						</li>	
						<li>
							<a href="flowers.html">
							<img src="images/bridal-bouquet2.jpg" alt="" />
							<span>Bridal Bouquet</span>
							</a>
						</li>	
						<li>
							<a href="flowers.html">
							<img src="images/sunflower.jpg" alt="" />
							<span>Sunflower</span>
							</a>
						</li>	
						<li>
							<a href="flowers.html">
							<img src="images/bouquet3.jpg" alt="" />
							<span>Bouquet</span>
							</a>
						</li>	
						<li>
							<a href="flowers.html">
							<img src="images/speedwell.jpg" alt="" />
							<span>Speedwell</span>
							</a>
						</li>			
					</ul>
					<h4><a href="flowers.html">view all flowers</a></h4>
				</div>
				<ul>
					<li>
						<h3>This website template has been designed by <a href="http://www.freewebsitetemplates.com/">Free Website Templates</a> for you, for free.</h3>
						<p>You can replace all this text with your own text. You can remove any link to our website from this website template, you're free to use this website template without linking back to us. If you're having problems editing this website template, then don't hesitate to ask for help on the <a href="http://www.freewebsitetemplates.com/forum">Forum</a>.</p>
					</li>		
					<li>
						<h3>Looking for more templates?</h3>
						<p>Just browse through all our <a href="http://www.freewebsitetemplates.com/">Free Website Templates</a> and find what you’re looking for. But if you don’t find any website template you can use, you can try our <a href="http://www.freewebsitetemplates.com/freewebdesign/">Free Web Design</a> service and tell us all about it. Maybe you’re looking for something different, something special. And we love the challenge of doing something different and something special.</p>
					</li>	
					<li>
						<h3>We Have Free Templates for Everyone</h3>
						<p>Our website templates are created with inspiration, checked for quality and originality and meticulously sliced and coded. What’s more, they’re absolutely free! You can do a lot with them. You can modify them. You can use them to design websites for clients, so long as you agree with the <a href="http://www.freewebsitetemplates.com/about/termsofuse/">Terms of Use</a>. You can even remove all our links if you want to.</p>
					</li>		
				</ul>
			</div>
		</div>
	</div>
	<div id="footer">
		<div>
			<div class="connect">
				<h4>Follow us:</h4>
				<ul>
					<li class="facebook"><a href="http://facebook.com/freewebsitetemplates" target="_blank">facebook</a></li>
					<li class="twitter"><a href="http://twitter.com/fwtemplates" target="_blank">twitter</a></li>		
				</ul>
			</div>
			<p>Copyright &copy; 2012. All rights reserved.</p>
		</div>
	</div>
</body>
</html>