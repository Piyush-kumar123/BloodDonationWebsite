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
$login_msg.="<br />Existing user <a href='signin.php'>Sign In</a>";

}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<?php include "head.php"; ?>
<script language='javascript'>
function validateForm()
{
var x=document.forms["register"]["uname"].value;
if (x==null || x=="")
  {
  alert("First Username must be filled out");
  return false;
  }
  
  var x=document.forms["register"]["pwd"].value;
if (x==null || x=="" || x<'6')
  {
  alert("Password must be atleast six characters");
  return false;
  }
  
var y=document.forms["register"]["cpwd"].value;
if (x!=y)
  {
  alert("Please confirm your password");
  return false;
  }
  
  var x=document.forms["register"]["fname"].value;
if (x==null || x=="")
  {
  alert("First Name must be filled out");
  return false;
  }
  
  var x=document.forms["register"]["lname"].value;
if (x==null || x=="")
  {
  alert("Last Name must be filled out");
  return false;
  }
  
  var x=document.forms["register"]["cname"].value;
if (x==null || x=="")
  {
  alert("City name must be filled out");
  return false;
  }
  
  var x=document.forms["register"]["email"].value;
if (x==null || x=="")
  {
  alert("Email address must be filled out");
  return false;
  }
  
   var x=document.forms["register"]["cno"].value;
if (x==null || x=="")
  {
  alert("Contact Number must be filled out");
  return false;
  }
  
  var x=document.forms["register"]["hinta"].value;
if (x==null || x=="")
  {
  alert("Answer must be filled out");
  return false;
  }
  
 
}
</script>

</head>
<body>
<?php include "top.php"; ?>


						<h2 class="title"><a href="#">Sign Up </a></h2>
						<p class="meta">Doners Can </p>
						<div class="entry">
							<p>
						
<form  name='register' id='register' onsubmit="return validateForm()"  method='post' >
<table name='abc' border='0' cellspacing='20' cellpading='2'  width='100%'>
<tr>
<td width='180'>Username</td>
<td><input type='text' name='uname' id='uname'></td>
</tr>
<tr>
<td width='180'>Password</td>
<td><input type='password' name='pwd' id='pwd'></td>
</tr>

<tr>
<td width='180'>Confirm Password</td>
<td><input type='password' name='cpwd' id='cpwd'></td>
</tr>

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
<option>O-</option>
</select></tr>

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
<td width='180'>Hint Question</td>
<td><select name='hintq' id='hintq'>
<option >What is your First mobile number?</option>
<option>What is your Pet Name?</option>
<option>What is your mother's maiden name?</option>
<option>What is the name of your first teacher?</option>
<option>Where was your first home?</option></select></td>
</tr>

<tr>
<td width='180'>Answer</td>
<td><input type='text' name='hinta' id='hinta'></td>
</tr>

</table>
<div align='justify' style="color:#0A6400"><input type='checkbox' name='check' id='check' ><b>I authorise the website to display my telephone number, e-mail ID and mailing address so that the needy could contact me, as and when there is an emergency..</b></td></div></br>
<p><input type='submit' name='submit' id='submit' value='Sign Up'  onclick="if(!this.form.check.checked){alert('You must agree to the terms first.');return false}" /></p>
</form>
<?php
if(isset($_REQUEST['submit'])  )
{
include "siteuser.class.php";
$s=new siteuser(); //object of class siteuser
$a=$_REQUEST['uname'];
$b=$_REQUEST['pwd'];
$c=$_REQUEST['fname'];
$d=$_REQUEST['lname'];
$e=$_REQUEST['bg'];
$n=$_REQUEST['sname'];
$f=$_REQUEST['cname'];
$g=$_REQUEST['gender'];
$h=$_REQUEST['email'];
$i=$_REQUEST['cno'];
$j=$_REQUEST['hintq'];
$k=$_REQUEST['hinta'];
$l='doner';
$m='yes';
$s->set_all($a,$b,$c,$d,$e,$n,$f,$g,$h,$i,$j,$k,$l,$m);
$s->get_all();
$s->save();
}


?>							</p>
<?php include "bottom.php"; ?>
</body>
</html>
