<?php 
session_start();
?>
<?php
$cn=mysql_connect("localhost","root","");
$email=$_POST['email'];
$pass=$_POST['password'];
mysql_select_db("flood",$cn);
$col="SELECT * FROM admin WHERE email='$email' AND password='$pass'";
$chk=mysql_query($col,$cn);
//$result=mysql_fetch_assoc($chk);
$count=mysql_num_rows($chk);
if($count==1)
{
		$_SESSION['admin']=$email;
		header("location:admin.php");
}
else{
	header("location:login.html");
}
mysql_close($cn);
?>