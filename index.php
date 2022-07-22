
<?php
 
 $dataPoints1 = array(
	array("x" => 1451586600000, "y" => 96.709),
	array("x" => 1454265000000, "y" => 94.918),
	array("x" => 1456770600000, "y" => 95.152),
	array("x" => 1459449000000, "y" => 97.070),
	array("x" => 1462041000000, "y" => 97.305),
	array("x" => 1464719400000, "y" => 89.854),
	array("x" => 1467311400000, "y" => 88.158),
	array("x" => 1469989800000, "y" => 87.989),
	array("x" => 1472668200000, "y" => 86.366),
	array("x" => 1475260200000, "y" => 81.650),
	array("x" => 1477938600000, "y" => 85.789),
	array("x" => 1480530600000, "y" => 83.846),
	array("x" => 1483209000000, "y" => 84.927),
	array("x" => 1485887400000, "y" => 82.609),
	array("x" => 1488306600000, "y" => 81.428),
	array("x" => 1490985000000, "y" => 83.259),
	array("x" => 1493577000000, "y" => 83.153),
	array("x" => 1496255400000, "y" => 84.180),
	array("x" => 1498847400000, "y" => 84.840),
	array("x" => 1501525800000, "y" => 82.671),
	array("x" => 1504204200000, "y" => 87.496),
	array("x" => 1506796200000, "y" => 86.007),
	array("x" => 1509474600000, "y" => 87.233),
	array("x" => 1512066600000, "y"=> 86.276)
 );
 
 $dataPoints2 = array(
	array("x"=> 1451586600000, "y" => 73.5555),
	array("x"=> 1454265000000, "y" => 74.1625),
	array("x"=> 1456770600000, "y" => 75.3980),
	array("x"=> 1459449000000, "y" => 76.0965),
	array("x"=> 1462041000000, "y" => 74.8165),
	array("x"=> 1464719400000, "y" => 74.9660),
	array("x"=> 1467311400000, "y" => 74.4805),
	array("x"=> 1469989800000, "y" => 74.7355),
	array("x"=> 1472668200000, "y" => 74.8155),
	array("x"=> 1475260200000, "y" => 73.2275),
	array("x"=> 1477938600000, "y" => 72.6315),
	array("x"=> 1480530600000, "y" => 71.4610),
	array("x"=> 1483209000000, "y" => 72.9025),
	array("x"=> 1485887400000, "y" => 70.5750),
	array("x"=> 1488306600000, "y" => 69.0955),
	array("x"=> 1490985000000, "y" => 70.0565),
	array("x"=> 1493577000000, "y" => 72.5320),
	array("x"=> 1496255400000, "y" => 73.8350),
	array("x"=> 1498847400000, "y" => 76.0255),
	array("x"=> 1501525800000, "y" => 76.1465),
	array("x"=> 1504204200000, "y" => 77.1570),
	array("x"=> 1506796200000, "y" => 75.4075),
	array("x"=> 1509474600000, "y" => 76.7690),
	array("x"=> 1512066600000, "y" => 76.5950)
 );
 
?>
<!-- room survey --> 
<?php
 
$dataPoints_room = array( 
	array("label"=>"Single", "symbol" => "Single","y"=>13.9),
	array("label"=>"Double", "symbol" => "Double","y"=>5),
	array("label"=>"King", "symbol" => "King","y"=>3.6),
);
?>
<?php
	require_once("header.php"); 
?>
<br><br>
<section class="content">
	<div class="container">
		<div class="row">
			<div class="col-sm-7 col-md-7 col-lg-7">
				<div class="content-head">
					<h2>Hi, Welcome back!</h2>
					<span>Spice Dashboard,</span>
				</div>
			</div>
			<div class="col-sm-3 col-md-3 col-lg-3">
				<div class="content-head coustomer-review">
					<p style="font-size: 20px;">Customer Ratings</p>
					<span><i class="fas fa-star"></i></span>
					<span><i class="fas fa-star"></i></span>
					<span><i class="fas fa-star"></i></span>
					<span><i class="fas fa-star"></i></span>
					<span><i class="fas fa-star-half-alt"></i></span>
					<span>(9,876)</span>
				</div>
			</div>
			<div class="col-sm-2 col-md-2 col-lg-2">
				<div class="content-head coustomer-review">
					<p style="font-size: 20px;">Total Income</p>
					<span style="font-weight: bold;">৳</span>
					<span><?php 
   require_once("config/configer.php");
	
   $shoDataQuery = "SELECT sum(price) as sumPrice FROM dashbord";
   $runDataQuery = mysqli_query($connect,$shoDataQuery);
   $data = mysqli_fetch_array($runDataQuery);

   if ($runDataQuery==true) {
   echo number_format($data['sumPrice']) ;
}
 ?></span>
				</div>
			</div>
		</div>
	</div>
	<div class="car-box">
	<div class="container">
		<div class="row">
			<div class="col-sm-3 col-md-3 col-lg-3">
				<div class="card">
					<div class="card-icon"><i class="fas fa-paste"></i></div>
					<div class="float-right m-4 card-dital">
						<p>Total Booking</p>
						<span class="total-booking-dtl"><?php 

						 require_once("config/configer.php");


						$result = mysqli_query($connect,"SELECT * FROM dashbord");
						$rows = mysqli_num_rows($result);
						echo $rows;

						 ?></span>
					</div>
					<div class="progress card-content m-3" role="progressbar">
					  <div class="de-progress progress-bar l-bg-purple" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 55%"></div>
					</div>
				</div>
			</div>
			<div class="col-sm-3 col-md-3 col-lg-3">
				<div class="card">
					<div class="card-icon bg-orange"><i class="fas fa-bed"></i></div>
					<div class="float-right m-4 card-dital">
						<p>Room Available</p>
						<span><?php 
   require_once("config/configer.php");

   $shoDataQuery = "SELECT sum(haveRoom) as totalRoom FROM room";
   $runDataQuery = mysqli_query($connect,$shoDataQuery);
   $data = mysqli_fetch_array($runDataQuery);

   if ($runDataQuery==true) {
   echo number_format($data['totalRoom']) ;
}
 ?></span>
					</div>
					<div class="progress card-content m-3" role="progressbar">
					  <div class="de-progress progress-bar l-bg-orange" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 55%"></div>
					</div>
				</div>
			</div>
			<div class="col-sm-3 col-md-3 col-lg-3">
				<div class="card">
					<div class="card-icon bg-green"><i class="fas fa-users"></i></div>
					<div class="float-right m-4 card-dital">
						<p>New Customers</p>
						<span>1,245</span>
					</div>
					<div class="progress card-content m-3" role="progressbar">
					  <div class="progress-bar l-bg-green" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 55%"></div>
					</div>
				</div>
			</div>
			<div class="col-sm-3 col-md-3 col-lg-3">
				<div class="card">
					<div class="card-icon bg-info"><i class="fas fa-dollar-sign"></i></div>
					<div class="float-right m-4 card-dital">
						<p>Total Revenue</p>
						<span><?php 
   require_once("config/configer.php");

   $shoDataQuery = "SELECT sum(price) as sumPrice FROM dashbord";
   $runDataQuery = mysqli_query($connect,$shoDataQuery);
   $data = mysqli_fetch_array($runDataQuery);

   if ($runDataQuery==true) {
   echo number_format($data['sumPrice']); ;
}
 ?></span>
					</div>
					<div class="progress card-content m-3" role="progressbar">
					  <div class="de-progress progress-bar l-bg-cyan" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 55%"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</section>

<section class="survey-section">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-md-8 col-lg-8">
				<div class="card">
					<div class="survey-title">
						<h2 class="m-3">Hotel Survay</h2>
						<div class="dropdown">
						  <button class="btn de-btn dropdown-toggle float-right d-flex justify-content-end" type="button" id="dropdownMenuButton " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="s_warper justify-content-end d-flex m-3"><i class="fas fa-ellipsis-v"></i></span>
						  </button>
						  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						    <a class="dropdown-item">Action</a>
						    <a class="dropdown-item" href="#">Another action</a>
						    <a class="dropdown-item" href="#">Something else here</a>
						  </div>
						</div>
					</div>
					<div class="survey-graph">
						<div id="chartContainer" style="height: 350px; width: 100%;"></div>
					</div>
				</div>	
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4">
				<div class="card">
					<div class="survey-title">
						<h2 class="m-3">Hotel Survay</h2>
						<div class="dropdown">
						  <button class="btn de-btn dropdown-toggle float-right d-flex justify-content-end" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="s_warper justify-content-end d-flex m-3"><i class="fas fa-ellipsis-v"></i></span>
						  </button>
						  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						    <a class="dropdown-item">Action</a>
						    <a class="dropdown-item" href="#">Another action</a>
						    <a class="dropdown-item" href="#">Something else here</a>
						  </div>
						</div>
					</div>
					<div class="survey-room">
						<div id="chartRoom" style="height: 370px; width: 100%;"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="booking-dtl-section">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<div class="booking-dtl-box card">
					<div class="survey-title">
						<h2 class="m-3">Booking Details</h2>

				<div class="dropdown">
					                <div class="form-group has-feedback">
					            		<label for="search" class="sr-only">Search</label>
					            		<input type="text" class=" search-form form-control" name="search" id="search" placeholder="search">
					              		<span class="glyphicon glyphicon-search form-control-feedback"></span>
					            	</div>
						  <button class="btn de-btn dropdown-toggle float-right d-flex justify-content-end" type="button" id="dropdownMenuButton " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="s_warper justify-content-end d-flex m-3"><i class="fas fa-ellipsis-v"></i></span>
						  </button>
						  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						    <a class="dropdown-item search-box-active" style="cursor: pointer;">Search Box</a>
						    <a class="dropdown-item" href="new-booking.php?trueNewBooking">Add Booking</a>
						    <a class="dropdown-item" href="new-stafs.php?trueNewStafs">Add Stafa</a>
						  </div>
						</div>
					</div>
					<div class="booking-dtl-table">
						<table class="table" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Check In</th>
                                    <th>Check Out</th>
                                    <th>Status</th>
                                    <th>Phone</th>
                                    <th>Room Type</th>
                                    <th>Documents</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

<?php 
   require_once("config/configer.php");



   $shoDataQuery = "SELECT * FROM dashbord";
   $runDataQuery = mysqli_query($connect,$shoDataQuery);

   if ($runDataQuery==true) {

    while ($db_data = mysqli_fetch_array($runDataQuery)) {

        $user_name = $db_data["fName"]." ".$db_data["lName"];
        $user_email = $db_data["email"];
        $user_id = $db_data["ID"];
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
        $user_paid_unpaid = $db_data["paid_unpaid"];
        $user_token = $db_data["token"];
        $checkout_code = $db_data["check_out_code"];
?>                             	
                                <tr>
                                    <td><img src='<?php echo "avater/$user_avater_image_first_person" ?>'/></td>
                                    <td><a href="#"><?php echo $user_name; ?></a></td>
                                    <td style="display: none;"><?php echo $checkout_code; ?></td>
                                    <td><?php echo $user_arrive_date; ?></td>
                                    <td><?php echo $user_depart_date; ?></td>
                                    <td><?php 
                                        if ($user_paid_unpaid == "Paid") {

                                           ?>
                                           <sapn class="paid">Paid</sapn>
                                           <?php 
                                        }else {
                                         ?>
                                         <span class="unpadi">Unpaid</span></td>
                                         <?php 
                                            }
                                        ?>
                                    <td><?php echo $user_phone; ?></td>
                                    <td><?php echo $user_room_type; ?></td>
                                    <td><a href="php-core/pdfcreat.php?newBooking&token=<?php echo $user_token; ?>" downalod=""><button class="booking-dtl-pdf-btn">
                                    	<i class="far fa-file-pdf"></i>
                                    </button></a></td>
                                    <td>
                                    	<i class="fas fa-pen booking-dtl-edit"></i>
                                    	<a onclick='if (confirm("Ar you sure to delete this person?")) {
                                            window.location.href = "php-core/delete_core.php?t_O_k_N=<?php echo $user_id ?>&Aimage=<?php echo $user_avater_image_first_person;  ?>&nidImagefornt=<?php echo $user_nid_first_avater_fornt_photo; ?>&nidImageBack=<?php echo $user_nid_first_avater_back_photo; ?>" 
                                        } else {
                                            window.location.reload();
                                        }' >
                                    		<i class="fas fa-trash-alt booking-dtl-del"></i>
                                    	</a>
                                    </td>
                                </tr>
<?php     
    }
   }else {
    echo "not found";
   } 
?>
<?php 
if (isset($_REQUEST["d58915ab459ea97ce5c96dce64b43f2b"])) {
	
 ?>

<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12">
			<div style="display: block;background: #3333337a;" class="modal" tabindex="-1" role="dialog">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title">Congratulation!</h5>
			        <a href="index.php">
			        	<button type="button" class="close de-colose" data-dismiss="modal" aria-label="Close">
			        </a>
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <p style="color: green;">Data Succesfully Submited</p>
			        <p>Prease ok button to continue...</p>
			      </div>
			      <div class="modal-footer">
			        <a href="index.php">
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

	}elseif (isset($_REQUEST["99dab95d38aa32e33bcb55098458491a "])) {

?>
<!-- da94b62094880691bb01371e16fd36e3  -->
<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12">
			<div style="display: block;background: #3333337a;" class="modal" tabindex="-1" role="dialog">
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
			        <button type="button" class="btn btn-secondary  de-colose" data-dismiss="modal">OK</button>
			      </div>
			    </div>
			  </div>
			</div>
		</div>	
	</div>
</div>

<?php }  ?>

                                <tr>
                                    <td><img src="image/user9.jpg"></td>
                                    <td><a href="#">Dooley</a></td>
                                    <td>12-08-2019</td>
                                    <td>12-08-2019</td>
                                    <td><sapn class="paid">Paid</sapn>
                                    	<span class="unpadi">Unpaid</span></td>
                                    <td>0045-54211</td>
                                    <td>Single Room</td>
                                    <td><a href="#" downalod><button class="booking-dtl-pdf-btn">
                                    	<i class="far fa-file-pdf"></i>
                                    </button></a></td>
                                    <td>
                                    	<i class="fas fa-pen booking-dtl-edit"></i>
                                    	<i class="fas fa-trash-alt booking-dtl-del"></i>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="review-dtl-section">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<div class="review-dtl-box card">
					<div class="survey-title">
						<h2 class="m-3">Customer Review</h2>
						<div class="dropdown">
						  <button class="btn de-btn dropdown-toggle float-right d-flex justify-content-end" type="button" id="dropdownMenuButton " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="s_warper justify-content-end d-flex m-3"><i class="fas fa-ellipsis-v"></i></span>
						  </button>
						  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						    <a class="dropdown-item" href="#">Action</a>
						    <a class="dropdown-item" href="#">Another action</a>
						    <a class="dropdown-item" href="#">Something else here</a>
						  </div>
						</div>
					</div>
					<div class="review-dtl-table">
						<div class="container">
							<div class="row">
								<div class="col-sm-1 col-md-1 col-lg-1">
									<div class="u_profile"><img src="image/user3.jpg"></div>
								</div>
								<div class="col-sm-11 col-md-11 col-lg-11">
									<h5 style="display: inline-block;">Alina Smith</h5><span style="display: flex;justify-content: end;color: #96a2b4;float: right;"> a week ago</span><br>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star-half-alt"></i>
									<i class="fas fa-star-half-alt"></i>
									<p style="color:#96a2b4; ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vel rutrum ex, at ornare mi. In quis scelerisque dui, eget rhoncus orci. Fusce et sodales ipsum. Nam id nunc euismod, aliquet arcu quis, mattis nisi.</p>
									<i class="fas fa-thumbs-up review-like btn-ripple-blue"></i>
									<i class="fas fa-thumbs-down review-dislike ripple btn-ripple"></i>
									
								</div>
							</div>
						</div>
					</div>
										<div class="review-dtl-table">
						<div class="container">
							<div class="row">
								<div class="col-sm-1 col-md-1 col-lg-1">
									<div class="u_profile"><img src="image/user2.jpg"></div>
								</div>
								<div class="col-sm-11 col-md-11 col-lg-11">
									<h5 style="display: inline-block;">Alina Smith</h5><span style="display: flex;justify-content: end;color: #96a2b4;float: right;"> a week ago</span><br>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star-half-alt"></i>
									<i class="fas fa-star-half-alt"></i>
									<p style="color:#96a2b4; ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vel rutrum ex, at ornare mi. In quis scelerisque dui, eget rhoncus orci. Fusce et sodales ipsum. Nam id nunc euismod, aliquet arcu quis, mattis nisi.</p>
									<i class="fas fa-thumbs-up review-like btn-ripple-blue"></i>
									<i class="fas fa-thumbs-down review-dislike ripple btn-ripple"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<?php
	require_once("footer.php"); 
?>
<script type="text/javascript">
	window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text: ""
	},
	subtitles: [{
		text: "",
		fontSize: 18
	}],
	axisY: {
		prefix: ""
	},
	axisX: {
		valueFormatString: "" ,
	},
	legend:{
		cursor: "pointer",
		itemclick: toggleDataSeries
	},
	toolTip: {
		shared: true
	},
	data: [
	{
		type: "area",
		name: "GBP",
		showInLegend: "true",
		xValueType: "dateTime",
		xValueFormatString: "MMM YYYY",
		yValueFormatString: "₹#,##0.##",
		dataPoints: <?php echo json_encode($dataPoints1); ?>
	},
	{
		type: "area",
		name: "EUR",
		showInLegend: "true",
		xValueType: "dateTime",
		xValueFormatString: "MMM YYYY",
		yValueFormatString: "₹#,##0.##",
		dataPoints: <?php echo json_encode($dataPoints2); ?>
	}
	]
});
 
chart.render();
 
function toggleDataSeries(e){
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else{
		e.dataSeries.visible = true;
	}
	chart.render();
}

//room survey javascript 

var chart = new CanvasJS.Chart("chartRoom", {
	theme: "light2",
	width: 300,
	animationEnabled: true,
	title: {
		text: ""
	},
	data: [{
		type: "doughnut",
		indexLabel: "{symbol} - {y}",
		yValueFormatString: "#,##0.0\"%\"",
		showInLegend: true,
		legendText: "{label} : {y}",
		dataPoints: <?php echo json_encode($dataPoints_room, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
