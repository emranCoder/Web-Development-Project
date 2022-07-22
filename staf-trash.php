<?php require_once("header.php"); ?>

<br>
<br>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <h2 class="all-booking-head"><a href="index.php">Home / </a>Staf Trash</h2>
            </div>
        </div>
    </div>
<section class="all-booking-dtl">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="all-booking-box card">
                        <table class="table all-booking-table" cellspacing="0">
                            <thead>
                                <div class="table-query">
                                    <h3 class="table-title">Booking</h3>
                                     <input type="text" name="search" placeholder="Search.." class="table-search-box"> 
                                     <i onclick="trashreoval()" class="fas fa-trash-alt booking-dtl-del table-slected-del"></i>
                                     <div class="table-action">
                                        <a href="new-booking.php?action=true"><i class="fas fa-plus n-booking"></i></a>
                                        <i class="fas fa-redo-alt table-redo"></i>
                                     </div>
                                </div> 
                                </thead>
                                <tbody>
                                <tr>
                                    <th><input type="checkbox" onclick="checkboxStafsToggle(this)" ></th>
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

   $shoDataQuery = "SELECT * FROM stafs WHERE display='d-none'";
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
?>    

                                <tr class="emran" >
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
                                        <a onclick='if (confirm("Ar you sure to delete this person?")) {
                                            window.location.href = "php-core/delete_core.php?token=<?php echo $user_token; ?>&deletStafsActive&Aimage=<?php echo $user_avater_image_first_person; ?>&nidImagefornt=<?php echo $user_nid_first_avater_fornt_photo; ?>&nidImageBack=<?php echo $user_nid_first_avater_back_photo ?>" 
                                        } else {
                                            window.location.reload();
                                        }' ><i class="fas fa-trash-alt booking-dtl-del" style="background:#f44336;"></i></a>
                                        <a onclick='recoverDelet("<?php echo $user_token; ?>","stafsRecover")' ><i class="fas fa-recycle booking-dtl-del"></i></a>
                                    </td>
                                </tr>
                                <tr>

<?php     
    }
   }else {
    
   } 
?>

<!-- if (confirm("Ar you sure to delete this person?")) {
                                            window.location.href = "php-core/delete_core.php?token=<?php echo $user_token; ?>&deletBookinActive&Aimage=<?php echo $user_avater_image_first_person; ?>&nidImagefornt=<?php echo $user_nid_first_avater_fornt_photo; ?>&nidImageBack=<?php echo $user_nid_first_avater_back_photo ?>" 
                                        } else {
                                            window.location.reload();
                                        }
 -->
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



<?php require_once("footer.php"); ?>
