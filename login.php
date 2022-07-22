<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta name="description" content="Free Web Dashboard">
	<meta name="robots" content="Index, Designer Erman, Emran Alam" />
	<meta name="keywords" content="CMS, Emran Alam, Designer Emran,De Dashboard, Dashboard, Emran Dashboard, Freelancer Emran">
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
<body style="background: white;">
<section class="login-section">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-6 col-lg-6">
				<div class="login-h-image">
					<img src="image/bg-01.png">
				</div>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-6">
<?php
	require_once("config/configer.php");
	
	$shoDataQuery = "SELECT * FROM profile";
   $runDataQuery = mysqli_query($connect,$shoDataQuery);

   if ($runDataQuery==true) {

    while ($db_data = mysqli_fetch_array($runDataQuery)) {
 	 $user_name = $db_data["fName"]." ".$db_data["lName"];
 	$user_title = $db_data["profile_title"];
 	$user_addr = $db_data["address"];
 	$user_phone_no= $db_data["profile_phone_no"];
 	$user_email= $db_data["user_email"];
?>
				<form class="box login-form" action="php-core/login_core.php" method="POST" enctype="multipart/form-data">
					<div class="admin_img login-admin-image">
					<img src="image/emran.jpg">
					<h2><?php echo $user_name;?></h2>
					<p>Locked</p>
				</div>

<?php
    	}
    }
?>
					<div class="inputBox">
	                   <input type="text" name="login_username" required value="admin">
	                   <label>User Name*</label>
	                </div>
	                <div class="inputBox">
	                   <input type="password" name="login_pwd" required value="admin">
	                   <label>PassWord*</label>
	                </div>
	                  <div class="form-check">
   						<input type="checkbox" class="form-check-input" id="exampleCheck1" name="checked">
    					<label class="form-check-label text-secondary" for="exampleCheck1">Remamber Me.</label>
  					</div>
	                <input class="n_booking_s_btn login-submit-btn" type="SUBMIT" value="Login">
				</form>
			</div>
		</div>
	</div>
</section>
</body>
</html>