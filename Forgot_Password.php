<!DOCTYPE html>
<html>
<head>
<title>forgot password</title>
<style>

.form{
	width:50%;
	border-radius:12px;
	margin:8px;
	padding:8px;
	border: solid blue;
	opacity: 0.7;
}

.button{
	width:220px;
	border-radius:12px;
	margin:8px;
	padding:8px;
	border: 2px solid yellow;
	background-color: #ADD8E6;
	opacity: 0.8;
}

.ip{
	color:red;
}

</style>
<link rel="stylesheet" type="text/css" href="login.css">
</head>

<body>
<h1 class="ip" style="font-family:algerian" align="center">FORGOT PIN FORM</h1>

<center>
<form action="" method="post">

<input type="text" name="username" placeholder="Enter username..." class="form" required>
<span class=ip>*</span><br>

<input type="submit" name="submit" value="submit" class="button">
<input type="reset" name="reset" value="Reset" class="button">

</form>
</center>

<?php

if (isset($_POST['submit'])){

$name = $_POST['username'];
$Npassword = $_POST['Npassword'];
$Rpassword = $_POST['Rpassword'];

if ($Npassword != $Rpassword){
	echo"<script>alert('passwords does not match ')</script>";
}

else{

$severname = "localhost";
$username = "root";
$password = " ";
$database = "family";

$conn = mysqli_connect( $severname, $username, $password );

mysqli_select_db( $conn, $database );

$s = "UPDATE edupath SET password = '4321' WHERE username = Veekay24";

$result = mysqli_query( $conn, $s );

$num = mysqli_num_rows( $result );

if ( !$s ){
	die( 'Forgoten password hasnt been updated...' );
	header('location:Porgot_Password.php');
}
else{
	header( 'location:login.php' );
}
	
}}

?>

</body>
</html>
