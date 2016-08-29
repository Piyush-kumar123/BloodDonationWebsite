<html xmlns="http://www.w3.org/1999/xhtml">
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
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Interchange  
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20100704

-->

<head>
<?php include "head.php"; ?>
</head>
<body>
<?php include "top.php"; ?>

						<h2 class="title"><a href="#">Help People..!! </a></h2>
						<p class="meta">& someday you will be helped....</p>
						<div class="entry">
							<p>
							<img src="images/img05.jpg" width="143" height="143" alt="" class="alignleft border" />
							
							</p>
<?php include "bottom.php"; ?>
</body>
</html>
