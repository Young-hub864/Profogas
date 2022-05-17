<!DOCTYPE html>

<html class="no-js">
<head>
	<title>Profogas</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="format-detection" content="telephone=no">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/font-awesome5.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/main.css" class="color-switcher-link">
	<link rel="stylesheet" href="css/shop.css" class="color-switcher-link">
	<link rel="stylesheet" href="css/chester.css">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->

</head>

<body>

	<!--div class="preloader">
		<div class="preloader_image"></div>
	</div-->

	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<div class="widget widget_search">
			<form method="get" class="searchform search-form" action="">
				<div class="form-group">
					<input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
				</div>
				<button type="submit" class="btn">Search</button>
			</form>
		</div>
	</div>
	<div id="team-form" class="ds modal">
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<div class="form-wrapper ls rounded">
						<form class="contact-form" method="post" action="">
							<div class="row c-mb-20">
								<div class="col-12 form-title text-center form-builder-item">
									<div class="header title">
										<h4><span class="thin">Contact</span> me</h4>
									</div>
								</div>
							</div>
							<div class="row c-mb-20">
								<div class="col-sm-12">
									<div class="form-group has-placeholder">
										<label for="name333">Full Name <span class="required">*</span></label>
										<input type="text" aria-required="true" size="30" value="" name="name" id="name333" class="form-control" placeholder="Your name">
									</div>
								</div>
								<div class="col-sm-12">
									<div class="form-group has-placeholder">
										<label for="phone35533">Email address<span class="required">*</span></label>
										<input type="tel" aria-required="true" size="30" name="phone" id="phone35533" class="form-control" placeholder="Phone Number">
									</div>
								</div>
							</div>
							<div class="row c-mb-20">
								<div class="col-sm-12">
									<div class="form-group has-placeholder">
										<label for="message333">Message</label>
										<textarea aria-required="true" rows="3" cols="45" name="message" id="message333" class="form-control" placeholder="Message"></textarea>
									</div>
								</div>
							</div>
							<div class="row c-mb-20">
								<div class="col-sm-12 mb-0 mt-10 text-center">
									<div class="form-group">
										<input class="btn btn-gradient" type="submit" value="Contact me">
									</div>
								</div>
							</div>
						</form>
					</div>

				</div>
			</div>


		</div>


	</div>


	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls p-normal">
			<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
			<!--
		<ul class="list-unstyled">
			<li>Message To User</li>
		</ul>
		-->

		</div>
	</div><!-- eof .modal -->

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->

			<!--topline section visible only on small screens|-->

			<div class="header_absolute">
				<section class="page_topline ls s-borderbottom c-my-10 d-lg-none">
					<div class="container-fluid">
						<div class="row align-items-center">
							<div class="col-8 text-left">
								<span class="social-icons">
									<a href="#" class=" icon-styled bordered round fs-20  " title="facebook"><i class="fab fa-facebook-f"></i></a>
									<a href="#" class=" icon-styled bordered round fs-20  " title="telegram"><i class="fab fa-telegram-plane"></i></a>
									<a href="#" class=" icon-styled bordered round fs-20  " title="linkedin"><i class="fab fa-linkedin-in"></i></a>

								</span>
							</div>
							<div class="col-4 text-right">
								<!--modal search-->
								<div>
									<a href="#" class="search_modal_button">
										<i class="fa fa-search"></i>
									</a>
								</div>

							</div>
						</div>
					</div>
				</section>
				<!--eof topline-->

				<!-- header with three Bootstrap columns - left for logo, center for navigation and right for includes-->
				<?php include 'nav.php' ?>
			</div>