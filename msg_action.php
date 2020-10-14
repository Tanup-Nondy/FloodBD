<?php

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
		
		?>