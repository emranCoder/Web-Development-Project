<?php require_once("header.php"); ?>
<br>
<br>
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-md-8 col-lg-8">
				<h2 class="all-booking-head"><a href="index.php">Home / </a>Edit Staffs</h2>
			</div>
            <div class="col-sm-4 col-md-4 col-lg-4">
                <button type="button" class="btn btn-primary edit-save-btn-stafs">Save</button>
            </div>
		</div>
	</div>
<section class="all-booking-dtl edit-booking">
	<div class="container">
		<div class="row">

<?php 
   require_once("config/configer.php");

   $user_token = $_REQUEST["token"];


    $shoDataQuery = "SELECT * FROM stafs WHERE token='$user_token'";
   $runDataQuery = mysqli_query($connect,$shoDataQuery);

   if ($runDataQuery==true) {

    while ($db_data = mysqli_fetch_array($runDataQuery)) {

        $user_name = $db_data["fName"]." ".$db_data["lName"];
        $user_email = $db_data["email"];
        $user_phone = $db_data["phone"];
        $user_gender = $db_data["gender"];
        $user_addr = $db_data["addr"];
        $user_avater_image_first_person = $db_data["avater_first_person"];

        $user_arrive_date = $db_data["arrive_date"];
        $user_depart_date = $db_data["depart_date"];
        $user_nid_first_avater_fornt_photo = $db_data["nid_first_avater_fornt_photo"];
        $user_nid_first_avater_back_photo = $db_data["nid_first_avater_back_photo"];
        $user_city = $db_data["city"];
        $nid_no = $db_data["nid_no"];
        $user_token = $db_data["token"];
                if ($user_depart_date== true ) {
    $checked = 'checked';
}else {
  $checked="0";
}

?>  

                    <div class="col-sm-4 col-md-4 col-lg-4" >
                    <div class="user-edit-box">
                      <p><b>Name:</b></p><span><?php echo $user_name;?></span>
                      <br>
                      <p><b>Phone:</b></p><span><?php echo $user_phone; ?></span> <br>
                      <p><b>Address:</b></p><span style="margin-right: 10px;"><?php echo $user_addr; ?></span><br>
                      <p><b>NID NO:</b></p><span style="margin-right: 10px;"><?php echo $nid_no; ?></span><br>
                      <p><b>Arrive Date:</b></p><span><?php echo $user_arrive_date; ?></span>
                        <p><b>Check Out:</b></p><span type="button" style="display: inline-block;"><label class="checkbox-container" ><input type="checkbox" name="check_out" value="checkout" class="check_out" <?php echo $checked; ?> ><input type="" hidden="hidden" class="token_target" name="" value="<?php echo $user_token; ?>"><span class="checkmark"></span></label></span>
                        
                    </div>
                    </div>
                    <div class="col-sm-5 col-md-5 col-lg-5" >
                    <div class="user-edit-box">
                    <p><b>City:</b></p><span><?php echo $user_city; ?></span><br>
                    <p><b>Gender:</b></p><span><?php echo $user_gender; ?></span><br>
                    
                    <p><b>Email:</b></p><span><?php echo $user_email; ?></span>
                    <br>
                    <p><b>Depart Date:</b></p><span><?php echo $user_depart_date; ?></span><br>
                    <p><b>Download Pdf:</b></p><span><a href="php-core/pdfcreat.php?stafs&token=<?php echo $user_token; ?>" download><button type="button" class="btn btn-info" >Download</button></a></span>
                </div>         
                </div>         
            <div class="col-sm-3 col-md-3 col-lg-3">
                <img class="user_photo" src="avater/<?php echo $user_avater_image_first_person; ?>">
            </div>
           <div class="col-sm-6 col-md-6 col-lg-6">
               <div class="user-nid">
                   <img style="width: 3.375in; height: 2.15in;" src="nid/<?php echo $user_nid_first_avater_fornt_photo; ?>" >
               </div>
           </div>
           <div class="col-sm-6 col-md-6 col-lg-6">
               <div class="user-nid">
                   <img style="width: 3.375in; height: 2.15in;" src="nid/<?php echo $user_nid_first_avater_back_photo; ?>" >
               </div>
           </div>




<?php     
    }
   }else {
    echo "not found";
   } 
?>
		</div>
	</div>
</section>

<div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<?php require_once("footer.php"); ?>

