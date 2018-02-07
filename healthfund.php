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
			
		<style>
			#myDIV {
    			width: 100%;
    			padding: 50px 0;
    			text-align: center;
   		 		background-color: white;
    			margin-top: 20px;
			}
		</style>
			
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
										<h2>HEALTH FUND REBATE </h2>
									</header>
								</section>
						</div>
					</div>
					<div class="row 200%">
						<div class="12u">
							<!-- Features -->
								<section class="box features">
									<h2 class="major"><span>PROFESSIONAL REMEDIAL TREATMENTS</span></h2>
										<div>
											<div class="row">
												<div class="3u 12u(mobile)">
													<!-- Feature -->
														<section class="box feature">
															<a href="#" class="image featured"><img src="images/Headache_relief.png" alt="" style="width:270px;height:180px;" /></a>
															<h3><a href="#">Headache Relief</a></h3>
                                                            <br>(Health Fund Rebate Available)
                                                            <p><b>20 mins- $30</b></p>
															<p>A combination of seated and lying down treatment for headache relief, tensions, migraine and insomnia relief.</p>
														</section>
												</div>
												<div class="3u 12u(mobile)">
													<!-- Feature -->
														<section class="box feature">
															<a href="#" class="image featured"><img src="images/Neck_Movement.png"alt="" style="width:270px;height:180px;"/></a>
															<h3><a href="#">Neck Movement Recovery</a></h3>
                                                            <br>(Health Fund Rebate Available)
                                                            <p><b>30 mins- $40</b></p>
															<p>A seated treatment for stiff neck and shoulder, torticollis, which can recover the range of neck movement and to relieve pains.</p>
														</section>
												</div>
												<div class="3u 12u(mobile)">

													<!-- Feature -->
														<section class="box feature">
															<a href="#" class="image featured"><img src="images/Scatia.png" alt="" style="width:270px;height:180px;" /></a>
															<h3><a href="#">Sciatica Nerve Treatment</a></h3>
                                                            <br>(Health Fund Rebate Available)
                                                            <p><b>40 mins- $50</b></p>
															<p>A lying down treatment for lower back, hip pains, pinched nerve and scatia.
															<br>Irritation to the sciatic nerve causing pain and discomfort along one side of your lower to your legs/foot. It can be sharp or dull, constant or intermittent. It can result in sitting in one position for too long, muscle spasms, wearing high heels, obesity, slipped discs or bone spurs.</p>

<script src="js/div.js"></script>
														</section>
												</div>
											  	<div class="3u 12u(mobile)">

													<!-- Feature -->
														<section class="box feature">
															<a href="#" class="image featured"><img src="images/Remidial_massage.png" alt="" style="width:270px;height:180px;"/></a>
															<h3><a href="#">Remedial Massage</a></h3>
                                                            <br>(Health Fund Rebate Available)
                                                            <p><b>60 mins- $70</b></p>
															<p>Remedial Massage provides a healing treatment that can be gentle, strong, deep or shallow.
                                                            <br>Remedial massage holistically treats the whole body and traces the discomfort as far as possible back to the original cause, healing both the cause of the disorder as well as the symptoms.</p>
														</section>
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
            <script src="assets/js/show_text.js"></script>

	</body>
</html>