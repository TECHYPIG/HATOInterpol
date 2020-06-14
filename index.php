<?php
include('SteamLogin.php');
	session_start();
	$error = "";
	//$rerror = $_GET['error'];
	//$success = $_GET['success'];
	
    if (array_key_exists("submit", $_POST)) {
		$link = mysqli_connect("localhost", "blackro5_techypig", "K6BG!HXbx&*a", "blackro5_webusers");
		if (mysqli_connect_error()) {
			die ("Database Connection Error! Please contact a system administrator.");
		}
		
		
		if(!$_POST['username']) {
			$error .= "<span>Please enter your username.</span><br>";
		}

		if(!$_POST['password']) {
			$error .= "<span>Please enter your password.</span><br>";
		}

		if ($error !="") {
			$error = "<h4>There were errors in your form:</h4>".$error;
		} else {
			$query = "SELECT * FROM `users` WHERE username = '".mysqli_real_escape_string($link, $_POST['username'])."'";
			$result = mysqli_query($link, $query);
			$row = mysqli_fetch_array($result);
			if($row['verified'] == 0){
				$error .= "<span>Please verify your account via your email.</span><br>";
			}else{
				if($row['approved'] == 0){
				if (array_key_exists("id", $row)) {
					$hashedPassword = md5(md5($row['id']).$_POST['password']);
					if ($hashedPassword == $row['password']) {
						$_SESSION['id'] = $row['id'];

						
							setcookie("id", $row['hash'], time() + 60*60*24*365);
						
						//$_SESSION['logged_in'] = true;
						header("Location: dashboard.php");
					}
				}
				}else{
					$error = "<span>This website is currently under construction. If you think you should have access to this page please contact an admin. </span".$error;
				}
			}
		}
	}
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
			<?php
			if(empty($rerror)){}else{
				if($rerror == "1") {
					echo "<span>Your verifiction has failed due to problems with the email.</span><br>";
				}
				if($rerror == "2") {
					echo "<span>Your verifiction has failed due to problems with the your verificaiton code.</span><br>";
				}
				if($rerror == "3") {
					echo "<span>Your verifiction has failed due to problems with our database. Database Connection Error! Please contact a system administrator.</span><br>";
				}
				if($rerror == "4") {
					echo "<span>You need to login to your account before you can use that page.</span><br>";
				}
			}
			if(empty($success)){}else{
				if($success == "1") {
					echo "<span>Your account has already been verified. You can now login.</span><br>";
				}
				if($success == "2") {
					echo "<span>Your account has now been verified. You may now login. </span><br>";
				}
			}
			?>
			
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
                $query = "INSERT INTO `users` (`steamid`) VALUES('".mysqli_real_escape_string($link, $response)."')";
                mysqli_query($link, $query);
                $query = "SELECT * FROM `users` WHERE steamid = '".mysqli_real_escape_string($link, $response)."'";
                $result = mysqli_query($link, $query);
                $row = mysqli_fetch_array($result);

                if(empty($result)){
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
                    //$query = "UPDATE users SET avatar = '".$avatar."' WHERE id = '".mysqli_real_escape_string($link, $id)."'";
                    //        mysqli_query($link, $query);
                    //$query = "UPDATE users SET steamlink = '".$steamlink."' WHERE id = '".mysqli_real_escape_string($link, $id)."'";
                   //         mysqli_query($link, $query);
                    //("Refresh:0");
                }
                
                ?>
				<div class="info">
					 GrandTheftArma 2020
				</div>
			</div>
		</section>
	</body>
</html>