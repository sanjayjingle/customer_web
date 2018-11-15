<?php
include("dbconfig.php");
$username='sanjayp';
$name='Huzoor Bux';
$sql=mysql_query($connect,"CALL insert('$username','$name')");
?>