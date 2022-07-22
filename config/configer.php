<?php 

date_default_timezone_set("Asia/Dhaka");

// setcookie("userName","EmranAlam",time()+60);

$host = "localhost";
$dbUser = "emran@";
$dbPwd = "Emranemran1";
$dbName = "designeremran";
// $host = "sql208.epizy.com";
// $dbUser = "epiz_27980969";
// $dbPwd = "BLgX4MI7ikK";
// $dbName = "epiz_27980969_w409";

$connect = mysqli_connect($host,$dbUser,$dbPwd,$dbName);


 ?>
