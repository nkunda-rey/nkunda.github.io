<?php
include 'header.php';
session_start();
$id=$_SESSION['id'];
$name=$_SESSION['name'];
if ($_SESSION['login']!="true") {
	header("location:login.php");
}

$con=mysqli_connect("localhost","root","","chat");



?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>profile</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	

.f button:hover {
  background-color: #0056b3;
}

a[name="tt"]{
	color: green;
	font-size: 40px;
	text-decoration: none;
}
a{
	text-decoration: none;
	color: black;
}
a[name="up"]{
text-decoration: none;
float: right;
color: darkred;
}
img{
	border-radius: 50%;
	width: 150px;
	height: 150px;
}
button{
	border-bottom-right-radius: 2;
}
form{
	background-color: #0333;
	border-radius: 15px;
	box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
	border-bottom-right-radius: 0 ;
}
</style>

    <link rel="icon" type="image/png"  href="nkunda.png">
</head>

<body><center><form method="post">
	<div>
		<?php $do="SELECT * FROM user WHERE  id='$id';";
		 $res=mysqli_query($con,$do);
		if (mysqli_num_rows($res)===1) {
	while ($r=mysqli_fetch_assoc($res)) {
	 ?><a href="profile.php"><img src="imag/<?php echo $r['file'];?>">  <?php echo $name; ?> </a></p><?php }} ?> </div>
		
	<button name="nn">logout</button></form>
	</center>
</body>
</html><?php 
if (isset($_POST['nn'])) {

	session_unset();
	header("location:login.php");
}
