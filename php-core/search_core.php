<?php 
require_once("../config/configer.php");
if ( isset($_POST["searchData"]) ) {

$searchDataTarget = $_POST["searchData"]; 

$searchQuery = "SELECT * FROM dashbord WHERE phone LIKE '%$searchDataTarget%'";

$runDataQuery = mysqli_query($connect,$searchQuery);

if ($runDataQuery == true) {

	while ($db_data = mysqli_fetch_array($runDataQuery)) {

        $user_name = $db_data["fName"]." ".$db_data["lName"];
        $user_email = $db_data["email"];
        $user_phone = $db_data["phone"];
        $user_gender = $db_data["gender"];
        $user_addr = $db_data["addr"];
        $user_room_type = $db_data["room_type"];
        $user_arrive_date = $db_data["arrive_date"];
        $user_depart_date = $db_data["depart_date"]; 
        $user_token = $db_data["token"];
        $user_nid_no = $db_data["nid_no"];
        echo $user_token;
    }
     echo $user_token;
}else {
	echo "Sorry";
}





}else {
	?>
	<pre>
		<p style="margin-left: 50px;">Sorry, you are not able to conect this page. It's only work if send by new-booking.php.</p>
	</pre>

<?php } ?>
