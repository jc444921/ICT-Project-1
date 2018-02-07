<?php
session_start();
include_once('include/config.php');
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>WeCare Massage and Theraphy</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="homepage">
		<div id="page-wrapper">
			<?php include("include/nav.inc")?>
			<script src="js/nav.js"></script>
            <script src="js/show_text.js"></script>
            
<!-- Slideshow container -->
	<?php include("include/slideshow.inc")?>
			
		<!-- Main -->
			<div id="main-wrapper">
				<div id="main" class="container">
					<div class="row 200%">
						<div class="12u">

							<!-- Highlight -->
								<section class="box highlight">
									<header style="align-content:center">
                                	<img src="images/logo.gif" alt="logo" style="width:20px;height:20px;margin-right:2px">
                                    <strong>WeCare Massage and Theraphy</strong>
									<h2>JOIN OUR WECARE FAMILY </h2>
									</header>
								</section>
						</div>
					</div>
					<div class="row 200%">
						<div class="12u">

							<!-- Features -->
								<section class="box features">
									<h2 class="major"><span>CAREERS</span></h2>
									<div>
										<div class="row">
											<div class="3u 12u(mobile)">

												<!-- Feature -->
													<section class="box feature">
														<h2><a href="#">Senior Massage Theraphist</a></h2>
                                                            <p><b>About the role</b>
															<br>An energetic person to perform quality massage targeting the clients at WeCare. A sound knowledge of Remedial and sports massage is essential.Looking for a therapist who can work with full time.
																<p><b>Benefits and perks</b><span style="display:none;" id="expand-text">Flexible working environment. All equipment is provided. .</span> <a id="expand-click" href="javacript:;" style="text-decoration:none;" onClick="show_text('expand-click','expand-text','inline')"> Read more</a></p>
															</p>
												  	</section>
											</div>
											<div class="3u 12u(mobile)">

												<!-- Feature -->
													<section class="box feature">
														<h2><a href="#">Remedial Massage Therapist</a></h2>
														<p><b>About the role</b>
														<br>We are looking for a confident and well-presented Massage Therapist to join the team. Hours for this position are flexible. We provide 60 hours per week administration staff to handle payments and bookings.
															<p><b>Skills and Experience</b><span style="display:none;" id="expand-text4">Diploma of Remedial Massage or Advanced Dip/Bachelor of Myotherapy All health funds</span> <a id="expand-click4" href="javacript:;" style="text-decoration:none;" onClick="show_text('expand-click4','expand-text4','inline')"> Read more</a></p>
 									 					</p>
												  	</section>
											</div>
											<div class="3u 12u(mobile)">

												<!-- Feature -->
													<section class="box feature">
														<h2><a href="#">Spa Therapist</a></h2>           
															<p><b>About the role</b>
															<br>At least 3 years Spa experience preferably within a luxury Spa environment. Confidence and skills to upsell and promote retail sales / Spa services. Learn and grow with new exciting product ranges and Equipment.
																<p><b>Benefits and perks</b><span style="display:none;" id="expand-text2">Up to 40 hours per week</span> <a id="expand-click2" href="javacript:;" style="text-decoration:none;" onClick="show_text('expand-click2','expand-text2','inline')"> Read more</a></p>
 		 													</p>
												  	</section>
											</div>
											<div class="3u 12u(mobile)">

												<!-- Feature -->
													<section class="box feature">
														<h2><a href="#">Sport Massage Professional</a></h2>
														<p><b>About the role</b>
														<br>A looking for Casual Remedial/Sports Massage staff who appreciate and are passionate about supporting the aspirations of our clientele.
														<br>
														<br>
															<p><b>Skills and Experience</b><span style="display:none;" id="expand-text5">New graduates welcomed, Ability to communicate effectively with clients and build a healthy rapport</span> <a id="expand-click5	" href="javacript:;" style="text-decoration:none;" onClick="show_text('expand-click5','expand-text5','inline')"> Read more</a></p>
														</p>
													</section>
													
											</div>
										</div>
										</div>
								</section>
						</div>
					</div>
				</div>
			</div>
		</div>	

<!-- Footer -->
	<footer id="footer" class="container">
		<div class="row 200%">
			<div class="12u">
            	<h1 align="center" > Email Us Your Resumes On : wecare@gmail.com</h1>	
  				<h1 align="center" > We value energetic proffessionals with a passion for remedial treatment industry. We look forward to welcoming you on board our family.</h1>
				<br>
				<br>
				
				<!-- Contact -->
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