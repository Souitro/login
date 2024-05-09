<?php

if (isset($_POST['submit'])){

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "family";


$name = $_POST["fullname"];
$user = $_POST["username"];
$psd = $_POST["password"];
$gender = $_POST["gender"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO member ( fullname, username, password, gender )
VALUES ('$name', '$user', '$psd ', '$gender')";

if ($conn->query($sql) === TRUE) {

  echo "<script>alert('New record created successfully')</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}

?>