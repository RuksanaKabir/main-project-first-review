
<?php
	include("header.php"); 
	session_start();
	 if($_SESSION['status']!="Active")
	{
		header("location:logout.php");
	}
	
	include 'dbconn.php';

			$sql="select * from houseowner where status=0"; //echo $sql;
			$result=mysql_query($sql);
			$row=mysql_fetch_array($result);
			$m = mysql_num_rows($result);
			if($m < 1) { $msg ="No results found..!";}
		
?>
<style type="text/css">
</style>
<body>
<!-- 
<div class="donate">
	<div class="container">
		<div class="donate-main">
			<div class="col-md-8 donate-right">
				<div class="donate-top">
					<br>
					<br> -->
<center>
  <h1>Houseowner List -Request for Login </h1>
  <br>
  <br>
  <br>
	  <form  name="form1" method="post" >
	 
  </form>
<?php if(!isset($msg)) { ?>

<br>
<br>
<br>
<table class="customers">
  <tr>
		<th width="61"><strong><em>House Owner</em></strong></th>
		<th width="153"><strong>Name</strong></th>
		<th width="146"><strong>Phone Number </strong></th>
		<th width="163"><strong><em> Email </em></strong></th>
		<th width="137">Action  </th>
  </tr>
  <?php
  include 'dbconn.php';
  //$sql= "select * from customer"; echo $sql;
  $res = mysql_query($sql);
  $sl=0;
  while($r=mysql_fetch_array($res))
  { $sl+=1;
  ?>
  <tr>
    <td>
 <?php  echo $r["id"]; ?>
      </label></td>
	<td><?php echo $r["name"]; ?>&nbsp;</td>
	<td><?php echo $r["email"]; ?>&nbsp;</td>
	<td><?php echo $r["phone"];  ?>&nbsp;</td>
	<td><a href="approveHouseOwner.php?id=<?php echo $r["id"]; ?>"> Approve </a></td>
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
