<?php
include_once "dbconfig.php";
$query="Select distinct sname from siteuser";

$rs=my_select($query);
echo "<select name='state' id='state' onchange='state_a()'>";
echo "<option value=''>Select State</option>";
while($row=mysql_fetch_array($rs))
{
echo "<option value='$row[0]'>$row[0]</option>";
}

echo "</select>";
?>