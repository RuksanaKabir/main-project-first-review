
<?php
	include("header.php"); 
	session_start();
	$id =$_SESSION["id"];

	 if($_SESSION['status']!="Active")
	{
		header("location:logout.php");
	}
	
	include 'dbconn.php';
	
			$sql="select * from chat where (senderid='$id' and sendertype='Admin') or (rid='$id' and rtype='Admin')"; //echo $sql;
			$result=mysql_query($sql);
			$row=mysql_fetch_array($result);
			$m = mysql_num_rows($result);
			if($m < 1) { $msg ="No results found..!";}
		
?>
<style type="text/css">
<!--
.style1 {font-weight: bold}
-->
</style>
<body>
<center>
  <h1>Chat Box </h1>
	
  <?php if(!isset($msg)) { ?>

  
  <?php
  include 'dbconn.php';
  //$sql= "select * from customer"; echo $sql;
  $res = mysql_query($sql);
  while($r=mysql_fetch_array($res))
  { 
  ?>
  
<?php $type= $r["sendertype"];  if($type == "Admin") { ?>
<div style="background-color:#99CC99; padding:10px; width:400px;margin:10px; text-align:right;"><?php   echo $r["msg"]; ?> <b> : Me</b> To 

<?php  $rtype= $r["rtype"]; $rid= $r["rid"]; //echo $rtype;
if($rtype =="User")
{	
	$sss="select * from user where id=$rid";
		$ree=mysql_query($sss);
		$rrr=mysql_fetch_array($ree);
		echo $rrr["name"]; echo " (User)";
                
}
if($rtype =="Owner")
{	
	$sss="select * from houseowner where id=$rid"; //echo $sql;
		$ree=mysql_query($sss);
		$rrr=mysql_fetch_array($ree);
		echo $rrr["name"]; echo " (HouseOwner)";
}

  ?>
</div>

<?php  } else {  ?>
<div style="background-color:#FF9999; padding:10px; width:400px; margin:10px; text-align:left;"><b><?php  $rtype= $r["sendertype"]; $rid= $r["senderid"]; //echo $rtype;
if($rtype =="User")
{	
	$sss="select * from user where id=$rid";
		$ree=mysql_query($sss);
		$rrr=mysql_fetch_array($ree);
		echo $rrr["name"]; echo " (User)";
}
if($rtype =="Owner")
{	
	$sss="select * from houseowner where id=$rid"; //echo $sql;
		$ree=mysql_query($sss);
		$rrr=mysql_fetch_array($ree);
		echo $rrr["name"]; echo " (HouseOwner)";
}

  ?> : </b><?php  echo $r["msg"];   ?></div> <a href="sendmessage.php?id=<?php echo $rid; ?>&&rtype=<?php echo $rtype; ?>">Reply</a>
  
  <?php } } ?>
<?php } ?>
<?php if(isset($msg)) { ?>
<h3 style="color:#999999;"><?php echo $msg; ?></h3>
<?php } ?>
	<?php //include("footer.php"); ?>

</center>
</body>
</html>
