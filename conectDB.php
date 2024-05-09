<?php

$fullname = $_POST['fullname'];
$username = $_POST['username'];
$password = $_POST['password'];
$gender = $_POST['gender'];

$user = "root";
$ps = "";
$db = "";

$conn = new mysqli ("localhost", $user, $ps, $db) or die('you are not connected');
echo "You are well connected<br>";

	$reg = "insert into member(fullname, username, password, gender)
	values ( $fullname , $username , $password , $gender )";
mysqli_query( $conn, $reg );
echo "Registration sucessful...";

?>