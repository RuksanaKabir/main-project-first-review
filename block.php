<?php
include 'dbconn.php';
$type= $_REQUEST["type"];
$email = $_REQUEST["email"];
if ($type==='Owner')
{

	
	$sql= "delete from houseowner where email='$email'";//echo $sql;
	$res = mysql_query($sql);
	$sql= "delete from report where repotedemail='$email'";//echo $sql;
	$res = mysql_query($sql);
	$sql= "delete from login where un1='$email'";//echo $sql;
	$res = mysql_query($sql);
	header("location:home.php");
    
	
}
else{
	
	$sql= "delete from user where email='$email'";//echo $sql;
	$res = mysql_query($sql);
	$sql= "delete from report where repotedemail='$email'";//echo $sql;
	$res = mysql_query($sql);
	$sql= "delete from login where un1='$email'";//echo $sql;
	$res = mysql_query($sql);
	header("location:home.php");
    
}	




   # echo $res;
	//header("location:adminhome.php");
?>
<?php /*
<body>

<center>

<?php
 if(isset($msg)) { ?>
 <div style="background-color:#66CC99; color:#FFFFFF; font-size:16px; padding:10px;"><?php echo $msg; ?></div>
 <?php } ?>
 
 <?php
 if(isset($err)) { ?>
 <div style="background-color:#FF3333; color:#FFFFFF; font-size:16px; padding:10px;"><?php echo $err; ?></div>
 <p>
   <?php } ?>
 </p>
 </center>
 </body>
 */
 ?>