<!doctype html>
<html lang="en-US" style="overflow-x:hidden;">

<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
 		<link rel="shortcut icon" href="images/favicon1.png"/>
		<title>Tango Festival Doha Event</title>

		
		<link rel='stylesheet' href='css/datepicker.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/tribe-events.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/tribe-events-pro-theme.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/bootstrap.min.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/settings.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/widget-calendar-full.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/style.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/commerce.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/font-awesome.min.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/jquery.mb.YTPlayer.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/owl.carousel.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/owl.theme.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/nivo-lightbox.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/nivo-default.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/mediaelementplayer.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/layout.css' type='text/css' media='all'/>

		<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Dosis:100,300,400,700,900,300italic,400italic,700italic,900italic' type='text/css' media='all'/>
		
	</head>
	<body class="page-menu-transparent theme-light" style="padding-bottom:0px;">
		<!--preloader-->
        <div id="loading">
			<div id="loading-center">
				<div id="loading-center-absolute">
					<div class="object"></div>
					<div class="object"></div>
					<div class="object"></div>
					<div class="object"></div>
					<div class="object"></div>
					<div class="object"></div>
					<div class="object"></div>
					<div class="object"></div>
					<div class="object"></div>
					<div class="object"></div>
				</div>
			</div> 
		</div>
        <!--end preloader-->
		<div class="site">
			<header class="noo-header" id="noo-header">
				<div class="navbar-wrapper">
					<div class="navbar navbar-default navbar-static-top">
						<div class="container">
							<div class="navbar-header">
								<h1 class="sr-only">Home</h1>
								<a class="navbar-toggle collapsed" data-toggle="collapse" data-target=".noo-navbar-collapse">
									<span class="sr-only">Navigation</span>
									<i class="fa fa-bars"></i>
								</a>
								<a href="index.php" class="navbar-brand">
								 	<img class="noo-logo-img noo-logo-normal" src="images/logo.png" alt="">
									<img class="noo-logo-img noo-logo-floating" src="images/logo.png" alt="">
								</a>
							</div>  
							<?php
							    $currentFile = $_SERVER["PHP_SELF"];
							    $parts = Explode('/', $currentFile);
							    $page_name = $parts[count($parts) - 1];
							?>
							<nav class="collapse navbar-collapse noo-navbar-collapse">
								<ul class="navbar-nav sf-menu">

									<li class="<?php if($page_name == 'index.php') { ?>current-menu-item <?php } ?> menu-item-has-children">
										<a href="index.php">Home</a>
										<!-- <ul class="sub-menu">
											<li><a href="index-video.html">Home video</a></li>
											<li><a href="index-parallax.html">Home Parallax</a></li>
											<li><a href="index-revolution.html">Home Revolution</a></li>
										</ul> -->
									</li>
									<li class="<?php if($page_name == 'maesteos.php' || $page_name == 'maesteos_artist1.php' || $page_name == 'maesteos_artist2.php' || $page_name == 'maesteos_artist3.php' || $page_name == 'maesteos_artist4.php') { ?>current-menu-item <?php } ?> menu-item-has-children">
										<a href="maesteos.php">MAESTRO'S</a>
									</li>
									<li class="<?php if($page_name == 'workshop.php') { ?>current-menu-item <?php } ?> menu-item-has-children">
										<a href="workshop.php">WORKSHOPS</a>
										<!-- <ul class="sub-menu">
											<li><a href="workshop-detail.html">workshop-detail</a></li>
											<li><a href="highlights.html">highlights</a></li>
										</ul> -->
									</li>
									<li class="<?php if($page_name == 'register.php') { ?>current-menu-item <?php } ?> menu-item-has-children">
										<a href="register.php">REGISTER</a>
									</li>
									<li class="<?php if($page_name == 'about_doha.php') { ?>current-menu-item <?php } ?> menu-item-has-children"><a href="about_doha.php">ABOUT DOHA AND VENUE</a></li>
									<li class="<?php if($page_name == 'contact.php') { ?>current-menu-item <?php } ?> menu-item-has-children">
										<a href="contact.php">CONTACT US</a>
									</li>
								</ul>
							</nav>  
						</div>  
					</div>  
				</div>
			</header>