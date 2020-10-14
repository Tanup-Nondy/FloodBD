<!DOCTYPE HTML>

<html>
	<head>
		<title>FloodBD</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<style>
			#h{
				text-size:100px;
			}
			input{
				width:30%;
				align:center;
			}
		</style>
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
						<p>All Volunteer are avaiable here.</p>
						<h2>Volunteer</h2>
					</header>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">
							<header class="align-center">
								</br>
								<h2>Help the volunteer in your area</h2>
								<h2>Click On the districts to see the corrosponding volunteer list</h2>
							</header>
							<form action="list.php" method="post">
								<?php 
									$cn=mysql_connect("localhost","root","");
									mysql_select_db("flood",$cn);
									echo '<center>'.'<h2 id="h">'."Barisal".'</h2>'.'</center>'."</br>";
									$q="SELECT * FROM district where div_name='Barisal' ";
									$res=mysql_query($q,$cn);
									if($res){
										while($row=mysql_fetch_array($res)){
											echo '<center><input style="color:red;" type="submit" value="'.$row['dis_name'].'" name="div"></center>'.'<br><br>';
										
										}
									}
									echo '<center>'.'<h2>'."Chittagong".'</h2>'.'</center>'."</br>";
									$q="SELECT * FROM district where div_name='Chittagong' ";
									$res=mysql_query($q,$cn);
									if($res){
										while($row=mysql_fetch_array($res)){
											echo '<center><input style="color:red;" type="submit" value="'.$row['dis_name'].'" name="div"></center>'.'<br><br>';
										
										}
									}
									echo '<center>'.'<h2>'."Dhaka".'</h2>'.'</center>'."</br>";
									$q="SELECT * FROM district where div_name='Dhaka' ";
									$res=mysql_query($q,$cn);
									if($res){
										while($row=mysql_fetch_array($res)){
											echo '<center><input style="color:red;" type="submit" value="'.$row['dis_name'].'" name="div"></center>'.'<br><br>';
										
										}
									}
									echo '<center>'.'<h2>'."Khulna".'</h2>'.'</center>'."</br>";
									$q="SELECT * FROM district where div_name='Khulna' ";
									$res=mysql_query($q,$cn);
									if($res){
										while($row=mysql_fetch_array($res)){
											echo '<center><input style="color:red;" type="submit" value="'.$row['dis_name'].'" name="div"></center>'.'<br><br>';
										
										}
									}
									echo '<center>'.'<h2>'."Mymensingh".'</h2>'.'</center>'."</br>";
									$q="SELECT * FROM district where div_name='Mymensingh' ";
									$res=mysql_query($q,$cn);
									if($res){
										while($row=mysql_fetch_array($res)){
											echo '<center><input style="color:red;" type="submit" value="'.$row['dis_name'].'" name="div"></center>'.'<br><br>';
										
										}
									}
									echo '<center>'.'<h2>'."Rajshahi".'</h2>'.'</center>'."</br>";
									$q="SELECT * FROM district where div_name='Rajshahi' ";
									$res=mysql_query($q,$cn);
									if($res){
										while($row=mysql_fetch_array($res)){
											echo '<center><input style="color:red;" type="submit" value="'.$row['dis_name'].'" name="div"></center>'.'<br><br>';
										
										}
									}
									echo '<center>'.'<h2>'."Rangpur".'</h2>'.'</center>'."</br>";
									$q="SELECT * FROM district where div_name='Rangpur' ";
									$res=mysql_query($q,$cn);
									if($res){
										while($row=mysql_fetch_array($res)){
											echo '<center><input style="color:red;" type="submit" value="'.$row['dis_name'].'" name="div"></center>'.'<br><br>';
										
										}
									}
									echo '<center>'.'<h2>'."Sylhet".'</h2>'.'</center>'."</br>";
									$q="SELECT * FROM district where div_name='Sylhet' ";
									$res=mysql_query($q,$cn);
									if($res){
										while($row=mysql_fetch_array($res)){
											echo '<center><input style="color:red;" type="submit" value="'.$row['dis_name'].'" name="div"></center>'.'<br><br>';
										
										}
									}
								?>
							</form>
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