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
			<div><center><h1>Admin Panel</h1></center>
			<table border="1 px solid black">
				<tr>
					<th>Name</th>
					<th>Phone</th>
					<th>Email</th>
					
				</tr>
                <?php
					$cn=mysql_connect("localhost","root","");
					mysql_select_db("flood",$cn);
					$col="SELECT * FROM admin";
					$chk=mysql_query($col,$cn);
					if($chk){
						
						while($row=mysql_fetch_array($chk)){
								echo '<tr>';
								echo '<td>'.$row['name'].'</td>';
								echo '<td>'.$row['phone'].'</td>';
								echo '<td>'.$row['email'].'</td>';
								echo '</tr>';
								}
					}

				?>  
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
