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
								<li><a href="http://localhost:8080/exam/client">Destination</a></li>
								
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
								<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
									<!DOCTYPE html>
									<!DOCTYPE html>
									<html lang="en">
									<head>
										<title>Bootstrap Example</title>
										<meta charset="utf-8">
										<meta name="viewport" content="width=device-width, initial-scale=1">
										<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
										<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
										<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
									</head>
									<body>

										<div class="block">
											<h2>Book Your Trip</h2>
											<?php if($rute){ ?>
												<table class="table table-condensed" style="color:  #f8f1f14d;">
												<thead>
													<center>
														<tr>
															<th>Rute From</th>
															<th>Rute To</th>
															<th>Depart At</th>
															<th>Date</th>
															<th>Maskapai</th>
															<th>Price</th>
															<th>Action</th>
														</tr>
													</thead>
													<?php foreach ($rute as $r) { ?>
													<tr>
														<td><?php echo $r->rute_from ?></td>
														<td><?php echo $r->rute_to ?></td>
														<td><?php echo $r->depart_at ?></td>
														<td><?php echo $r->date ?></td>
														<td><?php echo $r->description ?></td>
														<td><?php echo $r->price ?></td>
														<td>
															<a href="<?php echo base_url('client/reservation/'.$r->id."/".$_GET['qty']); ?>"><button style="" type="button" class="btn btn-primary btn-sm">Book</button></a>														
													</tr>

													<?php } ?>
												</center>

											</table>
										<?php  }else{ ?>
										<f style="color:red">Destination Not Found!</f>
										<?php } ?>
											
										</div>

									</body>
									</html>


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


