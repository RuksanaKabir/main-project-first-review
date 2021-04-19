

<?php
include("header.php"); 
?>

	<html>
    <head>
    <style type="text/css"></style>
    </head>





<body>
<center>
  <h1>Booking List </h1>
<?php if(!isset($msg)) { ?>

<table width="863" height="107" class="customers">
  <tr>
		<th width="61"><strong><em>Home Id</em></strong></th>
		<th width="153"><strong>Rent</strong></th>
		<th width="146"><strong>Address </strong></th>
		<th width="163"><strong><em> House Owner </em></strong></th>
        <th width="163"><strong><em> Address </em></strong></th>
        <th width="163"><strong><em> Contact No </em></strong></th>
        <th width="163"><strong><em> Cancel Booking </em></strong></th>
	</tr>
 
 
<?php
session_start();
include 'dbconn.php';
$a=$_SESSION['loginemail'];
$sql="select booking.*,homes.address as ad,homes.rent,homes.hoid as homeid,houseowner.name as hname,houseowner.address as haddress,houseowner.phone as hphone,user.name as uname,user.address as uaddress,user.phone as uphone from booking join homes on booking.hid=homes.hid join houseowner on booking.hoid=houseowner.id join user on booking.uid=user.id where user.email='$a'";
//echo $sql;
$result=mysql_query($sql);

while($r=mysql_fetch_array($result))
{
?>
  <tr>
    <td> <?php  echo $r["homeid"]; ?></td>
	<td><?php  echo $r["rent"]; ?>&nbsp;</td>
	<td><?php  echo $r["ad"]; ?>&nbsp;</td>
	<td> <?php  echo $r["hname"]; ?> &nbsp;</td>
    <td> <?php  echo $r["haddress"]; ?> &nbsp;</td>
    <td><?php  echo $r["hphone"]; ?> </td>
    <?php  $sd=$r["bid"];?>
    <td><a href="delete.php?bid=<?php echo $r["bid"]; ?> & hid=<?php  echo $r["homeid"]; ?>" >delete</a> </td>
	
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
