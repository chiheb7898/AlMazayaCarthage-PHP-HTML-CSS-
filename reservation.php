<?php
session_start();
 ?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Burger</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap2.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/reservation.css" />
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
    <!-- header-start -->
   <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-5 col-lg-5">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a  href="index.php">home</a></li>
                                        <li><a  href="Menu.php">Menu</a></li>

                                        <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">blog</a></li>
                                                <li><a href="single-blog.html">single-blog</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Pages <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="elements.html">elements</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="active" href="contact.php">Contact</a></li>
										<li><a href="about.php">About</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="index.html">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 d-none d-lg-block">
                            <div class="book_room">
                                <div class="socail_links">
                                    <ul>
                                        <li>
                                            <a href="#">


                                        <li>

                                            <a href="https://www.facebook.com/alMazayaCarthage/" target="_blank" >
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>

                                    </ul>
                                </div>


                                <div class="book_btn d-none d-xl-block">
                                  <?php
                                  $nom=$_SESSION['nom'];
                                  $prenom=$_SESSION['prenom'];
                echo "<a class='#' href=''>$nom &nbsp $prenom</a>";?>
                <a class="#" href="logout.php">></a>

                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg_2">
        <h3>Reservation</h3>
    </div>
    <!-- bradcam_area_end -->

	       <div class='slide1'></div>
           <div class='slide2'></div>
           <div class='slide3'></div>

    <!-- ================ reservation section start ================= -->

</div>

	<div id="booking" class="section">


		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h1>Make your reservation</h1>
						</div>
						<form>
							<div class="form-group">
								<input class="form-control" type="text" placeholder="Name">
								<span class="form-label">Destination</span> <br>
								<input class="form-control" type="text" placeholder="Lastname">

							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" type="date" required>
										<span class="form-label">Date</span>
									</div>
								</div>

							</div>
							<div class="row">
								<div class="col-md-4">

								</div>
								<div class="col-md-4">
									<div class="form-group">
										<select class="form-control" required>
											<option value="" selected hidden>no of adults</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5 or more</option>
										</select>
										<span class="select-arrow"></span>
										<span class="form-label">Adults</span>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<select class="form-control" required>
											<option value="" selected hidden>no of children</option>
											<option>0</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5 or more</option>
										</select>
										<span class="select-arrow"></span>
										<span class="form-label">Children</span>
									</div>
								</div>
							</div>
							<div class="row">

								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" type="tel" placeholder="Enter you Phone">
										<span class="form-label">Phone</span>
									</div>
								</div>
							</div>
							<div class="form-btn">
								<button class="submit-btn">Book Now</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="js/jquery.min.js"></script>
	<script>
		$('.form-control').each(function () {
			floatedLabel($(this));
		});

		$('.form-control').on('input', function () {
			floatedLabel($(this));
		});

		function floatedLabel(input) {
			var $field = input.closest('.form-group');
			if (input.val()) {
				$field.addClass('input-not-empty');
			} else {
				$field.removeClass('input-not-empty');
			}
		}
	</script>


    <!-- ================ reservation section end ================= -->

    <!-- footer_start  -->
    <footer class="footer">
            <div class="footer_top">
                <div class="container">
                    <div class="row">

                        <div class="col-xl-4 col-md-6 col-lg-4">
                            <div class="footer_widget text-center ">
                                <h3 class="footer_title pos_margin">
                                    Doha
                                </h3>
                      <p> 09833 al saad<br>
                                <a href="#">almazaya@carthage.com</a></p>
                                <a class="number" href="#">+974 4441 5400</a>

                            </div>
                        </div>

						<p class="newsletter_text">Stay connect with us to get exclusive offer!</p>
						<div class="col-xl-4 col-md-12 col-lg-4">
                                <div class="footer_widget">
                                        <h3 class="footer_title">

                                        </h3>
                                        <form action="#" class="newsletter_form">
                                            <input type="text" placeholder="Enter your phone number">
                                            <button type="submit">Sign Up</button>
                                        </form>
										<form action="#" class="newsletter_form">
                                            <input type="text" placeholder="Enter your mail">
                                            <button type="submit">Sign Up</button>
                                        </form>
                                        <p class="newsletter_text"></p>


                                    </div>
                        </div>



                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-4">
                            <div class="socail_links text-center">
                                    <ul>


                                        <li>
                                            <a href="https://www.facebook.com/alMazayaCarthage">
                                                <i class="ti-facebook"></i>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy-right_text">
                <div class="container">
                    <div class="footer_border"></div>
                    <div class="row">
                        <div class="col-xl-12">
                            <p class="copy_right text-center">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website made by <a href="https://www.facebook.com/esprit.tn" target="_blank">APPOLO TEAM</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    <!-- footer_end  -->

        <!-- JS here -->
        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/ajax-form.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/scrollIt.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/nice-select.min.js"></script>
        <script src="js/jquery.slicknav.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/plugins.js"></script>

        <!--contact js-->
        <script src="js/contact.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/mail-script.js"></script>

        <script src="js/main.js"></script>

    </body>

    </html>
