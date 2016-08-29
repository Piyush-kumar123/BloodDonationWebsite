<?php
//anonymous
session_start();
include_once "dbconfig.php";
if(verifyuser())
{
$login_msg= "Welcome ".fetchusername();
$login_msg.="<br /><a href='logout.php'>log Out</a>";
}
else
{
$login_msg= "Welcome Guest";
$login_msg.="<br />New user <a href='signup.php'>Sign Up</a>";
$login_msg.="<br />Existing user <a href='signin.php'>Sign In</a>";


}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include "head.php"; ?>

</head>
<body>
<?php include "top.php"; ?>

						<h2 class="title"><a href="home.php">About Developers.</a></h2>
						<p class="meta">About the Developers of this website</p>
						<div class="entry">
						<p><table align='center' cellpadding='10'>
						<tr><td><img src='images/vikash.jpg' height='140' width='160'></td>
						<td><table>
						<tr><td></td><th><font color='Orange'>Vikash Mishra</font></th></tr>
						<tr><td>Email address:</td><th>vikashmishra@mail.com</th></tr>
						<tr><td>Contact number :</td><th>+91 8989161520</th></tr></table></td></tr>
						
						<tr><td><img src='images/sarvesh.jpg' height='140' width='160'></td>
						<td><table>
						<tr><td></td><th><font color='Orange'>Sarvesh Chandra</font></th></tr>
						<tr><td>Email address:</td><th>sarveshchandra@mail.com</th></tr>
						<tr><td>Contact number :</td><th>+91 8871614618</th></tr></table></td></tr>
						
						<tr><td><img src='images/sumit.jpg' height='140' width='160'></td>
						<td><table>
						<tr><td></td><th><font color='Orange'>Sumit Kumar</font></th></tr>
						<tr><td>Email address:</td><th>sumitkumar@writeme.com</th></tr>
						<tr><td>Contact number :</td><th>+91 8602471093</th></tr></table></td></tr>
						</table></p>
														
<?php include "bottom.php"; ?>
</body>
</html>
