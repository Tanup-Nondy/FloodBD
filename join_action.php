<?php
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
	header("location:join.php");
	echo "Your request has been successfully received and will be informed your confirmation through email and phone number u provided ";
}
else{
	echo "some error occured";
}
mysql_close($cn);
?>