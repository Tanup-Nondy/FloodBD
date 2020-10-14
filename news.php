<!DOCTYPE HTML>

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
						<p>Know the situation of flood affected area and help the people</p>
						<h2>NEWS</h2>
					</header>
				</div>
			</section>

					<?php
						$cn=mysql_connect("localhost","root","");
					mysql_select_db("flood",$cn);
					$col="SELECT * FROM posts";
					$chk=mysql_query($col,$cn);
					if($chk){
						while($row=mysql_fetch_array($chk)){
						
						echo '<div>
							<div class="box">
								<div class="image fit">
									<a href="default.asp"><img src="data:image/jpeg;base64,'.base64_encode($row['image']).'"width="250" height="250"></a>
								</div>
								<div class="content">
									<header class="align-center">
										<p>Bangladesh</p>
										<h2>('.$row['post_date'].')  '.$row['headline'].'</h2>
									</header>
									<p color="Red">'.$row['post'].'
									</p>
									<footer class="align-center">
										<a href="#" class="button alt">Learn More</a>
									</footer>
								</div>
							</div>
						</div>';
					
						}
					}
						?>
			
			
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