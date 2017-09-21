<!doctype html>
<html lang="en-US">
	
<!-- Mirrored from tk-themes.net/html-wemusic/light/my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Aug 2017 10:03:30 GMT -->
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
 		<link rel="shortcut icon" href="images/favicon.png"/>
		<title>My Account | WeMusic - Music Band Event</title>

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

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
	</head>
	<body class="commerce-account theme-light">
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
								<a href="#" class="mobile-minicart-icon">
									<i class="fa fa-shopping-cart"></i><span>0</span>
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
									<li class="<?php if($page_name == 'maesteos.php') { ?>current-menu-item <?php } ?> menu-item-has-children">
										<a href="maesteos.php">MAESTOES</a>
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
									<li class="<?php if($page_name == 'members.php') { ?>current-menu-item <?php } ?> menu-item-has-children"><a href="members.php">ABOUT DOHA</a></li>
									<li class="<?php if($page_name == 'contact.php') { ?>current-menu-item <?php } ?> menu-item-has-children">
										<a href="contact.php">CONTACT US</a>
									</li>
								</ul>
							</nav>  
						</div>  
					</div>  
				</div>
			</header>
			<div class="noo-page-heading">
				<div class="container">
					<div class="noo-page-breadcrumb">
						<div class="breadcrumb-wrap">
 							<span><a href="#" class="home">Home</a></span><i>&#047;</i> <span><span>My Account</span></span>
 						</div>
					</div>
				</div> 
			</div>
			<div class="container-wrap">
				<div class="container">
					<div class="row">
						<div class="noo-main col-md-12">
 							<div class="commerce">
								<div class="col2-set" id="customer_login">
									<div class="col-1">
										<h2>Login</h2>
										<form class="login">
											<div class="form-row">
												<label for="username">
													Username or email address <span class="required">*</span>
												</label>
												<input type="text" class="input-text" name="username" id="username" value=""/>
											</div>
											<div class="form-row">
												<label for="password">
													Password <span class="required">*</span>
												</label>
												<input class="input-text" type="password" name="password" id="password"/>
											</div>
											<div class="form-row">
												<input type="submit" class="button" name="login" value="Login"/>
												<div class="inline">
													<input name="rememberme" type="checkbox" id="rememberme"/> Remember me
												</div>
											</div>
											<div class="lost_password">
												<a href="#">Lost your password?</a>
											</div>
										</form>
									</div>
									<div class="col-2">
										<h2>Register</h2>
										<form class="register">
											<div class="form-row">
												<label for="reg_email">
													Email address <span class="required">*</span>
												</label>
												<input type="email" class="input-text" name="email" id="reg_email" value=""/>
											</div>
											<div class="form-row">
												<label for="reg_password">
													Password <span class="required">*</span>
												</label>
												<input type="password" class="input-text" name="password" id="reg_password"/>
											</div>
											<div class="form-row">
												<input type="submit" class="button" name="register" value="Register"/>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>  
					</div> 
				</div> 
			</div>
<<<<<<< HEAD
		</div>  
		<?php include_once "footer.php";?>
=======
			<?php include_once "footer.php";?>
>>>>>>> b3f1bedaaaef81831dc94501b60e60cf3c15b9c7
