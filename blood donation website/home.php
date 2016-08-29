<html xmlns="http://www.w3.org/1999/xhtml">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
$login_msg.="<br />Existing user <a href='signin.php'>Sign In</a>";


}
?>



<head>
<?php include "head.php"; ?>

</head>
<body>
<?php include "top.php"; ?>
<script language='javascript'>alert("Please Register and help the one who needs you")</script>
						<h2 class="title"><a href="home.php">Home </a></h2>
						<p class="meta">Please encourage people to donate Blood</p>
						<div class="entry">
						<p><?php include "places.php";?></p>
														
<?php include "bottom.php"; ?>
</body>
</html>
