<?php
    if(isset($_GET['name'])){
        $name = $_GET['name'];
    }
    include 'student_data.php'; // includes the student data files

    foreach($students as $studKey => $studValue){
        if($name == $studKey){
            foreach($studValue as $descKey => $descValue){
                //echo $indKey . "<br>";
                if($descKey == "project_title"){
                    //echo "<h2>" . $descValue . "</h2>";
                    $project_title = $descValue;
                }else if($descKey == "full_name"){
                    //echo "<h4>" . $descValue . "</h4>";
                    $full_name = $descValue;
                }else if($descKey == "concentration"){
                    //echo "<h4>" . $descValue . "</h4>";
                    $concentration = $descValue;
                }else if($descKey == "advisor"){
                    //echo "<h4>" . $descValue . "</h4>";
                    $advisor = $descValue;
                }else if($descKey == "hometown"){
                    //echo "<span>" . $descValue . "</span>";
                    $hometown = $descValue;
                }else if($descKey == "student_logo"){
                    //echo "<span>" . $descValue . "</span>";
                    $student_logo = $descValue;
                }else if($descKey == "medium"){
                    $medium = $descValue;
                }else if($descKey == "running_time"){
                    $running_time = $descValue;
                }else if($descKey == "links"){
                    $links = $descValue;
                }else if($descKey == "statement"){
                    $statement = $descValue;
                }else if($descKey == "bio"){
                    $bio = $descValue;
                }else if($descKey == "student_websites"){
                    //echo "<h4>" . $descValue . "</h4>";
                    $student_websites = $descValue;
                }else if($descKey == "social_media_links"){
                    //echo "<h4>" . $descValue . "</h4>";
                    $social_media_links = $descValue;
                }else if($descKey == "img_files"){
                    $img_files = $descValue;
                }else if($descKey == "vimeo_urls"){
                    $vimeo_urls = $descValue;
                }
            }

        }
    }


?>

<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>DMD BFA 2020</title>
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

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

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
			<h1 id="colorlib-logo"><a href="index.html"><span>DMD BFA 2020</span></a></h1>
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

				 <a href="https://dmd.uconn.edu/"><img src="images/uconn_logo/navy_dmd_logo_bitmap.png" width="150"></a>
			</div>


		</aside>

		<div id="colorlib-main">

			<div class="colorlib-work">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3">
							<span class="heading-meta">2020 DMD BFA Exhibition—Storrs</span>
							<h2 class="colorlib-heading animate-box" data-animate-effect="fadeInLeft">Student Work</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8 image-content">
              <?php
              foreach($img_files as $img_file)
              {
                if($img_file == "rossi_morgan_04.jpg"){
                  echo "<div style=\"display: flex; justify-content: center;\"><img class=\"img-responsive\" src=\"images/work/" . $img_file . "\" alt=\"image\" width =\"450\" height=\"675\" /></div>";
                  echo "<br>";
                }else{
    							echo "<img class=\"img-responsive\" src=\"images/work/" . $img_file . "\" alt=\"image\" />";
                  echo "<br>";
                }
              }

              /*embed website*/
              /*if(isset($links)){
                foreach($links as $link){
                  echo "<iframe src=\"" . $link . "\" width=\"100%\" height=\"480\" frameborder=0></iframe>";
                  echo "<br>";
                }
              }*/

              foreach($vimeo_urls as $vimeo_url)
              {
              echo "<div style=\"padding:56.25% 0 0 0;position:relative;\"><iframe src=\"https://player.vimeo.com/video/" . $vimeo_url . "?title=0&byline=0&portrait=0\" style=\"position:absolute;top:0;left:0;width:100%;height:100%;\" frameborder=\"0\" allow=\"autoplay; fullscreen\" allowfullscreen></iframe></div><script src=\"https://player.vimeo.com/api/player.js\"></script>";
              echo "<br>";
              }
              ?>

						</div>
						<div class="col-md-4 sticky-parent">
							<div id="sticky_item">
								<div class="project-desc">
                  <?php
                  echo "<h3>" . $project_title . "</h3>";
                  echo "<h4>" . $full_name . "</h4>";
                  echo "<h4>" . $hometown . "</h4>";
                  echo "<h5>" . $concentration . "</h5>";
                  if($full_name == "Shawn Chen"){
                    echo "<h5>Sponsors: " . $advisor . "</h5>";
                  }else if($full_name == "Owen Boyle" || $full_name == "Morgan Rossi" || $full_name == "Justin Woods"){
                    echo "<h5>Advisors: " . $advisor . "</h5>";
                  }else{
                    echo "<h5>Advisor: " . $advisor . "</h5>";
                  }
                  echo "<br>";
                  if(isset($medium) && is_null($running_time) != 1){
                    echo "<span>" . $medium . "<br>" . $running_time . "</span>";
                    echo "<br>";
                  }else {
                    echo "<span>" . $medium . "</span>";
                    echo "<br>";
                  }
                  if(isset($links)){
                    echo "<span class=\"project_links\">";
                    foreach($links as $link){
                      echo "Link to <a href=\"" . $link . "\" target=\"_blank\"><i>" . $project_title . "</i></a>";
                      echo "<br>";
                    }
                    if ($full_name == "Emily Touch & Courtney Senior"){
                      echo "Password: <p style=\"text-transform:lowercase;display:inline\"><i>staraway</i></p>";
                    }
                    echo "</span>";
                    echo "<br>";
                  }

                  echo "<p>" . $statement . "</p>";
                  echo "<br>";

                  echo "<h6>Artist Bio</h6>";
                  /* echo "<img src=\"images/student_logo/" . $student_logo . "\" alt=\"" . $full_name . "\" />"; */
                  echo "<p>" . $bio . "</p>";

                  if(isset($student_websites)){
                    echo "<span class=\"personal_links\">";
                    foreach($student_websites as $student_website){
                      echo "<a href=\"" . $student_website . "\" target=\"_blank\">" . $student_website . "</a>";
                      echo "<br>";
                    }
                    echo "</span>";
                  }
                  if(isset($social_media_links)){
                    echo "<span class=\"personal_links\">";
                    foreach($social_media_links as $social_media_link){
                      echo "<a href=\"" . $social_media_link . "\" target=\"_blank\">" . $social_media_link . "</a>";
                      echo "<br>";
                    }
                    echo "</span>";
                  }

                  if(isset($student_websites) or isset($social_media_links)){
                    echo "<br>";
                  }
                  //next and previous buttons
                  $current = array_search($name, array_keys($students));
                  //echo $current;

                  //previous page
                  $prev = $current - 1;
                  if($prev >= 0 && $prev < count($students)) {
                    foreach($students as $studKey => $studValue){
                      if($prev == array_search($studKey, array_keys($students))){  // if the student index value is equal to the previous number from current page
                        //echo $studKey;
                        $prev = $studKey; // then set the previous equal to the previous key
                        echo "<span class=\"prev\"><a href=\"work-single.php?name=" . $prev . "\">Prev |</a></span>";
                      }
                    }
                  }else{
                    echo "<span class=\"prev |\">- |</span>";
                  }

                  //next page
                  $next = $current + 1;
                  if($next >= 0 && $next < count($students)) {
                    foreach($students as $studKey => $studValue){
                      if($next == array_search($studKey, array_keys($students))){
                        //echo $studKey;
                        $next = $studKey;
                        echo "<span class=\"next\"><a href=\"work-single.php?name=" . $next . "\">| Next</a></span>";
                      }
                    }
                  }else{
                    echo "<span class=\"next\">| -</span>";
                  }
                  ?>
									<!--<h2>Work Name</h2>-->
									<!--<span><a href="#">Logo</a>, <a href="#">Brading</a></span>-->
									<!--<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>-->
								</div>
							</div>
						</div>
					</div>
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
