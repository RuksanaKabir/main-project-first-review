<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
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
$sql="select * from user where id=$id"; //echo $sql;
		$result=mysql_query($sql);
		$r=mysql_fetch_array($result);

if($_SERVER["REQUEST_METHOD"] == "POST")	
{
	$msgg=$_POST['msgg'];
	
	if(!isset($status))
	{
	$sql="insert into chat(msg,senderid,sendertype,rid,rtype) values ('$msgg','$id','User',10000,'Admin')";
	//echo $sql;
		mysql_query($sql) or die();
		// clear
		$msg = "Message  Send Successfully";
		$msgg="";
	}
	else 
		$err = "Something went wrong.. Plz Try again.....";
}
	?>
<body>

<center>
<h1>Send Message </h1>
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
   <form  name="form1" method="post"  enctype="multipart/form-data" >



    <div>
							<span>Name<label>:</label></span>
              <input type="text" name="name" value="<?php  echo $r["name"]; ?>" readonly="" />
							 </div>
							 <div class="clearfix"> </div>



  <div>
							<span>Message<label>:</label></span>
							<textarea name="msgg" cols="25" rows="5" required><?php if(isset($msgg)) echo $msgg;  ?></textarea>
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
