<?php


	include 'dbconn.php';
	$id = $_REQUEST["id"];
	$sql= "update user set status=1  where id=$id";//echo $sql;
	$res = mysql_query($sql);
	header("location:UserList.php");
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