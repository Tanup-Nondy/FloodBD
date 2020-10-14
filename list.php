<?php 
session_start();
if(!$_SESSION['admin']){
	header("location:login.html");
}
?>
<!DOCTYPE HTML>
<!--
	FloodBD by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>FloodBD</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

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
					<li><a href="inform.php">Inform Us</a></li>
					<li><a href="news.php">News</a></li>
					<li><a href="login.html">Admin Login</a></li>
				</ul>
			</nav>

		<!-- One -->
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<p>Eleifend vitae urna</p>
						<h2>Generic Page Template</h2>
					</header>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">
							<header class="align-center">
								<p>maecenas sapien feugiat ex purus</p>
								<h2>Lorem ipsum dolor</h2>
							</header>
							<table border="1 px solid black">
							<tr>
								<th>Name</th>
								<th>Age</th>
								<th>Phone</th>
								<th>Email</th>
								<th>Work</th>
							</tr>
							<?php
								$name=$_POST['div'];
								$cn=mysql_connect("localhost","root","");
								mysql_select_db("flood",$cn);
								$q="SELECT * FROM volunteer WHERE area_name='$name'";
								$res=mysql_query($q,$cn);
								if($res){
								while($row=mysql_fetch_array($res)){
								echo '<tr>';
								echo '<td>'.$row['vol_name'].'</td>';
								echo '<td>'.$row['age'].'</td>';
								echo '<td>'.$row['phone_no'].'</td>';
								echo '<td>'.$row['email'].'</td>';
								echo '<td>'.$row['category'].'</td>';
								echo '</tr>';
								}
								}
							?>
							</table>
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