<?php 
session_start();
	$y= date('Y-m-d');
$id =$_SESSION["id"];
include 'dbconn.php';

$sql="update user set last_log='$y' where id=$id";
		//echo $sql;
		mysql_query($sql) ;
session_destroy();
header("location:../login.php");
?>