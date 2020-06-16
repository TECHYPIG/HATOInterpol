<?php
   include('SteamLogin.php');
   	session_start();
   	$error = "";
   	//$rerror = $_GET['error'];
   	//$success = $_GET['success'];
   ?>
<html>
   <head>
      <title>Login | BRG Portal</title>
      <link rel="icon" href="img/hato_logo.png" type="image/x-icon"/>
      <link href="css/login.css" type="text/css" rel="stylesheet">
      <link href="css/fonts.html" type="text/css" rel="stylesheet">
   </head>
   <body>
      <section class="login">
         <div class="logo"><img class="logoimg" src="img/hato_logo.png"></div>
         <div class="error"><?php echo $error ?></div>
         <div class="form">
            <?php
               $url = SteamSignIn::genUrl('http://localhost/dashboard.php');
               
               $response = SteamSignIn::validate();
               
               if( empty( $response ) ) {
               
                   echo '<a href= '.$url.' ><img style="margin-left:10px; margin-top:20px; " src="https://steamcommunity-a.akamaihd.net/public/images/signinthroughsteam/sits_01.png" alt="SteamLogin" height="auto" width="auto"></a>';
               }
               else {
                   $link = mysqli_connect("185.141.207.138", "blackro5_techypig", "K6BG!HXbx&*a", "blackro5_HATO");
               if (mysqli_connect_error()) {
                   die ("Database Connection Error! Please contact a system administrator.");
               }
               $query = "SELECT * FROM `users` WHERE steamid = '".mysqli_real_escape_string($link, $response)."'";
               $result = mysqli_query($link, $query);
               $row = mysqli_fetch_array($result);
               
               if($row['id'] < 1){
                   $query = "INSERT INTO `users` (`steamid`) VALUES('".mysqli_real_escape_string($link, $response)."')";
                   mysqli_query($link, $query);
               }
               
                 //  $query = "UPDATE users SET steamid = '".$response."' WHERE id = '".mysqli_real_escape_string($link, $id)."'";
                  //         mysqli_query($link, $query);
                   echo '<div style="color:white; width:200px; text-align:center; margin-top:20px; font-weight: normal; ">'.$response.'</div>'; // Community ID
                   
                   $steamid = $response;
                   $steam_api = "F33E05D26D3B32A08300C83E6EA1C36E";
                   $ret = file_get_contents('http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=' . $steam_api . '&steamids=' . $steamid);
                   //$avatar =  ($ret, ["avatarfull"]);
                   $ret = json_decode($ret, true); //because of true, it's in an array
                   $avatar = $ret['response']['players'][0]['avatarfull'];
                   $steamlink = $ret['response']['players'][0]['profileurl'];
                   $username = $ret['response']['players'][0]['personaname'];
                   $query = "UPDATE users SET avatar = '".$avatar."' WHERE steamid = '".mysqli_real_escape_string($link, $steamid)."'";
                          mysqli_query($link, $query);
                          $query = "UPDATE users SET username = '".$username."' WHERE steamid = '".mysqli_real_escape_string($link, $steamid)."'";
                          mysqli_query($link, $query);
                          $_SESSION['id'] = $row['id'];
                          setcookie("id", $row['steamid'], time() + 60*60*24*365);
                      header("Location: dashboard.php");
               }
               
               ?>
            <div class="info">
               GrandTheftArma 2020
            </div>
         </div>
      </section>
   </body>
</html>