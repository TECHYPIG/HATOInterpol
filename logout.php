<?php
if (isset($_COOKIE['id'])) {
    unset($_COOKIE['id']); 
    setcookie('id', null, -1, '/'); 
	
    header("Location: dashboard.php");
} else {
    header("Location: dashboard.php");
}
?>