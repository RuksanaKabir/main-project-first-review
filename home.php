











<?php
session_start();
 if($_SESSION['status']!="Active")
{
    header("location:../login.php");
}
 
include 'dbconn.php';
$id =$_SESSION["id"];

	
$sql="select * from houseowner where id=$id"; //echo $sql;
		$result=mysql_query($sql);
		$r=mysql_fetch_array($result);
		

	?>


<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>The Home-interio bootstrap Website Template | Home :: w3layouts</title>
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
				<h1><a href="index.html">HOME INTERIO    <?php  echo $r["name"]; ?></a></h1>
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
    <li><a href="addHome.php">Add Home </a></li>
    <li><a href="ViewHomes.php">View Home </a></li>
	    <li><a href="addComplaint.php"> Complaints </a></li>
		  <li><a href="viewbooking.php">View Booking</a></li>
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
				  <div id="gallery" class="Gallery">
					<div class="container">
						      <div class="section group">
								<div class="col-md-6 gallery-box">
										<div id="nivo-lightbox-demo"> <p> <a href="HOMERENTALSYSTEM/images/b1.png"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover1"> </span></a> </p></div>     
									  	<img src="images/b1.png" alt="">
							    </div>
								<div class="col-md-6 gallery-box">
								  	    <div id="nivo-lightbox-demo"> <p> <a href="images/b2.png" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover1"> </span></a> </p></div>     
									  	<img src="images/b2.png" alt="">
							     </div>
							   </div>
							   <div class="section group">
								 <div class="col-md-6 gallery-box">
								  		<div id="nivo-lightbox-demo"> <p> <a href="images/b3.png" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo">  <span class="rollover1"> </span></a> </p></div>     
									  	<img src="images/b3.png" alt="">
								</div>
								 <div class="col-md-6 gallery-box">
								  		<div id="nivo-lightbox-demo"> <p> <a href="images/b4.png" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo">  <span class="rollover1"> </span></a> </p></div>     
									  	<img src="images/b4.png" alt="">
								</div>
							<div class="clearfix"> </div>
						</div>
				   <script type="text/javascript" src="js/nivo-lightbox.min.js"></script>
				<script type="text/javascript">
				$(document).ready(function(){
				    $('#nivo-lightbox-demo a').nivoLightbox({ effect: 'fade' });
				});
				</script>
				<div class="lets-head">
					<h1>popularised in the 1960s with the release of Letraset sheets</h1>
					<a class="button curl-bottom-right" href="#">Let's go</a>

				</div>
			</div>
	</div>
	<!--//End-Gallery-->
	<div id="service" class="services">
			<div class="container">
				<div class="service-grides">
			 			<div class="col-md-5 service-section1">
			 				<div class="service-gride1">
				 				<div class="col-md-3 service-img">
				 					<i class="icon1"> </i>
								</div>
				 				<div class="col-md-9 service-text ">
				 					<h4>desktop publishing</h4>
									<p>It is a long established fact that a reader will be distracted 
									by the readable content of a page when looking at its layout.</p>
									<a class="read-more" href="online.html">Read More</a>
				 				</div>
				 				<div class="clearfix"> </div>  		
			 				</div>
			 				<div class="service-gride1">
				 				<div class="col-md-3 service-img">
				 					<i class="icon2"> </i>
								</div>
				 				<div class="col-md-9 service-text ">
				 					<h4>mollit anim id  </h4>
				 					<p>It is a long established fact that a reader will be distracted 
									by the readable content of a page when looking at its layout.</p>
									<a class="read-more" href="online.html">Read More</a>
				 				</div>
				 				<div class="clearfix"> </div>  		
			 				</div>
			 				<div class="service-gride1">
				 				<div class="col-md-3 service-img">
				 					<i class="icon3"> </i>
								</div>
				 				<div class="col-md-9 service-text ">
				 					<h4>desktop publishing</h4>
									<p>It is a long established fact that a reader will be distracted 
									by the readable content of a page when looking at its layout.</p>
									<a class="read-more" href="online.html">Read More</a>
				 				</div>
				 				<div class="clearfix"> </div>  		
			 				</div>
			 				<div class="service-gride1 three">
				 				<div class="col-md-3 service-img">
				 					<i class="icon4"> </i>
								</div>
				 				<div class="col-md-9 service-text ">
				 					<h4> consectetur adipis</h4>
									<p>It is a long established fact that a reader will be distracted 
									by the readable content of a page when looking at its layout.</p>
									<a class="read-more" href="online.html">Read More</a>

				 				</div>
				 				<div class="clearfix"> </div>  		
			 				</div>
			 			</div>
			 				<!--slide-->
			 			<div class="col-md-7 slide-section">
		<section id="slide-con">
				<section id="slide-main">
					<img src="images/slide1.jpg" alt="">
				</section>
				<section id="slide-hidden">
					<img src="images/slide2.jpg" alt="">
					<img src="images/slide3.jpg" alt="">
					<img src="images/slide1.jpg" alt="">
					<img src="images/slide2.jpg" alt="">
					<img src="images/slide3.jpg" alt="">
				</section>
				<section id="thumbnails">
					<div id="left-arrow" class="ui-button"><div class="icon icon-arrow-left"></div></div>
					<div id="thumbcon">

					</div>
					<div id="right-arrow" class="ui-button"><div class="icon icon-arrow-right"></div></div>
				</section>
			<section id="progressbar">
			</section>
		</section>
		<script type="text/javascript" src="js/gallery.js"></script>
			<script type="text/javascript">

			  var _gaq = _gaq || [];
			  _gaq.push(['_setAccount', 'UA-36251023-1']);
			  _gaq.push(['_setDomainName', 'jqueryscript.net']);
			  _gaq.push(['_trackPageview']);

			  (function() {
			    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			  })();

			</script>
			<!-- Banner-Slide -->
		</div>
	</div>
	<div class="clearfix"> </div>  		
</div>
</div>
	<!--/End-services-->
		<div id="testimonial" class="Testimonials">
			<div class="container">
				<div class="ad728x90" style="text-align:center">
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- w3layouts_demo_728x90 -->
				<ins class="adsbygoogle"
				     style="display:inline-block;width:728px;height:90px"
				     data-ad-client="ca-pub-9153409599391170"
				     data-ad-slot="8639520288"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
		   </div>

				<div class="clients-section">
					<h3>Our Clients</h3>
						<div class="clients-icons">
							<ul>
								<li><a href="#"><img src="images/c1.png" alt=""/></a></li>
								<li><a href="#"><img src="images/c2.png" alt=""/></a></li>
								<li><a href="#"><img src="images/c3.png" alt=""/></a></li>
								<li><a href="#"><img src="images/c1.png" alt=""/></a></li>
									<div class="clearfix"> </div>
							</ul>
						</div>

				 </div>
			</div>
				<div class="test-monials">
				<!--sreen-gallery-cursual-->
						<div class="sreen-gallery-cursual">
							 <!-- requried-jsfiles-for owl -->
							<link href="css/owl.carousel.css" rel="stylesheet">
							    <script src="js/owl.carousel.js"></script>
							        <script>
							    $(document).ready(function() {
							      $("#owl-demo").owlCarousel({
							        items : 1,
							        lazyLoad : true,
							        autoPlay : true,
							        navigation : false,
							        navigationText :  false,
							        pagination : true,
							      });
							    });
							    </script>
							 <!-- start content_slider -->
						       <div id="owl-demo" class="owl-carousel">
					                <div class="item">
					                		<div class="col-md-9 testmonial-text">
						                		<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration 
												in some form, by injected humour, or randomised words which don't look even slightly believable.
												There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in
 												some form, by injected humour, or randomised words which don't look even slightly believable.</p>
					                		</div>
					                		<div class="col-md-3 testmonial-img">
						                		<img src="images/client1.png" class="img-responsive" alt=""/>
					                		</div>
					                		<div class="clearfix"> </div>
					                </div>
					              <div class="item">
					                		<div class="col-md-9 testmonial-text">
						                		<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration 
												in some form, by injected humour, or randomised words which don't look even slightly believable.
												There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in
 												some form, by injected humour, or randomised words which don't look even slightly believable.</p>
					                		</div>
					                		<div class="col-md-3 testmonial-img">
						                		<img src="images/client2.png" class="img-responsive" alt=""/>
					                		</div>
					                		<div class="clearfix"> </div>
					                </div>
					              <div class="item">
					                	<div class="col-md-9 testmonial-text">
						                		<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration 
												in some form, by injected humour, or randomised words which don't look even slightly believable.
												There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in
 												some form, by injected humour, or randomised words which don't look even slightly believable.</p>
					                		</div>
					                		<div class="col-md-3 testmonial-img">
						                		<img src="images/client3.png" class="img-responsive" alt=""/>
					                		</div>
					                		<div class="clearfix"> </div>
					                </div>
				              </div>
						<!--//sreen-gallery-cursual-->
					</div>
				</div>
			
		</div>
<!-- news-grids -->
	<div class="new-section">
		<div class="container">
						<h2>VARIOUS PRODUCTS</h2>
					</div>
			<div class="news-grids">
				<div class="news-grids-left">
						<div class="news-left-grid">
							<div class="news-left-grid-pic">
								<img src="images/bed.jpg" title="name" />
							</div>
							<div class="news-left-grid-info">
								<h4>Chair secured</h4>
								<p>It is a long established fact that a reader will be distracted
									 by the readable content of a page when looking at its
									 layout. The point of using Lorem Ipsum is that it has
									 a more-or-less normal distribution of letters</p>
								<div class="top-grids-text three">
						<div class="top-grid-text">
							<h3>$250.00</h3>
							<label> </label>
							<p>$200.00</p>
						</div>
							<div class="top-btn">
								<a class="button rotate" href="online.html">Add to Cart</a>
							</div>
							<div class="clearfix"></div>
					</div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="news-left-grid grid1">
							<div class="news-left-grid-info grid1 news-left-grid-info-left">
								<h4>Double bedcart</h4>
								<p>It is a long established fact that a reader will be distracted
									 by the readable content of a page when looking at its
									 layout. The point of using Lorem Ipsum is that it has
									 a more-or-less normal distribution of letters</p>
								<div class="top-grids-text three">
						<div class="top-grid-text">
							<h3>$250.00</h3>
							<label class="line1"> </label>
							<p>$200.00</p>
						</div>
							<div class="top-btn">
								<a class="button rotate" href="online.html">Add to Cart</a>
							</div>
							<div class="clearfix"></div>
					</div>
							</div>
							<div class="news-left-grid-pic news-left-grid-pic-right">
								<img src="images/chair.jpg" title="name" />
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="news-grids-right">
						<div class="news-right-grid">
							<div class="news-right-grid-pic">
								<img src="images/hall.png" title="name" />
							</div>
							<div class="news-right-grid-bottom">
								<h4>Sofa set for hall</h4>
								<p>It is a long established fact that a reader will be distracted
								 by the readable content of a page when looking at its
								 layout. The point of using Lorem Ipsum is that it has
								 a more-or-less normal distribution of letters</p>
								<div class="top-grids-text three">
						<div class="top-grid-text">
							<h3>$250.00</h3>
							<label class="line2"> </label>
							<p>$200.00</p>
						
						</div>
							<div class="top-btn three">
								<a class="button rotate" href="online.html">Add to Cart</a>
							</div>
							<div class="clearfix"></div>
					</div>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
						<div class="button-two">
							<a class="button curl-bottom-right1" href="#">More</a>
					 	</div>
				</div>
				<!-- news-grids -->
			</div>
		</div>
	</div>
<!-- news-section-->
		<div class="Subscribe">
			<div class="container">
				<div class="subscribe-section">
					<div class="col-md-5 subscribe-text">	
						<p>SUBSCRIBE FOR NEWS LETTER</p>
					</div>
					<div class="col-md-7 subscribe-content">	
						<form>
						     	<input type="text" size="30px"  value="Email..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email...';}">
		                                <a class="button curl-top-right" href="#">    <input type="submit" value="Subscribe"></a>

			                 <div class="clearfix"> </div>  
			            </form>
					</div>
					<div class="clearfix"> </div> 
				</div>
			</div>
		</div>
<!--/start-footer-->                                                             
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

</body>
</html>
