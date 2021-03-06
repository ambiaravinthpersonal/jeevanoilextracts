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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
                        <a href="#">
							<img src="./images/download.jpg" alt="" width="15%" style="float: left">
						</a>
                        <a href="#" class="navbar-brand" style="color: rgb(243, 112, 112); float:left ;text-align: left;"> Jeevan Solvent</a>
                    </div>
                    <div id="navbar-collapse-02" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="propClone">
								<a href="public_home.php">Home</a>
							</li>
                            <li class="propClone">
								<a href="aboutus.php">About us</a>
							</li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php echo $_SESSION["current_username"]; ?>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li style="margin-top:4%;">
										<a class="dropdown-item" href="profile.php"> 
											<img src="https://img.icons8.com/ios-glyphs/24/undefined/user--v1.png" />
											<span style="margin-left:10%;">My Profile</span>
										</a>
									</li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li style="margin-top:-4%;">
										<a class="dropdown-item" href="back/logout.php">
											<img src="https://img.icons8.com/material-outlined/24/undefined/exit.png" />
                                            <span style="margin-left:10%;">Logout</span> 
										</a>
									</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="text-pageheader">
                            <div class="subtext-image" data-scrollreveal="enter bottom over 1.7s after 0.0s">
                                Admin page
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
	<!-- CONTENT =============================-->
    <section class="item content">
        <div class="container toparea">
            <div class="underlined-title">
                <div class="editContent">
                    <h1 class="text-center latestitems">SEND MESSAGE</h1>
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
                <div class="col-lg-8 col-lg-offset-2">
                    <form method="post" action="back/admin_process.php" id="contactform">
                        <div class="form" style="margin-left: 20%;margin-right: 20%;">
                            <input type="text" name="name" placeholder="Enter your name">
                            <textarea name="message" id="" cols="30" rows="10" placeholder="Enter the message..."></textarea>
                            <input type="submit" class="clearfix btn" value="Send message" name="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
	<footer>
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
                        &copy; JEEVAN SOLVENT EXTRACTS<br />
                    </p>
                </div>
            </div>
        </div>
    </footer>
    
	<!-- SCRIPTS =============================-->
    <script src="js/jquery-.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/anim.js"></script>
    <script src="js/validate.js"></script>
</body>

</html>