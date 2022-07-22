<!-- roomm data delte -->
<?php 
require_once("../config/configer.php");


if ( isset($_REQUEST["deletRoomActive"]) ) {

	$u_token = $_REQUEST['token'];

$deletQuery = "DELETE FROM room WHERE token = '$u_token'";
$runUpQuery = mysqli_query($connect,$deletQuery);

if ( $runUpQuery == true ) {
	header("location: ../all-room.php?trueAllRooms&d58915ab459ea97ce5c96dce64b43f2b");
}else {
	 
	header("location: ../all-room.php?trueAllRooms&99dab95d38aa32e33bcb55098458491a");
}

}else {

	?>
	<pre>
		<p style="margin-left: 50px;">Sorry, you are not able to conect this page. It's only work if send by new-booking.php.</p>
	</pre>

<?php } ?>


<!-- stafs data delte -->

<?php 
require_once("../config/configer.php");


if ( isset($_REQUEST["deletStafsActive"]) ) {

	$u_token = $_REQUEST['token'];
$u_avatater_image = $_REQUEST['Aimage'];
$u_nid_fornt_image = $_REQUEST['nidImagefornt'];
$u_nid_back_image= $_REQUEST['nidImageBack'];


$deletQuery = "DELETE FROM stafs WHERE token = '$u_token'";
$runUpQuery = mysqli_query($connect,$deletQuery);

if ( $runUpQuery == true ) {
	unlink("../avater/$u_avatater_image");
	unlink("../nid/$u_nid_fornt_image");
	unlink("../nid/$u_nid_back_image");
	header("location: ../all-stafs.php?trueAllStafs&d58915ab459ea97ce5c96dce64b43f2b");
}else {
	 
	header("location: ../all-stafs.php?trueAllStafs&99dab95d38aa32e33bcb55098458491a");
}

}else if ( isset($_REQUEST["moveTrashdeletStafsActive"]) ){

	$u_token = $_REQUEST['token'];

	$updateData = "UPDATE stafs SET display='d-none' WHERE token = '$u_token'";
	$runUpQuery = mysqli_query($connect,$updateData);

	if ($runUpQuery == true) {

		header("location: ../all-stafs.php?trueAllStafs&d58915ab459ea97ce5c96dce64b43f2b");
	}else {
	 
	header("location: ../all-stafs.php?trueAllStafs&99dab95d38aa32e33bcb55098458491a");
}

}else if ( isset($_REQUEST["stafsTruth"]) && isset($_REQUEST["allAuthDelet"]) ){

	$updateData = "UPDATE stafs SET display='none' ";
	$runUpQuery = mysqli_query($connect,$updateData);

	if ($runUpQuery == true) {

		header("location: ../all-stafs.php?trueAllStafs&d58915ab459ea97ce5c96dce64b43f2b");
	}else {
	 
	header("location: ../all-stafs.php?trueAllStafs&99dab95d38aa32e33bcb55098458491a");
}

}elseif( isset($_REQUEST["recoverTrashrecoverStafsActive"]) ){

	$u_token = $_REQUEST['token'];

	$updateData = "UPDATE stafs SET display='0' WHERE token = '$u_token'";
	$runUpQuery = mysqli_query($connect,$updateData);

	if ($runUpQuery == true) {

		header("location: ../all-stafs.php?trueAllStafs&d58915ab459ea97ce5c96dce64b43f2b");
	}else {
	 
	header("location: ../all-stafs.php?trueAllStafs&99dab95d38aa32e33bcb55098458491a");
}

}else {

	?>
	<pre>
		<p style="margin-left: 50px;">Sorry, you are not able to conect this page. It's only work if send by new-booking.php.</p>
	</pre>

<?php } ?>

<!-- //Booking Delte -->
<?php 
require_once("../config/configer.php");

if ( isset($_REQUEST["deletBookinActive"]) ) {

$u_token = $_REQUEST['token'];
$u_avatater_image = $_REQUEST['Aimage'];
$u_nid_fornt_image = $_REQUEST['nidImagefornt'];
$u_nid_back_image= $_REQUEST['nidImageBack'];
$u_pdf_name= $_REQUEST['pdfName'];


$deletQuery = "DELETE FROM dashbord WHERE token = '$u_token'";
$runUpQuery = mysqli_query($connect,$deletQuery);

if ( $runUpQuery == true ) {
	unlink("../avater/$u_avatater_image");
	unlink("../nid/$u_nid_fornt_image");
	unlink("../nid/$u_nid_back_image");
	unlink("../cliet_ditals/$u_pdf_name");
	header("location: ../all-booking.php?trueAllBooking&d58915ab459ea97ce5c96dce64b43f2b");
}else {
	 
	header("location: ../all-booking.php?trueAllBooking&99dab95d38aa32e33bcb55098458491a");
}

}else if ( isset($_REQUEST["moveTrashdeletBookinActive"]) ){

	$u_token = $_REQUEST['token'];

	$updateData = "UPDATE dashbord SET display='none' WHERE token = '$u_token'";
	$runUpQuery = mysqli_query($connect,$updateData);

	if ($runUpQuery == true) {

		header("location: ../all-booking.php?trueAllBooking&d58915ab459ea97ce5c96dce64b43f2b");
	}else {
	 
	header("location: ../all-booking.php?trueAllBooking&99dab95d38aa32e33bcb55098458491a");
}

}elseif( isset($_REQUEST["recoverTrashrecoverBookinActive"]) ){

	$u_token = $_REQUEST['token'];

	$updateData = "UPDATE dashbord SET display='0' WHERE token = '$u_token'";
	$runUpQuery = mysqli_query($connect,$updateData);

	if ($runUpQuery == true) {

		header("location: ../all-booking.php?trueAllBooking&d58915ab459ea97ce5c96dce64b43f2b");
	}else {
	 
	header("location: ../all-booking.php?trueAllBooking&99dab95d38aa32e33bcb55098458491a");
}

}else if( isset($_REQUEST["allAuthDelet"]) ) {

	$updateData = "UPDATE dashbord SET display='none' ";
	$runUpQuery = mysqli_query($connect,$updateData);

	if ($runUpQuery == true) {

		header("location: ../all-booking.php?trueAllBooking&d58915ab459ea97ce5c96dce64b43f2b");
	}else {
	 
	header("location: ../all-booking.php?trueAllBooking&99dab95d38aa32e33bcb55098458491a");
}

}elseif ( isset($_REQUEST["allAuthRecover"]) ){

	$updateData = "UPDATE dashbord SET display='0' ";
	$runUpQuery = mysqli_query($connect,$updateData);

	if ($runUpQuery == true) {

		header("location: ../all-booking.php?trueAllBooking&d58915ab459ea97ce5c96dce64b43f2b");
	}else {
	 
	header("location: ../all-booking.php?trueAllBooking&99dab95d38aa32e33bcb55098458491a");
}

}elseif( isset($_REQUEST['4uthmubh15v14ct1v3t35']) ){

	$shoDataQuery = "SELECT * FROM dashbord WHERE display='none' ";
   	$runDataQuery = mysqli_query($connect,$shoDataQuery);

   if ($runDataQuery==true) {

    while ($db_data = mysqli_fetch_array($runDataQuery)) {

        $user_avater_image_first_person = $db_data["avater_first_person"];
        $user_nid_first_avater_fornt_photo = $db_data["nid_first_avater_fornt_photo"];
        $user_nid_first_avater_back_photo = $db_data["nid_first_avater_back_photo"];

        if ( $db_data == true ) {
			unlink("../avater/$user_avater_image_first_person");
			unlink("../nid/$user_nid_first_avater_fornt_photo");
			unlink("../nid/$user_nid_first_avater_back_photo");
			//unlink("../cliet_ditals/$u_pdf_name");
			header("location: ../all-booking.php?trueAllBooking&d58915ab459ea97ce5c96dce64b43f2b");

			$deletQuery = "DELETE  FROM dashbord WHERE display='none' ";
			$runUpQuery = mysqli_query($connect,$deletQuery);

		}else {
			 
			header("location: ../all-booking.php?trueAllBooking&99dab95d38aa32e33bcb55098458491a");
		}


		}
	}

}else {
	?>
	<pre>
		<p style="margin-left: 50px;">Sorry, you are not able to conect this page. It's only work if send by new-booking.php.</p>
	</pre>

<?php } ?>
