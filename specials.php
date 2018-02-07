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
									<h2>Specials</h2>
								</header>
							</section>
							<section class="box highlight">
								<header>
									<h2>WE OFFER $5 DISCOUNT FOR 10 TIMES VISIT</h2>
								</header>
								<div class="row">
									<div class="3u 12u(mobile)"></div>
                                </div>
								<p>
                                	<h2>Winter special</h2>
                                    <h3>$40 for Refiexology
                                    <br>+Free Steam Eye Mask
                                    <br>+Free Herbal Foot Spa</h3>
                                    <h3>Ask one of our friendly staff to get a discout card</h3><br>
                                </p>
                                <img src="images/specials.jpg" style="width:80%; height:80%" >
                                         
                            </section>
					</div>
				</div>
								
<!-- Footer -->
	<footer id="footer" class="container">
		<div class="row 200%">
			<div class="12u">
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