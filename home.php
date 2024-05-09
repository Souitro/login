<?php

session_start();
if (!isset($_SESSION['username'])){
	header('location:login.php');
}

?>

<link rel='stylesheet' type='text/css' href='logout.css'> 
 
<html>
<head>
<title>Home page</title>
<style>
.id{
	color:yellow;
	}
	
.ip{
	color:blue;
	}
</style>
</head>

<body>

<a href = "logout.php" class=ip><b> Logout </b></a>

<h1 align="center" class=id>Welcome<?php echo $_SESSION['username']; ?><h1>


</body>
</html>