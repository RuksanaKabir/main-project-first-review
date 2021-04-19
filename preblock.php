<html>
<head>
<?php
include("header.php");
?>
</head>
<body>

<table class="customers">
<table class="customers">
<br>
<br>
  <tr>
		
		<th width="153"><strong>Name</strong></th>
		<th width="146"><strong>Email</strong></th>
		<th width="163"><strong><em> Phone No </em></strong></th>
		<th width="137">Address  </th>
        <th>Block Now</th>
  </tr>
<?php


include 'dbconn.php';
$id = $_REQUEST["email"];
$type= $_REQUEST["type"];

if ($type==='Owner')
{
    $sql= "select * from houseowner where email='$id'";//echo $sql;
	$res = mysql_query($sql);
    // $r=mysql_fetch_array($res);
    #echo $r;
    while($r=mysql_fetch_array($res))
    
    {
    ?>
    <tr><td><?php echo $r["name"] ;?></td><td><?php echo $r["email"] ;?></td><td><?php echo $r["phone"] ;?></td><td><?php echo $r["address"] ;?></td><td><a href="block.php?email=<?php echo $r["email"] ;?> & type=<?php echo $type;?>">Block</a></td></tr>


    <?php
    }} 
else
{
    $sql= "select * from user where email='$id'";//echo $sql;
#echo $sql;
#$type='User'
	$res = mysql_query($sql);
    // $r=mysql_fetch_array($res);
    // echo $r["name"];
    while($r=mysql_fetch_assoc($res))
    {
       
?>

<tr><td><?php echo $r["name"] ;?></td><td><?php echo $r["email"] ;?></td><td><?php echo $r["phone"] ;?></td><td><?php echo $r["address"] ;?></td><td><a href="block.php?email=<?php echo $r["email"];?>& type=<?php echo $type ?>">Block</a></td></tr>


        <?php
    }}

	// header("location:duplicate.php");
?>


</table>
</body>
</html>