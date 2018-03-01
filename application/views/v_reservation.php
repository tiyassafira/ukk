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
	<title>Traveler </title>
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
<body style="background-color:#282525;>

<div class="gtco-loader"></div>

<div>


	<!-- <div class="page-inner"> -->
		<nav class="gtco-nav" role="navigation">
			<div class="gtco-container">

				<div class="row">
					<div class="col-sm-4 col-xs-12">
						<div id="gtco-logo"><a href="index.html">Traveler <em>.</em></a></div>
					</div>
					<div class="col-xs-8 text-right menu-1">
						<ul>
							<li><a href="index.html">Destination</a></li>
							
						</li>
						<li><a href="pricing.html">Pricing</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>	
				</div>
			</div>

		</div>
	</nav>

	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" )">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">


					<div class="row">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
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

								<section class="tour section-wrapper container">
									<div class="container">
										<div class="row">
											<div class="col-sm-8" height="50px;">       
												<table class="table table-bordered" style="color:  white;">
													<thead>
														<?php foreach ($reserve as $r) { ?>
														<tr>
															<th colspan="4">Firstname</th>
															<th width="20%"><?php echo $r->date ?></th>
														</tr>
													</thead>
													<tbody>

														<tr>
															<td><?php echo $r->description ?> <br>
																(<?php echo $r->code ?>)</td>
																<td><?php echo $r->rute_from ?></td>
																<td><?php echo $r->rute_to ?></td>
																<td><?php echo $r->depart_at ?></td>
																<td><?php echo "Rp. ".$r->price ?></td>
															</tr>

															<tr>
																<td colspan="4" align="right">Total (<?php echo $this->uri->segment('4') ?>)</td>
																<td><?php echo "Rp. ".$r->price*$this->uri->segment('4'); ?></td>
																<?php } ?>
															</tr>
														</tbody>
													</table>
												</div>

											</div>
											<div class="row">
												<div class="col-md-8">
													<form action="<?php echo base_url('client/pesan') ?>" style="width:100%;" method="post">        
														<table class="table table-bordered">
															<thead>

																<tr>
																	<th colspan="5" bgcolor="#087aa2" style="color:white;font-size: 17px;">Isi Detail Penumpang</th>
																</tr>
																<tr>
																	<td colspan="5" bgcolor="#76aff7" style="color:white;font-size: 15px;">Informasi Kontak yang Dapat Dihubungi</td>
																</tr>
															</thead>
															<tbody>
																<div class="row" >
																	<tr><td style="border-right: none; color: white;" >
																		<div class="form-group">
																			<label for="pwd">Nama</label>
																			<?php foreach ($reserve as $s) { ?>
																			<input type="hidden" class="form-control" value="<?php echo $s->ruteid ?>" name="ruteid">
																			<input type="hidden" class="form-control" value="<?php echo $this->uri->segment('4') ?>" name="qty">
																			<?php } ?>
																			<input type="text" class="form-control" name="namapemesan">
																		</div>
																		<div class="form-group">
																			<label for="pwd">Alamat</label>
																			<input type="text" class="form-control" name="alamatpemesan">
																		</div></td>
																		<td style="border-left: none; color: white;"><div class="form-group">
																			<label for="usr">Kontak Email</label>
																			<input type="email" class="form-control" name="emailpemesan">
																		</div>
																		<div class="form-group">
																			<label for="pwd">No.Telp </label>
																			<input type="text" class="form-control" name="notelpemesan">
																		</div></td>
																	</tr>
																</div>

																<tr>
																	<td colspan="5" bgcolor="#76aff7" style="color:white;font-size: 15px;">Data Penumpang</td>
																</tr>
																<?php for($i=0; $i<$this->uri->segment(4); $i++){?> 
																<tr style="border-bottom: none; color: white;"><td style="border-right: none;border-bottom: none">
																	<div class="form-group">
																		<label for="sel1">Title</label>
																		<select class="form-control" name="jenkelpenumpang[<?php echo $i ?>]">
																			<option value="L">Tuan</option>
																			<option value="P">Nyonya</option>
																		</select>
																	</div></td>
																	<td style="border-left: none;border-bottom: none;"><div class="form-group">
																		<label for="usr">Nama</label>
																		<input type="text" class="form-control" name="namapenumpang[<?php echo $i ?>]">
																	</div>
																</td>
															</tr>
															<?php } ?>
															<tr>
																<td colspan="2">
																	<?php 
																	$x = 1;
																	foreach ($seat as $s) {
																		while($x <= $s->seat_qty) { ?>
																		<input class="chk" type="checkbox" value='<?php echo $x?>'  name="kursi[]" <?php foreach($filter as $f) {
																			if($x == $f->seat){ echo "disabled"; } } ?>>
																			<?php $x++;
																		} 
																	}


																?>
															</td>
														</tr>
														<tr style="border-top: none;">
															<td align="right" colspan="2" style="border-top: none;">
																<div class="form-group">
																	<button type="submit" class="btn btn-warning" style="width: 100px; height: 40px;">Pesan</button>
																</div>
															</td>
														</tr>
													</tbody>
												</table>
											</form>
										</div>
										<div class="col-sm-4">

										</div>
									</div>

								</section>
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