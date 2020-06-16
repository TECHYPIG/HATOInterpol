<nav class="navbar header-navbar pcoded-header">
					<div class="navbar-wrapper">
						<div class="navbar-logo" style="background-color: #FF9444;">
							<a href="dashboard.php">
							<img class="img-fluid" src="png/logo.png" alt="Theme-Logo" />
							</a>
							<a class="mobile-menu" id="mobile-collapse" href="#!">
							<i class="feather icon-menu icon-toggle-right"></i>
							</a>
							<a class="mobile-options waves-effect waves-light">
							<i class="feather icon-more-horizontal"></i>
							</a>
						</div>
						<div class="navbar-container container-fluid">
							<ul class="nav-left">
								<li>
									<a href="#!" onclick="if (!window.__cfRLUnblockHandlers) return false; javascript:toggleFullScreen()" class="waves-effect waves-light" data-cf-modified-d2d1d6e2f87cbebdf4013b26-="">
									<i class="full-screen feather icon-maximize"></i>
									</a>
								</li>
							</ul>
							<ul class="nav-right">
								<li class="user-profile header-notification">
									<div class="dropdown-primary dropdown">
										<div class="dropdown-toggle" data-toggle="dropdown">
											<img src="<?= $avatar ?>" class="img-radius" alt="User-Profile-Image">
											<span><?= $username ?></span>
											<i class="feather icon-chevron-down"></i>
										</div>
										<ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
											<li>
												<a href="#!">
												<i class="feather icon-settings"></i> Settings
												</a>
											</li>
											<li>
												<a href="#">
												<i class="feather icon-user"></i> Profile
												</a>
											</li>
											<li>
												<a href="email-inbox.html">
												<i class="feather icon-mail"></i> My Messages
												</a>
											</li>
											<li>
												<a href="auth-lock-screen.html">
												<i class="feather icon-lock"></i> Lock Screen
												</a>
											</li>
											<li>
												<a href="logout.php">
												<i class="feather icon-log-out"></i> Logout
												</a>
											</li>
										</ul>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</nav>
				<div class="pcoded-main-container">
					<div class="pcoded-wrapper">
						<nav class="pcoded-navbar">
							<div class="nav-list">
								<div class="pcoded-inner-navbar main-menu">
									<div class="pcoded-navigation-label">Navigation</div>
									<ul class="pcoded-item pcoded-left-item">
										<li class="">
											<a href="dashboard.php" class="waves-effect waves-dark">
											<span class="pcoded-micon">
											<i class="feather icon-home"></i>
											</span>
											<span class="pcoded-mtext">Dashboard</span>
											</a>
										</li>
										<li class="pcoded-hasmenu">
											<a href="javascript:void(0)" class="waves-effect waves-dark">
											<span class="pcoded-micon"><i class="feather icon-edit"></i></span>
											<span class="pcoded-mtext">Public Documents</span>
											</a>
											<ul class="pcoded-submenu">
											<li class="">
													<a href="https://sites.google.com/view/hato-handbook/home" class="waves-effect waves-dark">
													<span class="pcoded-mtext">HATO Handbook</span>
													</a>
												</li>
												<li class="">
													<a href="https://docs.google.com/spreadsheets/d/16FtbX2x1KvC4nNUgFNMt95bf6nXmNyDz1b9Tp6Bc0sE/preview#gid=1138938433" class="waves-effect waves-dark">
													<span class="pcoded-mtext">Public Roster</span>
													</a>
												</li>
												<li class="">
													<a href="https://docs.google.com/spreadsheets/d/16FtbX2x1KvC4nNUgFNMt95bf6nXmNyDz1b9Tp6Bc0sE/preview#gid=1249444206" class="waves-effect waves-dark">
													<span class="pcoded-mtext">Public Blacklist</span>
													</a>
												</li>
												<li class="">
													<a href="https://docs.google.com/forms/d/e/1FAIpQLSemQ2qGL8rH8o4c55tIzkjUf1irLUqAXiBBWMmalp06BleOFg/viewform" class="waves-effect waves-dark">
													<span class="pcoded-mtext">Public UnBlacklist</span>
													</a>
												</li>
												<li class="">
													<a href="https://docs.google.com/forms/d/e/1FAIpQLSdVy_yA1I16LXhgxFW7oNgJn6RJPgLmNeAma5NqitO2iA7OIA/viewform" class="waves-effect waves-dark">
													<span class="pcoded-mtext">LOA Form</span>
													</a>
												</li>
											</ul>
										</li>
									</ul>
									<?php
									if ($rank == 2 ||$rank == 3||$rank == 4 ){
										echo '
									<div class="pcoded-navigation-label">Recruitment & Training Officers</div>
									<ul class="pcoded-item pcoded-left-item">
										<li class="">
											<a href="rtointerpol.php" class="waves-effect waves-dark">
											<span class="pcoded-micon">
											<i class="feather icon-server"></i>
											</span>
											<span class="pcoded-mtext">RTO Interpol</span>
											</a>
										</li>
										<li class="pcoded-hasmenu">
											<a href="javascript:void(0)" class="waves-effect waves-dark">
											<span class="pcoded-micon"><i class="feather icon-edit"></i></span>
											<span class="pcoded-mtext">Interview Sheets</span>
											</a>
											<ul class="pcoded-submenu">
												<li class="">
													<a href="phaseone.php" class="waves-effect waves-dark">
													<span class="pcoded-mtext">Phase 1</span>
													</a>
												</li>
												<li class="">
													<a href="dashboard-crm.html" class="waves-effect waves-dark">
													<span class="pcoded-mtext">Phase 2</span>
													</a>
												</li>
											</ul>
										</li>
										<li class="">
											<a href="meeting.php" class="waves-effect waves-dark">
											<span class="pcoded-micon">
											<i class="feather icon-calendar"></i>
											</span>
											<span class="pcoded-mtext">Meeting Notes</span>
											</a>
										</li>
										<li class="">
											<a href="rtologs.php" class="waves-effect waves-dark">
											<span class="pcoded-micon">
											<i class="feather icon-briefcase"></i>
											</span>
											<span class="pcoded-mtext">RTO Logs</span>
											</a>
										</li>
									</ul>  '; }?>
									<?php
									if ($rank == 3||$rank == 4){
										echo '
									<div class="pcoded-navigation-label">Head Recruitment & Training Officer</div>
									<ul class="pcoded-item pcoded-left-item">
										<li class="">
											<a href="hrtointerpol.php" class="waves-effect waves-dark">
											<span class="pcoded-micon">
											<i class="feather icon-pie-chart"></i>
											</span>
											<span class="pcoded-mtext">H/RTO Interpol</span>
											</a>
										</li>
										<li class="">
											<a href="index.html" class="waves-effect waves-dark">
											<span class="pcoded-micon">
											<i class="feather icon-mail"></i>
											</span>
											<span class="pcoded-mtext">RTO Applications</span>
											</a>
										</li>
										<li class="pcoded-hasmenu">
											<a href="javascript:void(0)" class="waves-effect waves-dark">
											<span class="pcoded-micon"><i class="feather icon-briefcase"></i></span>
											<span class="pcoded-mtext">Archive</span>
											</a>
											<ul class="pcoded-submenu">
												<li class="">
													<a href="index.html" class="waves-effect waves-dark">
													<span class="pcoded-mtext">Recruitment Archive</span>
													</a>
												</li>
												<li class="">
													<a href="dashboard-crm.html" class="waves-effect waves-dark">
													<span class="pcoded-mtext">Management Archive</span>
													</a>
												</li>
											</ul>
										</li>
									</ul> '; }?>
									<?php 
									if ($rank == 4){
									echo '
									<div class="pcoded-navigation-label">Management Team</div>
									<ul class="pcoded-item pcoded-left-item">
										<li class="pcoded-hasmenu">
											<a href="javascript:void(0)" class="waves-effect waves-dark">
											<span class="pcoded-micon"><i class="feather icon-aperture rotate-refresh"></i></span>
											<span class="pcoded-mtext">HATO Interpol</span>
											</a>
											<ul class="pcoded-submenu">
												<li class="">
													<a href="members.php" class="waves-effect waves-dark">
													<span class="pcoded-mtext">Members</span>
													</a>
												</li>
												<li class="">
													<a href="lowactivity.php" class="waves-effect waves-dark">
													<span class="pcoded-mtext">Low Activity</span>
													</a>
												</li>
												<li class="">
													<a href="veterans.php" class="waves-effect waves-dark">
													<span class="pcoded-mtext">Veterans</span>
													</a>
												</li>
												<li class="">
													<a href="dashboard-crm.html" class="waves-effect waves-dark">
													<span class="pcoded-mtext">LOA</span>
													</a>
												</li>
												<li class="">
													<a href="dashboard-crm.html" class="waves-effect waves-dark">
													<span class="pcoded-mtext">Removed</span>
													</a>
												</li>
												<li class="">
													<a href="dashboard-crm.html" class="waves-effect waves-dark">
													<span class="pcoded-mtext">Blacklist</span>
													</a>
												</li>
											</ul>
										</li>
										<li class="pcoded-hasmenu">
											<a href="javascript:void(0)" class="waves-effect waves-dark">
											<span class="pcoded-micon"><i class="feather icon-calendar"></i></span>
											<span class="pcoded-mtext">Meeting</span>
											</a>
											<ul class="pcoded-submenu">
												<li class="">
													<a href="index.html" class="waves-effect waves-dark">
													<span class="pcoded-mtext">Hourlog</span>
													</a>
												</li>
												<li class="">
													<a href="promotions.php" class="waves-effect waves-dark">
													<span class="pcoded-mtext">Promotions</span>
													</a>
												</li>
												
											</ul>
										</li>
										<li class="">
													<a href="announcements.php" class="waves-effect waves-dark">
													<span class="pcoded-micon">
													<i class="feather icon-pie-chart"></i>
													</span>
													<span class="pcoded-mtext">Announcements</span>
													</a>
												</li>
									</ul>
								</div> ';}?>
							</div> 
						</nav>