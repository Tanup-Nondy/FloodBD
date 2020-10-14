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
	<style>
	.t{
		align:center;
		width:1000px;
		font-size:25px;
	}
	#s{
		align-left:200px;
	}
	</style>
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
			<div><center><h1>Post a News</h1></center>
			<form action="post_action.php" method="post" enctype="multipart/form-data">
			<table width="100%">
				<tr>
					<td class="t">Date <input type="date" name="date"><br><br></td>
				</tr>
				<tr>
					<td class="t">Image <input type="file" name="img"><br><br></td>
				</tr>
				<tr>
				<td class="t"><textarea rows="2" cols="50" name="headline" placeholder="Write the headline here..."></textarea><br><br></td>
				</tr>
				<tr>
				<td class="t"><textarea rows="4" cols="50" name="article" placeholder="Write the article here..."></textarea><br><br></td>
				</tr>
				<tr>
				<td class="t"><input id="s" type="submit" name="submit" value="Post"></td>
				</tr>
				</table>
				</form>
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
