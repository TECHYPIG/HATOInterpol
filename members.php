<?php
include('getinfo.php');
?>
<!DOCTYPE html>
<html lang="en">
	<!-- Mirrored from colorlib.com/polygon/admindek/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:07:52 GMT -->
	<!-- Added by HTTrack -->
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<!-- /Added by HTTrack -->
	<head>
		<title>GTA | HATO Members</title>
			<!--[if lt IE 10]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
			<![endif]-->
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
			<meta http-equiv="X-UA-Compatible" content="IE=edge" />
			<meta name="description" content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
			<meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
			<meta name="author" content="colorlib" />
			<link rel="icon" href="https://colorlib.com/polygon/admindek/files/assets/images/favicon.ico" type="image/x-icon">
			<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">
			<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
			<link rel="stylesheet" href="css/waves.min.css" type="text/css" media="all">
			<link rel="stylesheet" type="text/css" href="css/feather.css">
			<link rel="stylesheet" type="text/css" href="css/themify-icons.css">
			<link rel="stylesheet" type="text/css" href="css/icofont.css">
			<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
			<link rel="stylesheet" type="text/css" href="css/datatables.bootstrap4.min.css">
			<link rel="stylesheet" type="text/css" href="css/buttons.datatables.min.css">
			<link rel="stylesheet" type="text/css" href="css/responsive.bootstrap4.min.css">
			<link rel="stylesheet" type="text/css" href="css/style.css">
			<link rel="stylesheet" type="text/css" href="css/pages.css">
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
											<i class="feather icon-aperture bg-c-blue"></i>
											<div class="d-inline">
												<h5>HATO | Members</h5>
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
												<li class="breadcrumb-item"><a href="#!">HATO | Members</a> </li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="pcoded-inner-content">
								<div class="main-body">
									<div class="page-wrapper">
										<div class="page-body">

											<div class="card">
												<div class="card-header">
												   <h5>HATO Members</h5>
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
													<div class="dt-responsive table-responsive">
													   <table id="dt-ordering" class="table table-striped table-bordered nowrap">
															<thead>
																<tr>
																<th>Name</th>
																<th>Rank</th>
																<th>SteamID</th>
																<th>Status</th>
																<th>HPM</th>
																<th>Join Date</th>
																<th>Last Promo</th>
																<th>RTO</th>
																<th>Application</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																<td>beechie</td>
																<td>O/M</td>
																<td>76561198231775820</td>
																<td>Active</td>
																<td>30</td>
																<td>21/03/2019</td>
																<td>23/01/2020</td>
																<td></td>
																<td>LINK</td>
																</tr>
																<tr>
																	<td>Wong Jr</td>
																	<td>T/M</td>
																	<td>76561198122734048</td>
																	<td>Active</td>
																	<td>14</td>
																	<td>01/12/2019</td>
																	<td>21/5/2020</td>
																	<td></td>
																	<td>LINK</td>
																</tr>
																<tr>
																	<td>Arkan</td>
																	<td>T/M</td>
																	<td>76561198297490078</td>
																	<td>Active</td>
																	<td>10</td>
																	<td>30/03/2020</td>
																	<td>12/06/2020</td>
																	<td>Head</td>
																	<td>LINK</td>
																</tr>
																
															</tbody>
															<tfoot>
																<tr>
																	<th>Name</th>
																	<th>Rank</th>
																	<th>SteamID</th>
																	<th>Status</th>
																	<th>HPM</th>
																	<th>Join Date</th>
																	<th>Last Promo</th>
																	<th>RTO</th>
																	<th>Application</th>
																</tr>
															</tfoot>
														</table>
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
		<script type="51f4ca4c9d579679eacec5cd-text/javascript" src="js/jquery.min.js"></script>
		<script type="51f4ca4c9d579679eacec5cd-text/javascript" src="js/jquery-ui.min.js"></script>
		<script type="51f4ca4c9d579679eacec5cd-text/javascript" src="js/popper.min.js"></script>
		<script type="51f4ca4c9d579679eacec5cd-text/javascript" src="js/bootstrap.min.js"></script>
		<script src="js/waves.min.js" type="51f4ca4c9d579679eacec5cd-text/javascript"></script>
		<script type="51f4ca4c9d579679eacec5cd-text/javascript" src="js/jquery.slimscroll.js"></script>
		<script type="51f4ca4c9d579679eacec5cd-text/javascript" src="js/modernizr.js"></script>
		<script type="51f4ca4c9d579679eacec5cd-text/javascript" src="js/css-scrollbars.js"></script>
		<script src="js/jquery.datatables.min.js" type="51f4ca4c9d579679eacec5cd-text/javascript"></script>
		<script src="js/datatables.buttons.min.js" type="51f4ca4c9d579679eacec5cd-text/javascript"></script>
		<script src="js/jszip.min.js" type="51f4ca4c9d579679eacec5cd-text/javascript"></script>
		<script src="js/pdfmake.min.js" type="51f4ca4c9d579679eacec5cd-text/javascript"></script>
		<script src="js/vfs_fonts.js" type="51f4ca4c9d579679eacec5cd-text/javascript"></script>
		<script src="js/buttons.print.min.js" type="51f4ca4c9d579679eacec5cd-text/javascript"></script>
		<script src="js/buttons.html5.min.js" type="51f4ca4c9d579679eacec5cd-text/javascript"></script>
		<script src="js/datatables.bootstrap4.min.js" type="51f4ca4c9d579679eacec5cd-text/javascript"></script>
		<script src="js/datatables.responsive.min.js" type="51f4ca4c9d579679eacec5cd-text/javascript"></script>
		<script src="js/responsive.bootstrap4.min.js" type="51f4ca4c9d579679eacec5cd-text/javascript"></script>
		<script src="js/data-table-custom.js" type="51f4ca4c9d579679eacec5cd-text/javascript"></script>
		<script src="js/pcoded.min.js" type="51f4ca4c9d579679eacec5cd-text/javascript"></script>
		<script src="js/vertical-layout.min.js" type="51f4ca4c9d579679eacec5cd-text/javascript"></script>
		<script src="js/jquery.mcustomscrollbar.concat.min.js" type="51f4ca4c9d579679eacec5cd-text/javascript"></script>
		<script type="51f4ca4c9d579679eacec5cd-text/javascript" src="js/script.js"></script>
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="51f4ca4c9d579679eacec5cd-text/javascript"></script>
		<script type="51f4ca4c9d579679eacec5cd-text/javascript">
		   window.dataLayer = window.dataLayer || [];
		   function gtag(){dataLayer.push(arguments);}
		   gtag('js', new Date());
		   
		   gtag('config', 'UA-23581568-13');
		</script>
		<script src="js/rocket-loader.min.js" data-cf-settings="51f4ca4c9d579679eacec5cd-|49" defer=""></script>
	 </body>
	 <!-- Mirrored from colorlib.com/polygon/admindek/default/dt-plugin.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:09:26 GMT -->
  </html>