<!DOCTYPE html>
<html>
<head>
<title>registration_form.</title>
<link rel='stylesheet' type='text/css' href='login.css'>
<style>
.form{
	width:50%;
	margin:8px;
	padding:12px;
	border: 2px solid blue;
	border-radius:10px;
	box-sizing:border-box;
	
	opacity:0.7;
}

.button{
	width:210px;
	margin:8px;
	color:white;
	padding:12px;
	border-radius:10px;
	box-sizing:border-box;
	background-color: #65fe08;
	border:solid green;
	
	opacity:0.7;
}

.id {
	color:#ffff00;
	}

.ip {
	color:red;
	}

</style>
</head>
<center>
<body>


<?php

if (isset($_POST['submit'])){
	

	
	if (($_SEVER['REQUEST_METHOD']) === POST){
		
		if (empty($_POST['fullname'])){
			$fullnameErr = "<b>ERROR: </b>Fullname is required to be filled...";
		}else{
			$fullname = test_input($_POST['fullname']);
		}
		
		
		if (empty($_POST['username'])){
			$usernameErr = "<b>ERROR: </b>Username is required to be filled...";
		}else{
			$username = test_input($_POST['username']);
		}
		
		
		if (empty($_POST['password'])){
			$passwordErr = "<b>ERROR: </b>Password is required to be filled...";
		}else{
			$password = test_input($_POST['password']);
		}
		
		
		if (empty($_POST['gender'])){
			$genderErr = "<b>ERROR: </b>Gender is required to be filled...";
		}else{
			$gender = test_input($_POST['gender']);
		}
		
	}
	
	function test_input($data){
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
	}
	
}
?>


<h1 style="font-family:algerian" class=id> REGISTER HERE </h1>

<form action="connectDB.php" method="post">

<form action="<?php echo htmlspecialchars($_SEVER['PHP_SELP']); ?>" method="post">

<input type="text" name="fullname" placeholder="Enter fullname..." class="form" required>
<span class=ip>*<?php echo $fullnameErr; ?></span><br>

<input type="text" name="username" placeholder="Enter username..." class="form" required>
<span class=ip>*<?php echo $usernameErr; ?></span><br>

<input type="password" name="password" placeholder="Enter password..." class="form" required>
<span class=ip>*<?php echo $passwordErr; ?></span><br>

<input type="radio" name="gender" value="male" checked><span class=ip>Male</span>
<input type="radio" name="gender" value="female"><span class=ip>Female</span>
<span class=ip>*<?php echo $genderErr; ?></span><br>

<table>
<tr><td><input type="submit" name="submit" value="Register" class="button"></td>
<td><input type="reset" name="reset" value="Reset" class="button"></td></tr>
</table>
</form>
</form>

</body></center>
</html>