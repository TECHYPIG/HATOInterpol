<?php
session_start();
error_reporting(E_ALL);
if(isset($_COOKIE["id"])){ 
    $id = $_COOKIE["id"]; 
	$link = mysqli_connect("185.141.207.138", "blackro5_techypig", "K6BG!HXbx&*a", "blackro5_HATO");
		if (mysqli_connect_error()) {
			die ("Database Connection Error! Please contact a system administrator.");
		}
	$query = "SELECT * FROM `users` WHERE steamid = '".mysqli_real_escape_string($link, $id)."'";
	$result = mysqli_query($link, $query);
	$row = mysqli_fetch_array($result);
	$userid = $row['id'];
    $username = $row['username'];
    $rank = $row['rank'];
	$steamid = $row['steamid'];
	$avatar = $row['avatar'];
	}else{ 
        header("location: index.php"); 
    } 
	
	
	
	//$avatar = $ret['response']['players']['avatarfull'];
	//$avatar = 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/5d/5d009c49662575b813d7ac4531af3f3f457e4378_full.jpg';
	//echo $id;




?>