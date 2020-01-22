<?php 
$server = "localhost";
$user = "root";
$pw = "";
$db = "frank";

$dbcon = new mysqli($server,$user,$pw,$db);

//check the connection if connected

if ($dbcon->connect_error)
{
	die("Connection Failed".$dbcon->connect_error);
}

 ?>