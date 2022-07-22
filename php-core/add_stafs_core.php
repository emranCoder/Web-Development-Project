<?php 
require_once("../config/configer.php");
if ( isset($_POST["O_k_T_k_a_c"]) ) {

$fName = $_POST["fName"];
$lName = $_POST["lName"];
$user_name = $fName.' '.$lName ;
$u_email = $_POST["email"];
$u_nid_no = $_POST["nid_no"];
$u_number = $_POST['phone_number'];
$u_arrived_date = $_POST['arrived_date'];
$u_city = $_POST['city'];

// avater gender target
if (isset($_POST["gender"])) {
	if ( $_POST["gender"] == "Male") {
	$u_gender = "Male";
}elseif ($_POST["gender"] == "Female") {
	$u_gender = "Female";
}else {
	$u_gender ="Other";
}

}
$check_out_code = rand(100000,10000);
// //message start
//    $username = "emranalma";
//     $hash = "4f268f83c3891e010ff075d0a56c6579"; 
//     $numbers = $u_number; //Recipient Phone Number multiple number must be separated by comma
//     $message = "Welcome,".$user_name.". To De Hotel.Congratulations! You are now de hotel staffs.Your staffs ID is :".$check_out_code;


//     $params = array('app'=>'ws', 'u'=>$username, 'h'=>$hash, 'op'=>'pv', 'unicode'=>'1','to'=>$numbers, 'msg'=>$message);

//     $ch = curl_init();
//     curl_setopt($ch, CURLOPT_URL, "http://alphasms.biz/index.php?".http_build_query($params, "", "&"));
//     curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:application/json", "Accept:application/json"));
//     curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

//     $response = curl_exec($ch);
//     curl_close ($ch);
// //message send stop...


$u_address= $_POST["address"];

$location = "../avater/";
$location_nid = "../nid/";

//Avater Image....
if ( isset($_FILES["avater_first"]) ) {

	$u_avater_first= $_FILES["avater_first"];
	$u_avater_first_type= $_FILES["avater_first"]["type"];
	$u_avater_first_tmp_name= $_FILES["avater_first"]["tmp_name"];

	if ($u_avater_first_type == "image/jpeg") {

		$randFile_name = $user_name."-stafs-".rand().".jpeg";

	}else if ($u_avater_first_type == "image/png" ) {

		$randFile_name = $user_name."-stafs-".rand().".png";

	}else if ($u_avater_first_type == "image/jpg") {

		$randFile_name = $user_name."-stafs-".rand().".jpg";
	}
	move_uploaded_file($u_avater_first_tmp_name, $location."$randFile_name");
}

//Avater Nid 

if ( isset($_FILES["nid_back"]) && isset($_FILES["nid_front"]) ) {

	$u_avater_nid_fornt_first_type= $_FILES["nid_front"]["type"];
	$u_avater_nid_fornt_first_tmp_name= $_FILES["nid_front"]["tmp_name"];
	$u_avater_nid_back_first_type= $_FILES["nid_back"]["type"];
	$u_avater_nid_back_first_tmp_name= $_FILES["nid_back"]["tmp_name"];

	//File save code 
	if ( $u_avater_nid_fornt_first_type == "image/jpeg" && $u_avater_nid_back_first_type ="image/jpeg" ) {

		$randFile_nid_fornt_name = $user_name.rand()."-stafs-nid-"."_fornt.jpeg";
		$randFile_nid_back_name = $user_name.rand()."-stafs-nid-"."_back.jpeg";

	}else if ( $u_avater_nid_fornt_first_type == "image/png" && $u_avater_nid_back_first_type ="image/png" ) {

		$randFile_nid_fornt_name = $user_name.rand()."-stafs-nid-"."_fornt.png";
		$randFile_nid_back_name = $user_name.rand()."-stafs-nid-"."_back.png";

	}else if ($u_avater_nid_fornt_first_type == "image/jpg" && $u_avater_nid_back_first_type ="image/jpg" ) {

		$randFile_nid_fornt_name = $user_name.rand()."-stafs-nid-"."_fornt.jpg";
		$randFile_nid_back_name = $user_name.rand()."-stafs-nid-"."_back.jpg";

	}
	move_uploaded_file($u_avater_nid_fornt_first_tmp_name, $location_nid."$randFile_nid_fornt_name");
	move_uploaded_file($u_avater_nid_back_first_tmp_name, $location_nid."$randFile_nid_back_name");
}




$user_token = md5(sha1($fName).$u_email).rand();
$pdffile_name = $user_name."-(stafs)".rand(1000,100000000000).".pdf";

$insertQuery = "INSERT INTO stafs (fName,lName,email,phone,gender,addr,avater_first_person,arrive_date,depart_date,nid_first_avater_fornt_photo,nid_first_avater_back_photo,city,token, nid_no,staf_id) VALUES ('$fName','$lName','$u_email','$u_number','$u_gender','$u_address', '$randFile_name','$u_arrived_date','$u_depert_date','$randFile_nid_fornt_name','$randFile_nid_back_name','$u_city','$user_token','$u_nid_no ','$check_out_code') ";

$runUpQuery = mysqli_query($connect,$insertQuery);
if ($runUpQuery==fasle) {

	header("location: ../new-stafs.php?e90600b9e58032d4e84a55d6facaedf0&pdfname=$user_token");

 
}else {
 	header("location: ../new-stafs.php?da94b62094880691bb01371e16fd36e3&trueNewBooking");
}
}else {
	?>
	<pre>
		<p style="margin-left: 50px;">Sorry, you are not able to conect this page. It's only work if send by new-booking.php.</p>
	</pre>

<?php } ?>

 


