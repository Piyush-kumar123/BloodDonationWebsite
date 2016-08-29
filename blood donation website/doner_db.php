<?php
//authorised -doner
session_start();
include_once "dbconfig.php";
if(verifyuser() && fetchrole()=='doner')
{
$login_msg= "Welcome ".fetchusername();
$login_msg.="<br /><a href='logout.php'>logout</a>";
}
else
{
	echo"<script>window.location.replace('signin.php');</script>";
	die();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include "head.php"; ?>
</head>
<body>
<?php include "top.php"; ?>

						<h2 class="title"><a href="#">Welcome</a></h2>
						<p class="meta">Thank you for signing in..</p>
						<div class="entry">
							<p>
							<img src="images/img05.jpg" width="143" height="143" alt="" class="alignleft border" />
							Here you can update your profile details..
							<p><div> <a href="select.php">Click Here</a> to update your details.</div>
							</p>
<?php include "bottom.php"; ?>
</body>
</html>
