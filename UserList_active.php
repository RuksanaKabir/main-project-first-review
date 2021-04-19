
<?php
	include("header.php"); 
	session_start();
	 if($_SESSION['status']!="Active")
	{
		header("location:logout.php");
	}
	
	include 'dbconn.php';
	if($_SERVER["REQUEST_METHOD"] == "POST")	
		{
			$value=$_POST['value'];
			$sql="select * from user where (name='$value' or email='$value' or phone='$value') and status=1"; //echo $sql;
			$result=mysql_query($sql);
			$row=mysql_fetch_array($result);
			$m = mysql_num_rows($result);
			// if cname or sname
			if($m < 1) { $msg ="No results found..!";}
			
		}
	else
		{
			$sql="select * from user where status=1"; //echo $sql;
			$result=mysql_query($sql);
			$row=mysql_fetch_array($result);
			$m = mysql_num_rows($result);
			if($m < 1) { $msg ="No results found..!";}
		}
	
?>
<style type="text/css">

</style>
<body>
<center>
  <h1>User List </h1>
	  <form  name="form1" method="post" >
		  <table width="335" height="78">
			<tr>
			  
			  <td width="289" height="72"><label>
				  
				<input type="text" name="value" value="<?php if(isset($value)) echo $value; ?>" placeholder="Enter text here.." /><input name="" type="submit" value="Search">
			  <a href="UserList_active.php">Clear search</a></label></td>
			 
			</tr>
		</table>
  </form>
<?php if(!isset($msg)) { ?>

	<table class="customers">
  <tr>
		<th width="61"><strong><em>#</em></strong></th>
		<th width="153"><strong>Name</strong></th>
		<th width="146"><strong>Phone Number </strong></th>
		<th width="163"><strong><em> Email </em></strong></th>
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
    <td><?php echo $sl; ?>&nbsp;</td>
	<td><?php echo $r["name"]; ?>&nbsp;</td>
	<td><?php echo $r["email"]; ?>&nbsp;</td>
	<td><?php echo $r["phone"];  ?>&nbsp;</td>
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
