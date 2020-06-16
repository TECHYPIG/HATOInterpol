<?php
   include('getinfo.php');
   if (array_key_exists("notify", $_GET)) {
    $notify =  $_GET['notify'];
    if(!empty($notify)){
        $query = "SELECT * FROM `tbl_members` WHERE id='".mysqli_real_escape_string($link, $notify)."'";
        $result = mysqli_query($link, $query);
        $row = mysqli_fetch_array($result);

// Replace the URL with your own webhook url
$url = "https://discordapp.com/api/webhooks/722290349141131294/JbR4tdAz0DN4tkxKq7KoMQoHsdt_6ckQLmLK1X6ysfvjdCdslZvbSv1XCrMniuHT1Uya";

$hookObject = json_encode([
    /*
     * The general "message" shown above your embeds
     */
    "content" => "Activity Warning!",
    /*
     * The username shown in the message
     */
    "username" => "GTA | HATO",
    /*
     * The image location for the senders image
     */
    "avatar_url" => "https://i.imgur.com/jsG61mQ.png",
    /*
     * Whether or not to read the message in Text-to-speech
     */
    "tts" => false,
    /*
     * File contents to send to upload a file
     */
    // "file" => "",
    /*
     * An array of Embeds
     */
    "embeds" => [
        /*
         * Our first embed
         */
        [
            // Set the title for your embed
            "title" => "".$row['username']."",

            // The type of your embed, will ALWAYS be "rich"
            "type" => "rich",

            // A description for your embed
            "description" => "Your HATO hours are lower than they should be. Please increase your hours as soon as possible to avoid getting demoted/kicked. Your hours are shown below:",

            // The URL of where your title will be a link to
            "url" => "",

            /* A timestamp to be displayed below the embed, IE for when an an article was posted
             * This must be formatted as ISO8601
             */
            "timestamp" => "",

            // The integer color to be used on the left side of the embed
            "color" => hexdec( "E06666" ),

            // Footer object
            "footer" => [
                "text" => "",
                "icon_url" => ""
            ],

            // Image object
            "image" => [
                "url" => ""
            ],

            // Thumbnail object
            "thumbnail" => [
                "url" => ""
            ],

            // Author object
            "author" => [
                "name" => "GrandTheftArma",
                "url" => "https://grandtheftarma.com/"
            ],

            // Field array of objects
            "fields" => [
                // Field 1
                [
                    "name" => "05/06/2020",
                    "value" => "24",
                    "inline" => true
                ],
                // Field 2
                [
                    "name" => "28/05/2020",
                    "value" => "46",
                    "inline" => true
                ],
                // Field 3
                [
                    "name" => "07/05/2020",
                    "value" => "72",
                    "inline" => true
                ]
            ]
        ]
    ]

], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );

$ch = curl_init();

curl_setopt_array( $ch, [
    CURLOPT_URL => $url,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $hookObject,
    CURLOPT_HTTPHEADER => [
        "Content-Type: application/json"
    ]
]);

$response = curl_exec( $ch );
curl_close( $ch );


    }
}
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
                                 <div class="col-xl-12 col-md-6">
                                    <div class="card table-card">
                                       <div class="card-header">
                                          <h5>Members</h5>
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
                                          <div class="table-responsive">
                                             <table class="table table-hover m-b-0">
                                                <thead>
                                                   <tr>
                                                      <th>Name</th>
                                                      <th>Rank</th>
                                                      <th>HPM</th>
                                                      <th>Last Promo</th>
                                                      <th>Warning Points</th>
                                                      <th>Notify</th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                $query = "SELECT * FROM `tbl_members` WHERE active='1' AND hpm<'5'";
                                                $result = mysqli_query($link, $query);
                                                while($query2=mysqli_fetch_array($result))
                                                {
                                                    echo "<tr>";
                                                    echo "<td>".$query2['username']."</td>";
                                                    echo "<td>".$query2['rank']."</td>";
                                                    echo "<td></td>";
                                                    echo "<td>".$query2['last_promo']."</td>";
                                                    echo "<td></td>";
                                                    echo "<td><a href='lowactivity.php?notify=".$query2['id']."'>Notify</a></td>
                                                   </tr>";
                                                }
                                                ?>
                                                </tbody>
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