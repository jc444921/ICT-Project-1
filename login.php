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
									<header>
										<h2>Logging Page will coming soon...</h2>
									</header>
									<p>Welcome to our unwinding We Care massage and natural therapy. 
                                    <br>Future Customer will checking their details, balance and appointment here.
                                    <br>For now, Your can check it by <a href="aboutus.php">contact us</a> or check your regist Email contents which send from us for confirm orders.
                                    <br>Sorry, for this issue, will coming soom.
									</p>
								</section>
						</div>
					</div>
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