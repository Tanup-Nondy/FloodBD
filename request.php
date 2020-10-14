<?php 
session_start();
if(!$_SESSION['admin']){
	header("location:login.html");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>
	<?php
	$cn=mysql_connect("localhost","root","");
	mysql_select_db("flood",$cn);

		if(isset($_POST['accept'])){
		
		$id=$_POST['accept'];
		$col="SELECT * FROM joinrequest Where vol_id='$id'";
					$chk=mysql_query($col,$cn);
					if($chk){
						while($row=mysql_fetch_array($chk)){
							$nam=$row['vol_name'];
							$age=$row['age'];
							$address=$row['area_name'];
							$phone=$row['phone_no'];
							$email=$row['email'];
							$cat=$row['category'];
						}
					}
		$ins="INSERT INTO `volunteer`(`vol_name`, `age`, `phone_no`, `email`, `category`, `area_name`) 
		VALUES ('$nam','$age','$phone','$email','$cat','$address')";
		$res=mysql_query($ins,$cn);
		if($res){
		$q="Delete FROM joinrequest WHERE vol_id='$id'";
		$res=mysql_query($q,$cn);
		}
		}
		else if(isset($_POST['reject'])){
		
		$id=$_POST['reject'];
		$q="Delete FROM joinrequest WHERE vol_id='$id'";
		$res=mysql_query($q,$cn);
		}
		
		
		?>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                       <!-- Start Bootstrap-->
                    </a>
                </li>
                <li>
                    <a href="request.php">Volunteer Request</a>
                </li>
                <li>
                    <a href="volunteer_list.php">Volunteer List</a>
                </li>
                <li>
                    <a href="donor_details.php">Donor Details</a>
                </li>
				<li>
                    <a href="dep_status.php">Deposited Status</a>
                </li>
                <li>
                    <a href="post.php">Post A News</a>
                </li
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
			<a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Menu</a>
			<center>
			<div><center><h1>Requested Volunteer List</h1></center>
			<table border="1 px solid white">
			<form method="post" action="request.php" >
				<tr>
					<th>Name</th>
					<th>Age</th>
					<th>Phone</th>
					<th>Email</th>
					<th>Work</th>
					<th>Area</th>
				</tr>
                <?php
					$cn=mysql_connect("localhost","root","");
					mysql_select_db("flood",$cn);
					$col="SELECT * FROM joinrequest ORDER BY area_name ASC";
					$chk=mysql_query($col,$cn);
					if($chk){
						
						while($row=mysql_fetch_array($chk)){
								echo '<tr>';
								echo '<td>'.$row['vol_name'].'</td>';
								echo '<td>'.$row['age'].'</td>';
								echo '<td>'.$row['phone_no'].'</td>';
								echo '<td>'.$row['email'].'</td>';
								echo '<td>'.$row['category'].'</td>';
								echo '<td>'.$row['area_name'].'</td>';
								//echo '<td>'.'<input style="color:green" type="submit" name="'.$row['vol_id'].'" value="accept"'.'</td>';
								//echo '<td>'.'<input style="color:red" type="submit" name="'.$row['vol_id'].'" value="reject"'.'</td>';
								echo '<td>'.'<button style="color:green" value="'.$row['vol_id'].'" name="accept">'.'Accept'.'</button>'.'</td>';
								echo '<td>'.'<button style="color:red" value="'.$row['vol_id'].'" name="reject">'.'Reject'.'</button>'.'</td>';
								//echo '<td>'.'<button style="color:green" id="'.$row['vol_id'].'" onclick="accept()">'.'Accept'.'</button>'.'</td>';
								//echo '<td>'.'<button style="color:red" id="'.$row['vol_id'].'" onclick="reject(this.id)">'.'Reject'.'</button>'.'</td>';
								echo '</tr>';
								}
					}

				?>  
				</form>
				<!--<iframe name='formresponse' width='300' height='200'></frame>-->
				</table>
				</div>
				</center>
				
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
