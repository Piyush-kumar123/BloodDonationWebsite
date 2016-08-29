<html>
<head>
<?php include_once "dbconfig.php";?>
<script language='javascript' src='jquery-1.11.0.min.js'></script>
<script language='javascript'>
$(document).ready(function(){
//alert("yes");
	
		$.post("state.php",{},
		function(data){
		$("#state_sp").html(data);
		});
	
});


function state_a()
{
//alert("yes");
	$.post("city.php",{country:$("#country").val(),state:$("#state").val()},
		function(data){
		$("#city_sp").html(data);
		});
}
</script>
<script language='javascript'>
var x=document.forms['form1']['city'].value;
if (x!='1')
{
alert("Please select a city");
return false;
}
</script>
</head>
<body><form id='form1' name='form1' method='post' onsubmit="return validateform()">
Select Blood Group
<select name='bg' id='bg'>
<option>A+</option>
<option>A-</option>
<option>AB+</option>
<option>AB-</option>
<option>B+</option>
<option>B-</option>
<option>O+</option>
<option>O-</option>
</select></br>
Select State
<span id='state_sp' name='state_sp'></span>
<br />
Select City
<span id='city_sp' name='city_sp'></span></br>
<input type='submit' name='find' id='find' value='Find' />
</form>

<?php
if(isset($_REQUEST['find']))
{
$bg=$_REQUEST['bg'];
$state=$_REQUEST['state'];
$city=$_REQUEST['city'];
echo "</br>$state , $city</br>";
$query="select * from siteuser where bg='$bg' && sname='$state' && cname='$city'";
//echo "<br />$n<br />";
$rs=my_select($query);



while($row=mysql_fetch_array($rs))
{
echo "<Br />First Name    :<font color='red' style='forte'> $row[2]</font>";
echo "<Br />Last Name    :<font color='red' style='forte'> $row[3]</font>";
echo "<Br />E-mail Address  : $row[8]";
echo "<Br />Contact Number  : $row[9]";
echo "<br /><br />";
}
}


?>			


</body>
</html>