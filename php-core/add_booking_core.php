<?php 
require_once("../config/configer.php");
if ( isset($_POST["O_k_T_k_a_c"]) ) {

$fName = $_POST["fName"];
$lName = $_POST["lName"];
$user_name = $fName.$lName ;
$user_names = $fName.' '.$lName ;
$u_email = $_POST["email"];


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

//avater phone number target
$u_number = $_POST["phone_number"];
//avater city number target
$u_city = $_POST["city"];
//avater arrived date target
$u_arrived_date = $_POST["arrived_date"];
//avater depert date target
$u_depert_date = $_POST["depert_date"];
//avater total person target
$u_t_p_n = $_POST["t_p_n"];


//avater room type target
if (isset($_POST["room_type"])) {
	if ( $_POST["room_type"] == "Single") {
	$u_room_type= "Single";

}elseif ($_POST["room_type"] == "Delux") {
	$u_room_type= "Delux";

}elseif ($_POST["room_type"] == "Double") {

	$u_room_type= "Double";

}else {
	$u_room_type= "Super Delux";
}
}
// room price 
$runDataQueryRoom = "SELECT * FROM room WHERE roomName='$u_room_type' ";
   $runDataQuery = mysqli_query($connect,$runDataQueryRoom);
   if ( $runDataQuery==true ) {
   while($data = mysqli_fetch_array($runDataQuery) ){
   			$roomPriceing = $data["roomPrice"];
		}
   }

$check_out_code = rand(1000,10000);
// // message send...
//  $username = "emranalma";
//     $hash = "4f268f83c3891e010ff075d0a56c6579"; 
//     $numbers = $u_number; //Recipient Phone Number multiple number must be separated by comma
//     $message = "Welcome, ".$user_names.". To De Hotel. Your ".$u_room_type." room is sucesfully booked.Your check out code is :".$check_out_code;

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

//avater image target
if ( isset($_FILES["avater_first"]) && isset($_FILES["avater_second"]) && isset($_FILES["avater_third"]) && isset($_FILES["avater_forth"]) ) {

	$u_avater_first_type= $_FILES["avater_first"]["type"];
	$u_avater_first_tmp_name= $_FILES["avater_first"]["tmp_name"];

	$u_avater_second_type= $_FILES["avater_second"]["type"];
	$u_avater_second_tmp_name= $_FILES["avater_second"]["tmp_name"];

	$u_avater_third_type= $_FILES["avater_third"]["type"];
	$u_avater_third_tmp_name= $_FILES["avater_third"]["tmp_name"];

	$u_avater_forth_type= $_FILES["avater_forth"]["type"];
	$u_avater_forth_tmp_name= $_FILES["avater_forth"]["tmp_name"];

	//FIle save code 
	if ($u_avater_first_type == "image/jpeg" &$u_avater_second_type ="image/jpeg" && $u_avater_third_type == "image/jpeg" && $u_avater_forth_type == "image/jpeg" ) {

		$randFile_name = $user_name.rand().".jpeg";
		$randFile_name2 = $user_name.rand().".jpeg";
		$randFile_name3 = $user_name.rand().".jpeg";
		$randFile_name4 = $user_name.rand().".jpeg";

	}else if ($u_avater_first_type == "image/png" && $u_avater_second_type ="image/png" && $u_avater_third_type ="image/png" && $u_avater_forth_type ="image/png") {

		$randFile_name = $user_name.rand().".png";
		$randFile_name2 = $user_name.rand().".png";
		$randFile_name3 = $user_name.rand().".png";
		$randFile_name4 = $user_name.rand().".png";

	}else if ($u_avater_first_type == "image/jpg" && $u_avater_second_type == "image/jpg" && $u_avater_third_type == "image/jpg" && $u_avater_forth_type == "image/jpg" ) {

		$randFile_name = $user_name.rand().".jpg";
		$randFile_name = $user_name.rand().".jpg";
		$randFile_name3 = $user_name.rand().".jpg";
		$randFile_name4 = $user_name.rand().".jpg";
	}
	move_uploaded_file($u_avater_first_tmp_name, $location."$randFile_name");
	move_uploaded_file($u_avater_second_tmp_name, $location."$randFile_name2");
	move_uploaded_file($u_avater_third_tmp_name, $location."$randFile_name3");
	move_uploaded_file($u_avater_forth_tmp_name, $location."$randFile_name4");

}elseif ( isset($_FILES["avater_first"]) && isset($_FILES["avater_second"]) && isset($_FILES["avater_third"]) ) {

	$u_avater_first_type= $_FILES["avater_first"]["type"];
	$u_avater_first_tmp_name= $_FILES["avater_first"]["tmp_name"];

	$u_avater_second_type= $_FILES["avater_second"]["type"];
	$u_avater_second_tmp_name= $_FILES["avater_second"]["tmp_name"];

	$u_avater_third_type= $_FILES["avater_third"]["type"];
	$u_avater_third_tmp_name= $_FILES["avater_third"]["tmp_name"];

	//File save 
	if ($u_avater_first_type == "image/jpeg" &$u_avater_second_type ="image/jpeg" && $u_avater_third_type == "image/jpeg" ) {

		$randFile_name = $user_name.rand().".jpeg";
		$randFile_name2 = $user_name.rand().".jpeg";
		$randFile_name3 = $user_name.rand().".jpeg";

	}else if ($u_avater_first_type == "image/png" && $u_avater_second_type ="image/png" && $u_avater_third_type ="image/png" ) {

		$randFile_name = $user_name.rand().".png";
		$randFile_name2 = $user_name.rand().".png";
		$randFile_name3 = $user_name.rand().".png";

	}else if ($u_avater_first_type == "image/jpg" && $u_avater_second_type == "image/jpg" && $u_avater_third_type == "image/jpg"  ) {

		$randFile_name = $user_name.rand().".jpg";
		$randFile_name2 = $user_name.rand().".jpg";
		$randFile_name3 = $user_name.rand().".jpg";
	}
	move_uploaded_file($u_avater_first_tmp_name, $location."$randFile_name");
	move_uploaded_file($u_avater_second_tmp_name, $location."$randFile_name2");
	move_uploaded_file($u_avater_third_tmp_name, $location."$randFile_name3");

}elseif ( isset($_FILES["avater_first"]) && isset($_FILES["avater_second"]) ) {

	$u_avater_first_type= $_FILES["avater_first"]["type"];
	$u_avater_first_tmp_name= $_FILES["avater_first"]["tmp_name"];

	$u_avater_second_type= $_FILES["avater_second"]["type"];
	$u_avater_second_tmp_name= $_FILES["avater_second"]["tmp_name"];

	if ($u_avater_first_type == "image/jpeg" &$u_avater_second_type ="image/jpeg" ) {

		$randFile_name = $user_name.rand().".jpeg";
		$randFile_name2 = $user_name.rand().".jpeg";

	}else if ($u_avater_first_type == "image/png" && $u_avater_second_type ="image/png" ) {

		$randFile_name = $user_name.rand().".png";
		$randFile_name2 = $user_name.rand().".png";

	}else if ($u_avater_first_type == "image/jpg" && $u_avater_second_type == "image/jpg"  ) {

		$randFile_name = $user_name.rand().".jpg";
		$randFile_name2 = $user_name.rand().".jpg";
	}
	move_uploaded_file($u_avater_first_tmp_name, $location."$randFile_name");
	move_uploaded_file($u_avater_second_tmp_name, $location."$randFile_name2");


}elseif ( isset($_FILES["avater_first"]) ) {

	$u_avater_first= $_FILES["avater_first"];
	$u_avater_first_type= $_FILES["avater_first"]["type"];
	$u_avater_first_tmp_name= $_FILES["avater_first"]["tmp_name"];

	if ($u_avater_first_type == "image/jpeg") {

		$randFile_name = $user_name.rand().".jpeg";

	}else if ($u_avater_first_type == "image/png" ) {

		$randFile_name = $user_name.rand().".png";

	}else if ($u_avater_first_type == "image/jpg") {

		$randFile_name = $user_name.rand().".jpg";
	}
	move_uploaded_file($u_avater_first_tmp_name, $location."$randFile_name");
}


//Avater nid Target
if ( isset($_FILES["nid_front"]) && isset($_FILES["nid_back"]) && isset($_FILES["nid_back2"]) && isset($_FILES["nid_front2"]) && isset($_FILES["nid_back3"]) && isset($_FILES["nid_front3"])&& isset($_FILES["nid_back4"]) && isset($_FILES["nid_front4"]) ) {

	$u_avater_nid_fornt_first_type= $_FILES["nid_front"]["type"];
	$u_avater_nid_fornt_first_tmp_name= $_FILES["nid_front"]["tmp_name"];
	$u_avater_nid_back_first_type= $_FILES["nid_back"]["type"];
	$u_avater_nid_back_first_tmp_name= $_FILES["nid_back"]["tmp_name"];

	$u_avater_nid_fornt_second_type= $_FILES["nid_front2"]["type"];
	$u_avater_nid_fornt_second_tmp_name= $_FILES["nid_front2"]["tmp_name"];
	$u_avater_nid_back_second_type= $_FILES["nid_back2"]["type"];
	$u_avater_nid_back_second_tmp_name= $_FILES["nid_back2"]["tmp_name"];

	$u_avater_nid_fornt_third_type= $_FILES["nid_front3"]["type"];
	$u_avater_nid_fornt_third_tmp_name= $_FILES["nid_front3"]["tmp_name"];
	$u_avater_nid_back_third_type= $_FILES["nid_back3"]["type"];
	$u_avater_nid_back_third_tmp_name= $_FILES["nid_back3"]["tmp_name"];

	$u_avater_nid_fornt_forth_type= $_FILES["nid_front4"]["type"];
	$u_avater_nid_fornt_forth_tmp_name= $_FILES["nid_front4"]["tmp_name"];
	$u_avater_nid_back_forth_type= $_FILES["nid_back4"]["type"];
	$u_avater_nid_back_forth_tmp_name= $_FILES["nid_back4"]["tmp_name"];

	//File save code 
	if ( $u_avater_nid_fornt_first_type == "image/jpeg" && $u_avater_nid_back_first_type ="image/jpeg" && $u_avater_nid_fornt_second_type == "image/jpeg" && $u_avater_nid_back_second_type ="image/jpeg" && $u_avater_nid_fornt_third_type == "image/jpeg" && $u_avater_nid_back_third_type == "image/jpeg"&& $u_avater_nid_fornt_forth_type == "image/jpeg" && $u_avater_nid_back_forth_type == "image/jpeg" ) {

		$randFile_nid_fornt_name = $user_name.rand()."_fornt.jpeg";
		$randFile_nid_back_name = $user_name.rand()."_back.jpeg";
		$randFile_nid_fornt_name2 = $user_name.rand()."_fornt.jpeg";
		$randFile_nid_back_name2 = $user_name.rand()."_back.jpeg";
		$randFile_nid_fornt_name3 = $user_name.rand()."_fornt.jpeg";
		$randFile_nid_back_name3 = $user_name.rand()."_back.jpeg";
		$randFile_nid_fornt_name4 = $user_name.rand()."_fornt.jpeg";
		$randFile_nid_back_name4 = $user_name.rand()."_back.jpeg";

	}else if ( $u_avater_nid_fornt_first_type == "image/png" && $u_avater_nid_back_first_type ="image/png" && $u_avater_nid_fornt_second_type == "image/png" && $u_avater_nid_back_second_type ="image/png" && $u_avater_nid_fornt_third_type == "image/png" && $u_avater_nid_back_third_type == "image/png"&& $u_avater_nid_fornt_forth_type == "image/png" && $u_avater_nid_back_forth_type == "image/png" ) {

		$randFile_nid_fornt_name = $user_name.rand()."_fornt.png";
		$randFile_nid_back_name = $user_name.rand()."_back.png";
		$randFile_nid_fornt_name2 = $user_name.rand()."_fornt.png";
		$randFile_nid_back_name2 = $user_name.rand()."_back.png";
		$randFile_nid_fornt_name3 = $user_name.rand()."_fornt.png";
		$randFile_nid_back_name3 = $user_name.rand()."_back.png";
		$randFile_nid_fornt_name4 = $user_name.rand()."_fornt.png";
		$randFile_nid_back_name4 = $user_name.rand()."_back.png";

	}else if ($u_avater_nid_fornt_first_type == "image/jpg" && $u_avater_nid_back_first_type ="image/jpg" && $u_avater_nid_fornt_second_type == "image/jpg" && $u_avater_nid_back_second_type ="image/jpg" && $u_avater_nid_fornt_third_type == "image/jpg" && $u_avater_nid_back_third_type == "image/jpg"&& $u_avater_nid_fornt_forth_type == "image/jpg" && $u_avater_nid_back_forth_type == "image/jpg" ) {

		$randFile_nid_fornt_name = $user_name.rand()."_fornt.jpg";
		$randFile_nid_back_name = $user_name.rand()."_back.jpg";
		$randFile_nid_fornt_name2 = $user_name.rand()."_fornt.jpg";
		$randFile_nid_back_name2 = $user_name.rand()."_back.jpg";
		$randFile_nid_fornt_name3 = $user_name.rand()."_fornt.jpg";
		$randFile_nid_back_name3 = $user_name.rand()."_back.jpg";
		$randFile_nid_fornt_name4 = $user_name.rand()."_fornt.jpg";
		$randFile_nid_back_name4 = $user_name.rand()."_back.jpg";
	}
	move_uploaded_file($u_avater_nid_fornt_first_tmp_name, $location_nid."$randFile_nid_fornt_name");
	move_uploaded_file($u_avater_nid_back_first_tmp_name, $location_nid."$randFile_nid_back_name");
	move_uploaded_file($u_avater_nid_fornt_second_tmp_name, $location_nid."$randFile_nid_fornt_name2");
	move_uploaded_file($u_avater_nid_back_second_tmp_name, $location_nid."$randFile_nid_back_name2");
	move_uploaded_file($u_avater_nid_fornt_third_tmp_name, $location_nid."$randFile_nid_fornt_name3");
	move_uploaded_file($u_avater_nid_back_third_tmp_name, $location_nid."$randFile_nid_back_name3");
	move_uploaded_file($u_avater_nid_fornt_forth_tmp_name, $location_nid."$randFile_nid_fornt_name4");
	move_uploaded_file($u_avater_nid_back_forth_tmp_name, $location_nid."$randFile_nid_back_name4");

}elseif ( isset($_FILES["nid_back"]) && isset($_FILES["nid_front"])&& isset($_FILES["nid_back2"]) && isset($_FILES["nid_front2"])&& isset($_FILES["nid_back3"]) && isset($_FILES["nid_front3"]) ) {

	$u_avater_nid_fornt_first_type= $_FILES["nid_front"]["type"];
	$u_avater_nid_fornt_first_tmp_name= $_FILES["nid_front"]["tmp_name"];
	$u_avater_nid_back_first_type= $_FILES["nid_back"]["type"];
	$u_avater_nid_back_first_tmp_name= $_FILES["nid_back"]["tmp_name"];

	$u_avater_nid_fornt_second_type= $_FILES["nid_front2"]["type"];
	$u_avater_nid_fornt_second_tmp_name= $_FILES["nid_front2"]["tmp_name"];
	$u_avater_nid_back_second_type= $_FILES["nid_back2"]["type"];
	$u_avater_nid_back_second_tmp_name= $_FILES["nid_back2"]["tmp_name"];

	$u_avater_nid_fornt_third_type= $_FILES["nid_front3"]["type"];
	$u_avater_nid_fornt_third_tmp_name= $_FILES["nid_front3"]["tmp_name"];
	$u_avater_nid_back_third_type= $_FILES["nid_back3"]["type"];
	$u_avater_nid_back_third_tmp_name= $_FILES["nid_back3"]["tmp_name"];

	//File save code 
	if ( $u_avater_nid_fornt_first_type == "image/jpeg" && $u_avater_nid_back_first_type ="image/jpeg" && $u_avater_nid_fornt_second_type == "image/jpeg" && $u_avater_nid_back_second_type ="image/jpeg" && $u_avater_nid_fornt_third_type == "image/jpeg" && $u_avater_nid_back_third_type == "image/jpeg" ) {

		$randFile_nid_fornt_name = $user_name.rand()."_fornt.jpeg";
		$randFile_nid_back_name = $user_name.rand()."_back.jpeg";
		$randFile_nid_fornt_name2 = $user_name.rand()."_fornt.jpeg";
		$randFile_nid_back_name2 = $user_name.rand()."_back.jpeg";
		$randFile_nid_fornt_name3 = $user_name.rand()."_fornt.jpeg";
		$randFile_nid_back_name3 = $user_name.rand()."_back.jpeg";

	}else if ( $u_avater_nid_fornt_first_type == "image/png" && $u_avater_nid_back_first_type ="image/png" && $u_avater_nid_fornt_second_type == "image/png" && $u_avater_nid_back_second_type ="image/png" && $u_avater_nid_fornt_third_type == "image/png" && $u_avater_nid_back_third_type == "image/png" ) {

		$randFile_nid_fornt_name = $user_name.rand()."_fornt.png";
		$randFile_nid_back_name = $user_name.rand()."_back.png";
		$randFile_nid_fornt_name2 = $user_name.rand()."_fornt.png";
		$randFile_nid_back_name2 = $user_name.rand()."_back.png";
		$randFile_nid_fornt_name3 = $user_name.rand()."_fornt.png";
		$randFile_nid_back_name3 = $user_name.rand()."_back.png";

	}else if ($u_avater_nid_fornt_first_type == "image/jpg" && $u_avater_nid_back_first_type ="image/jpg" && $u_avater_nid_fornt_second_type == "image/jpg" && $u_avater_nid_back_second_type ="image/jpg" && $u_avater_nid_fornt_third_type == "image/jpg" && $u_avater_nid_back_third_type == "image/jpg" ) {

		$randFile_nid_fornt_name = $user_name.rand()."_fornt.jpg";
		$randFile_nid_back_name = $user_name.rand()."_back.jpg";
		$randFile_nid_fornt_name2 = $user_name.rand()."_fornt.jpg";
		$randFile_nid_back_name2 = $user_name.rand()."_back.jpg";
		$randFile_nid_fornt_name3 = $user_name.rand()."_fornt.jpg";
		$randFile_nid_back_name3 = $user_name.rand()."_back.jpg";
	}
	move_uploaded_file($u_avater_nid_fornt_first_tmp_name, $location_nid."$randFile_nid_fornt_name");
	move_uploaded_file($u_avater_nid_back_first_tmp_name, $location_nid."$randFile_nid_back_name");
	move_uploaded_file($u_avater_nid_fornt_second_tmp_name, $location_nid."$randFile_nid_fornt_name2");
	move_uploaded_file($u_avater_nid_back_second_tmp_name, $location_nid."$randFile_nid_back_name2");
	move_uploaded_file($u_avater_nid_fornt_third_tmp_name, $location_nid."$randFile_nid_fornt_name3");
	move_uploaded_file($u_avater_nid_back_third_tmp_name, $location_nid."$randFile_nid_back_name3");

}elseif ( isset($_FILES["nid_back"]) && isset($_FILES["nid_front"])&& isset($_FILES["nid_back2"]) && isset($_FILES["nid_front2"]) ) {

	$u_avater_nid_fornt_first_type= $_FILES["nid_front"]["type"];
	$u_avater_nid_fornt_first_tmp_name= $_FILES["nid_front"]["tmp_name"];
	$u_avater_nid_back_first_type= $_FILES["nid_back"]["type"];
	$u_avater_nid_back_first_tmp_name= $_FILES["nid_back"]["tmp_name"];

	$u_avater_nid_fornt_second_type= $_FILES["nid_front2"]["type"];
	$u_avater_nid_fornt_second_tmp_name= $_FILES["nid_front2"]["tmp_name"];
	$u_avater_nid_back_second_type= $_FILES["nid_back2"]["type"];
	$u_avater_nid_back_second_tmp_name= $_FILES["nid_back2"]["tmp_name"];


	//File save code 
	if ( $u_avater_nid_fornt_first_type == "image/jpeg" && $u_avater_nid_back_first_type ="image/jpeg" && $u_avater_nid_fornt_second_type == "image/jpeg" && $u_avater_nid_back_second_type ="image/jpeg"  ) {

		$randFile_nid_fornt_name = $user_name.rand()."_fornt.jpeg";
		$randFile_nid_back_name = $user_name.rand()."_back.jpeg";
		$randFile_nid_fornt_name2 = $user_name.rand()."_fornt.jpeg";
		$randFile_nid_back_name2 = $user_name.rand()."_back.jpeg";

	}else if ( $u_avater_nid_fornt_first_type == "image/png" && $u_avater_nid_back_first_type ="image/png" && $u_avater_nid_fornt_second_type == "image/png" && $u_avater_nid_back_second_type ="image/png" ) {

		$randFile_nid_fornt_name = $user_name.rand()."_fornt.png";
		$randFile_nid_back_name = $user_name.rand()."_back.png";
		$randFile_nid_fornt_name2 = $user_name.rand()."_fornt.png";
		$randFile_nid_back_name2 = $user_name.rand()."_back.png";

	}else if ($u_avater_nid_fornt_first_type == "image/jpg" && $u_avater_nid_back_first_type ="image/jpg" && $u_avater_nid_fornt_second_type == "image/jpg" && $u_avater_nid_back_second_type ="image/jpg"  ) {

		$randFile_nid_fornt_name = $user_name.rand()."_fornt.jpg";
		$randFile_nid_back_name = $user_name.rand()."_back.jpg";
		$randFile_nid_fornt_name2 = $user_name.rand()."_fornt.jpg";
		$randFile_nid_back_name2 = $user_name.rand()."_back.jpg";
	}
	move_uploaded_file($u_avater_nid_fornt_first_tmp_name, $location_nid."$randFile_nid_fornt_name");
	move_uploaded_file($u_avater_nid_back_first_tmp_name, $location_nid."$randFile_nid_back_name");
	move_uploaded_file($u_avater_nid_fornt_second_tmp_name, $location_nid."$randFile_nid_fornt_name2");
	move_uploaded_file($u_avater_nid_back_second_tmp_name, $location_nid."$randFile_nid_back_name2");

}elseif ( isset($_FILES["nid_back"]) && isset($_FILES["nid_front"]) ) {

	$u_avater_nid_fornt_first_type= $_FILES["nid_front"]["type"];
	$u_avater_nid_fornt_first_tmp_name= $_FILES["nid_front"]["tmp_name"];
	$u_avater_nid_back_first_type= $_FILES["nid_back"]["type"];
	$u_avater_nid_back_first_tmp_name= $_FILES["nid_back"]["tmp_name"];

	//File save code 
	if ( $u_avater_nid_fornt_first_type == "image/jpeg" && $u_avater_nid_back_first_type ="image/jpeg" ) {

		$randFile_nid_fornt_name = $user_name.rand()."_fornt.jpeg";
		$randFile_nid_back_name = $user_name.rand()."_back.jpeg";

	}else if ( $u_avater_nid_fornt_first_type == "image/png" && $u_avater_nid_back_first_type ="image/png" ) {

		$randFile_nid_fornt_name = $user_name.rand()."_fornt.png";
		$randFile_nid_back_name = $user_name.rand()."_back.png";

	}else if ($u_avater_nid_fornt_first_type == "image/jpg" && $u_avater_nid_back_first_type ="image/jpg" ) {

		$randFile_nid_fornt_name = $user_name.rand()."_fornt.jpg";
		$randFile_nid_back_name = $user_name.rand()."_back.jpg";

	}
	move_uploaded_file($u_avater_nid_fornt_first_tmp_name, $location_nid."$randFile_nid_fornt_name");
	move_uploaded_file($u_avater_nid_back_first_tmp_name, $location_nid."$randFile_nid_back_name");
}

// avater paid & unpaid target

if ($_POST["paid_unpaid"] == "Paid") {
	$p_uP= "Paid";
	$user_paid_unpaid = '<font color="green"><b>Paid</b></font>';
}else {
	$p_uP= "Un Paid";
	$user_paid_unpaid = '<font color="red"><b>Un Paid</b></font>';
}




$user_token = md5(sha1($fName).$u_email);

$insertQuery = "INSERT INTO dashbord (fName,lName,email,phone,gender,addr,avater_first_person,avater_second_person,avater_third_person,avater_forth_person,room_type,arrive_date,depart_date,nid_first_avater_fornt_photo,nid_first_avater_back_photo,nid_second_avater_fornt_photo,nid_second_avater_back_photo,nid_third_avater_fornt_photo,nid_third_avater_back_photo,nid_forth_avater_fornt_photo,nid_forth_avater_back_photo,city,total_person,paid_unpaid,token,check_out_code,price) VALUES ('$fName','$lName','$u_email','$u_number','$u_gender','$u_address', '$randFile_name','$randFile_name2','$randFile_name3','$randFile_name4','$u_room_type','$u_arrived_date','$u_depert_date','$randFile_nid_fornt_name','$randFile_nid_back_name','$randFile_nid_fornt_name2','$randFile_nid_back_name2','$randFile_nid_fornt_name3','$randFile_nid_back_name3','$randFile_nid_fornt_name4','$randFile_nid_back_name4','$u_city','$u_t_p_n','$p_uP','$user_token','$check_out_code','$roomPriceing') ";

$runUpQuery = mysqli_query($connect,$insertQuery);
if ($runUpQuery==true) {

		header("location: ../new-booking.php?e90600b9e58032d4e84a55d6facaedf0&pdfname=$user_token");
}else {
 	header("location: ../new-booking.php?da94b62094880691bb01371e16fd36e3&trueNewBooking");
}
}else {
	?>
	<pre>
		<p style="margin-left: 50px;">Sorry, you are not able to conect this page. It's only work if send by new-booking.php.</p>
	</pre>

<?php } ?>

 


