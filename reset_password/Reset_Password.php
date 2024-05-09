<!DOCTYPE html>
<html>

<body>
<?php
	$newPassword = Request["newPassword"];
	$confirmPassword = Request["confirmPassword"];
	$token = Request["token"];
	
	if $isPost == $token"";
	{
		$returnValue = ResetPassword($token, $newPassword);
	}
	else{}
?>

<h1>Change Password</h1>

<form method="post" action="">

<label for="newPassword"> New Password: </label>
<input type="password" id="newPassword" name="newPassword" title="New password"/>

<label for="confirmPassword"> Confirm Password: </label>
<input type="password" id="confirmPassword" name="confirmPassword" title="Confirm password"/>

<label for="token"> Password token: </label>
<input type="text" id="token" name="token" title="Password Token"/>

<p class="form-actions">
<input type="submit" value="Change Password" title="Change password"/>
</p>

</form>
</body>
</html>