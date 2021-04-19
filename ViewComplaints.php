
<?php
	include("header.php"); 
	session_start();
	 if($_SESSION['status']!="Active")
	{
		header("location:logout.php");
	}
	
	include 'dbconn.php';
	
			$sql="select * from complaints"; //echo $sql;
			$result=mysql_query($sql);
			$row=mysql_fetch_array($result);
			$m = mysql_num_rows($result);
			if($m < 1) { $msg ="No results found..!";}
		
?>

</style>
<body>
<center>
  <h1>Registered Complaints </h1>
	
  <?php if(!isset($msg)) { ?>
<br>
<br>
	<table class="customers">
  <tr>
		<th width="61"><strong><em>#</em></strong></th>
		<th width="153"><strong>Name</strong></th>
		<th width="146"><strong>Compliant</strong></th>
		<th width="163"><strong><em> Type of User </em></strong></th>
  </tr>
  <?php
//   include 'dbconn.php';
//   $sql= "select * from customer"; echo $sql;
  $res = mysql_query($sql);
  $sl=0;
  while($r=mysql_fetch_array($res))
  { $sl+=1;
  ?>
  <tr>
    <td><?php echo $sl; ?>&nbsp;</td>
	<td><?php $type = $r["type"];
	$userid = $r["userid"]; 
	if($type == "User"){
	$ss="select * from user where id= $userid"; //echo $sql;
			$re=mysql_query($ss);
			$rw=mysql_fetch_array($re);
			echo $rw["name"];
	}
	if($type == "Owner"){
	$ss="select * from houseowner where id= $userid"; //echo $sql;
			$re=mysql_query($ss);
			$rw=mysql_fetch_array($re);
			echo $rw["name"];
	}
	 ?>&nbsp;</td>
	<td><?php echo $r["complaint"]; ?>&nbsp;</td>
	<td><?php echo $r["type"];  ?>&nbsp;</td>
  </tr>
  <?php } ?>
</table>
<?php } ?>
<?php if(isset($msg)) { ?>
<h3 style="color:#999999;"><?php echo $msg; ?></h3>
<?php } ?>
	<?php //include("footer.php"); ?>



















</center>
</body>
</html>
