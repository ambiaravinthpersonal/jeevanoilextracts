<?php
	require_once 'back/session.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="generator" content="">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:200,300,400,500,600,700" rel="stylesheet">




     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>


<!-- HEADER =============================-->
<header class="item header margin-top-0">
<div class="wrapper">
	<nav role="navigation" class="navbar navbar-white navbar-embossed navbar-lg navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button data-target="#navbar-collapse-02" data-toggle="collapse" class="navbar-toggle" type="button">
			<i class="fa fa-bars"></i>
			<span class="sr-only">Toggle navigation</span>
			</button>
			<a href="#"><img src="./images/download.jpg" alt="" width="15%" style="float: left"></a>
			<a href="#" class="navbar-brand" style="color: rgb(243, 112, 112); ">Jeevan Solvent</a>
			
		</div>
		<div id="navbar-collapse-02" class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li class="propClone" ><a href="public_home.php" >Home</a></li>
				<li class="propClone"><a href="product.php">Product</a></li>
				<li class="propClone"><a href="cart.php" >My Cart</a></li>
				<li class="propClone"><a href="order.php" >Orders</a></li>
		


            <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						<?php echo $_SESSION["current_username"]; ?> 
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li style="margin-top:4%;"><a class="dropdown-item" href="profile.php"> <img src="https://img.icons8.com/ios-glyphs/24/undefined/user--v1.png"/><span style="margin-left:10%;">My Profile</span></a></li>
                         
                          <li><hr class="dropdown-divider"></li>
                          <li style="margin-top:-4%;"><a class="dropdown-item" href="back/logout.php"><img  src="https://img.icons8.com/material-outlined/24/undefined/exit.png"/>    <span style="margin-left:10%;">Logout</span> </a></li>
                        </ul>
                      </li>

			</ul>
	
		</div>
	</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="text-homeimage">
					<div class="maintext-image"  data-scrollreveal="enter bottom over 1.7s after 0.0s" >
						 Increase Digital Sales
					</div>
					<div class="subtext-image"  data-scrollreveal="enter bottom over 1.7s after 0.0s" >
						 Boost health with JSE
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</header>

<!-- company objective -->


     <div class="container">
		 <div class="row">
			 <div class="col-lg-12" style="margin-top: 5%; font-weight:bolder; text-align: center; font-size: 20px; color: black;">
				
				Jeevan Solvent Extracts Private Limited is a Private incorporated on 01 June 1981. 
				Jeevan Solvent Extracts Private Limited's Annual General Meeting (AGM) was last held on 30 December 2020 and 
				as per records from Ministry of Corporate Affairs (MCA),
				 its balance sheet was last filed on 31 March 2020 Current status of Jeevan Solvent Extracts Private Limited is - Active.
			 </div>
		 </div>
	 </div>

	
	
<!-- LATEST offers =============================-->
<section class="item content">
	<div class="container">
		<div class="underlined-title">
			<div class="editContent">
				<h1 class="text-center latestitems">LATEST OFFERS</h1>
			</div>
			<div class="wow-hr type_short">
				<span class="wow-hr-h">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				</span>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="productbox">
					<div class="fadeshop">
						<div class="captionshop text-center" style="display: none;">
							<h3>Rice Bran Oil</h3>
							<p>
                We hold expertise in offering an extensive range of
                 Rice Bran Oil (Crude), which is extracted through refining the bran of the rice kernel.
							</p>
							<p>
								<a href="product.php" class="learn-more detailslearn"><i class="fa fa-shopping-cart"></i> Purchase</a>
								
							</p>
						</div>
						<span class="maxproduct"><img src="./images/rice_img.jpg" alt=""></span>
					</div>
					<div class="product-details">
						<a href="#">
						<h1>Rice Bran Oil</h1>
						</a>
						<span class="price">
						<span class="edd_price">Rs.160/litre----(10% offer)----</span>
						</span>
					</div>
				</div>
			</div>
			<!-- /.productbox -->
			<div class="col-md-4">
				<div class="productbox">
					<div class="fadeshop">
						<div class="captionshop text-center" style="display: none;">
							<h3>Coconut Oil</h3>
							<p>
								Our range of Coconut Oils are 100% organic and versatile to use, made 
								from all natural ingredients its easy to use, buy yours online today.


							</p>
							<p>
								<a href="product.php" class="learn-more detailslearn"><i class="fa fa-shopping-cart"></i> Purchase</a>
							
							</p>
						</div>
						<span class="maxproduct"><img src="./images/coco_img.jpg" height="80%" alt=""></span>
					</div>
					<div class="product-details">
						<a href="#">
						<h1>Coconut Oil</h1>
						</a>
						<span class="price">
						<span class="edd_price">Rs.100/litre----(5% offer)----</span>
						</span>
					</div>
				</div>
			</div>
			<!-- /.productbox -->
			<div class="col-md-4">
				<div class="productbox">
					<div class="fadeshop">
						<div class="captionshop text-center" style="display: none;">
							<h3>Neem Oil</h3>
							<p>
								Our range of Neem oil are 100% organic and versatile to use, made 
								from all natural ingredients its easy to use, buy yours online today.
							</p>
							<p>
								<a href="product.php" class="learn-more detailslearn"><i class="fa fa-shopping-cart"></i> Purchase</a>
						
							</p>
						</div>
						<span class="maxproduct"><img src="./images/neem_img.jpg" alt=""></span>
					</div>
					<div class="product-details">
						<a href="#">
						<h1>Neem Oil</h1>
						</a>
						<span class="price">
						<span class="edd_price">Rs.220/litre----(15% offer)----</span>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>


<!-- TESTIMONIAL =============================-->
<div class="item content">
	<div class="container">
		<div class="col-md-10 col-md-offset-1">
			<div class="slide-text">
				<div>
					<img src="./images/human.png" alt="##">
					<h2><span class="uppercase">K.Athiappan</span></h2>
					<h2><span class="uppercase" style="font-size: medium;">Managing Director</span></h2>
					<p>
						 He have a variety of duties depending on where they work, but they typically are responsible for developing the company's strategies, providing strategic advice to various organizational leaders, and helping the company to achieve its goals.
					</p>
				    <br><br>
				</div>
			</div>
		</div>
	</div>
</div>
<section id="location" class="section location">
	<div class="container">
		<div class="row">
			<div class="col-lg-4" style="float: left; margin-top:3%;">
				<h3 class="section-title">Location</h3>
				<address>
					<p>Jeevan Solvent Extracts Pvt.Limited,<br>Salem-Kallakurichi MainRoad<br> Royappanur, Melnariyappanur Post Kallakurichi<br>Taluk Viluppuram, Tamil Nadu, 606201 India <br> Phone: 09790229890</p>
				</address><br> 
			</div>
			<div class="col-lg-8">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.343769433666!2d78.8148597135443!3d11.59882209176669!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bab71eb16343231%3A0xcc947fa520e2906a!2sJeevan%20Solvent%20Extracts%20(P)%20Ltd!5e0!3m2!1sen!2sin!4v1652000965170!5m2!1sen!2sin" width="100%" height="300" style="border:0; border-radius:20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
	</div>
</section>
<br><br>


<!-- FOOTER =============================-->
<div class="footer text-center">
	<div class="container">
		<div class="row">
			<p class="footernote">
				 Connect with JSE
			</p>
			<ul class="social-iconsfooter">
				<li><a href="#"><i class="fa fa-phone"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
			</ul>
			<p>
				 &copy; JEEVAN SOLVENT EXTRACTS<br/>
			
			</p>
		</div>
	</div>
</div>

<!-- SCRIPTS =============================-->
<script src="js/jquery-.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/anim.js"></script>

<script>
//----HOVER CAPTION---//	  
jQuery(document).ready(function ($) {
	$('.fadeshop').hover(
		function(){
			$(this).find('.captionshop').fadeIn(150);
		},
		function(){
			$(this).find('.captionshop').fadeOut(150);
		}
	);
});
</script>
	
</body>
</html>