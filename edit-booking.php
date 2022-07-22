<?php require_once("header.php"); ?>
<br>
<br>
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-md-8 col-lg-8">
				<h2 class="all-booking-head"><a href="index.php">Home / </a>Edit Booking</h2>
			</div>
		</div>
	</div>
<section class="all-booking-dtl edit-booking">
	<div class="container">
		<div class="row">

<?php 
   require_once("config/configer.php");

   $user_token = $_REQUEST["token"];


    $shoDataQuery = "SELECT * FROM dashbord WHERE token='$user_token'";
   $runDataQuery = mysqli_query($connect,$shoDataQuery);

   if ($runDataQuery==true) {

    while ($db_data = mysqli_fetch_array($runDataQuery)) {

        $user_name = $db_data["fName"]." ".$db_data["lName"];
        $user_email = $db_data["email"];
        $user_phone = $db_data["phone"];
        $user_gender = $db_data["gender"];
        $user_addr = $db_data["addr"];
        $user_avater_image_first_person = $db_data["avater_first_person"];
        $user_avater_image_second_person = $db_data["avater_second_person"];
        $user_avater_image_third_person = $db_data["avater_third_person"];
        $user_avater_image_forth_person = $db_data["avater_forth_person"];
        $user_room_type = $db_data["room_type"];
        $user_arrive_date = $db_data["arrive_date"];
        $user_depart_date = $db_data["depart_date"];
        $user_nid_first_avater_fornt_photo = $db_data["nid_first_avater_fornt_photo"];
        $user_nid_first_avater_back_photo = $db_data["nid_first_avater_back_photo"];
        $user_nid_second_avater_fornt_photo = $db_data["nid_second_avater_fornt_photo"];
        $user_nid_second_avater_back_photo = $db_data["nid_second_avater_back_photo"];
        $user_nid_third_avater_fornt_photo = $db_data["nid_third_avater_fornt_photo"];
        $user_nid_third_avater_back_photo = $db_data["nid_third_avater_back_photo"];
        $user_nid_forth_avater_fornt_photo = $db_data["nid_forth_avater_fornt_photo"];
        $user_nid_forth_avater_back_photo = $db_data["nid_forth_avater_back_photo"];
        $user_city = $db_data["city"];
        $user_total_person = $db_data["total_person"];
        //$user_paid_unpaid = $db_data["paid_unpaid"];
        $user_token = $db_data["token"];

        if ($db_data["paid_unpaid"] == "Paid") {
    $user_paid_unpaid = '<font color="green"><b>Paid</b></font>';
    $checked = 'checked';
    $modalDisplay = 'd-none';
}else {
    $user_paid_unpaid = '<font color="red"><b>Un Paid</b></font>';
    $checked = '0';
}
?>  

                    <div class="col-sm-4 col-md-4 col-lg-4" >
                    <div class="user-edit-box">
                      <p><b>Name:</b></p><span><?php echo $user_name;?></span>
                      <br><p><b>Phone:</b></p><span><?php echo $user_phone; ?></span> <br>
                      <p><b>Address:</b></p><span ><?php echo $user_addr; ?></span><br>
                      <p><b>Arrive Date:</b></p><span><?php echo $user_arrive_date; ?></span>
                      <br>
                       <p><b>Payment Ditals:</b></p><span><?php echo $user_paid_unpaid; ?></span>
                       <br>
                        <p><b>Check Out:</b></p><span class="<?php echo $modalDisplay; ?>"  style="display: inline-block;"><label class="checkbox-container "><input type="checkbox" name="check_out" value="checkout" class="check_out" <?php echo $checked; ?> ><input type="" hidden="hidden" class="token_target" name="" value="<?php echo $user_token; ?>"><span class="checkmark"></span></label></span>
                        <?php if ($db_data["paid_unpaid"] == "Paid") {
                            ?>

                        <span><a href="php-core/check_out_pdf.php?token=<?php echo $user_token; ?>&editB00kingActive&done" ><button type="button" class="btn btn-secondary" >Download</button></a></span>
                         <?php
                        }?>
                    </div>
                    </div>
                    <div class="col-sm-5 col-md-5 col-lg-5" >
                    <div class="user-edit-box">
                    <p><b>City:</b></p><span><?php echo $user_city; ?></span><br>
                    <p><b>Gender:</b></p><span><?php echo $user_gender; ?></span><br>
                    
                    <p><b>Email:</b></p><span><?php echo $user_email; ?></span><br>
                    <p><b>Total Person:</b></p><span><?php echo $user_total_person; ?></span><br>
                    <p><b>Depart Date:</b></p><span><?php echo $user_depart_date; ?></span><br>
                    <p><b>Download Pdf:</b></p><span><a href="php-core/pdfcreat.php?newBooking&token=<?php echo $user_token; ?>" download><button type="button" class="btn btn-info" >Download</button></a></span>
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



<div class="modal <?php echo $modalDisplay; ?>" id="chekoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Checkout Slip</h5>
        <button type="button" class="close" onclick="window.location.reload();" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="box checkoutModalForm " >
            <div class="inputBox roomPrice">
                <input class="qty"  type="number" name="room_price" onkeyup="this.setAttribute('value', this.value);findTotal();" required value="<?php echo $db_data['price']; ?>">
                <label>Room Price*</label>
            </div>
            <div class="inputBox due">
                <input class="qty"  type="number" name="due" onkeyup="this.setAttribute('value', this.value);findTotal();" value="">
                <label>Cash*</label>
            </div>
            <div class="inputBox extraCharges">
                <input class="qty" type="number" name="extra_charge" onkeyup="this.setAttribute('value', this.value);findTotal();" value="">
                <label>Extra Charges*</label>
            </div>
             <div class="inputBox extraCharges">
                <input type="text" name="extra_charge" onkeyup="this.setAttribute('value', this.value);findTotal();" value="">
                <label>Extra Charges Description*</label>
            </div>
            <div class="inputBox discount">
                <input class="qty"  type="number" name="discount" onkeyup="this.setAttribute('value', this.value);findTotal();" value="">
                <label>Discount *</label>
            </div>
            <div class="inputBox due">
                <input class="qty"  type="number" name="due" onkeyup="this.setAttribute('value', this.value);findTotal();" value="">
                <label>Due*</label>
            </div>
            
             <div class="inputBox totalPay">
                <input type="number" name="total_payment" onkeyup="this.setAttribute('value', this.value);" value="" class="total">
                <label>Bill *</label>
            </div>
            <div class="inputBox paymentMathod">
                <select name="payment_mathod" >
                    <option value="0" class="d-none"></option>
                    <option value="Credit Card"  onclick="document.querySelector('.gernder_field').style.display='none'">Credit Card</option>
                    <option onclick="document.querySelector('.gernder_field').style.display='none'" value="Visa Card">Visa Card</option>
                    <option onclick="document.querySelector('.gernder_field').style.display='none'" value="Debit Card">Debit Card</option>
                    <option onclick="document.querySelector('.gernder_field').style.display='none'" value="Bkash">Bkash</option>
                    <option onclick="document.querySelector('.gernder_field').style.display='none'" value="Nogod">Nogod</option>
                    <option onclick="document.querySelector('.gernder_field').style.display='none'" value="Rocket">Rocket</option>
                </select>
                <label class="gernder_field" style="top: 0;">Payment By*</label>
            </div>
            <div class="inputBox paymentMathod">
                <input type="text" name="numbear_payment" onkeyup="this.setAttribute('value', this.value);" required value="">
                <label>Payment Numbear *</label>
            </div>

            <div class="inputBox ">
                <input   type="text" name="room_price" onkeyup="this.setAttribute('value', this.value);findTotal();" required value="">
                <label>Bill By*</label>
            </div>
            <div class="inputBox ">
                <input   type="text" name="room_price" onkeyup="this.setAttribute('value', this.value);findTotal();" required value="">
                <label>Bill By Phone No*</label>
            </div>
           

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.reload();" >Close</button>
        <button type="button" class="btn btn-primary checkoutSubmit-btn" >Save changes</button>
      </div>
    </div>
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




<?php require_once("footer.php"); ?>

