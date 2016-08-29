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
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include "head.php"; ?>
</head>
<body>
<?php include "top.php"; ?>

						<h2 class="title"><a href="contact.php">Contact Us. </a></h2>
						<p class="meta">For any help please contact</p>
						<div class="entry">
							<p>
						<table align='center' border='0' cellspacing='3'   width='100%'>
<tr>
<th>Name
</th>
<th >Contact Number
</th>
<th>Email ID
</th>
</tr>

<tr>
<th>Arvind Bhargav
</th>
<th>+91 9630451146
</th>
<th>arvindbhargav@gmail.com
</th>
</tr>

<tr>
<th>Devyashish Mayank
</th>
<th>+91 8871766269
</th>
<th>devyashishmayank@gmail.com
</th>
</tr>

<tr>
<th>Vikash Mishra
</th>
<th>+91 8989161520
</th>
<th>vikashmishra@mail.com
</th>
</tr>



<tr>
<th>Siddharth Jatav
</th>
<th>+91 8962692495
</th>
<th>siddharthjatav@yahoo.co.in
</th>
</tr>
</table>
								</p>
<?php include "bottom.php"; ?>
</body>
</html>






<html>
<head>
<title>Contact Us</title>
<body>





</body>
</head>
</html>