<?php
error_reporting (E_ALL ^ E_NOTICE);
$db_username="root";
$db_password="xiimie";
$db_name="atestat";
$conn=@mysql_connect("localhost",$db_username,$db_password)
or die ("Conectare la serverul MySQL nereusita!!!!"."<br>");
@mysql_select_db($db_name,$conn) or die("Selectare baza de date esuata!!!");
session_start();
?>