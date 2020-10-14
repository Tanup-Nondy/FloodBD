<!DOCTYPE HTML>

<html>
	<head>
		<title>FloodBD</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<style>
.t{
	color:white;
}
.inp{
	color:white;
	width:100%;
	
}
	</style>
	<body class="subpage">
	<?php
		if(isset($_POST['name'])){
		$cn=mysql_connect("localhost","root","");
		$nam=$_POST['name'];
		$address=$_POST['address'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
		$types=$_POST['types'];
		$amount=$_POST['amount'];
		$card=$_POST['card_no'];
		$date=$_POST['date'];
		$g_name=$_POST['good_name'];
		$weight=$_POST['weight'];
		$cat=$_POST['works'];
		$wdate=$_POST['wdate'];
		$hours=$_POST['hours'];
		mysql_select_db("flood",$cn);
		$ins="INSERT INTO `donar`(`donar_name`, `address`, `email`, `phone`, `donation_type`, `donation_date`, `money`, `card_no`, `goods_name`, `goods_weight`, `category`, `wdate`, `hours`)
values('$nam','$address','$email','$phone','$types','$date','$amount','$card','$g_name','$weight','$cat','$wdate','$hours')";
		$chk=mysql_query($ins,$cn);
		if($amount){
			$inm="INSERT INTO money(donar_name,amount,card_no)
			values('$nam','$amount','$card')";
			$qm=mysql_query($inm,$cn);
		}
		if($g_name){
			$ing="INSERT INTO goods(donar_name,goods_name,goods_weight)
			values('$nam','$g_name','$weight')";
			$qg=mysql_query($ing,$cn);
		}
		if($amount){
			$inoth="INSERT INTO `others`(`donar_name`, `category`, `wdate`, `hours`) 
			values('$nam','$cat','$wdate','$hours')";
			$qoth=mysql_query($inoth,$cn);
		}
		echo '<script> alert("You have successfully donated!");</script>';

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
					<li><a href="inform.php">Inform Us</a></li>
					<li><a href="news.php">News</a></li>
					<li><a href="login.html">Admin Login</a></li>
				</ul>
			</nav>

		<!-- One -->
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<p>Donation</p>
						<h2>Danote as much as you can</h2>
					</header>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div style="background-color:#5c5c3d; color:white; padding:20px;margin-top:0px;" class="content">
							<header class="align-center">
								
								<center><h1><font size="8" color="white">Donation Form</font></h1>
							</header>
							
							<div id="mar"><marquee><font size="6" color="white">Donate Here!</font></marquee></div>
							<form action="donor.php" method="post">
							</br>
							
							<table width="100%">
							<tr>
							<td class="t">Name<td>
							<input class="inp" type="text" name="name" required></td></tr>
							<tr>
							<td class="t">Address</td>
							<td><input class="inp" type="text" name="address" required></td></tr>
							<tr>
							<td class="t">Email</td>
							<td><input class="inp" type="email" name="email" required></td></tr>
							<tr>
							<td class="t">Phone</td>
							<td><input class="inp" type="text" name="phone" required></td></tr>
						
							<tr>
							<td class="t">Donation type</td>
							<td><select name="types">
							<option value="money" selected="">money</option>
							<option value="goods">goods</option>
							<option value="time">time</option>
							<option value="money and goods">money and goods</option>
							<option value="money and time">money and time</option>
							<option value="goods and time">goods and time</option>
							<option value="all of them">money,good and time</option>
							</select></td></tr>
							<tr>
							<td>Date</td>
							<td><input type="date" name="date"></td></tr></table>
							<table width="100%">
							<tr rowspan="3" style="margin-left: 500px"><td>Money</td></tr>
							<td><input type="radio"></td>
							<td>Amount</td>
							<td><input type="number" name="amount"></td>
							<td>Card no</td>
							<td><input type="number" name="card_no"></td>
							
							</tr>
							<tr>
							<td>Goods</td>
							<td><input type="radio"></td>
							<td>Goods name</td>
							<td><input type="text" name="good_name"></td>
							<td>Weight</td>
							<td><input type="number" name="weight"></td>
							</tr>
							<tr>
							<td>Time</td>
							<td><input type="radio"></td>
							<td><select name="works">
							<option value="volunteer" selected="">volunteer</option>
							<option value="doctor">doctor</option>
						
							</select></td>
							<td>Working Date</td>
							<td><input type="date" name="wdate"></td>
							<td>Hours</td>
							<td><input type="number" name="hours"></td>
							</tr>
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