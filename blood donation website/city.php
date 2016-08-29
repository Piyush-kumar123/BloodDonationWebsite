
<?php
include_once "dbconfig.php";

$state=$_REQUEST['state'];
$query="Select distinct cname from siteuser where  sname='$state'";

$rs=my_select($query);
echo "<select name='city' id='city'>";
echo "<option value=''>Select city</option>";
while($row=mysql_fetch_array($rs))
{
echo "<option value='$row[0]'>$row[0]</option>";
}

echo "</select>";
?>