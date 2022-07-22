<?php 
// Start the session
	session_start();
if ( isset($_SESSION['LAST_ACTIVITY']) ) {
	if ( (time() - $_SESSION['LAST_ACTIVITY'] > 3600) ) {

    // last request was more than 30 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
    }
}
$_SESSION['LAST_ACTIVITY'] = time(); 
 ?>
<?php 
	
	$cookie_name = md5(sha1("admin")."password");

	if ( isset($_COOKIE[$cookie_name]) || isset($_SESSION['username']) ) {
		
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta name="description" content="Free Web Dashboard">
	<meta name="robots" content="Index, Designer Erman, Emran Alam" />
	<meta name="keywords" content="CMS, Emran Alam, Designer Emran,De Dashboard, Dashboard, Emran Dashboard, Freelancer Emran,">
	<meta name="author" content="Designer Emran, Emran Alam, Emran, Freelancer Emran">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DE-Dashboard</title>
	<link rel="canonical" href="http://desgineremran.epizy.com" />
	<link rel="icon" type="image/x-icon" href="image/favicon.ico">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.5.2-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/de-font.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link href="css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<header>
	<nav class="de_nav navbar navbar-expand-lg navbar-light bg-light fixed-top">
		<div class="a_c">
			<button class="btn de-btn slide-bar ripple">
				<i class="fas fa-bars"></i>
			</button>
			<div class="de_s_menu">
				<div class="admin_img">
					<img src="image/emran.jpg">
					<h2>Emran Alam</h2>
					<p>CEO</p>
				</div>

				<div class="admin_control ">
					<span><span class="de-toltips">Profile</span><a href="profile.php?prfile=true"><i class="far fa-user-circle a_c_i"></i></a></span>
					<span><span class="de-toltips">Email</span><i class="far fa-envelope a_c_i"></i></span>
					<span><span class="de-toltips">Calender</span><a href="calender.php?calenderTrue"><i class="fas fa-calendar-week a_c_i"></i></a></span>
					<span><span class="de-toltips">Lock</span><a href="php-core/logout_core.php?"><i class="fas fa-lock a_c_i"></i></a></span>
				</div>
				<ul class="admin-ul navbar-nav">
					<li class="admin-li nav-item ripple"><a class="nav-link active" href="index.php"><i class="fas fa-home"></i><span style="margin-left: 21px;">Home</span></a></li>

					<li class="admin-li nav-item ripple"><a class="nav-link" href="checkOut.php?checkoutTrue"><i class="fas fa-shopping-cart"></i><span style='<?php if (isset($_REQUEST["checkoutTrue"])) {
								echo "color:black";
							} ?>;margin-left: 21px;'>Check Out</span></a></li>
					
					<li class="admin-li nav-item" onclick="sAuActive(0)"><a class="nav-link"><i class="fas fa-user"></i><span class="main-head" style='<?php if (isset($_REQUEST["trueAllBooking"]) || isset($_REQUEST["trueNewBooking"]) ) {
								echo "color:#000000c4;";
								echo "font-weight: 600";
							} ?>'>Booking</span><p class="hidden-menu-active"><?php if (isset($_REQUEST["trueNewBooking"]) || isset($_REQUEST["trueAllBooking"]) || isset($_REQUEST["editB00kingActive"])) {
								echo "-";
							}else{
								echo "+";
							} ?></p></a>
						<ul class="sub_admin_ul navbar-nav" style='<?php if (isset($_REQUEST["trueNewBooking"]) || isset($_REQUEST["trueAllBooking"]) || isset($_REQUEST["editB00kingActive"])) {
								echo "display:block";
							}else{
								echo "display: none";
							} ?>'>
							<li  class="admin-li nav-item"><a style='<?php if (isset($_REQUEST["trueAllBooking"])) {
								echo "color:black";
							} ?>' class="nav-link" href="all-booking.php?trueAllBooking"><?php if (isset($_REQUEST["trueAllBooking"])) {
								echo "-";
							} ?><span style='<?php if (isset($_REQUEST["trueAllBooking"])) {
								echo "margin-left: 19px";
							} ?>'>All Booking</span></a></li>
							<li  class="admin-li nav-item"><a class="nav-link" href="new-booking.php?trueNewBooking" style='<?php if (isset($_REQUEST["trueNewBooking"])) {
								echo "color:black";
							} ?>'><?php if (isset($_REQUEST["trueNewBooking"])) {
								echo "-";
							} ?><span style='<?php if (isset($_REQUEST["trueNewBooking"])) {
								echo "margin-left: 15px";
							} ?>' >Add Booking</span></a></li>
							<li  class="admin-li nav-item"><a class="nav-link" href="#editB00kingActive" style='<?php if (isset($_REQUEST["editB00kingActive"])) {
								echo "color:black";
							} ?>'><?php if (isset($_REQUEST["editB00kingActive"])) {
								echo "-";
							} ?><span style='<?php if (isset($_REQUEST["editB00kingActive"])) {
								echo "margin-left: 15px";
							} ?>' >Edit Booking</span></a></li>
						</ul>
					</li>

					<li class="admin-li nav-item" onclick="sAuActive(1)"><a class="nav-link"><i class="fas fa-user-friends"></i><span class="main-head" style='<?php if (isset($_REQUEST["trueAllRooms"]) || isset($_REQUEST["trueAddRoom"]) ) {
								echo "color:#000000c4;";
								echo "font-weight: 600";
							} ?>'>Rooms</span><p class="hidden-menu-active"><?php if (isset($_REQUEST["trueAddRoom"]) || isset($_REQUEST["trueAllRooms"]) || isset($_REQUEST["editRoomActive"])) {
								echo "-";
							}else{
								echo "+";
							} ?></p></a>
						<ul class="sub_admin_ul navbar-nav" style='<?php if (isset($_REQUEST["trueAddRoom"]) || isset($_REQUEST["trueAllRooms"]) || isset($_REQUEST["editRoomActive"])) {
								echo "display:block";
							}else{
								echo "display: none";
							} ?>'>
							<li  class="admin-li nav-item"><a style='<?php if (isset($_REQUEST["trueAllRooms"])) {
								echo "color:black";
							} ?>' class="nav-link" href="all-room.php?trueAllRooms"><?php if (isset($_REQUEST["trueAllRooms"])) {
								echo "-";
							} ?><span style='<?php if (isset($_REQUEST["trueAllRooms"])) {
								echo "margin-left: 19px";
							} ?>'>All Rooms</span></a></li>
							<li  class="admin-li nav-item"><a class="nav-link" href="add-room.php?trueAddRoom" style='<?php if (isset($_REQUEST["trueAddRoom"])) {
								echo "color:black";
							} ?>'><?php if (isset($_REQUEST["trueAddRoom"])) {
								echo "-";
							} ?><span style='<?php if (isset($_REQUEST["trueAddRoom"])) {
								echo "margin-left: 15px";
							} ?>' >Add Room</span></a></li>
							<li  class="admin-li nav-item"><a class="nav-link" href="#editRoomActive" style='<?php if (isset($_REQUEST["editRoomActive"])) {
								echo "color:black";
							} ?>'><?php if (isset($_REQUEST["editRoomActive"])) {
								echo "-";
							} ?><span style='<?php if (isset($_REQUEST["editB00kingActive"])) {
								echo "margin-left: 15px";
							} ?>' >Edit Rooms</span></a></li>
						</ul>
					</li>

					<li class="admin-li nav-item" onclick="sAuActive(2)"><a class="nav-link"><i class="far fa-building"></i><span class="main-head">Departments</span><p class="hidden-menu-active"><?php if (isset($_REQUEST[""]) || isset($_REQUEST[""]) || isset($_REQUEST[""])) {
								echo "-";
							}else{
								echo "+";
							} ?></p></a>
						<ul class="sub_admin_ul navbar-nav" style="display: none;">
							<li class="admin-li nav-item"><a class="nav-link" href=""><span>All Bookingg</span></a></li>
							<li class="admin-li nav-item"><a class="nav-link" href=""><span>Add Booking</span></a></li>
							<li class="admin-li nav-item"><a class="nav-link" href=""><span>Edit Booking</span></a></li>
						</ul>
					</li>

					<li class="admin-li nav-item" onclick="sAuActive(3)"><a class="nav-link"><i class="fas fa-users"></i><span class="main-head" style='<?php if (isset($_REQUEST["trueAllStafs"]) || isset($_REQUEST["trueNewStafs"]) || isset($_REQUEST["trueEditStafs"]) ) {
								echo "color:#000000c4;";
								echo "font-weight: 600";
							} ?>'>Staffs</span><p class="hidden-menu-active"><?php if (isset($_REQUEST["trueNewStafs"]) || isset($_REQUEST["trueAllStafs"]) || isset($_REQUEST["trueEditStafs"])) {
								echo "-";
							}else{
								echo "+";
							} ?></p></a>
						<ul class="sub_admin_ul navbar-nav" style='<?php if (isset($_REQUEST["trueNewStafs"]) || isset($_REQUEST["trueAllStafs"]) || isset($_REQUEST["trueEditStafs"])) {
								echo "display:block";
							}else{
								echo "display: none";
							} ?>'>
							<li  class="admin-li nav-item"><a style='<?php if (isset($_REQUEST["trueAllStafs"])) {
								echo "color:black";
							} ?>' class="nav-link" href="all-stafs.php?trueAllStafs"><?php if (isset($_REQUEST["trueAllStafs"])) {
								echo "<font color='black'>-</font>";
							} ?><span style='<?php if (isset($_REQUEST["trueAllStafs"])) {
								echo "margin-left: 19px";
							} ?>'>All Staffs</span></a></li>
							<li  class="admin-li nav-item"><a class="nav-link" href="new-stafs.php?trueNewStafs" style='<?php if (isset($_REQUEST["trueNewStafs"])) {
								echo "color:black";
							} ?>'><?php if (isset($_REQUEST["trueNewStafs"])) {
								echo "<font color='black'>-</font>";
							} ?><span>Add Staffs</span></a></li>
							<li  class="admin-li nav-item"><a class="nav-link" href="#trueEditStafs" style='<?php if (isset($_REQUEST["editB00kingActive"])) {
								echo "color:black";
							} ?>'><?php if (isset($_REQUEST["trueEditStafs"])) {
								echo "<font color='black'>-</font>";
							} ?><span style='<?php if (isset($_REQUEST["trueEditStafs"])) {
								echo "margin-left: 15px; color: black;";
							} ?>' >Edit Staffs</span></a></li>
						</ul>
					</li>
					<li class="admin-li nav-item" onclick="sAuActive(4)" ><a class="nav-link"><i class="fas fa-trash-alt"></i><span class="main-head" style='<?php if (isset($_REQUEST["trueTrush"])) {
								echo "color:black";
							} ?>'>Trash</span><p class="hidden-menu-active"><?php if (isset($_REQUEST["bookingTrush"]) || isset($_REQUEST["stafsTrush"]) ) {
								echo "-";
							}else{
								echo "+";
							} ?></p></a>
						<ul class="sub_admin_ul navbar-nav" style='<?php if (isset($_REQUEST["bookingTrush"]) || isset($_REQUEST["stafsTrush"]) ) {
								echo "display:block";
							}else{
								echo "display: none";
							} ?>'>
							<li  class="admin-li nav-item"><a href="trash.php?trueTrush&bookingTrush" style='<?php if (isset($_REQUEST["bookingTrush"])) {
								echo "color:black";
							} ?>' class="nav-link" ><?php if (isset($_REQUEST["bookingTrush"])) {
								echo "-";
							} ?><span style='<?php if (isset($_REQUEST["bookingTrush"])) {
								echo "margin-left: 19px";
							} ?>'>Booking Trash </span></a></li>
							<li  class="admin-li nav-item"><a class="nav-link" href="staf-trash.php?stafsTrush" style='<?php if (isset($_REQUEST["stafsTrush"])) {
								echo "color:black";
							} ?>'><?php if (isset($_REQUEST["stafsTrush"])) {
								echo "-";
							} ?><span style='<?php if (isset($_REQUEST["stafsTrush"])) {
								echo "margin-left: 15px";
							} ?>' >Stafs Trash</span></li></a>
							
						</ul>
					</a>
					</li>
				</ul>
			</div>
		</div>

		<a href="index.php" class="navbar-brand header_logo">
			<img src="image/logo.png">
		</a>
		<ul class="navbar-nav d-flex justify-content-end main-ul ">
			<li class="nav-item" id="c_f_s"><i class="fas fa-expand head-i" style="margin-right: 0px; font-weight: 400;"></i></li>
			<li class="nav-item"><i class="far fa-bell head-i"></i></li>
			<li class="nav-item"><a class="u_profile" ><img src="image/emran.jpg"></a>
	  		<div class="dropdown-menu de-dropdown-profile" aria-labelledby="dropdownMenuButton">
			  	<a class="dropdown-item" href="profile.php?prfile=true"><i class="fas fa-user-circle logout-icon"></i>Profile</a>
			    <a class="dropdown-item" href="php-core/logout_core.php?"><i class="fas fa-power-off logout-icon"></i>Log Out</a>
				</div>
			</li>
			<li class="nav-item"><i class="fas fa-cog head-i"></i></li>
		</ul>
	</nav>
</header>
<?php
  }else {
  header('location: login.php');
}

 ?>