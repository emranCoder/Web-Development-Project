<?php require_once("header.php"); ?>
<br>
<br>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<h2 class="all-booking-head"><a href="index.php">Home / </a>Add Room</h2>
			</div>
		</div>
	</div>
<section class="new-booking-section">
	<div class="container" >
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<div class="new-booking-box">
					<h3 style="margin-top: 10px; margin-left: 20px;" class="table-title">Add Room</h3>
	                <form class="box" action="php-core/add_room_core.php" method="POST" enctype="multipart/form-data">
	                  <div class="inputBox" style="margin-right: 15px;">
	                    <input type="text" name="roomName" required  value="">
	                    <label>Room Name*</label>
	                  </div>
	             
	                  <div class="inputBox" >
		              <input type="price" name="roomPrice" required  value="">
	                    <label>Room Price*</label>
	                  </div>
	                  <div class="inputBox" style="margin-right: 15px;">
	                    <input type="text" name="totalRoom" required  value="">
	                    <label>Total Room*</label>
	                  </div>
	                  <div class="inputBox" style="margin-right: 15px;">
	                    <label class="checkbox-container"><input type="checkbox" name="freeWifi" value="freewifi" ><span class="checkmark"></span>Free Wifi</label>
	                  </div>
	                  <div class="inputBox">
	                    <label class="checkbox-container"><input type="checkbox" name="balcony" value="balcony" ><span class="checkmark"></span>Balcony</label>
	                  </div>
	                  <div class="inputBox" style="margin-right: 15px;">
	                    <label class="checkbox-container"><input type="checkbox" name="tv" value="tv" ><span class="checkmark"></span>Tv</label>
	                  </div>
	                  <div class="inputBox">
	                    <label class="checkbox-container"><input type="checkbox" name="atachBathroom" value="atachBathroom" ><span class="checkmark"></span>Attach Bathroom</label>
	                  </div>
	                  <div class="inputBox" style="margin-right: 15px;">
	                    <label class="checkbox-container"><input type="checkbox" name="freeBreakfast" value="freeBreakfast" ><span class="checkmark"></span>Free Breakfast</label>
	                  </div>
	                  <div class="inputBox">
	                    <label class="checkbox-container"><input type="checkbox" name="freeParking" value="freeParking" ><span class="checkmark"></span>Free Parking</label>
	                  </div>
	                  
						<br><br>
						<br><br>
	                  <input type="text" hidden="" name="roomAdding" >
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
			<div style="display: block;background: #3333337a;" class="modal " tabindex="-1" role="dialog">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title">Congratulation!</h5>
			        <a href="new-room.php?trueAddRoom">
			        <button type="button" class="close de-colose" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button></a>
			      </div>
			      <div class="modal-body">
			        <p style="color: green;">Data Succesfully Submited</p>
			        <p>Prease ok button to continue...</p>
			      </div>
			      <div class="modal-footer">
			        <a href="all-room.php?trueAllRooms" ><button type="button" class="btn btn-primary" >Download Pdf</button></a>
			        <a href="add-room.php?trueAddRoom">
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
			<div style="display: block;background: #3333337a;" class="modal " tabindex="-1" role="dialog">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title">Opps!</h5>
			        <a href="new-room.php?trueAddRoom">
			        <button type="button" class="close de-colose" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button></a>
			      </div>
			      <div class="modal-body">
			        <p style="color: red;">Data is not Submited</p>
			        <p>Prease ok or close button to continue...</p>
			      </div>
			      <div class="modal-footer">
			      <a href="add-room.php?trueAddRoom">
			        <button type="button" class="btn btn-primary ">Ok</button>
			    </a>
			        <a href="add-room.php?trueAddRoom">
			        	<button type="button" class="btn btn-secondary de-colose" data-dismiss="modal">Close</button>
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
