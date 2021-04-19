<?php


	include 'dbconn.php';
	$bid = $_REQUEST["bid"];
    $hoid = $_REQUEST["hid"];
	$sql= "update homes set bookingstatus=''  where hid=$hoid";//echo $sql;
	$res = mysql_query($sql);
    echo $sql;
    $sql= "delete from booking where bid=$bid";//echo $sql;
	$res = mysql_query($sql);
    echo $sql;
	header("location:home.php");
?>