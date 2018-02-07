<?php
session_start();
include_once('include/config.php');
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>WeCare Massage</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
    
	<body class="homepage">
    
		<div id="page-wrapper">
				<?php include("include/nav.inc")?>
                <script src="js/nav.js"></script>

	<!-- Slideshow container -->
		<?php include("include/slideshow.inc")?>

	<!-- Main -->
		<div id="main-wrapper">
			<div id="main" class="container">
				<div class="row 200%">
					<div class="12u">

						<!-- Blog -->
							<section class="box highlight">
                                <header style="align-content:center">
                                	<img src="images/logo.gif" alt="logo" style="width:20px;height:20px;margin-right:2px">
                                    <strong>WeCare Massage and Theraphy</strong>
								</header>
							</section>
							<section class="box blog">
								<h2 class="major"><span>We Care about Your Health</span></h2>
								<div>
									<div class="row">
										<div class="9u 12u(mobile)">
											<div class="content content-left">
                                                    
												<!-- Featured Post -->
													<article class="box post">
														<header>
															<h3><a href="#">Let WeCare help you</a></h3>
															<p>Your health is in good professional hands!</p>
														</header>
                                                                
														<a href="ourtreatment.php" class="image featured">
                                                               <img src="images/Treament_9.png" alt="treatment-one" />
                                                        </a>
                                                                
														<p>
                                                            <strong><b>Oil Massage</b></strong>
															<br>Oil massage is a tyoe of a body therapy for relaxation and healing purposes. The carrier of oil that we use is a high qulaity botanical extract. It is blended with water soluable media and can be easily washed off.
														</p>
                                                                
														<a href="ourtreatment.php" class="button">All Treatments</a>
														<br>
                                                        <a href="bookonline - treatment.php" class="button" style="margin-top: 20px">Welcome to Booking Now</a>
													</article>

											</div>
										</div>
												
                                            <div class="3u 12u(mobile)">
											<div class="sidebar">

												<!-- Archives -->
													<ul class="divided">
														<li>
															<article class="box post-summary">
																<a href="specials.php">
                                                                	<h3>Our Specials</h3>
                                                                    <p><img src="images/specials.jpg" alt="speciallist" style="width:100%;height:20%"></p>
                                                                </a>
															</article>
														</li>
														<li>
															<article class="box post-summary">
																<a href="prices.php">
                                                                     <h3>Our Menu with prices</h3>
                                                                     <p><img src="images/price list.jpg" alt="pricelist" style="width:100%;height:20%"></p>
                                                                </a>
																		
															</article>
														</li>
														<li>
															<article class="box post-summary">
																<a href="products.php">
                                                                     <h3>Our Products</h3>
                                                                     <p><img src="images/Mask1.jpg" alt="product1" style="width:100%;height:20%"></p>
                                                                </a>
															</article>
														</li>
														<li>
															<article class="box post-summary">
																<a href="aboutus.php">
                                                                      <h3>Welcome to WeCare</h3>
                                                                      <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56621.6159180479!2d152.97503350007412!3d-27.505009135848912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b9156cdadcf48b7%3A0x72f7b1801d279b83!2sWeCARE+Massage+%26+Natural+Therapy!5e0!3m2!1sen!2sau!4v1517023868763" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe></p></a>
															</article>
														</li>
													</ul>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
					</div>
				</div>
			</div>

	<!-- Footer -->
		<footer id="footer" class="container">

                    
		<!-- Contact -->
			<div class="row 200%">
				<div class="12u">
					<section>
						<h2 class="major"><span>Get in touch</span></h2>
							<ul class="contact">
                                <?php include("include/contact.inc")?>
							</ul>
					</section>
				</div>
			</div>

		<!-- Copyright -->
			<div id="copyright">
				<ul class="menu">
					<li>&copy; WeCare Massage. All rights reserved</li>
				</ul>
			</div>
		</footer>
	</div>

<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.dropotron.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/skel-viewport.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>
</html>