<?php 
require_once("../config/configer.php");
if ( isset($_POST["roomAdding"]) ) {

$roomName = $_POST["roomName"];
$roomPrice = $_POST["roomPrice"];
$totalRoom = $_POST["totalRoom"];

if ( isset($_POST["freeWifi"]) ) {
	$freeWifii = 'Yes';
}

if ( isset($_POST["tv"]) ) {
	$tv = 'Yes';
}

if ( isset($_POST["freeBreakfast"]) ) {
	$freeBreakfast = 'Yes';
}

if ( isset($_POST["balcony"]) ) {
	$balcony = 'Yes';
}

if ( isset($_POST["atachBathroom"]) ) {
	$attachBathroom = 'Yes';
}
if ( isset($_POST["freeParking"]) ) {
	$freeParking = 'Yes';
}
$token = md5($roomName).rand(11111,100100).sha1($roomPrice);

$user_token = md5(sha1($fName).$u_email).rand();
$pdffile_name = $user_name."-(stafs)".rand(1000,100000000000).".pdf";

$insertQuery = "INSERT INTO room ( roomName,roomPrice,freeWifii,tv,freeBreakfast,balcony,attachBathroom,freeParking,token,haveRoom ) VALUES ('$roomName','$roomPrice','$freeWifii','$tv','$freeBreakfast','$balcony', '$attachBathroom','$freeParking','$token','$totalRoom') ";

$runUpQuery = mysqli_query($connect,$insertQuery);
if ($runUpQuery==fasle) {

	header("location: ../add-room.php?e90600b9e58032d4e84a55d6facaedf0&pdfname=$user_token");

 
}else {
 	header("location: ../add-room.php?da94b62094880691bb01371e16fd36e3&trueNewBooking");
}
}else {
	?>
	<pre>
		<p style="margin-left: 50px;">Sorry, you are not able to conect this page. It's only work if send by new-booking.php.</p>
	</pre>

<?php } ?>

 


