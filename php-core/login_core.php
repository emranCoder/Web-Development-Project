<?php 
	require_once("../config/configer.php");


$shoDataQuery = "SELECT * FROM profile";
   $runDataQuery = mysqli_query($connect,$shoDataQuery);

   if ($runDataQuery==true) {

    while ($db_data = mysqli_fetch_array($runDataQuery)) {
    	define('username', $db_data["user_name"]);
		define('password', $db_data["user_pwd"]);


$inputed_user_name = $_POST['login_username'];
$inputed_user_pwd = $_POST['login_pwd'];
  
}
}
echo username;
if ( trim(username) == trim($inputed_user_name) && password == $inputed_user_pwd) {

if ( isset($_REQUEST['checked']) ) {
	
	$cookie_name = md5(sha1("admin")."password");
	$cookie_value = sha1(md5($inputed_user_pwd));
//671ac2e226599bf091f84f1738b96715
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
}else {
	
	session_start();
	$_SESSION['username']='admin';
}

	header('location:../index.php?homeTrue');
}else {
	header('location:../login.php?loginFalse');
}


 ?>