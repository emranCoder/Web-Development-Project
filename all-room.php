<?php require_once("header.php"); ?>
<br>
<br>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<h2 class="all-booking-head"><a href="index.php">Home / </a>All Rooms</h2>
			</div>
		</div>
	</div>
<section class="all-booking-dtl">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<div class="all-booking-box card">
                        <table class="table all-booking-table " cellspacing="0">
                            <thead>
                                <div class="table-query">
                                    <h3 class="table-title">Rooms</h3>
                                     <input type="text" name="search" placeholder="Search.." class="table-search-box"> 
                                     <i class="fas fa-trash-alt booking-dtl-del table-slected-del"></i>
                                     <div class="table-action">
                                        <a href="add-room.php?trueAddRoom"><i class="fas fa-plus n-booking"></i></a>
                                        <i class="fas fa-redo-alt table-redo"></i>
                                     </div>
                                </div> 
                                </thead>
                                <tbody>
                                <tr>
                                    <th><input type="checkbox" name=""></th>
                                    <th>Room Name</th>
                                    <th>Room Price</th>
                                    <th>Total Room</th>
                                    <th>Free Wifi</th>
                                    <th>Tv</th>
                                    <th>Balcony</th>
                                    <th>Free Breakfast</th>
                                    <th>Atach Bath</th>
                                    <th>Free Parking</th>
                                    <th>Action</th>
                                </tr>

<?php 
   require_once("config/configer.php");

   $shoDataQuery = "SELECT * FROM room";
   $runDataQuery = mysqli_query($connect,$shoDataQuery);

   if ($runDataQuery==true) {

    while ($db_data = mysqli_fetch_array($runDataQuery)) {

        $roomName = $db_data["roomName"];
        $roomPrice = $db_data["roomPrice"];
        $haveRoom = $db_data["haveRoom"];
  if ( $db_data["freeWifii"]== 'Yes' || $db_data["freeWifii"]== 'yes') {
          $freeWifii = '<font color="green">Yes</font>';
        }elseif ( !empty($db_data["freeWifii"])) {
          $freeWifii ='<font color="red">No</font>';
        }else {
          $freeWifii = '<font color="red">No</font>';
        }
        if ( $db_data["tv"]== 'Yes' || $db_data["tv"]== 'Yes') {
          $tv = '<font color="green">Yes</font>';
        }elseif ( !empty($db_data["tv"])) {
          $tv ='<font color="red">No</font>';
        }else {
          $tv = '<font color="red">No</font>';;
        }
        if ( $db_data["freeBreakfast"]== 'yes' || $db_data["freeBreakfast"]== 'Yes') {
          $freeBreakfast = '<font color="green">Yes</font>';
        }elseif ( !empty($db_data["freeBreakfast"])) {
          $freeBreakfast ='<font color="red">No</font>';
        }else {
          $freeBreakfast ='<font color="red">No</font>';
        }
        if ( $db_data["balcony"]== 'Yes' || $db_data["balcony"]== 'yes') {
          $balcony = '<font color="green">Yes</font>';
        }elseif ( !empty($db_data["balcony"])) {
          $balcony ='<font color="red">No</font>';
        }else {
          $balcony ='<font color="red">No</font>';
        }
        if ( $db_data["attachBathroom"]== 'yes' || $db_data["attachBathroom"]== 'Yes') {
          $attachBathroom = '<font color="green">Yes</font>';
        }elseif ( !empty($db_data["attachBathroom"])) {
          $attachBathroom ='<font color="red">No</font>';
        }else {
          $attachBathroom ='<font color="red">No</font>';
        }
        if ( $db_data["freeParking"]== 'Yes' || $db_data["freeParking"]== 'yes' ) {
          $freeParking = '<font color="green">Yes</font>';
        }elseif ( empty($db_data["freeParking"])) {
          $freeParking ='<font color="red">No</font>';
        }else {
          $freeParking ='<font color="red">No</font>';
        }
        $user_token = $db_data["token"];
?>   

                                <tr class="emran" style="text-align: center;">
                                    <input type="hiden" hidden="" value="<?php  ?>" name="">
                                    <td><input type="checkbox" name=""></td>
                                    <td><a href="edit-room.php?token=<?php echo $user_token; ?>&editRoomActive"><?php echo $roomName; ?></a></td>
                                    <td><?php echo $roomPrice; ?><tad>
                                    <td><?php echo $haveRoom; ?></td>
                                    <td><?php echo $freeWifii; ?></td>
                                    <td><?php echo $tv; ?></td>
                                    <td><?php echo $freeBreakfast; ?></td>
                                    <td><?php echo $balcony; ?></td>
                                    <td><?php echo $attachBathroom; ?></td>
                                    <td><?php echo $freeParking; ?></td>
                                    <td>
                                        <a href="edit-room.php?token=<?php echo $user_token; ?>&editRoomActive">
                                    	<i class="fas fa-pen booking-dtl-edit"></i></a>
                                    	<a onclick='if (confirm("Ar you sure to delete this person?")) {
                                            window.location.href = "php-core/delete_core.php?token=<?php echo $user_token; ?>&deletRoomActive" 
                                        } else {
                                            window.location.reload();
                                        }'><i class="fas fa-trash-alt booking-dtl-del"></i></a>
                                    </td>
                                </tr>
                                <tr>

<?php     
    }
   }else {
    echo "not found";
   } 
?>
                            </tbody>
                         </table>
                     <div class="table-iteam-query d-flex justify-content-end float-left">
                        	<p>Items per page:</p>
                        	<span class="table-range"><select>
                        		<option>5</option>
                        		<option>25</option>
                        		<option>50</option>
                        		<option>100</option>
                        	</select></span>
                     </div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<?php require_once("footer.php"); ?>
