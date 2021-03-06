<?php
include('getinfo.php');

$numisu = "0";
$numjo = "0";
$numto = "0";
$numsooc = "0";

$chaisu = "0";
$chajo = "0";
$chato = "0";
$chasooc = "0";



?>

<!DOCTYPE html>
<html lang="en">
	<!-- Mirrored from colorlib.com/polygon/admindek/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:07:52 GMT -->
	<!-- Added by HTTrack -->
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<!-- /Added by HTTrack -->
	<head>
		<title>GTA | HATO Dashboard</title>
		<!--[if lt IE 10]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="description" content="" />
		<meta name="keywords" content="">
		<meta name="author" content="" />
		
		<link rel="icon" href="https://colorlib.com/polygon/admindek/files/assets/images/favicon.ico" type="image/x-icon">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">
		
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/waves.min.css" type="text/css" media="all">
		<link rel="stylesheet" type="text/css" href="css/feather.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome-n.min.css">
		<link rel="stylesheet" href="css/chartist.css" type="text/css" media="all">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/widget.css">
	</head>
	<body>
		<div class="loader-bg">
			<div class="loader-bar"></div>
		</div>
		<div id="pcoded" class="pcoded">
			<div class="pcoded-overlay-box"></div>
			<div class="pcoded-container navbar-wrapper">
				<?php include("navigation.php");?>
						<div class="pcoded-content">
							<div class="page-header card">
								<div class="row align-items-end">
									<div class="col-lg-8">
										<div class="page-header-title">
											<i class="feather icon-home bg-c-blue"></i>
											<div class="d-inline">
												<h5>HATO | Dashboard</h5>
												<span>GrandTheftArma</span>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="page-header-breadcrumb">
											<ul class=" breadcrumb breadcrumb-title">
												<li class="breadcrumb-item">
													<a href="index.html"><i class="feather icon-home"></i></a>
												</li>
												<li class="breadcrumb-item"><a href="#!">HATO | Dashboard</a> </li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="pcoded-inner-content">
								<div class="main-body">
									<div class="page-wrapper">
										<div class="page-body">
											<div class="row">
												<div class="col-xl-3 col-md-6">
													<div class="card prod-p-card card-green">
														<div class="card-body" style="background-color: #36393F;">
															<div class="row align-items-center m-b-30">
																<div class="col">
																	<h6 class="m-b-5 text-white">Incident Support Units</h6>
																	<h3 class="m-b-0 f-w-700 text-white"><?= $numisu ?></h3>
																</div>
																<div class="col-auto">
																	<i class="fas fa-users text-c-green f-18"></i>
																</div>
															</div>
															<p class="m-b-0 text-white"><span class="label label-primary m-r-10">+<?= $chaisu ?></span>From Previous Week</p>
														</div>
													</div>
												</div>
												<div class="col-xl-3 col-md-6">
													<div class="card prod-p-card card-yellow">
														<div class="card-body"style="background-color: #36393F;">
															<div class="row align-items-center m-b-30">
																<div class="col">
																	<h6 class="m-b-5 text-white">Junior Traffic Officers</h6>
																	<h3 class="m-b-0 f-w-700 text-white"><?= $numjo ?></h3>
																</div>
																<div class="col-auto">
																	<i class="fas fa-check-square text-c-yellow f-18"></i>
																</div>
															</div>
															<p class="m-b-0 text-white"><span class="label label-primary m-r-10">+<?= $chajo ?></span>From Previous Week</p>
														</div>
													</div>
												</div>
												<div class="col-xl-3 col-md-6">
													<div class="card prod-p-card card-blue">
														<div class="card-body"style="background-color: #36393F;">
															<div class="row align-items-center m-b-30">
																<div class="col">
																	<h6 class="m-b-5 text-white">Traffic Officer</h6>
																	<h3 class="m-b-0 f-w-700 text-white"><?= $numto ?></h3>
																</div>
																<div class="col-auto">
																	<i class="fas fa-car text-c-blue f-18"></i>
																</div>
															</div>
															<p class="m-b-0 text-white"><span class="label label-primary m-r-10">+<?= $chato ?></span>From Previous Week</p>
														</div>
													</div>
												</div>
												<div class="col-xl-3 col-md-6">
													<div class="card prod-p-card card-red">
														<div class="card-body"style="background-color: #36393F;">
															<div class="row align-items-center m-b-30">
																<div class="col">
																	<h6 class="m-b-5 text-white">Senior Officer On Call</h6>
																	<h3 class="m-b-0 f-w-700 text-white"><?= $numsooc ?></h3>
																</div>
																<div class="col-auto">
																	<i class="fas fa-bullhorn text-c-purple f-18"></i>
																</div>
															</div>
															<p class="m-b-0 text-white"><span class="label label-primary m-r-10">+<?= $chasooc ?></span>From Previous Month</p>
														</div>
													</div>
												</div>
												<div class="col-xl-4 col-md-12">
													<div class="card latest-update-card">
														<div class="card-header">
															<h5>Announcements</h5>
															<div class="card-header-right">
																<ul class="list-unstyled card-option">
																	<li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
																	<li><i class="feather icon-maximize full-card"></i></li>
																	<li><i class="feather icon-minus minimize-card"></i></li>
																	<li><i class="feather icon-refresh-cw reload-card"></i></li>
																	<li><i class="feather icon-trash close-card"></i></li>
																	<li><i class="feather icon-chevron-left open-card-option"></i></li>
																</ul>
															</div>
														</div>
														<div class="card-block">
															<div class="scroll-widget">
																<div class="latest-update-box">
																	<div class="row p-t-20 p-b-30">
																		<div class="col-auto text-right update-meta p-r-0">
																			<img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/15/15297df118970822e37933cc13249a9d98828ea7_full.jpg" alt="user image" class="img-radius img-40 align-top m-r-15 update-icon">
																		</div>
																		<div class="col p-l-5">
																			<a href="#!">
																				<h6>RTO Applications Are Open</h6>
																			</a>
																			<p class="text-muted m-b-0">Wong Jr</p>
																		</div>
																	</div>
																	<div class="row p-b-30">
																		<div class="col-auto text-right update-meta p-r-0">
																			<i class="feather icon-briefcase bg-c-red update-icon"></i>
																		</div>
																		<div class="col p-l-5">
																			<a href="#!">
																				<h6>HATO vs NHS postponed</h6>
																			</a>
																			<p class="text-muted m-b-0">beechie</p>
																		</div>
																	</div>
																	<div class="row p-b-30">
																		<div class="col-auto text-right update-meta p-r-0">
																			<i class="feather icon-check f-w-600 bg-c-green update-icon"></i>
																		</div>
																		<div class="col p-l-5">
																			<a href="#!">
																				<h6>HATO vs NHS Event</h6>
																			</a>
																			<p class="text-muted m-b-0">beechie</p>
																		</div>
																	</div>
																	<div class="row p-b-30">
																		<div class="col-auto text-right update-meta p-r-0">
																			<img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/15/15297df118970822e37933cc13249a9d98828ea7_full.jpg" alt="user image" class="img-radius img-40 align-top m-r-15 update-icon">
																		</div>
																		<div class="col p-l-5">
																			<a href="#!">
																				<h6>Wong Jr Made T/M</h6>
																			</a>
																			<p class="text-muted m-b-0">Wong Jr</p>
																		</div>
																	</div>
																	<div class="row p-b-30">
																		<div class="col-auto text-right update-meta p-r-0">
																			<i class="feather icon-briefcase bg-c-red update-icon"></i>
																		</div>
																		<div class="col p-l-5">
																			<a href="#!">
																				<h6>beechie Made O/M</h6>
																			</a>
																			<p class="text-muted m-b-0">beechie</p>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-auto text-right update-meta p-r-0">
																			<i class="feather icon-check f-w-600 bg-c-green update-icon"></i>
																		</div>
																		<div class="col p-l-5">
																			<a href="#!">
																				<h6>Maxi Steps Down</h6>
																			</a>
																			<p class="text-muted m-b-0">BenS</p>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xl-4 col-md-6">
													<div class="card latest-update-card">
														<div class="card-header">
															<h5>Useful Links</h5>
															<div class="card-header-right">
																<ul class="list-unstyled card-option">
																	<li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
																	<li><i class="feather icon-maximize full-card"></i></li>
																	<li><i class="feather icon-minus minimize-card"></i></li>
																	<li><i class="feather icon-refresh-cw reload-card"></i></li>
																	<li><i class="feather icon-trash close-card"></i></li>
																	<li><i class="feather icon-chevron-left open-card-option"></i></li>
																</ul>
															</div>
														</div>
														<div class="card-block">
															<div class="scroll-widget">
																<div class="latest-update-box">
																	<div class="row p-t-20 p-b-30">
																		<div class="col-auto text-right update-meta p-r-0">
																			<i class="b-primary update-icon ring"></i>
																		</div>
																		<div class="col p-l-5">
																			<a href="#!">
																				<h6>HATO Handbook</h6>
																			</a>
																			<p class="text-muted m-b-0">HATO Rules and Requirements <a href="#!" class="text-c-blue"> More</a></p>
																		</div>
																	</div>
																	<div class="row p-b-30">
																		<div class="col-auto text-right update-meta p-r-0">
																			<i class="b-primary update-icon ring"></i>
																		</div>
																		<div class="col p-l-5">
																			<a href="#!">
																				<h6>Suggestion Form</h6>
																			</a>
																			<p class="text-muted m-b-0">Have a suggestion? <a href="#!" class="text-c-blue"> More</a></p>
																		</div>
																	</div>
																	<div class="row p-b-30">
																		<div class="col-auto text-right update-meta p-r-0">
																			<i class="b-success update-icon ring"></i>
																		</div>
																		<div class="col p-l-5">
																			<a href="#!">
																				<h6>Feedback Form</h6>
																			</a>
																			<p class="text-muted m-b-0">Give Someone Feedback <a href="#!" class="text-c-green"> More</a></p>
																		</div>
																	</div>
																	<div class="row p-b-30">
																		<div class="col-auto text-right update-meta p-r-0">
																			<i class="b-danger update-icon ring"></i>
																		</div>
																		<div class="col p-l-5">
																			<a href="#!">
																				<h6>LOA Form</h6>
																			</a>
																			<p class="text-muted m-b-0">Fill out an LOA Form <a href="#!" class="text-c-red"> More</a></p>
																		</div>
																	</div>
																	<div class="row p-b-30">
																		<div class="col-auto text-right update-meta p-r-0">
																			<i class="b-primary update-icon ring"></i>
																		</div>
																		<div class="col p-l-5">
																			<a href="#!">
																				<h6>Unblacklist Appeal</h6>
																			</a>
																			<p class="text-muted m-b-0">Make an Unblacklist Appeal <a href="#!" class="text-c-blue"> More</a></p>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-auto text-right update-meta p-r-0">
																			<i class="b-success update-icon ring"></i>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xl-4 col-md-6">
													<div class="card latest-update-card">
														<div class="card-header">
															<h5>Latest Activity</h5>
															<div class="card-header-right">
																<ul class="list-unstyled card-option">
																	<li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
																	<li><i class="feather icon-maximize full-card"></i></li>
																	<li><i class="feather icon-minus minimize-card"></i></li>
																	<li><i class="feather icon-refresh-cw reload-card"></i></li>
																	<li><i class="feather icon-trash close-card"></i></li>
																	<li><i class="feather icon-chevron-left open-card-option"></i></li>
																</ul>
															</div>
														</div>
														<div class="card-block">
															<div class="scroll-widget">
																<div class="latest-update-box">
																	<div class="row p-t-20 p-b-30">
																		<div class="col-auto text-right update-meta p-r-0">
																			<img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/15/15297df118970822e37933cc13249a9d98828ea7_full.jpg" alt="user image" class="img-radius img-40 align-top m-r-15 update-icon">
																		</div>
																		<div class="col p-l-5">
																			<a href="#!">
																				<h6>Wong Jr Joined</h6>
																			</a>
																			<p class="text-muted m-b-0">76561198122734048</p>
																		</div>
																	</div>
																	<div class="row p-b-30">
																		<div class="col-auto text-right update-meta p-r-0">
																			<img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/15/15297df118970822e37933cc13249a9d98828ea7_full.jpg" alt="user image" class="img-radius img-40 align-top m-r-15 update-icon">
																		</div>
																		<div class="col p-l-5">
																			<a href="#!">
																				<h6>Wong Jr Joined</h6>
																			</a>
																			<p class="text-muted m-b-0">76561198122734048</p>
																		</div>
																	</div>
																	<div class="row p-b-30">
																		<div class="col-auto text-right update-meta p-r-0">
																			<img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/15/15297df118970822e37933cc13249a9d98828ea7_full.jpg" alt="user image" class="img-radius img-40 align-top m-r-15 update-icon">
																		</div>
																		<div class="col p-l-5">
																			<a href="#!">
																				<h6>Wong Jr Joined</h6>
																			</a>
																			<p class="text-muted m-b-0">76561198122734048</p>
																		</div>
																	</div>
																	<div class="row p-b-30">
																		<div class="col-auto text-right update-meta p-r-0">
																			<img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/15/15297df118970822e37933cc13249a9d98828ea7_full.jpg" alt="user image" class="img-radius img-40 align-top m-r-15 update-icon">
																		</div>
																		<div class="col p-l-5">
																			<a href="#!">
																				<h6>Wong Jr Joined</h6>
																			</a>
																			<p class="text-muted m-b-0">76561198122734048</p>
																		</div>
																	</div>
																	<div class="row p-b-30">
																		<div class="col-auto text-right update-meta p-r-0">
																			<img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/15/15297df118970822e37933cc13249a9d98828ea7_full.jpg" alt="user image" class="img-radius img-40 align-top m-r-15 update-icon">
																		</div>
																		<div class="col p-l-5">
																			<a href="#!">
																				<h6>Wong Jr Joined</h6>
																			</a>
																			<p class="text-muted m-b-0">76561198122734048</p>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-auto text-right update-meta p-r-0">
																			<img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/15/15297df118970822e37933cc13249a9d98828ea7_full.jpg" alt="user image" class="img-radius img-40 align-top m-r-15 update-icon">
																		</div>
																		<div class="col p-l-5">
																			<a href="#!">
																				<h6>Wong Jr Joined</h6>
																			</a>
																			<p class="text-muted m-b-0">76561198122734048</p>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="styleSelector"></div>
					</div>
				</div>
			</div>
		</div>
		<!--[if lt IE 10]>
		<div class="ie-warning">
			<h1>Warning!!</h1>
			<p>You are using an outdated version of Internet Explorer, please upgrade
				<br/>to any of the following web browsers to access this website.
			</p>
			<div class="iew-container">
				<ul class="iew-download">
					<li>
						<a href="http://www.google.com/chrome/">
							<img src="../files/assets/images/browser/chrome.png" alt="Chrome">
							<div>Chrome</div>
						</a>
					</li>
					<li>
						<a href="https://www.mozilla.org/en-US/firefox/new/">
							<img src="../files/assets/images/browser/firefox.png" alt="Firefox">
							<div>Firefox</div>
						</a>
					</li>
					<li>
						<a href="http://www.opera.com">
							<img src="../files/assets/images/browser/opera.png" alt="Opera">
							<div>Opera</div>
						</a>
					</li>
					<li>
						<a href="https://www.apple.com/safari/">
							<img src="../files/assets/images/browser/safari.png" alt="Safari">
							<div>Safari</div>
						</a>
					</li>
					<li>
						<a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
							<img src="../files/assets/images/browser/ie.png" alt="">
							<div>IE (9 & above)</div>
						</a>
					</li>
				</ul>
			</div>
			<p>Sorry for the inconvenience!</p>
		</div>
		<![endif]-->
		<script data-cfasync="false" src="js/email-decode.min.js"></script><script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="js/jquery.min.js"></script>
		<script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="js/jquery-ui.min.js"></script>
		<script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="js/popper.min.js"></script>
		<script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="js/bootstrap.min.js"></script>
		<script src="js/waves.min.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
		<script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="js/jquery.slimscroll.js"></script>
		<script src="js/jquery.flot.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
		<script src="js/jquery.flot.categories.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
		<script src="js/curvedlines.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
		<script src="js/jquery.flot.tooltip.min.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
		<script src="js/chartist.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
		<script src="js/amcharts.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
		<script src="js/serial.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
		<script src="js/light.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
		<script src="js/pcoded.min.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
		<script src="js/vertical-layout.min.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
		<script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="js/custom-dashboard.min.js"></script>
		<script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="js/script.min.js"></script>
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
		<script type="d2d1d6e2f87cbebdf4013b26-text/javascript">
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			
			gtag('config', 'UA-23581568-13');
		</script>
		<script src="js/rocket-loader.min.js" data-cf-settings="d2d1d6e2f87cbebdf4013b26-|49" defer=""></script>
	</body>
	<!-- Mirrored from colorlib.com/polygon/admindek/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:08:25 GMT -->
</html>