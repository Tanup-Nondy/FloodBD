<?php
mysql_connect("localhost","root","");
mysql_select_db("flood");
if(isset($_POST["submit"])){
$dat=$_POST['date'];
$head=$_POST['headline'];
$news=$_POST['article'];
$filename = addslashes($_FILES['img']['name']);
$tmpname = addslashes(file_get_contents($_FILES['img']['tmp_name']));
$filetype = addslashes($_FILES['img']['type']);
$filesize = addslashes($_FILES['img']['size']);
$array = array('jpg','jpeg','png');
$ext = pathinfo($filename, PATHINFO_EXTENSION);
if(!empty($filename)){
if(in_array($ext, $array)){
mysql_query("Insert into posts(headline,post,name,image,post_date) values('$head','$news','$filename','$tmpname','$dat')");
header("location:post.php");
}
else{
echo "Unsupported Format";
}
}else{
	echo "Failed";
}
}
?>

