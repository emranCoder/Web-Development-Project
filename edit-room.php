<?php require_once("header.php"); ?>
<br>
<br>
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-md-8 col-lg-8">
				<h2 class="all-booking-head"><a href="index.php">Home / </a>Edit Booking</h2>
			</div>
            <div class="col-sm-4 col-md-4 col-lg-4">
                
            </div>
		</div>
	</div>
<section class="all-booking-dtl edit-booking edit-room">
	<div class="container">
		<div class="row">

<?php 
   require_once("config/configer.php");

   $user_token = $_REQUEST["token"];

    $shoDataQuery = "SELECT * FROM room WHERE token='$user_token'";
   $runDataQuery = mysqli_query($connect,$shoDataQuery);

   if ($runDataQuery==true) {

    while ($db_data = mysqli_fetch_array($runDataQuery)) {

        $roomName = $db_data["roomName"];
        $roomPrice = $db_data["roomPrice"];
        $totalRoom = $db_data["haveRoom"];
        if ( $db_data["freeWifii"]== 'Yes' || $db_data["freeWifii"]== 'yes') {
          $freeWifii = '<font color="green">Yes</font>';
          $freeWifiicopy = 'Yes';
        }elseif ( empty($db_data["freeWifii"])) {
          $freeParking ='<font color="red">No</font>';
        }else {
          $freeWifii = '<font color="red">No</font>';
          $freeWifiicopy = 'No';
        }
        if ( $db_data["tv"]== 'Yes' || $db_data["tv"]== 'Yes') {
          $tv = '<font color="green">Yes</font>';
          $tvcpoy = 'Yes';
        }elseif ( empty($db_data["tv"])) {
          $freeParking ='<font color="red">No</font>';
        }else {
          $tv = '<font color="red">No</font>';;
          $tvcpoy = 'No';
        }
        if ( $db_data["freeBreakfast"]== 'yes' || $db_data["freeBreakfast"]== 'Yes') {
          $freeBreakfast = '<font color="green">Yes</font>';
          $freeBreakfastcopy = 'Yes';
        }elseif ( empty($db_data["freeBreakfast"])) {
          $freeParking ='<font color="red">No</font>';
        }else {
          $freeBreakfast ='<font color="red">No</font>';
          $freeBreakfastcopy ='No';
        }
        if ( $db_data["balcony"]== 'Yes' || $db_data["balcony"]== 'yes') {
          $balcony = '<font color="green">Yes</font>';
          $balconycopy = 'Yes';
        }elseif ( empty($db_data["balcony"])) {
          $freeParking ='<font color="red">No</font>';
        }else {
          $balcony ='<font color="red">No</font>';
          $balconycopy ='No';
        }
        if ( $db_data["attachBathroom"]== 'yes' || $db_data["attachBathroom"]== 'Yes') {
          $attachBathroom = '<font color="green">Yes</font>';
          $attachBathroomcopy = 'Yes';
        }elseif ( empty($db_data["attachBathroom"])) {
          $freeParking ='<font color="red">No</font>';
        }else {
          $attachBathroom ='<font color="red">No</font>';
          $attachBathroomcopy ='No';
        }
        if ( $db_data["freeParking"]== 'Yes' || $db_data["freeParking"]== 'yes' ) {
          $freeParking = '<font color="green">Yes</font>';
          $freeParkingcopy = 'Yes';
        }elseif ( empty($db_data["freeParking"])) {
          $freeParking ='<font color="red">No</font>';
        }else {
          $freeParking ='<font color="red">No</font>';
          $freeParkingcopy ='No';
        }
        $user_token = $db_data["token"];
?>  
<form style="display: contents;" action="php-core/update_room_data_core.php" method="POST" enctype=" multipart/form-data">
                    <div class="col-sm-6 col-md-6 col-lg-6" >
                    <div class="user-edit-box">
                      <p><b>Room Name:</b></p><span><b><?php echo $roomName;?></b></span><input onkeyup="this.setAttribute('value', this.value);" type="hidden" value="<?php echo $roomName;?>" name="roomName"><br>
                      <p><b>Free Wifi:</b></p><span ><?php echo $freeWifii; ?></span><input onkeyup="this.setAttribute('value', this.value);" type="hidden" value="<?php echo $freeWifiicopy; ?>" name="freeWifi"><br>
                      <p><b>TV:</b></p><span><?php echo $tv; ?></span><input type="hidden" onkeyup="this.setAttribute('value', this.value);" value="<?php echo $tvcpoy; ?>" name="tv"><br>
                       <p><b>Free Breakfast:</b></p><span><?php echo $freeBreakfast; ?></span><input onkeyup="this.setAttribute('value', this.value);" type="hidden" value="<?php echo $freeBreakfastcopy; ?>" name="freeBreakfast"><br>
                        <p><b>Balcony:</b></p><span><?php echo $balcony; ?></span><input onkeyup="this.setAttribute('value', this.value);" type="hidden" value="<?php echo $balconycopy; ?>" name="balcony">
                        <input style="display: none;" type="" name="roomEdit" value="<?php echo $user_token; ?>">
                    </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6" >
                    <div class="user-edit-box">
                      <p><b>Room Price:</b></p><span><b><?php echo $roomPrice; ?></b></span><input onkeyup="this.setAttribute('value', this.value);" type="hidden" value="<?php echo $roomPrice; ?>" name="roomPrice"> <br>
                      <p><b>Total Room:</b></p><span><b><?php echo $totalRoom; ?></b></span><input onkeyup="this.setAttribute('value', this.value);" type="hidden" value="<?php echo $totalRoom; ?>" name="totalRoom"> <br>
                    <p><b>Attach Bath:</b></p><span><?php echo $attachBathroom; ?></span><input onkeyup="this.setAttribute('value', this.value);" type="hidden" value="<?php echo $attachBathroomcopy; ?>" name="atachBathroom"><br>
                    
                    <p><b>Free Parking:</b></p><span><?php echo $freeParking; ?></span><input onkeyup="this.setAttribute('value', this.value);" type="hidden" value="<?php echo $freeParkingcopy; ?>" name="freeParking"><br>
                    <span><button type="button" class="btn btn-info edit-room-btn" >Edit</button></span>
                    
                </div>  
                <input type="submit" class="btn-primary edit-save-btn-room" value="Save">       
                </div>         

</form>


<?php     
    }
   }else {
    echo "not found";
   } 
?>
		</div>
	</div>
</section>



<?php require_once("footer.php"); ?>

