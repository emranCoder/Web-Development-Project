<?php 
require_once("../config/configer.php");
if ( isset($_POST["roomEdit"]) ) {
$token = $_POST["roomEdit"];
$roomName = $_POST["roomName"];
$roomPrice = $_POST["roomPrice"];
$totalRoom = $_POST["totalRoom"];
$freeWifii = $_POST["freeWifi"];
$tv = $_POST["tv"];
$freeBreakfast = $_POST["freeBreakfast"];
$balcony = $_POST["balcony"];
$attachBathroom = $_POST["atachBathroom"];
$freeParking = $_POST["freeParking"];

$user_token = md5(sha1($fName).$u_email).rand();

$insertQuery = "UPDATE room SET roomName='$roomName',roomPrice='$roomPrice',freeWifii='$freeWifii',tv='$tv',balcony='$balcony',attachBathroom='$attachBathroom',freeParking= '$freeParking',freeBreakfast='$freeBreakfast', haveRoom='$totalRoom' WHERE token='$token'";

$runUpQuery = mysqli_query($connect,$insertQuery);
if ($runUpQuery==fasle) {

	header("location: ../edit-room.php?e90600b9e58032d4e84a55d6facaedf0&token=$token&editRoomActive");

 
}else {
 	header("location: ../edit-room.php?da94b62094880691bb01371e16fd36e3&trueNewBooking&token=&token$editRoomActive");
}
}else {
	?>
	<pre>
		<p style="margin-left: 50px;">Sorry, you are not able to conect this page. It's only work if send by new-booking.php.</p>
	</pre>

<?php } ?>

 


