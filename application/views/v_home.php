<!DOCTYPE HTML>
<!--
	Aesthetic by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Traveler</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by GetTemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="GetTemplates.co" />

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

	<link href="" rel="stylesheet">
	
	<!-- Animate.css -->
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url() ?>gudang/frontend/css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="<?php echo base_url() ?>gudang/frontend/css/themify-icons.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>gudang/frontend/css/animate.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url() ?>gudang/frontend/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?php echo base_url() ?>gudang/frontend/css/magnific-popup.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?php echo base_url() ?>gudang/frontend/css/bootstrap-datepicker.min.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="<?php echo base_url() ?>gudang/frontend/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>gudang/frontend/css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo base_url() ?>gudang/frontend/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>gudang/frontend/css/login.css">

	<!-- Modernizr JS -->
	<script src="<?php echo base_url() ?>gudang/frontend/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>
<body>

	<div class="gtco-loader"></div>
	
	<div id="page">


		<!-- <div class="page-inner"> -->
		<nav class="gtco-nav" role="navigation">
			<div class="gtco-container">

				<div class="row">
					<div class="col-sm-4 col-xs-12">
						<div id="gtco-logo"><a href="index.html">Traveler <em>.</em></a></div>
					</div>
					<div class="col-xs-8 text-right menu-1">
						<ul>
							<li class="active treeview"><a>Destination</a></li>
							
							</li>
							<li><a href="pricing.html">Pricing</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>	
					</div>
				</div>

			</div>
		</nav>

		<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/img_bg_2.jpg)">
			<div class="overlay"></div>
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-12 col-md-offset-0 text-left">


						<div class="row row-mt-15em">
							<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
								<h1>Planing Trip To Anywhere in The World?</h1>	
							</div>
							<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
								<div class="form-wrap">
									<div class="tab">

										<div class="tab-content">
											<div class="tab-content-inner active" data-content="signup">
												<h3><center>Find Your Trip!</center></h3>


													<!-- <form action="<?php echo base_url('home/action')?>" method="POST">
														<div id="container-formlogin"></div>

													</div>

													<div class="container" >
														<label><b>Username</b></label>
														<input type="text" placeholder="Enter Username" name="uname" required>

														<label><b>Password</b></label>
														<input type="password" placeholder="Enter Password" name="psw" required>
														<input type="submit" value="Log In" name="submit" class="btn btn-primary">
														<label>
															<input type="checkbox"> Remember me
														</label>
														
													</div>
													</form> -->
											<!-- 		<div class="container" style="background-color:#f1f1f1" style="width: 281px;">
														<button type="button" class="cancelbtn">Cancel</button>
														<span class="psw">Forgot <a href="#">password?</a></span>
													</div> -->
												<!-- </div> -->
												<form action="<?php echo base_url('client/carirute') ?>" method="get">

												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="activities">Leaving From</label>
														<select name="from" id="activities" class="form-control">
															<?php foreach ($from as $f) { ?>
																<option value="<?php echo $f->rute_from ?>"><?php echo $f->rute_from ?></option>
															<?php } ?>
															
															
														</select>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="destination">Going To</label>
														<select name="to" id="destination" class="form-control">
															<?php foreach ($to as $t) { ?>
															<option value="<?php echo $t->rute_to ?>"><?php echo $t->rute_to ?></option>
															<?php } ?>
														</select>
													</div>
												</div>
												
												<div class="row form-group">
													<div class="col-md-12">
														<label for="date-start">Departure Date</label>
														<input type="text" id="date-start" name="date" class="form-control" value="mm/dd/yyyy " onBlur="if(this.value=='') this.value='mm/dd/yyyy '" onFocus="if(this.value =='mm/dd/yyyy ' ) this.value=''"> 
													</div>
													<div class="col-md-12 col-sm-6">
														<div class="form-group">
															<label>Quantity : </label>
															<select class="form-control border-radius" id="sel1" name="qty">
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
																<option value="4">4</option>
																<option value="5">5</option>
															</select>
													</div>
												</div>

												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary btn-block" value="Submit">
													</div>
												</div>
											</form>
										</div>

										
									</div>
								</div>
							</div>
						</div>
					</div>

					
				</div>
			</div>
		</div>
	</header>
	
	
	<!-- </div> -->

</div>

<div class="gototop js-top">
	<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

<!-- jQuery -->
<script src="<?php echo base_url() ?>gudang/frontend/js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="<?php echo base_url() ?>gudang/frontend/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url() ?>gudang/frontend/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="<?php echo base_url() ?>gudang/frontend/js/jquery.waypoints.min.js"></script>
<!-- Carousel -->
<script src="<?php echo base_url() ?>gudang/frontend/js/owl.carousel.min.js"></script>
<!-- countTo -->
<script src="<?php echo base_url() ?>gudang/frontend/js/jquery.countTo.js"></script>

<!-- Stellar Parallax -->
<script src="<?php echo base_url() ?>gudang/frontend/js/jquery.stellar.min.js"></script>

<!-- Magnific Popup -->
<script src="<?php echo base_url() ?>gudang/frontend/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url() ?>gudang/frontend/js/magnific-popup-options.js"></script>

<!-- Datepicker -->
<script src="<?php echo base_url() ?>gudang/frontend/js/bootstrap-datepicker.min.js"></script>


<!-- Main -->
<script src="<?php echo base_url() ?>gudang/frontend/js/main.js"></script>

</body>
</html>

