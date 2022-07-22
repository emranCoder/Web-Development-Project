<?php 


    session_start();

    // last request was more than 30 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time 
	session_destroy();

	$cookie_name = md5(sha1("admin")."password");
 	setcookie($cookie_name, null,time() - (86400 * 60), '/');

 	header('location:../login.php?');

	
 ?>