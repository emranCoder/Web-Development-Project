<?php require_once("header.php"); ?>
<br>
<br>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<h2 class="all-booking-head"><a href="index.php">Home / </a>All Staffs</h2>
			</div>
		</div>
	</div>
<section class="all-booking-dtl">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<div class="all-booking-box card">
                        <table class="table all-booking-table all-stafs-table" cellspacing="0">
                            <thead>
                                <div class="table-query">
                                    <h3 class="table-title">Staffs</h3>
                                     <input type="text" name="search" placeholder="Search.." class="table-search-box"> 
                                     <i onclick="trashmoval('stafsTruth');" class="fas fa-trash-alt booking-dtl-del table-slected-del"></i>
                                     <div class="table-action">
                                        <a href="new-stafs.php?trueNewStafs"><i class="fas fa-plus n-booking"></i></a>
                                        <i class="fas fa-redo-alt table-redo"></i>
                                     </div>
                                </div> 
                                </thead>
                                <tbody>
                                <tr>
                                    <th><input type="checkbox" onclick="checkboxStafsToggle(this)"></th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Gender</th>
                                    <th>City</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Arrive</th>
                                    <th>Depart</th>
                                    <th>Actions</th>
                                </tr>

<?php 
   require_once("config/configer.php");

   $shoDataQuery = "SELECT * FROM stafs";
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
        $user_token = $db_data["token"];
        $staf_id = $db_data["staf_id"];
        $trDisplay = $db_data["display"];

?>   

                                <tr class="emran <?php echo $trDisplay; ?>">
                                    <input type="hiden" hidden="" value="<?php  ?>" name="">
                                    <td><input type="checkbox" name="stafsCheckbox"></td>
                                    <td><img src='<?php echo "avater/$user_avater_image_first_person" ?>' ></td>
                                    <td><a href="edit-stafs.php?token=<?php echo $user_token; ?>&trueEditStafs"><?php echo $user_name; ?></a></ad>
                                    <td><?php echo $user_gender; ?></ad>
                                    <td><?php echo $user_city; ?></ad>
                                    <td><?php echo $user_phone; ?></td>
                                    <td><?php echo $user_email; ?></td>
                                    <td style="display: none;"><?php echo $staf_id; ?></td>
                                    <td><?php echo $user_arrive_date; ?></td>
                                    <td><?php echo $user_depart_date; ?></td>
                                    <td>
                                        <a title="Edit Staffs" href="edit-stafs.php?token=<?php echo $user_token; ?>&trueEditStafs">
                                    	<i class="fas fa-pen booking-dtl-edit"></i></a>
                                    	<a onclick="deletStafs ('<?php echo $user_token; ?>')" ><i class="fas fa-trash-alt booking-dtl-del"></i></a>
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
