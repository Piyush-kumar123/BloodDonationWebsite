<?php
//anonymous
session_start();
include_once "dbconfig.php";
if(verifyuser())
{
$login_msg= "Welcome ".fetchusername();
$login_msg.="<a href='logout.php'>log Out</a>";
}
else
{
$login_msg= "Welcome Guest";
$login_msg.="<br />New user <a href='signup.php'>Sign Up</a>";

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include "head.php"; ?>
</head>
<body>
<?php include "top.php"; ?>

						<h2 class="title"><a href="#">Sign In </a></h2>
						<p class="meta">Existing users can login here</p>
						<div class="entry">
							<p>
						
							<form method='post' >
<table name='abc' border='0' cellspacing='0' cellpading='2'  width='360'>
<tr>
<td width='180'>User Name</td>
<td><input type='text' name='uname' id='uname'></td>
</tr>
<tr>
<td width='180'>Password</td>
<td><input type='password' name='pwd' id='pwd'><a href="forgetpwd.php">forget password</a></td>
</tr>

<tr>
<td width='180'>Remember Me</td>
<td><input type='checkbox' name='rem' id='rem'></td>
</tr>




<tr>
<td colspan='2' align='center'>
<input type='submit' name='save' id='save' value='sign In'  />
</td>
</tr>
</table>
</form>
<?php
if(isset($_REQUEST['save'])  )
{
$uname=$_REQUEST['uname'];
$pwd=$_REQUEST['pwd'];
if(isset($_REQUEST['rem']))
$rem='yes';
else
$rem='no';

$query="select count(*) from siteuser where username='$uname' and pwd='$pwd'";
$n=my_one($query);
if($n!=1)
	{
	header("Location:login_error.php");
	}
	else
	{
	$_SESSION['sun']=$uname;
	$_SESSION['spwd']=$pwd;
		if($rem=='yes')
			{
			setcookie('cun',$uname,time()+60*60*24*7);
			setcookie('cpwd',$pwd,time()+60*60*24*7);
			}
$query="select role from siteuser where username='$uname' and pwd='$pwd'";
$role=my_one($query);
$target=$role."_db.php";
header("Location:$target");
	}


}


?>							</p>
<?php include "bottom.php"; ?>
</body>
</html>
