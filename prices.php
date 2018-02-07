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
						<section class="box highlight">
                                <header style="align-content:center">
                                	<img src="images/logo.gif" alt="logo" style="width:20px;height:20px;margin-right:2px">
                                    <strong>WeCare Massage and Theraphy</strong>
									<h2>Prices List</h2>
								</header>
							</section>
						<img src="images/price list.jpg" style="width: 95%; height: 95%; margin-top: 20px">
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
	</div>
	</div>
<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.dropotron.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/skel-viewport.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>
    <script src="assets/js/show_text.js"></script>
		
	</body>
</html>