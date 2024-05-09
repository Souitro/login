<html>
<head>
<title>user login PAGE</title>

<link rel='stylesheet' type='text/css' href='login.css'>
<style>

.form{
	width:50%;
	margin:8px;
	padding:8px;
	opacity:0.7;
	border-radius:10px;
	border:solid blue;	
}

.button{
	color:white;
	width:210px;
	margin:8px;
	padding:8px;
	opacity:0.7;
	border-radius:10px;
	border:solid green;
	background-color:#65fe08;
	border-sizing: fixed;
}

.ip{
	color:red;
	}
	
.id{
	color:#ffff00;
	}

.li{
	color:blue;
}
	
</style>
</head>
<center>
<body>

<h1 style="font-family:algerian" class="id">LOG IN HERE</h1>

<form action="connectDBandFROM.php" method="post">

<input type="text" name="username" placeholder="Enter username..." class="form">
<span class=ip>*</span><br>

<input type="password" name="password" placeholder="Enter password..."class="form">
<span class=ip>*</span><br>

<table>
<tr><td><input type="submit" name="submit" value="Log IN" class="button"></td>
<td><input type="reset" name="reset" value="Reset" class="button"></td></tr>
</table>
</form>


<form action="" method="post">
<a href="Forgot_Password.php" class="li">Forgot password</a>

</form>
<?php

$data = $_POST;

if (empty($data['username']) || empty($data['password'])){
	die('<span class="ip"><h3> Username and password are required...</h3></span>');
}
?>

</body></center>
</html>