<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->


<?php
session_start();
 if($_SESSION['status']!="Active")
{
    header("location:../login.php");
}
 
// include("header.php"); 
include 'dbconn.php';
$id =$_REQUEST["id"];
	
	
	$sql="select * from homes where hid=$id  "; //echo $sql;
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	$m = mysql_num_rows($result);
	if($m < 1) { $msg ="No results found..!";}
		
	
?>


<!DOCTYPE HTML>
<html>
<head>
<title>The Home-interio bootstrap Website Template |single :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!--jQuery (necessary for Bootstrap's JavaScript plugins)-->
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
<link rel="stylesheet" type="text/css" href="css/thumbs.css">
<!--Custom Theme files-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/modernizr.custom.js"></script>

 <!--start-smoth-scrolling-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
		
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
<!--start-smoth-scrolling-->
<!--webfonts-->
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Cinzel+Decorative:400,700,900' rel='stylesheet' type='text/css'>
</head>
<body>
<!--header-->
	<div class="header-section">
		<div class="header-top">
			<div class="container">
			<!--logo-->
			   <div class="logo">
					<h1><a href="index.html">HOME INTERIO</a></h1>
				</div>
			<!--top-nav-->
				<div class="top-icons">
					<ul>
						<li><a class="you" href="#"><span> </span></a></li>
						<li><a class="in" href="#"><span> </span></a></li>
						<li><a class="tw" href="#"><span> </span></a></li>
						<li><a class="fb" href="#"><span> </span></a></li>
						<li><a class="gp" href="#"><span> </span></a></li>
						<div class="clearfix"> </div>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="sub-header">
			<div class="top-nav">
					<span class="menu"> </span>
					<ul class="cl-effect-16">
									
  <li><a href="home.php">Home</a></li>
  <li><a href="viewProfile.php">Profile</a></li>
  <li><a href="updateProfile.php">Update Profile</a></li>
      <li><a href="viewproduct.php">View Home </a></li>
	  	    <li><a href="addComplaint.php">Register Complaints </a></li>
			  <li><a href="cancelbooking.php">Cancel Booking</a></li>
  <!-- <li><a href="sendmsg.php">Message</a></li> -->
  <li><a href="../chat/duplicate.php">Chat</a></li>

  <li><a href="logout.php">logout</a></li>
						<div class="clearfix"> </div>
					</ul>
				</div>
			</div>
				<div class="clearfix"> </div>
		<!-- script-for-menu -->
				<script>
					$(document).ready(function(){
						$("span.menu").click(function(){
							$(".top-nav ul").slideToggle(200);
						});
					});
				</script>
			<div class="clearfix"> </div>
		</div>
		<!--/header-->
<!-- Single Page starts Here -->
<div class="product">
<div class="container">
<div class="col-md-9 ctnt-bar">
	<div class="content-bar">
<div class="single-page">
	<ul class="product-head">
				
	<li><a href="home.php">Home</a></li>
  <li><a href="viewProfile.php">Profile</a></li>
  <li><a href="updateProfile.php">Update Profile</a></li>
      <li><a href="viewproduct.php">View Home </a></li>
	  	    <li><a href="addComplaint.php">Register Complaints </a></li>
			  <li><a href="cancelbooking.php">Cancel Booking</a></li>
  <!-- <li><a href="sendmsg.php">Message</a></li> -->
  <li><a href="../chat/duplicate.php">Chat</a></li>

  <li><a href="logout.php">logout</a></li>
		<div class="clear"> </div>
	</ul>
	<!-- Include the Etalage files -->
		<link rel="stylesheet" href="css/etalage.css">
		<script src="js/jquery.etalage.min.js"></script>
	<!-- Include the Etalage files -->
	<script>
			jQuery(document).ready(function($){
	
				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 600,
					source_image_height: 1000,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});
				// This is for the dropdown list example:
				$('.dropdownlist').change(function(){
					etalage_show( $(this).find('option:selected').attr('class') );
				});
	
		});
	</script>
	<!--//details-product-slider-->
    
<?php if(!isset($msg)) { 
$res = mysql_query($sql);
$sl=0;
while($r=mysql_fetch_array($res))
{ $sl+=1;
?>
	<div class="details-left-slider">
		<ul id="etalage">
			<li>
				<a href="optionallink.html">
					<img class="etalage_thumb_image" src="../upload/<?php echo $r['pic1']; ?>" />
					<img class="etalage_source_image" src="../upload/<?php echo $r['pic1']; ?>" />
				</a>
			</li>
			<li>
				<img class="etalage_thumb_image" src="../upload/<?php echo $r['pic2']; ?>" />
				<img class="etalage_source_image" src="../upload/<?php echo $r['pic2']; ?>">
			</li>
			<li>
				<img class="etalage_thumb_image" src="../upload/<?php echo $r['pic3']; ?>" />
				<img class="etalage_source_image" src="../upload/<?php echo $r['pic3']; ?>" />
			</li>
			<li>
				<img class="etalage_thumb_image" src="../upload/<?php echo $r['pic1']; ?>" />
				<img class="etalage_source_image" src="../upload/<?php echo $r['pic1']; ?>" />
			</li>
			<div class="clearfix"></div>
		</ul>




	</div>
	<div class="details-left-info">
		<h3><?php  $status =$r["status"];  if($status == 1) echo "Verified Property"; ?></h3>
		<p class="availability">Availability: <span class="color">In stock</span></p>
	    <div class="price_single">
		  <span class="reducedfrom"></span>
		  <span class="actual"> &#8377;<?php echo $r["rent"]; ?>/-</span><a href="#"></a>
		</div>
		<h2 class="quick">Quick Overview:</h2>
		<p class="quick_desc"> <?php echo $r["bnos"]; ?> BHK House </br>Address: <?php echo $r["address"]; ?></br>Posted On : <?php echo $r["posted"]; ?></br>Avalable From :<?php echo $r["adate"]; ?></br>
        Configuration : <?php echo $r["bnos"]; ?></br> Bed Room <?php echo $r["bath"]; ?> , </br> Furnishing : <?php echo $r["furnish"]; ?>, </br>Available For : <?php echo $r["afor"]; ?></br>
        Car Parking : <?php echo $r["park"]; ?>,</br> Build Up Area : <?php echo $r["barea"]; ?> sq.ft,</br> Carpet Area: <?php echo $r["carea"]; ?> sq. ft,</br> Total Area:  <?php echo $r["tarea"]; ?> sq ft</br>
</br> Type Of Floor : <?php echo $r["typeoffloor"]; ?>,</br>Age Of Property :  <?php echo $r["age"]; ?>,</br> Corner Property: <?php echo $r["corner"]; ?>,</br> Deposit :  <?php echo $r["deposit"]; ?> /- </br>
</br>Gated : <?php echo $r["gated"]; ?>, </br> Facing :  <?php echo $r["facing"]; ?> ,</br> Landmark : <?php echo $r["landmark"]; ?>, </br>About : <?php if($r["about"] != " ") echo $r["about"]; else echo "-"; ?></br>
Water facility :  <?php echo $r["water"]; ?>,</br> Electricity Facility: <?php echo $r["electricity"]; ?>,</br> Additional Specification : <?php if($r["additionaspec"] != " ") echo $r["additionaspec"]; else echo "-";  ?></p>
		
		</div>
		<div class="clearfix"></div>
		<div class="single-but">
            <form method="POST" name="form1">
            <input type="hidden" name="hid" value="<?php echo $r["hid"]; ?>">
            <input type="hidden" name="hoid" value="<?php echo $r["hoid"]; ?>">
            <input type="hidden" name="uid" value="<?php echo $_SESSION['id']; ?>">
			<input type="submit" value="add to cart">
		</div>
</div>

<?php }  
} 
?>


<?php

if($_SERVER["REQUEST_METHOD"] == "POST")	
{
	$hid=$_POST['hid'];
    $hoid=$_POST['hoid'];
    $uid=$_POST['uid'];
    // echo $hid;
    // echo $hoid;
    // echo $uid;
	$sql="insert into booking(hid,hoid,uid) values ('$hid','$hoid','$uid')";
	//echo $sql;
		mysql_query($sql) or die();
		// clear
		$msg = "Successfully Inserted ";
		$complaint="";

		$sql1= "update homes set bookingstatus='booked'  where hid=$hid";//echo $sql;
	    $res = mysql_query($sql1);
		//echo $sql1;
	header("location:download.php");
}

?>


<div class="clearfix"></div>
</div>

</div>

</div>
<!--/start-footer-->                                                             
	<div class="footer">
				<div class="container">
					<div class="footer-grids">
						<div class="col-md-4 footer-grid bottom-nav">
							<h3>Categories </h3>
								<ul>
									<li><a href="#">Benches</a></li>
									<li><a href="#">Day Beds</a></li>
									<li><a href="#">Chairs</a></li>
									<li><a href="#">Sets</a></li>
									<li><a href="#">Sections<a></li>
									<li><a href="#">Sofa Set</a></li>
									<li><a href="#">Tables</a></li>
									<div class="clearfix"> </div>
								</ul>
							</div>
							<div class="col-md-4 footer-grid bottom-nav">
								<h3>my Account </h3>
									<ul>
										<li><a href="#">My  Orders</li>
										<li><a href="#">My Merchant returns</li>
										<li><a href="#">My Address</li>
										<li><a href="#">My Credit</li>
										<li><a href="#">Personal Info</li>
										<li><a href="login.html">Login</a></li>
										<li><a href="login.html">Register</a></li>
										<div class="clearfix"> </div>
									</ul>
							</div>
							<div class="col-md-4  footer-grid">
								 	 <h3> My Address</h3>
								 	 <div class="bottom-icons">
											<ul>
												<li><a class="home" href="#"><span> </span></a>Lorem ipsy street,Newyork</li>
												<li><a class="mail" href="mailto:info@example.com"><span> </span>123 int@example.com</a></li>
												<div class="clearfix"> </div>
											</ul>
										
										</div>
										<p class="copyright">Design by &nbsp;<a href="http://w3layouts.com">W3Layouts</a></p>
									
								</div>	
						<div class="clearfix"> </div>							
					</div>
				</div>
					<!--//End-foote-->
						<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
					<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</body>
</html>