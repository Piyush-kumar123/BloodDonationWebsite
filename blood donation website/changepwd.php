<?php
//authentic
session_start();
include_once "dbconfig.php";
if(verifyuser())
{
$login_msg= "Welcome ".fetchusername();
$login_msg.="<br /><a href='logout.php'>logout</a>";
}
else
{
header("Location:login_error.php");
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

						<h2 class="title"><a href="#">Change Password </a></h2>
						<p class="meta">You can change your password after login</p>
						<div class="entry">
							<p>
						
							<form method='post' >
<table name='abc' border='0' cellspacing='0' cellpading='2'  width='360'>
<tr>
<td width='180'>UserName</td>
<td>
<?php
echo fetchusername();
?>
</td>
</tr>
<tr>
<td width='180'>Current Password</td>
<td><input type='password' name='cpwd' id='cpwd'></td>
</tr>
<tr>
<td width='180'>New Password</td>
<td><input type='password' name='npwd' id='npwd'></td>
</tr>


<tr>
<td width='180'>Confirm new Password</td>
<td><input type='password' name='cnpwd' id='cnpwd'></td>
</tr>


<tr>
<td colspan='2' align='center'>
<input type='submit' name='save' id='save' value='change password'  />
</td>
</tr>
</table>
</form>
<?php
if(isset($_REQUEST['save'])  )
{
$uname=fetchusername();
$cpwd=$_REQUEST['cpwd'];
$npwd=$_REQUEST['npwd'];
$cnpwd=$_REQUEST['cnpwd'];

	if($npwd==$cnpwd)
	{
	$query="update siteuser set pwd='$npwd' where username='$uname' and pwd='$cpwd'";
	$n=my_iud($query);
		if($n==1)
			echo "<Br />Password is changed";
		else
			echo "<br />Server busy,try later";
	}
		else
		{
		echo "<Br />New password is not confirmed";
		}

}


?>							</p>
<?php include "bottom.php"; ?>
</body>
</html>
