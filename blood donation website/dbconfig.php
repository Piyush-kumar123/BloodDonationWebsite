<?php
//modular approach for db handling
$dbserver="127.0.0.1";
$dbuser="root";
$dbpwd="";
$dbname="blood";

function my_iud($query)
{
global $dbserver,$dbuser,$dbpwd,$dbname;
$cid=mysql_connect($dbserver,$dbuser,$dbpwd) or die('try again');
mysql_select_db($dbname,$cid);
mysql_query($query,$cid);
$n=mysql_affected_rows($cid);
mysql_close($cid);
return $n;
}


function my_select($query)
{
global $dbserver,$dbuser,$dbpwd,$dbname;
$cid=mysql_connect($dbserver,$dbuser,$dbpwd) or die('try again');
mysql_select_db($dbname,$cid);
$rs=mysql_query($query,$cid);
mysql_close($cid);
return $rs;
}

//select queries which return only a single value
function my_one($query)
{
global $dbserver,$dbuser,$dbpwd,$dbname;
$cid=mysql_connect($dbserver,$dbuser,$dbpwd) or die('try again');
mysql_select_db($dbname,$cid);
$rs=mysql_query($query,$cid);
$row=mysql_fetch_array($rs);
mysql_close($cid);
return $row[0];
}

function verifyuser()
{
$u="";
$p="";
if(isset($_COOKIE['cun']) && isset($_COOKIE['cpwd']))
{
$u=$_COOKIE['cun'];
$p=$_COOKIE['cpwd'];
}
else
if(isset($_SESSION['sun']) && isset($_SESSION['spwd']))
{
$u=$_SESSION['sun'];
$p=$_SESSION['spwd'];
}
$query="select count(*) from siteuser where username='$u' and pwd='$p' ";
$n=my_one($query);
	if($n==1)
	return true;
	else
	return false;
	}


function fetchusername()
{
$u="";
$p="";
if(isset($_COOKIE['cun']) && isset($_COOKIE['cpwd']))
{
$u=$_COOKIE['cun'];
$p=$_COOKIE['cpwd'];
}
else
if(isset($_SESSION['sun']) && isset($_SESSION['spwd']))
{
$u=$_SESSION['sun'];
$p=$_SESSION['spwd'];
}
$query="select count(*) from siteuser where username='$u' and pwd='$p' ";
$n=my_one($query);
	if($n==1)
	return $u;
	else
	return false;
	}

	
	function fetchrole()
{
$u="";
$p="";
if(isset($_COOKIE['cun']) && isset($_COOKIE['cpwd']))
{
$u=$_COOKIE['cun'];
$p=$_COOKIE['cpwd'];
}
else
if(isset($_SESSION['sun']) && isset($_SESSION['spwd']))
{
$u=$_SESSION['sun'];
$p=$_SESSION['spwd'];
}
$query="select count(*) from siteuser where username='$u' and pwd='$p' ";
$n=my_one($query);
	if($n==1)
	{
	$query="select role from siteuser where username='$u' and pwd='$p' ";
	$role=my_one($query);
	return $role;
	}
	else
	return false;
	}


?>