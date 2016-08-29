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

						<h2 class="title"><a href="home.php">Feedback</a></h2>
						<p class="meta">Please provide your feedback for better service.</p>
						<div class="entry">
						<p><form name='feedback' id='feedback' method='post'>
						<table><tr><td>Your Full Name</td>
						<td><input type='text' name='name' id='name'></td></tr>
						<tr><td>Your Contact Number (10 digits)</td>
						<td><input type='text' name='contact' id='contact' maxlength='10'></td></tr>
						<tr><td>Your email ID</td>
						<td><input type='email' name='email' id='email'><td></tr>
						<tr valign='top'><td>Comments</td>
						<td><textarea name='comment' id='comment' rows='5' cols='18'></textarea></td></tr>
						</table>
						<p><div align='center'><input type='submit' name='submit' id='submit' value='Feedback'></div></p>
						</p>
						<?php 
							if (isset($_REQUEST['submit']))
								{
								$name=$_REQUEST['name'];
								$cno=$_REQUEST['contact'];
								$eid=$_REQUEST['email'];
								$cmnt=$_REQUEST['comment'];
								$query="insert into feeds values ('$name',$cno,'$eid','$cmnt')";
								$n=my_iud($query);
								if($n=='1')
								{
								?>
									<script language='javascript'>
								alert ("Thank You for your Feedback, we will soon have a look upon it");
								</script>
								<?php 
								}
								else 
								{ ?>
								<script language='javascript'>
								alert ("Oops!! It seems that you have given your feed back before, you can give your feedback after 72HRS");
								</script>
								<?php
								}
								}
						?>								
<?php include "bottom.php"; ?>
</body>
</html>
