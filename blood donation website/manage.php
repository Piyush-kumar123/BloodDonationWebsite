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
header("Location:login_error.php");
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include "head.php"; ?>
</head>
<body>
<?php include "top.php"; ?>
<script language='javascript'>
function validateform()
{
var x=document.forms['form1']['fname'].value;
if(x==null || x=="")
{
alert("Please fill the First name");
return false;
}

var x=document.forms['form1']['lname'].value;
if(x==null || x=="")
{
alert("Please fill the Last name");
return false;
}

var x=document.forms['form1']['cname'].value;
if(x==null || x=="")
{
alert("Please fill the City name");
return false;
}

var x=document.forms['form1']['email'].value;
if(x==null || x=="")
{
alert("Please fill the E-mail address");
return false;
}

var x=document.forms['form1']['cno'].value;
if(x==null || x=="")
{
alert("Please fill the Contact Number");
return false;
}

}
</script>

						<h2 class="title"><a href="#">Manage Users </a></h2>
						<p class="meta">doner can manage user data here</p>
						<div class="entry">
							<p>
						
							<form name='form1' id='form1' method='post' onsubmit='return validateform()'>
<table name='abc' border='0' cellspacing='0' cellpading='2'  width='360'>
<tr>
<td width='180'>First Name</td>
<td><input type='text' name='fname' id='fname'></td>
</tr>

<tr>
<td width='180'>Last Name</td>
<td><input type='text' name='lname' id='lname'></td>
</tr>

<tr>
<td width='180'>Blood Group</td>
<td><select name='bg' id='bg'>
<option>A+</option>
<option>A-</option>
<option>AB+</option>
<option>AB-</option>
<option>B+</option>
<option>B-</option>
<option>O+</option>
<option>O-</option></td>
</tr>

<tr>
<td width='180'>Select State</td>
<td><select name='sname' id='sname' >
<option>Andhra Pradesh</option>
<option>Arunachal Pradesh</option>
<option>Assam</option>
<option>Bihar</option>
<option>Chhattisgarh</option>
<option>Goa</option>
<option>Gujarat</option>
<option>Haryana</option>
<option>Himachal Pradesh</option>
<option>Jammu and Kashmir</option>
<option>Jharkhand</option>
<option>Karnataka</option>
<option>Kerala</option>
<option>Madhya Pradesh</option>
<option>Maharashtra</option>
<option>Manipur</option>
<option>Meghalaya</option>
<option>Mizoram</option>
<option>Nagaland</option>
<option>Orissa</option>
<option>Punjab</option>
<option>Rajasthan</option>
<option>Sikkim</option>
<option>Tamil Nadu</option>
<option>Tripura</option>
<option>Uttar Pradesh</option>
<option>Uttarakhand</option>
<option>West Bengal</option>
<option>Andaman and Nicobar Islands</option>
<option>Chandigarh</option>
<option>Dadar and Nagar Haveli</option>
<option>Daman and Diu</option>
<option>Delhi</option>
<option>Lakshadweep</option>
<option>Pondicherry</option>
</select></tr>

<tr>
<td width='180'>City / District</td>
<td><input type='text' name='cname' id='cname'></td>
</tr>

<tr>
<td width='180'>Gender</td>
<td><input type='radio' name='gender' id='gender' value='male' checked>Male
<input type='radio' name='gender' id='gender' value='female'>Female</td>
</tr>


<tr>
<td width='180'>Email Id</td>
<td><input type='email' name='email' id='email'></td>
</tr>

<tr>
<td width='180'>Contact Number</td>
<td><input type='text' name='cno' id='cno' maxlength='10'></td>
</tr>

<tr>
<td colspan='2' align='center'>
<input type='submit' name='modify' id='modify' value='modify'  />

</td>
</tr>
</table>
</form>
<?php
if(isset($_REQUEST['modify']))
{
$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$bg=$_REQUEST['bg'];
$sname=$_REQUEST['sname'];
$cname=$_REQUEST['cname'];
$gender=$_REQUEST['gender'];
$email=$_REQUEST['email'];
$cno=$_REQUEST['cno'];
$un=fetchusername();
$query="update siteuser set firstname='$fname',lastname='$lname',bg='$bg',sname='$sname',cname='$cname', gender='$gender',email='$email',contact='$cno' where username='$un'"; 
$n=my_iud($query);
if($n=='1' || $n=='0')
								{
								?>
									<script language='javascript'>
								alert ("Thank You, Your Data Has Been Updated");
								</script>
								<?php 
								}
								else 
								{ ?>
								<script language='javascript'>
								alert ("Oops!! It seems that somethiing went wrong. Please try filling form again");
								</script>
								<?php
								}

}




?>							</p>
<?php include "bottom.php"; ?>
</body>
</html>
