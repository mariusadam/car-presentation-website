<?php
include 'connect.php';
$del=mysql_query("DELETE FROM comment 	WHERE id=id");
header("location: succes_logat.php");
?>