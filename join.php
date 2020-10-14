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
		$age=$_POST['age'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
		$types=$_POST['types'];
		$area=$_POST['area'];
		mysql_select_db("flood",$cn);
		$ins="INSERT INTO joinrequest(vol_name,age,phone_no,email,category,area_name)
		values('$nam','$age','$phone','$email','$types','$area')";
		$chk=mysql_query($ins,$cn);

		if($chk){
			
			echo '<script> alert("Your request has been received successfully and will be informed u through phone and email.");</script>';
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
						<p><font size="9">Will you join us as a volunteer??</font></p>
						<h2>Register to be a Volunteer</h2>
					</header>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div style="background-color:#40bf40; color:white; padding:20px;margin-top:0px;" class="content">
							<header class="align-center">
								
								<h1><font size="7">Registration Form</font></h1>
							</header>
							
							<div id="mar"><marquee><h1><font size="5">Register here!</font></h1></marquee></div>
							<form action="join.php" method="post">
							</br>
							<table width="100%">
							<tr>
							<td class="t">Name<td>
							<input type="text" name="name" required></td></tr>
							<tr>
							<td class="t">Age</td>
							<td><input type="text" name="age" required></td></tr>
							<tr>
							<td class="t">Email</td>
							<td><input type="email" name="email" required></td></tr>
							<tr>
							<td class="t">Phone</td>
							<td><input type="text" name="phone" required></td></tr>
							<tr>
							<td class="t">Category</td>
							<td><select name="types">
							<option value="volunteer" selected="">volunteer</option>
							<option value="doctor">doctor</option>
							</select></td></tr>
							<tr>
							<td>Area</td>
							<td><input type="text" name="area"></td></tr>
							</table>
							</br>
							<input id="s" type="submit" value="Submit">
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
					&copy; FloodBD. All rights reserved.
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