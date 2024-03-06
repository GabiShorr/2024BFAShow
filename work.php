<?php

include 'student_data.php'; // includes the student data files

?>

<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Limitless: 2024 UConn DMD BFA Senior Exhibition</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" type="image/png" href="images\other\Planet.png">
	<link rel="stylesheet" href="https://use.typekit.net/qvv4ucg.css">
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="border js-fullheight">
			<h1 id="colorlib-logo"><a href="index.html"><span>RESURGENCE 2024 UCONN DMD BFA SENIOR EXHIBITION</span></a></h1>
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li class="colorlib-active"><a href="work.php">Gallery</a></li>
					<li><a href="about.html">About</a></li>
					<!--<li><a href="services.html">Services</a></li>
					<li><a href="blog.html">Blog</a></li>-->
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</nav>

			<div class="colorlib-footer">
				<ul class="sm-icons">
					<li><a href="https://www.facebook.com/UConnDMD/"><i class="icon-facebook2"></i></a></li>
					<li><a href="https://twitter.com/UConnDMD"><i class="icon-twitter2"></i></a></li>
					<li><a href="https://www.instagram.com/uconndmd/?hl=en"><i class="icon-instagram"></i></a></li>
					<li><a href="https://www.linkedin.com/company/uconn-digital-media-and-design"><i class="icon-linkedin2"></i></a></li>
				</ul>

				<p><small><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> </span></small></p>

				 <a class="limitless-wordmark" href="https://dmd.uconn.edu/"><img src="images/uconn_logo/white_dmd_logo.png" width="150"></a>
			</div>

		</aside>

		<div id="colorlib-main">

			<div class="colorlib-work">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3">
							<span class="heading-meta">2024 UCONN DMD BFA SENIOR Exhibition</span>
							<h2 class="colorlib-heading animate-box" data-animate-effect="fadeInLeft">Gallery</h2>
						</div>
					</div>
					<div class="row">
						<?php
						foreach($students as $studKey => $studValue){
								echo "<div class=\"col-md-6 animate-box\" data-animate-effect=\"fadeInLeft\"><a href=\"work-single.php?name=" . $studKey . "\">";
								foreach($studValue as $descKey => $descValue){
									if($descKey == "img_files"){
										echo "<div class=\"project\" style=\"background-image: url(images/work/" . $descValue[0] . ");\">";
									}
								}
									echo "<div class=\"desc\">";
										echo "<div class=\"con\">";
											foreach($studValue as $descKey => $descValue){
												if($descKey == "project_title"){
													echo "<h3>". $descValue . "</h3>";
												}
											}
											foreach($studValue as $descKey => $descValue){
												if($descKey == "full_name"){
													echo "<h4>" . $descValue . "</h4>";
												}
											}
											foreach($studValue as $descKey => $descValue){
												if($descKey == "medium"){
													echo "<span>" . $descValue . "</span>";
												}
											}
										echo "</div>";
									echo "</div>";
								echo "</div>";
							echo "</a></div>";
						}
						?>
						<!--<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="project" style="background-image: url(images/work/albert_shay_01.jpg);">
								<div class="desc">
									<div class="con">
										<h3><a href="work-single.php?name=albert">None</a></h3>
                    <h4>Albert Shay</h4>
										<span>2D animation</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="project" style="background-image: url(images/work/boyle_owen_01.jpg);">
								<div class="desc">
									<div class="con">
										<h3><a href="work-single.php?name=boyle">None</a></h3>
                    <h4>Owen Boyle</h4>
										<span>3D animation</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="project" style="background-image: url(images/work/cesarini_emily_01.jpg);">
								<div class="desc">
									<div class="con">
										<h3><a href="work-single.php?name=cesarini">None</a></h3>
                    <h4>Emily Cesarini</h4>
										<span>2D puzzle game</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="project" style="background-image: url(images/work/cooper_emma_01.jpg);">
								<div class="desc">
									<div class="con">
										<h3><a href="work-single.php?name=cooper">None</a></h3>
                    <h4>Emma Cooper</h4>
										<span>3D virtual reality</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="project" style="background-image: url(images/work/kinney_julian_01.jpg);">
								<div class="desc">
									<div class="con">
										<h3><a href="work-single.php?name=kinney">Full Metal Cactus</a></h3>
                                        <h4>Julian Kinney</h4>
										<span>animation</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="project" style="background-image: url(images/work/robertson_bryanna_01.jpg);">
								<div class="desc">
									<div class="con">
										<h3><a href="work-single.php?name=robertson">Untitled</a></h3>
                                        <h4>Bryanna Robertson</h4>
										<span>animation</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="project" style="background-image: url(images/work/serrano_tyrrell_01.jpg);">
								<div class="desc">
									<div class="con">
										<h3><a href="work-single.php?name=serrano">Desert Dash and Tilt:Maze</a></h3>
                                        <h4>Tyrrell Serrano</h4>
										<span>interactive media, game</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="project" style="background-image: url(images/work/story_ryan_01.jpg);">
								<div class="desc">
									<div class="con">
										<h3><a href="work-single.php?name=story">Untitled</a></h3>
                                        <h4>Ryan Story</h4>
										<span>video, animation</span>
									</div>
								</div>
							</div>
						</div>
                        <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="project" style="background-image: url(images/work/tranh_linh_01.jpg);">
								<div class="desc">
									<div class="con">
										<h3><a href="work-single.php?name=tran">Breaking the Glass Ceiling of the Ad Industry: How the Mad Women Changed the Face of Advertising</a></h3>
                                        <h4>Linh Tranh</h4>
										<span>poster</span>
									</div>
								</div>
							</div>
						</div>
                        <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="project" style="background-image: url(images/work/zhou_andrew_01.jpg);">
								<div class="desc">
									<div class="con">
										<h3><a href="work-single.php?name=zhou">Umbra</a></h3>
                                        <h4>Andrew Zhou</h4>
										<span>website, interactive narrative</span>
									</div>
								</div>
							</div>
						</div>
                        <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="project" style="background-image: url(images/work/zilvitis_james_01.jpg);">
								<div class="desc">
									<div class="con">
										<h3><a href="work-single.php?name=zilvitis">HMS Triton Six Gun Frigate</a></h3>
                                        <h4>James Zilvitis Jr.</h4>
										<span>3d model</span>
									</div>
								</div>
							</div>
						</div>
					</div>-->
					<!--<div class="row">
						<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
							<ul class="pagination">
								<li class="disabled"><a href="#">&laquo;</a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">&raquo;</a></li>
							</ul>
						</div>
					</div>-->
				</div>
			</div>
		</div>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Sticky Kit -->
	<script src="js/sticky-kit.min.js"></script>


	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>
