<?php
include 'connect.php';
$deleteid=$_GET['id'];
$del=mysql_query("DELETE FROM comment WHERE id=$deleteid ");
header("location: succes_logat.php");
?>