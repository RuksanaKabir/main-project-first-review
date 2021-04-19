
<?php
session_start();
 if($_SESSION['status']!="Active")
{
    header("location:../login.php");
}
 
include("header.php"); 
include 'dbconn.php';
$id =$_SESSION["id"];
	
	
	$sql="select * from homes where hoid=$id "; //echo $sql;
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	$m = mysql_num_rows($result);
	if($m < 1) { $msg ="No results found..!";}
		
	
?>

<body>
<center>
<h1>Home List </h1>
<table width="650" height="245" >
<?php if(!isset($msg)) { 
$res = mysql_query($sql);
$sl=0;
while($r=mysql_fetch_array($res))
{ $sl+=1;
?>
  
  <tr>
    <td width="193" rowspan="7"><input name="Input" src="../upload/<?php echo $r['pic1']; ?>" type="image" height="200" width="300"></td>
    <td width="215" height="25"><?php  $status =$r["status"];  if($status == 1) echo "Verified Property"; ?>&nbsp;</td>
    <td width="226">&nbsp;</td>
  </tr>
  <tr>
    <td height="25">Rent : <?php echo $r["rent"]; ?>/-&nbsp;</td>
    <td>&nbsp; </td>
  </tr>
  
  <tr>
    <td height="28"><?php echo $r["bnos"]; ?> BHK House&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="52">Address: <?php echo $r["address"]; ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="34">Posted On : <?php echo $r["posted"]; ?>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="42"><a href="viewDetails.php?id=<?php echo $r["hid"]; ?>">View Details</a>  / <a href="RemoveHome.php?id=<?php echo $r["hid"]; ?>">Remove</a>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="21">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
<?php }  
} 
?>
</table>



    
<?php if(isset($msg)) { ?>

<h3 style="color:#999999;"><?php echo $msg; ?></h3>
<?php } ?>
	<?php //include("footer.php"); ?>

</center>
</body>
</html>
