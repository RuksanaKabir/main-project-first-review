<?php
include("header.php"); 
?>

	<table class="customers">
    <br>
<br> <center>
 
<tr><th>reported person</th><th>report by</th><th>User Type</th><th>View More</th>
</tr>


<?php


	include 'dbconn.php';
	// $id = $_REQUEST["id"];
    
	$sql= "select * from report";//echo $sql;
    //echo $sql;
	$res = mysql_query($sql);
    $r=mysql_fetch_array($res);
    #echo $r;
    while($r=mysql_fetch_array($res))
    {
?>
<tr><td><?php echo $r["repotedemail"] ;?></td><td><?php echo $r["reporteremail"] ;?></td><td><?php echo $r["rtype"] ;?></td><td><a href="preblock.php?email=<?php echo $r["repotedemail"] ;?> & type=<?php echo $r["rtype"];?>">View $ Report</a></td></tr>


        <?php
    }
	//header("location:duplicate.php");
?>
<center>
</table>