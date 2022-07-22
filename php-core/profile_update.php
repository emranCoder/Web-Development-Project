<?php 
require_once("../config/configer.php");

if ( isset($_REQUEST["c7cfe62dbef6905a0b1b1d595a5c2e92"]) ) {

$u_name = $_POST["U_name"];
$u_curent_pwd= $_POST["u_Curent_pwd"];
$user_new_pwd= $_POST["u_new_pwd"];

   $shoDataQuery = "SELECT * FROM profile";
   $runDataQuery = mysqli_query($connect,$shoDataQuery);

   if ($runDataQuery==true) {

    while ($db_data = mysqli_fetch_array($runDataQuery)) {
    	if ( $db_data["user_pwd"]== $u_curent_pwd ) {
    		
$insertQuery = "UPDATE profile  SET user_name='$u_name',user_pwd='$user_new_pwd' WHERE ID = '1'";

$runUpQuery = mysqli_query($connect,$insertQuery);
			if ($runUpQuery==fasle) {

				header("location: ../profile.php?prfile=true&pdfname=$user_token");

			 

			}else {
			 	header("location: ../profile.php?prfile=true$false&trueNewBooking");
			}
		}else {
			header("location: ../profile.php?prfile=true$false&trueNewBooking");
		}
	}
}

}else {
	?>
	<pre>
		<p style="margin-left: 50px;">Sorry, you are not able to conect this page. It's only work if send by new-booking.php.</p>
	</pre>

<?php } ?>

 


