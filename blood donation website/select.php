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
$login_msg.="<br />New user <a href='signin.php'>Sign In</a>";

}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<?php include "head.php"; ?>


</head>
<body>
<?php include "top.php"; ?>


						<h2 class="title"><a href="#">Please select </a></h2>
						<p class="meta">Tu update your profile</p>
						<div class="entry">
							<p>
							<a href="changepwd.php">Change Password</a></br>
							<a href="manage.php">Change Details</a>

							</p>
<?php include "bottom.php"; ?>
</body>
</html>
