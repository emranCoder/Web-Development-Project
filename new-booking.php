<?php require_once("header.php"); ?>
<br>
<br>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<h2 class="all-booking-head"><a href="index.php">Home / </a>Add Booking</h2>
			</div>
		</div>
	</div>
<section class="new-booking-section">
	<div class="container" >
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<div class="new-booking-box">
					<h3 style="margin-top: 10px; margin-left: 20px;" class="table-title">Add Booking</h3>
	                <form class="box" action="php-core/add_booking_core.php" method="POST" enctype="multipart/form-data">
	                  <div class="inputBox" style="margin-right: 15px;">
	                    <input type="text" name="fName" required  value="">
	                    <label>First Name*</label>
	                  </div>
	                  <div class="inputBox" style="margin-right: 15px;">
		              <input type="text" name="lName" required  value="">
	                    <label>Last Name*</label>
	                  </div>
	                  <div class="inputBox" style="margin-right: 15px;">
	                    <input type="email" name="email" required  value="">
	                    <label>Email*</label>
	                  </div>
	                  <div class="inputBox">
	                  	<select name="gender">
	                  	    <option value="0" class="d-none"></option>
	                  	    <option value="Male"  onclick="document.querySelector('.gernder_field').style.display='none'">Male</option>
	                  		<option onclick="document.querySelector('.gernder_field').style.display='none'" value="Female">Female</option>
	                  		<option onclick="document.querySelector('.gernder_field').style.display='none'" value="Other">Other</option>
	                  	</select>
                        <label class="gernder_field" style="top: 0;">Gender*</label>
	                  </div>
	                  <div class="inputBox" style="margin-right: 15px;">
	                    <input type="text" name="phone_number" onkeyup="this.setAttribute('value', this.value);" required value="">
	                    <label>Phone Number*</label>
	                  </div>
	                  <div class="inputBox">
	                    <input type="text" name="city" required value="">
	                    <label>City*</label>
	                  </div>
	                  <div class="inputBox" style="margin-right: 15px;">
	                    <input  id="datepicker" name="arrived_date" style="height: 47px;" onclick="document.querySelector('.arrived_date_label').style.display='none';" value="">
	                    <i onclick="document.querySelector('.form-control').focus();" class="fas fa-calendar-alt arrived_date_icon"></i>
	          	         <label class="arrived_date_label">Arrived Date</label>
	                  </div>
	                  <div class="inputBox" style="margin-right: 15px;">
	                    <input id="datepicker" class="datePicker" name="depert_date" style="height: 47px;" onclick="document.querySelector('.depeart_date_label').style.display='none';"  value="">
	                    <i onclick="document.querySelector('.datePicker').focus();" class="fas fa-calendar-alt arrived_date_icon"></i>
	          	         <label class="depeart_date_label">Depart Date</label>
	                  </div>
	                  <div class="inputBox" style="margin-right: 15px;">
	                    <input class="total-person" type="number" name="t_p_n" required onkeyup="this.setAttribute('value', this.value);"  value="">
	                    <label>Total Person*</label>
	                  </div>
	                 <div class="inputBox">
	                  	<select name="room_type" style="padding: 12px 0px;">
	                  	    <option value="0" class="d-none"></option>
	                  <?php 
	                  require_once("config/configer.php");

   $shoDataQuery = "SELECT * FROM room";
   $runDataQuery = mysqli_query($connect,$shoDataQuery);

   if ($runDataQuery==true) {

    while ($db_data = mysqli_fetch_array($runDataQuery)) {

        $roomName = $db_data["roomName"];
        $totalRoom = $db_data["haveRoom"]; 
        ?> 
	                  	    <option value="<?php echo $roomName; ?>"  onclick="document.querySelector('.room_field').style.display='none'"><?php echo $roomName; ?></option>
	                  
<?php 
    }
}
 ?>
 	</select>
                        <label class="room_field" style="top: 0;">Room Type*</label>
	                  </div>
	                  <div class="inputBox" style="width: 100%">
	                  	<textarea name="address"onkeyup="this.setAttribute('value', this.value);"  value=""></textarea>
	                    <label>Address*</label>
	                  </div>
	                  <div class="inputBox avater_img_target_box" style="margin-right: 15px;">
	                   
	                  </div>
	                  <div class="inputBox avater_img_target_box" style="margin-right: 15px;">
	                  	
	                  </div>
	                  <div class="inputBox avater_img_target_box" style="margin-right: 15px;">
	                  	
	                  </div>
	                  <div class="inputBox avater_img_target_box">
	                  </div>

	                  <div class="target_nid_field">
	                  	<div class="inputBox nid_img_target_box" style="margin-right: 15px;">
	                    
	                  </div>
	                  <div class="inputBox nid_img_target_box" style="height: 100px; margin-bottom: 30px">
	                    
	                  </div>
	                  </div>
	                  <div class="target_nid_field">
	                  	<div class="inputBox nid_img_target_box" style="margin-right: 15px;">
	                  
	                  </div>
	                  <div class="inputBox nid_img_target_box" style="height: 100px; margin-bottom: 30px">
	                    
	                  </div>
	                  </div>
	                  <div class="target_nid_field">
	                  	<div class="inputBox nid_img_target_box" style="margin-right: 15px;">
	                    
	                  </div>
	                  <div class="inputBox nid_img_target_box" style="height: 100px; margin-bottom: 30px">
	                    
	                  </div>
	                  </div>
	                  <div class="target_nid_field">
	                  	<div class="inputBox nid_img_target_box" style="margin-right: 15px;">
	                    
	                  </div>
	                  <div class="inputBox nid_img_target_box" style="height: 100px; margin-bottom: 30px">
	                    
	                  </div>
	                  </div>

	                   <div class="inputBox">
	                  	<select  name="paid_unpaid" style="padding: 12px 0px;" required="">
	                  	    <option value="0" class="d-none"></option>
	                  	    <option value="Paid" onclick="document.querySelector('.gernder_field2').style.display='none';">Paid</option>
	                  		<option onclick="document.querySelector('.gernder_field2').style.display='none';"  value="Unpaid" >Unpaid</option>
	                  	</select>
                        <label class="gernder_field2" style="top: 0;">Paid or Unpaid*</label>
	                  </div><br><br>
	                  <input type="text" hidden="" name="O_k_T_k_a_c" >
	                  <input class="n_booking_s_btn" type="SUBMIT" value="Submit">
	                </form>
				</div>
			</div>
		</div>
	</div>
	<!-- submite succes code e90600b9e58032d4e84a55d6facaedf0 -->
	
</section>

<?php 
if (isset($_REQUEST["e90600b9e58032d4e84a55d6facaedf0"])) {
	
 ?>

<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12">
			<div style="display: block;background: #3333337a;" class="modal modal2" tabindex="-1" role="dialog">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title">Congratulation!</h5>
			        <a href="new-booking.php?trueNewBooking">
			        <button type="button" class="close de-colose" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button></a>
			      </div>
			      <div class="modal-body">
			        <p style="color: green;">Data Succesfully Submited</p>
			        <p>Prease ok button to continue...</p>
			      </div>
			      <div class="modal-footer">
			      	<?php if (isset($_REQUEST["pdfname"])) {
			      		$name_pdf = $_REQUEST["pdfname"];
			      	?>
			        <a href="php-core/pdfcreat.php?newBooking&token=<?php echo $name_pdf; ?>" ><button type="button" class="btn btn-primary" >Download Pdf</button></a>
			        <?php 
			        } ?>
			        <a href="new-booking.php?trueNewBooking">
			        	<button type="button" class="btn btn-secondary de-colose" data-dismiss="modal">Close</button>
			        </a>
			      </div>
			    </div>
			  </div>
			</div>
		</div>	
	</div>
</div>



<?php 

	}elseif (isset($_REQUEST["da94b62094880691bb01371e16fd36e3"])) {

?>
<!-- da94b62094880691bb01371e16fd36e3  -->
<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12">
			<div style="display: block;background: #3333337a;" class="modal modal2" tabindex="-1" role="dialog">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title">Opps!</h5>
			        <button type="button" class="close de-colose" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <p style="color: red;">Data is not Submited</p>
			        <p>Prease ok or close button to continue...</p>
			      </div>
			      <div class="modal-footer">
			      	<a href="new-booking.php?trueNewBooking">
			        <button type="button" class="btn btn-primary ">Ok</button>
			    	</a>
			        <a href="new-booking.php?trueNewBooking">
			        <button type="button" class="btn btn-secondary  de-colose" data-dismiss="modal">Close</button>
			    	</a>
			      </div>
			    </div>
			  </div>
			</div>
		</div>	
	</div>
</div>

<?php }  ?>


<?php require_once("footer.php"); ?>
