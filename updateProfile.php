<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

</head>
<?php
session_start();
  if($_SESSION['status']!="Active")
{
    header("location:../login.php");
}

include("header.php"); 
include 'dbconn.php';
$id =$_SESSION["id"];

		
if($_SERVER["REQUEST_METHOD"] == "POST")	
{
	
	$name=$_POST['name'];
	$address=$_POST['address'];
	if(!preg_match("/^[a-zA-Z ]*$/",$name))
		{
			$nameErr="Name contain lettters and white space";
			$status="true";
		}
	$email=$_POST['email'];
	
		$sql="select * from login where un1='$email'";
			$result=mysql_query($sql);
			$record=mysql_num_rows($result);
			if($record > 1)
			{
				$emailErr="Already Registered EmailId..!";
				$status="true";
			}
	$phone=$_POST['phone'];
	if(!preg_match("/^[0-9]{10}$/",$phone))
		{
			$phnErr="Phone Number contain 10 digits";
			$status="true";
		}
		$sql="select * from login where un2='$phone'";
			$result=mysql_query($sql);
			$record=mysql_num_rows($result);
			if($record > 1)
			{
				$phnErr ="Already Registered Mobile Number..!";
				$status="true";
			}
	$job=$_POST['job'];
	$place=$_POST['place'];
	$pincode=$_POST['pincode'];
		if(!preg_match("/^[0-9]{6}$/",$pincode))
		{
			$pinErr ="Enter 6 digit  Pin";
			$status="true";
		}
	
	if(!isset($status))
	{
		$sql="update user set name='$name',address='$address',email='$email',phone='$phone',job='$job',place='$place',pincode='$pincode' where id=$id";
		//echo $sql;
		mysql_query($sql) or die();
		
		$sql="update login set un1='$email',un2='$phone' where loginid=$id and type='User'";
		//echo $sql;
		mysql_query($sql) or die();
		
		$msg = "Successfully updated your details";
	}
	else 
		$err = "Something went wrong.. Plz Try again.....";
	
}
$sql="select * from user where id=$id";// echo $sql;
		$result=mysql_query($sql);
		$row=mysql_fetch_array($result);

	?>
<body>

<center>
  <div class="services-heading">
				<h2>Update Profile</h2>
  </div>

<?php
 if(isset($msg)) { ?>
 <div style="background-color:#66CC99; color:#FFFFFF; font-size:16px;  padding:20px; margin:0px 200px;"><?php echo $msg; ?></div>
 <?php } ?>
 
 <?php
 if(isset($err)) { ?>
 <div style="background-color:#FF3333; color:#FFFFFF; font-size:16px;  padding:20px; margin:0px 200px;"><?php echo $err; ?></div>
   <?php } ?>


   <div class="donate">
	<div class="container">
		<div class="donate-main">
			<div class="col-md-8 donate-right">
				<div class="donate-top">
					<br>
					<br>




<form  name="form1" method="post" >
 
<div>
							<span>Name<label>:</label></span>
              <input type="text" name="name" value="<?php echo $row["name"]; ?>"  required />
        <span style="color:#FF0000;">
        <?php if(isset($nameErr)) echo $nameErr; ?>
        </span>
							 </div>
							 <div class="clearfix"> </div>


       
							 <div>
							<span>Address<label>:</label></span>
              <textarea name="address" cols="" rows=""><?php echo $row["address"]; ?></textarea>
							 </div>
							 <div class="clearfix"> </div>


               <div>
               <input type="email" name="email" value="<?php echo $row["email"]; ?>" required />
      <span style="color:#FF0000;">
      <?php if(isset($emailErr)) echo $emailErr; ?>
							 </div>						 
							 <div class="clearfix"> </div>


   
							 <div>
							<span>Phone No<label>:</label></span>
						  <input type="text" name="phone" value="<?php echo $row["phone"]; ?>" required />
      <span style="color:#FF0000;">
      <?php if(isset($phnErr)) echo $phnErr; ?>
        </span>
							 </div>
							 <div class="clearfix"> </div>

   
							 <div>
							<span>Job<label>:</label></span>
              <input type="text" name="job" value="<?php echo $row["job"]; ?>" required />
      <span style="color:#FF0000;">
							 </div>							 
							 <div class="clearfix"> </div>



               <div>
							<span>Place<label>:</label></span>
						<input type="text" name="place" value="<?php echo $row["place"]; ?>" required />
      <span style="color:#FF0000;">
        </span>
							 </div>							 
							 <div class="clearfix"> </div>



							 <div>
							<span>Pin Code<label>:</label></span>
              <input type="text" name="pincode" value="<?php echo $row["pincode"]; ?>" required />
      <span style="color:#FF0000;">
      <?php if(isset($pinErr)) echo $pinErr; ?>
        </span>
							 </div>							 
							 <div class="clearfix"> </div>


               

               <div class="clearfix"> </div>
						<input type="submit" value="Submit">
					
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-4 donate-door-boy">
					<img src="images/door-img.png" />
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>

<?php
include("footer.php"); 
?>

