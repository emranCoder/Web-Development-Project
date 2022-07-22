<?php 
   require_once("../config/configer.php");

   $user_token = $_POST["token"];

   if ( isset($_POST["stafs"]) == 'stafsUpdate' ) {

    $dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
    $date = $dt->format(' j, F, Y');

   $upadateQuery = "UPDATE  stafs  SET depart_date='$date' WHERE token='$user_token'";
   $runDataQuery = mysqli_query($connect,$upadateQuery);

   if ( $runDataQuery == true ) {
       echo "done";
   }else {
   	echo "sorry";
   }

}elseif ( isset($_POST["checkOut"]) == 'checkout' ) {

    $roomPrice = $_POST["roomPrice"];
   $cash = $_POST["cash"];
   $extraChange = $_POST["extraChange"];
   $disCount = $_POST["disCount"]."%";
   $due = $_POST["due"];
   $bill = $_POST["bill"];
   $paymentBy = $_POST["paymentBy"];
   $payment_numbar = $_POST["pyumbear"];
   $billBy = $_POST["billBy"];
   $billBy_phone_no = $_POST["billBy_phone_no"];
   $extraCharges_descript = $_POST["extraCharges_descript"];
   $bill_no = "#000".rand(1000,1000000);

    $dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
    $date = $dt->format(' j, F, Y');

   $upadateQuery = "UPDATE  dashbord SET depart_date='$date',paid_unpaid='Paid',cash='$cash', extraChange='$extraChange',disCount='$disCount',due='$due',bill='$bill',paymentBy='$paymentBy', pymentNumbear='$payment_numbar',billNo='$bill_no',billBy='$billBy',billBy_phone_no='$billBy_phone_no',extraCharges_descript='$extraCharges_descript' WHERE token='$user_token'";
   $runDataQuery = mysqli_query($connect,$upadateQuery);

   if ( $runDataQuery == true ) {
       echo "php-core/check_out_pdf.php?token=$user_token&editB00kingActive&done";
   }else {
    echo "http://localhost/welcome/edit-booking.php?token=$user_token&editB00kingActive&sorry";
   }




}
?>