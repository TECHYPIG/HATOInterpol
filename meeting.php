<?php
   include('getinfo.php');
   if (array_key_exists("submit", $_POST)) {
    $message = $_POST['message'];
    $link = mysqli_connect("185.141.207.138", "blackro5_techypig", "K6BG!HXbx&*a", "blackro5_HATO");
    if (mysqli_connect_error()) {
        die ("Database Connection Error! Please contact a system administrator.");
    }
    $query = "INSERT INTO tbl_meetingnotes (`userid`, `note`) VALUES ('".mysqli_real_escape_string($link, $userid)."','".mysqli_real_escape_string($link, $message)."');";
    
    mysqli_query($link, $query);}
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
                              <div class="col-xl-6 col-md-12">
                                 <div class="card new-cust-card">
                                    <div class="card-header">
                                       <h5>Meeting Notes</h5>
                                       <div class="card-header-right">
                                          <ul class="list-unstyled card-option">
                                             <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                                             <li><i class="feather icon-maximize full-card"></i></li>
                                             <li><i class="feather icon-minus minimize-card"></i></li>
                                             <li><i class="feather icon-refresh-cw reload-card"></i></li>
                                             <li><i class="feather icon-chevron-left open-card-option"></i></li>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="card-block">





                                                                <?php
                                            
                                            $query = "SELECT * FROM `tbl_meetingnotes` WHERE active='1'";
                                            $result = mysqli_query($link, $query);
                                                
                                            while($query2=mysqli_fetch_array($result))
                                            {		
                                                $auserid = $query2['userid'];
                                                $users = "SELECT * FROM `users` WHERE id=$auserid";
                                                $result1 = mysqli_query($link, $users);
                                                $row = mysqli_fetch_array($result1);
                                                echo "<div class='align-middle m-b-35'>";
                                                echo "<img src=".$row['avatar']." alt='user image' class='img-radius img-40 align-top m-r-15'>";
                                                echo "<div class='d-inline-block'>";
                                                echo "<h6>".$query2['note']."</h6>";
                                                echo "<p class='text-muted m-b-0'>".$row['username']."</p>";
                                                echo "<a href='meeting.php?annouceid=".$query2['id']."'><i class='feather icon-trash-2 f-w-600 f-16 text-c-red'></i></a></div></div>";       
                                        
                                        }
                                                ?>
                                       <form method="post">    
                                          <input type="text" name="message" class="form-control thresold-i" placeholder="Type your meeting note" maxlength="40">    
                                          <button name="submit" type="submit" value="announce" class="btn waves-effect waves-light btn-primary btn-block">Add Meeting Note</button>  
                                       </form>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-xl-6 col-md-12">
                                 <div class="card new-cust-card">
                                    <div class="card-header">
                                       <h5>Promotions</h5>
                                       <div class="card-header-right">
                                          <ul class="list-unstyled card-option">
                                             <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                                             <li><i class="feather icon-maximize full-card"></i></li>
                                             <li><i class="feather icon-minus minimize-card"></i></li>
                                             <li><i class="feather icon-refresh-cw reload-card"></i></li>
                                             <li><i class="feather icon-chevron-left open-card-option"></i></li>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="card-block">
                                       <div class="align-middle m-b-35">
                                          <img src="jpg/avatar-2.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                          <div class="d-inline-block">
                                             <a href="#!">
                                                <h6>Alex Thompson</h6>
                                             </a>
                                             <p class="text-muted m-b-0">Cheers!</p>
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