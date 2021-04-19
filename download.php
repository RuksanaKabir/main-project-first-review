<html>
<head>



</head>
<body>


<center>
  <div class="services-heading">
				<h2> Booking</h2>
  </div>

<div class="well">
<form  name="form1" method="post" >

  <table width="303" height="310">
  
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
      <th width="137" scope="row"><div align="left"><em>Home Id</em></div></th>
      <td width="32">:</td>
      <td width="118"><label>
        <?php  echo $r["homeid"]; ?>
      </label></td>
    </tr>
    <tr>
      <th scope="row"><div align="left"><em>Rent </em></div></th>
      <td>:</td>
      <td><label>
         <?php  echo $r["rent"]; ?>
      </label></td>
    </tr>
	
    <tr>
      <th scope="row"><div align="left"><em>Address </em></div></th>
      <td>:</td>
      <td><label>
      <?php  echo $r["ad"]; ?> 
        </label>      </td>
      </tr>
    <tr>
      <th scope="row"><div align="left"><em>House owner  </em></div></th>
      <td>:</td>
      <td><label>
       <?php  echo $r["hname"]; ?> 
      </label></td>
    </tr>
	<tr>
      <th scope="row"><div align="left"><em>House Owner Address</em></div></th>
      <td>:</td>
      <td><label>
       <?php  echo $r["haddress"]; ?> 
      </label></td>
    </tr>
	<tr>
      <th scope="row"><div align="left"><em>House Owner Contact No </em></div></th>
      <td>:</td>
      <td><label>
       <?php  echo $r["hphone"]; ?> 
      </label></td>
    </tr>
	<tr>
      <th scope="row"><div align="left"><em>User </em></div></th>
      <td>:</td>
      <td><label>
       <?php  echo $r["uname"]; ?> 
      </label></td>
    </tr>
	<tr>
      <th scope="row"><div align="left"><em>User Address</em></div></th>
      <td>:</td>
      <td><label>
       <?php  echo $r["uaddress"]; ?> 
      </label></td>
    </tr>
	
    <tr>
      <th scope="row"><div align="left"><em>User Phone NO </em></div></th>
      <td>:</td>
      <td><label>
      <?php  echo $r["uphone"]; ?>
      </label></td>
    </tr>
    <tr>
      <th scope="row"><div align="left"><em>Down Load NOW </em></div></th>
      <td><label><a href="#" onclick="printrr()">Download Now</td></label>
      <td><label>
    </tr>
    <?php } ?>
  </table>
</form>


<script>
function printrr()
{
  window.print();
  window.location.href="home.php";
}
</script>
</div>
<p>&nbsp;</p>
</center>
	

</body>
</html>
