
<?php
session_start();
 if($_SESSION['status']!="Active")
{
    header("location:../login.php");
}
 
include("header.php"); 
include 'dbconn.php';
$id =$_REQUEST["id"];
	
	
	$sql="select * from homes where hid=$id "; //echo $sql;
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	$m = mysql_num_rows($result);
	if($m < 1) { $msg ="No results found..!";}
		
	
?>

<body>
<center>
<h1>Home Details </h1>
<table width="593" height="544" >
<?php if(!isset($msg)) { 
$res = mysql_query($sql);
$sl=0;
while($r=mysql_fetch_array($res))
{ $sl+=1;
?>
  
  <tr>
    <td width="300" rowspan="6"><input name="Input" src="../upload/<?php echo $r['pic1']; ?>" type="image" height="200" width="300"></td>
    <td width="281" height="25"><?php  $status =$r["status"];  if($status == 1) echo "Verified Property"; ?>&nbsp;</td>
    </tr>
  <tr>
    <td height="25">Rent : <?php echo $r["rent"]; ?>/-&nbsp;</td>
    </tr>
  
  <tr>
    <td height="28"><?php echo $r["bnos"]; ?> BHK House&nbsp;</td>
    </tr>
  <tr>
    <td height="52">Address: <?php echo $r["address"]; ?></td>
    </tr>
  <tr>
    <td height="34">Posted On : <?php echo $r["posted"]; ?>&nbsp;</td>
    </tr>
  <tr>
    <td height="42">Avalable From <?php echo $r["adate"]; ?></td>
    </tr>
  
  
  <tr>
    <td><strong>Addition Information </strong></td>
    <td height="21">&nbsp;</td>
  </tr>
  <tr>
    <td>Rent : <?php echo $r["rent"]; ?>/-&nbsp;</td>
    <td height="21">Loaction : <?php echo $r["location"]; ?></td>
  </tr>
  <tr>
    <td>Configuration : <?php echo $r["bnos"]; ?> Bed Room <?php echo $r["bath"]; ?> Baths </td>
    <td height="21">Furnishing : <?php echo $r["furnish"]; ?></td>
  </tr>
  <tr>
    <td>Available For : <?php echo $r["afor"]; ?></td>
    <td height="21">Car Parking : <?php echo $r["park"]; ?></td>
  </tr>
  <tr>
    <td>Build Up Area : <?php echo $r["barea"]; ?> sq.ft </td>
    <td height="21">Carpet Area: <?php echo $r["carea"]; ?> sq. ft </td>
  </tr>
  <tr>
    <td>Total Area:  <?php echo $r["tarea"]; ?> sq ft </td>
    <td height="21">Type Of Floor : <?php echo $r["typeoffloor"]; ?></td>
  </tr>
  <tr>
    <td> Age Of Property :  <?php echo $r["age"]; ?></td>
    <td height="21">Corner Property: <?php echo $r["corner"]; ?></td>
  </tr>
  <tr>
    <td>Deposit :  <?php echo $r["deposit"]; ?> /- </td>
    <td height="21">Gated : <?php echo $r["gated"]; ?></td>
  </tr>
  <tr>
    <td>Facing :  <?php echo $r["facing"]; ?> </td>
    <td height="21">Landmark : <?php echo $r["landmark"]; ?></td>
  </tr>
  <tr>
    <td>About : <?php if($r["about"] != " ") echo $r["about"]; else echo "-"; ?> </td>
    <td height="21">Water facility :  <?php echo $r["water"]; ?></td>
  </tr>
  <tr>
    <td>Electricity Facility: <?php echo $r["electricity"]; ?></td>
    <td height="21">Additional Specification : <?php if($r["additionaspec"] != " ") echo $r["additionaspec"]; else echo "-";  ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="21">&nbsp;</td>
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
