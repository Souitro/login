<?php

session_start();

$conn = mysqli_connect( 'localhost', 'root', '' );

mysqli_select_db( $conn, 'family' );

$fullname = $_POST['fullname'];
$username = $_POST['username'];
$password = $_POST['password'];
$gender = $_POST['gender'];

$s = "select * from member where username = '$username' && password = '$password'";

$result = mysqli_query( $conn, $s );

$num = mysqli_num_rows( $result );

if ( $num == 1 ){
	$_SESSION['username'] = $username;
header( 'location:home.php' );
}
else{
	header( 'location:login.php' );
}
?>