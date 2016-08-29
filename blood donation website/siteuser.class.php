<?php
include_once "dbconfig.php";
class siteuser
{
private $username;	//username 4-30
private $pwd;		//minimum 6
private $firstname;	//1-20
private $lastname;	//1-20
private $bg;
private $sname;	//state name
private $cname;		//city name
private $gender;	//male or female
private $email;			
private $contact;	
private $hintq;	
private $hinta;	
private $role;		//student,faculty,admin
private $active;	//yes,no

public function set_username($a)
{
if(strlen(trim($a))>4 && strlen(trim($a))<=30)
	$this->username=strtolower(trim($a));
else
	$this->username="";
}

public function set_password($b)
{
 if (strlen(trim($b))>=6)
      $this->pwd=$b;
else $this->pwd="";
}
public function set_firstname($c)
{
if(strlen(trim($c))>1 && strlen(trim($c))<=20)
	$this->firstname=ucfirst($c);
else
	$this->firstname="";
} 
public function set_lastname($d)
{
if(strlen(trim($d))>1 && strlen(trim($d))<=20)
	$this->lastname=ucfirst($d);
else
	$this->lastname="";
} 

public function set_bg($e)
{
if(strlen(trim($e))>1 && strlen(trim($e))<=20)
	$this->bg=$e;
else
	$this->bg="";
} 

public function set_sname($n)
{
if(strlen(trim($n))>2 && strlen(trim($n))<=30)
	$this->sname=$n;
else
	$this->sname="";
	

}

public function set_cname($f)
{
if(strlen(trim($f))>2 && strlen(trim($f))<=30)
	$this->cname=ucfirst($f);
else
	$this->cname="";
}

public function set_gender($g)
{
$f=strtolower(trim($g));
if($f=='male'||$f=='female')
$this->gender=$f;
else
$this->gender="";
}

public function set_email($h)
{
$this->email=strtolower(trim($h));
}

public function set_contact($i)
{
if(is_numeric($i))
$this->contact=$i;
else
$this->contact="";

}


public function set_hintq($j)
{
$this->hintq=strtolower(trim($j));
}

public function set_hinta($k)
{
$this->hinta=strtolower(trim($k));
}


public function set_role($l)
{
$k=strtolower(trim($l));
if($k=='doner')
$this->role=$k;
else
$this->role="";
}

public function set_active($m)
{
$l=strtolower(trim($m));
if($l=='yes' || $m=='no')
$this->active=$l;
else
$this->active="";
}

public function get_username()
{
echo "<Br />username is $this->username";
}

public function get_password()
{
echo "<Br />Password is $this->pwd";
}

public function get_firstname()
{
echo "<Br />First Name is $this->firstname";
}

public function get_lastname()
{
echo "<Br />Last name is $this->lastname";
}

public function get_bg()
{
echo "<Br />Blood Group $this->bg";
}

public function get_gender()
{
echo "<Br />Gender is $this->gender";
}

public function get_sname()
{
echo "<Br />State is $this->sname";
}

public function get_cname()
{
echo "<Br />City is $this->cname";
}


public function get_email()
{
echo "<Br />Email is $this->email";
}

public function get_contact()
{
echo "<Br />Contact is $this->contact";
}

public function get_hintq()
{
echo "<Br />Hint question is $this->hintq";
}

public function get_hinta()
{
echo "<Br />Hint Answer is $this->hinta";
}

public function get_role()
{
echo "<Br />Role is $this->role";
}


public function get_active()
{
echo "<Br />Active is $this->active";
}

public  function set_all($a,$b,$c,$d,$e,$n,$f,$g,$h,$i,$j,$k,$l,$m)
{
$this->set_username($a);
$this->set_password($b);
$this->set_firstname($c);
$this->set_lastname($d);
$this->set_bg($e);
$this->set_sname($n);
$this->set_cname($f);
$this->set_gender($g);
$this->set_email($h);
$this->set_contact($i);
$this->set_hintq($j);
$this->set_hinta($k);
$this->set_role($l);
$this->set_active($m);
}


public  function get_all()
{
$this->get_username();
$this->get_password();
$this->get_firstname();
$this->get_lastname();
$this->get_bg();
$this->get_sname();
$this->get_cname();
$this->get_gender();
$this->get_email();
$this->get_contact();
$this->get_hintq();
$this->get_hinta();
$this->get_role();
$this->get_active();
}

public function save()
{
$query="insert into siteuser values ('$this->username','$this->pwd','$this->firstname',
'$this->lastname','$this->bg','$this->sname','$this->cname','$this->gender',
'$this->email','$this->contact','$this->hintq',
'$this->hinta','$this->role','$this->active')";
$n=my_iud($query);
if($n==1)
{ ?>
<script language='javascript'>
alert('DATA SAVED 	THANK YOU FOR REGISTERATION.');
</script>
<?php
}
else
{ ?>
<script language='javascript'>
alert('DATA NOT SAVED 	USERNAME OR CONTACT NUMBER IS REGISTERED. Please enter a valid username or contact number');
</script>
<?php
}
}

public function modify()
{
$query="update siteuser set pwd='$this->pwd',firstname='$this->firstname',lastname='$this->lastname',,bg='$this->bg',same='$this->sname',came='$this->cname',gender='$this->gender',
email='$this->email',contact='$this->contact',hintq='$this->hintq',
hinta='$this->hinta',role='$this->role',active='$this->active' where username='$this->username'";
$n=my_iud($query);
echo "<Br />$n record  modified";
}


public function remove()
{
$query="delete from siteuser where username='$this->username'";
$n=my_iud($query);
echo "<Br />$n record  removed";
}

public function search()
{
$query="select * from siteuser ";
$rs=my_select($query);
$n=mysql_num_rows($rs);
echo "<Br />$n records found";
echo "<table border='1' align='center' cellspacing='0' cellpaddig='4' width='960'>";
echo "<tr>";
echo "<th width='80'>UserName</th>";
echo "<th width='80'>Pwd</th>";
echo "<th width='80'>First Name</th>";
echo "<th width='80'>Last name</th>";
echo "<th width='80'>dob</th>";
echo "<th width='80'>gender</th>";
echo "<th width='80'>email</th>";
echo "<th width='80'>contact</th>";
echo "<th width='80'>hint quest</th>";
echo "<th width='80'>hint ans</th>";
echo "<th width='80'>role</th>";
echo "<th width='80'>Active</th>";
echo "</tr>";
while($row=mysql_fetch_array($rs))
{
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
echo "<td>$row[4]</td>";
echo "<td>$row[5]</td>";
echo "<td>$row[6]</td>";
echo "<td>$row[7]</td>";
echo "<td>$row[8]</td>";
echo "<td>$row[9]</td>";
echo "<td>$row[10]</td>";
echo "<td>$row[11]</td>";
echo "</tr>";

}
echo "</table>";

}
}
?>