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

$deposit =0;
$about =$additionaspec =" ";
if($_SERVER["REQUEST_METHOD"] == "POST")	
{
	$place=$_POST['place'];
	$rent=$_POST['rent'];
	if(!preg_match("/^[0-9]*$/",$rent))
			{
			$rentErr="Enter Rent in Digits";
			$status="true";
			}
	$adate=$_POST['adate'];
	$bnos=$_POST['bnos'];
	if(!preg_match("/^[0-9]*$/",$bnos))
			{
			$bnosErr="Enter in Digits";
			$status="true";
			}
	$bath=$_POST['bath'];
	if(!preg_match("/^[0-9]*$/",$bath))
			{
			$bathErr="Enter  in Digits";
			$status="true";
			}
	$balco=$_POST['balco'];
	$furnish=$_POST['furnish'];
	$afor=$_POST['afor'];
	$park=$_POST['park'];
	$barea=$_POST['barea'];	
	$carea=$_POST['carea'];
	$tarea=$_POST['tarea'];
	$typeoffloor = $_POST['typeoffloor'];
	$age=$_POST['age'];
	$corner=$_POST['corner'];
	$deposit=$_POST['deposit'];
	if(isset($_POST['deposit']))
	{
	if(!preg_match("/^[0-9]*$/",$deposit))
			{
			$depositErr="Enter  in Digits";
			$status="true";
			}
	}
	$gated=$_POST['gated'];
	$facing=$_POST['facing'];
	$landmark=$_POST['landmark'];
	$about=$_POST['about'];
	$address=$_POST['address'];
	$water=$_POST['water'];
	$electricity=$_POST['electricity'];
	$additionaspec = $_POST["additionaspec"];
	$posted=date('Y-m-d');
			/*if($adate < $posted)
				{
					$adateErr="Select Date after ".$posted;
					$status="true";
				}*/
	
	$Path1=$_FILES["pic1"]["name"];
	move_uploaded_file($_FILES["pic1"]["tmp_name"],"../upload/"  .$_FILES["pic1"]["name"]);
	$Path2=$_FILES["pic2"]["name"];
	move_uploaded_file($_FILES["pic2"]["tmp_name"],"../upload/"  .$_FILES["pic2"]["name"]);	
	$Path3=$_FILES["pic3"]["name"];
	move_uploaded_file($_FILES["pic3"]["tmp_name"],"../upload/"  .$_FILES["pic3"]["name"]);	
	if(!isset($status))
	{
	$sql="insert into homes(hoid,location,rent,adate,bnos,bath,balco,furnish,afor,park,barea,carea,tarea,typeoffloor,age,corner,deposit,gated
	,facing,landmark,about,address,water,electricity,status,pic1,pic2,pic3,additionaspec,posted) values 
	('$id','$place','$rent','$adate','$bnos','$bath','$balco','$furnish','$afor','$park','$barea','$carea','$tarea','$typeoffloor'
	,'$age','$corner','$deposit','$gated','$facing','$landmark','$about','$address','$water','$electricity',0,'$Path1','$Path2','$Path3','$additionaspec','$posted')";
	//echo $sql;
		mysql_query($sql) or die();
		// clear
		$msg = "Successfully Inserted ";
		$place=$rent=$adate=$bnos=$bath=$balco=$furnish=$afor=$barea=$additionaspec =$landmark ="";
		$carea=$tarea=$typeoffloor=$age=$corner=$deposit=$furnish=$afor=$barea=$address = "";
	}
	else 
		$err = "Something went wrong.. Plz Try again.....";
}
	?>
<body>

<center>
<h1>Add Home Details </h1>
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
					<h1><center>Add Home</center> </h1>
					<form  name="form1" method="post"  enctype="multipart/form-data" >
						
						<div>
							<span>Place<label>:</label></span>
							<input type="text" name="place" value="<?php if(isset($place)) echo $place; ?>" required />
	 	</label>
        <span style="color:#FF0000;">        </span>
							 </div>
							 <div class="clearfix"> </div>



							 <div>
							<span>Rent (in RS)<label>:</label></span>
							<input type="text" name="rent" value="<?php if(isset($rent)) echo $rent; ?>" required />
	 	</label>
        <span style="color:#FF0000;">  <?php if(isset($rentErr)) echo $rentErr; ?>      </span>
							 </div>
							 <div class="clearfix"> </div>






							 <div>
							<span>Available From Date<label>:</label></span>
							<input type="date" name="adate" style="width: 73%;
	padding: 12px;
	font-size: 13px;
	font-weight: 600;
	margin-bottom: 2em;
	outline: none;
	color: #999;
	font-family: 'Lato', sans-serif;
	margin-top: -2%;
	float: right;
	background:none;
	border-top: none;
	border-left:none; 
	border-right:none;
	border-bottom: 1px solid #999;" value="<?php if(isset($adate)) echo $adate; ?>" required />
	 	</label>
        <span style="color:#FF0000;">  <?php if(isset($adateErr)) echo $adateErr; ?>      
        </span>
							 </div>
							 <div class="clearfix"> </div>



							 <div>
							<span>No Off Rooms<label>:</label></span>
							<input type="text" name="bath" value="<?php if(isset($bath)) echo $bath; ?>" required />
        <span style="color:#FF0000;">  <?php if(isset($bathErr)) echo $bathErr; ?>      </span>
							 </div>						 
							 <div class="clearfix"> </div>



							 <div>
							<span>No Off BedRooms<label>:</label></span>
							<input type="text" name="bnos" value="<?php if(isset($bath)) echo $bath; ?>" required />
	 
        <span style="color:#FF0000;">  <?php if(isset($bathErr)) echo $bathErr; ?>      </span>
							 </div>							 
							 <div class="clearfix"> </div>
							 

							
							 <div>
							<span>Balconies<label>:</label></span>
							<label style="margin-left:0px;"><input name="balco" type="radio" value="No" checked /> No
	  <input name="balco" type="radio" value="Yes" /> Yes</label>
							 </div>
							 <div class="clearfix"> </div>



							 <div >
							<span>furnishing<label>:</label></span>
							<label style="margin-left:0px;"><input name="furnish" type="radio" value="Unfurnished" checked  />  Unfurnished
		<input name="furnish" type="radio" value="SemiFurnished"  /> Semi Furnished
		<input name="furnish" type="radio" value="Furnished"  /> Furnished
		</label>
							 </div>
							 <div class="clearfix"> </div>



							 
							 <div >
							<span>Available For<label>:</label></span>
							<label style="margin-left:0px;"><input name="afor" type="radio" value="Family" checked /> For Family
	  <input name="afor" type="radio" value="Bachelors"  /> For Bachelors
	  <input name="afor" type="radio" value="All"  /> All
		</label>
							 </div>
							 <div class="clearfix"> </div>

							 
							 <div >
							<span>Car Parking<label>:</label></span>
							<label style="margin-left:0px;">
							<input name="park" type="radio" value="No" checked /> No
	  <input name="park" type="radio" value="Yes" /> Yes
		</label>
							 </div>
							 <div class="clearfix"> </div>



							 <div>
							<span>Build Up Area(sq.ft<label>:</label></span>
							<input type="text" name="barea" value="<?php if(isset($barea)) echo $barea; ?>" required />
	 	</label>
        <span style="color:#FF0000;">  <?php if(isset($bareaErr)) echo $bareaErr; ?>      </span>
							 </div>							 
							 <div class="clearfix"> </div>



							 <div>
							<span>Carpet Area(sq.ft)<label>:</label></span>
							<input type="text" name="carea" value="<?php if(isset($carea)) echo $carea; ?>" required />
	 	</label>
        <span style="color:#FF0000;">  <?php if(isset($careaErr)) echo $careaErr; ?>      </span>
							 </div>							 
							 <div class="clearfix"> </div>

							 


							 <div>
							<span>Total  Area(sq.ft)<label>:</label></span>
							<input type="text" name="tarea" value="<?php if(isset($tarea)) echo $tarea; ?>" required />
	 	</label>
        <span style="color:#FF0000;">  <?php if(isset($tareaErr)) echo $tareaErr; ?>      </span>
							 </div>							 
							 <div class="clearfix"> </div>




							 <div>
							<span>Type of Floor<label>:</label></span>
							<input type="text" name="typeoffloor" value="<?php if(isset($typeoffloor)) echo $typeoffloor; ?>" required />
	 	</label>
        <span style="color:#FF0000;">  <?php if(isset($typeoffloorErr)) echo $typeoffloorErr; ?>
							 </div>							 
							 <div class="clearfix"> </div>


							 

							 <div>
							<span>Age of Property<label>:</label></span>
							<input type="text" name="age" value="<?php if(isset($age)) echo $age; ?>" required />
	 	</label>
        <span style="color:#FF0000;">  <?php if(isset($ageErr)) echo $ageErr; ?>      </span>
							 </div>							 
							 <div class="clearfix"> </div>



							 

							 <div>
							<span>Corner Property<label>:</label></span>
							<label style="margin-left:0px;">	<input name="corner" type="radio" value="No" checked /> No
	  <input name="corner" type="radio" value="Yes" /> Yes
	 	</label>
        <span style="color:#FF0000;">  <?php if(isset($cornerErr)) echo $cornerErr; ?>      </span>
							 </div>							 
							 <div class="clearfix"> </div>



							 

							 <div>
							<span>Deposit(if any)<label>:</label></span>
							<input type="text" name="deposit" value="<?php if(isset($deposit)) echo $deposit; ?>" required />
	 	</label>
        <span style="color:#FF0000;">  <?php if(isset($depositErr)) echo $depositErr; ?>      </span>
							 </div>							 
							 <div class="clearfix"> </div>



							 

							 <div>
							<span>Gated<label>:</label></span>
							<!-- <label style="margin-left:0px;"> -->

							<input name="gated" type="radio" value="No" checked /> No
	  <input name="gated" type="radio" value="Yes" /> Yes</label>
							 </div>							 
							 <div class="clearfix"> </div>



							 

							 <div>
							<span>Facing<label>:</label></span>
							
							<input name="facing" type="radio" value="East" checked /> East
	  <input name="facing" type="radio" value="West" /> West
	    <input name="facing" type="radio" value="South"  /> South
	  <input name="facing" type="radio" value="North" /> North</label>
							 </div>							 
							 <div class="clearfix"> </div>



							 <div>
							<span>Landmark<label>:</label></span>
							<textarea name="landmark" cols="" rows="" required><?php if(isset($landmark)) echo $landmark;  ?>
        </textarea>
							 </div>							 
							 <div class="clearfix"> </div>


							 <div>
							<span>About<label>:</label></span>
							<textarea name="about" cols="" rows="" ><?php if(isset($about)) echo $about;  ?></textarea>
							 </div>							 
							 <div class="clearfix"> </div>
							 



							 <div>
							<span>Address<label>:</label></span>
							<textarea name="address" cols="" rows="" required><?php if(isset($address)) echo $address;  ?></textarea>
							 </div>							 
							 <div class="clearfix"> </div>





							 <div>
							<span>Water<label>:</label></span>
							<label style="margin-left:0px;">
							<input name="water" type="radio" value="No"  /> No
	  <input name="water" type="radio" value="Yes" checked /> Yes</label>
							 </div>							 
							 <div class="clearfix"> </div>



							 
							 <div>
							<span>Electricity<label>:</label></span>
							<label style="margin-left:0px;">
							<input name="electricity" type="radio" value="No"  /> No
	  <input name="electricity" type="radio" value="Yes"checked  /> Yes</label>
							 </div>							 
							 <div class="clearfix"> </div>




							 
							 <div>
							<span>Upload Image <label>:</label></span> <label style="margin-left:0px;">
							<input type="file" name="pic1" required />
      <br />
      <input type="file" name="pic2" required />
      <br />
      <input type="file" name="pic3" required />
      <br /></label>
							 </div>							 
							 <div class="clearfix"> </div>




							 
							 
							 <div>
							<span>Additional Specfications <label>:</label></span>
							<textarea name="additionaspec" cols="" rows="" ><?php if(isset($additionaspec)) echo $additionaspec;  ?></textarea>
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

