<?php
//anonymous
session_start();
include_once "dbconfig.php";
if(verifyuser())
{
$login_msg= "Welcome ".fetchusername();
$login_msg.="<br /><a href='logout.php'>logout</a>";
}
else
{
$login_msg= "Welcome Guest";
$login_msg.="<br />New user <a href='signup.php'>Signup</a>";
$login_msg.="<br />Existing user <a href='signin.php'>SignIn</a>";
}
?><!DOCTYPE html PUBLIC "-//W3C//Dth XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/Dth/xhtml1-strict.dth">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include "head.php"; ?>
</head>
<body>
<?php include "top.php"; ?>

						<h2 class="title"><a href="#">Forget Password </a></h2>
						<p class="meta">Recover your password</p>
						<div class="entry">
							<p>
						
							<form method='post' >
<table name='abc' border='0' cellspacing='0' cellpading='2'  width='360'>
<tr>
<th width='180'>UserName</th>
<th><input type='text' name='uname' id='uname'></th>
</tr>

<tr>
<th width='180'>HintQues</th>
<th><select name='hintq' id='hintq'>
<option >What is your First mobile number?</option>
<option>What is your Pet Name?</option>
<option>What is your mother's maiden name?</option>
<option>What is the name of your first teacher?</option>
<option>Where was your first home?</option></select></th>
</tr>

<tr>
<th width='180'>HintAns</th>
<th><input type='text' name='hinta' id='hinta'></th>
</tr>


<tr>
<th colspan='2' align='center'>
<input type='submit' name='save' id='save' value='recover password'  />
</th>
</tr>
</table>
</form>
<?php
if(isset($_REQUEST['save'])  )
{
$uname=$_REQUEST['uname'];
$hq=$_REQUEST['hintq'];
$ha=$_REQUEST['hinta'];
$query="select pwd from siteuser where username='$uname' and hintq='$hq' and hinta='$ha'";
$pwd=my_one($query);
	if(strlen($pwd)>0)
	echo "<Br />Your Password is: <b><i>'$pwd'</i></b></br>Please remember your password.";
	else
	echo "<br />Invalid security credentials";
}


?>							</p>
<?php include "bottom.php"; ?>
</body>
</html>
