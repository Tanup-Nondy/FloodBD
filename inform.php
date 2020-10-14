<!DOCTYPE HTML>

<html>
	<head>
		<title>FloodBD</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">
		<?php
		if(isset($_POST['name'])){
		$cn=mysql_connect("localhost","root","");
		$nam=$_POST['name'];
		$address=$_POST['address'];
		$phone=$_POST['phone'];
		$msg=$_POST['msg'];
		mysql_select_db("flood",$cn);
		$ins="INSERT INTO message(name,address,phone,message)
		values('$nam','$address','$phone','$msg')";
		$chk=mysql_query($ins,$cn);

		if($chk){
			
			echo '<script> alert("Your message has been delivered successfully.");</script>';
		}
		else{
			echo '<script> alert("Some error occured!");</script>';
		}
		mysql_close($cn);
		}
		?>
		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="index.html">FloodBD</a></div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.html">Home</a></li>
					<li><a href="generic.html">Affected Areas</a></li>
					<li><a href="donor.php">Donate</a></li>
					<li><a href="volunteer.php">VolunteerList</a></li>
					<li><a href="join.php">Join Us</a></li>
					<li><a href="about.html">About Us</a></li>
					<li><a href="inform.php">Infrom Us</a></li>
					<li><a href="news.php">News</a></li>
					<li><a href="login.html">Admin Login</a></li>
					
				</ul>
			</nav>

		<!-- One -->
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<p><font size="9">Inform us any information to help people</font></p>
						<h2>Always tell the truth</h2>
					</header>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div style="background-color:#40bf40; color:white; padding:20px;margin-top:0px;" class="content">
							<header class="align-center">
								
							<form action="inform.php" method="post">
							</br>
							<table width="100%">
							<tr>
							<td class="t">Name<td>
							<input type="text" name="name" required></td></tr>
							<tr>
							<td class="t">Address</td>
							<td><input type="text" name="address" required></td></tr>
							<tr>
							<td class="t">Phone</td>
							<td><input type="text" name="phone" required></td></tr>
							</table>
							<textarea rows="05" cols="10" name="msg">Enter your massage here</textarea>
							<input type="submit" name="submit" value="Send">
							
							
							
							</br>
							</br>
							</form>
							</div>
						</div>
					</div>
				</div>
			</section>

							
							

		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
					</ul>
				</div>
				<div class="copyright">
					&copy; FloodBD@17. All rights reserved.
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>