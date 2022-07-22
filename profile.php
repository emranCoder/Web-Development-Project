s<?php require_once("header.php"); ?>

<br><br>
<br><br>
<br>
<?php 
require_once("config/configer.php");

$shoDataQuery = "SELECT * FROM profile";
   $runDataQuery = mysqli_query($connect,$shoDataQuery);

   if ($runDataQuery==true) {

    while ($db_data = mysqli_fetch_array($runDataQuery)) {
 	 $user_name = $db_data["fName"]." ".$db_data["lName"];
 	$user_title = $db_data["profile_title"];
 	$user_addr = $db_data["address"];
 	$user_phone_no= $db_data["profile_phone_no"];
 	$user_email= $db_data["user_email"];
?>

<seciton class="content">
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-md-4 col-lg-4">
				<div class="u_p-detil card">
					<div class="u_p-back-img">
						<h2><?php echo $user_name;?></h2>
						<p class="admin_position"><?php echo $user_title;?></p>
					</div>
					<div class="admin_img u_p-img">
						<img src="image/emran.jpg">
					</div>
					<p class="admin_addr"><?php echo $user_addr?></p>
					<div class="admin_p_details">
						<i class="fas fa-phone-alt"></i>
						<a class="admin_p_number" href="tel:<?php echo $user_phone_no?>"><?php echo $user_phone_no; ?></a>
					</div>
				</div>
				<div class="u_p-detil card u_p_admin_about">
					<div class="admin_about">
						<div class="admin_about_tab">
							<p>About</p>
						</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
						<div class="u_p_admin_c_box">
							<span class="admin_about_email">Email</span>
							<p><?php echo $user_email; ?></a></p>
							<span class="admin_about_email">Phone</span>
							<p><?php echo $user_phone_no; ?></p>
						</div>

					</div>
				</div>
			</div>
			<div class="col-sm-8 col-md-8 col-lg-8">
			<section id="tabs" class="project-tab card">
	            <div class="container">
	                <div class="row">
	                    <div class="col-md-12">
	                        <nav>
	                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
	                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><i class="fas fa-grin" style="margin: 10px;"></i>About Me</a>
	                                <a class="nav-item nav-link de-nav-item" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="fas fa-cog" style="margin: 10px;"></i>Settings</a>
	                            </div>
	                        </nav>
	                    </div>
	                    <div class="tab-content" id="nav-tabContent">
	                    	<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
	                    		<h2 class="profile-tabe-head">About</h2>

	                    		Completed my graduation in Arts from the well known and renowned institution of India – SARDAR PATEL ARTS COLLEGE, BARODA in 2000-01, which was affiliated to M.S. University. I ranker in University exams from the same university from 1996-01.
								Worked as Professor and Head of the department at Sarda Collage, Rajkot, Gujarat from 2003-2015
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
								<h2 class="profile-tabe-head">Education</h2>
								    B.A.,Gujarat University, Ahmedabad,India.
								    M.A.,Gujarat University, Ahmedabad, India.
								    P.H.D., Shaurashtra University, Rajkot
								<h2 class="profile-tabe-head">Experience</h2>
								    One year experience as Jr. Professor from April-2009 to march-2010 at B. J. Arts College, Ahmedabad.
								    Three year experience as Jr. Professor at V.S. Arts & Commerse Collage from April - 2008 to April - 2011.
								    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
								    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
								    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
								    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
								    <h2 class="profile-tabe-head">Conferences, Cources & Workshop Attended</h2> 
								        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
									    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
									    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
									    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
									    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
									    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
									    Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
	                        </div>
	                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
	                        	<h2 class="profile-tabe-head">Security Settings</h2> 
								<form class="admin-tab-profile-settings" action="php-core/profile_update.php?c7cfe62dbef6905a0b1b1d595a5c2e92" method="POST">
								  <label>
								    <p class="label-txt">User</p>
								    <input type="text" class="input" name="U_name">
								    <div class="line-box">
								      <div class="line"></div>
								    </div>
								  </label>
								  <label>
								    <p class="label-txt">Current Password</p>
								    <input type="text" class="input" name="u_Curent_pwd">
								    <div class="line-box">
								      <div class="line"></div>
								    </div>
								  </label>
								  <label>
								    <p class="label-txt">New Password</p>
								    <input type="text" class="input" name="u_new_pwd">
								    <div class="line-box">
								      <div class="line"></div>
								    </div>
								  </label>
								  <button type="submit">Save</button>
								</form>
								<br>
								<br>
								<br>
								<h2 class="profile-tabe-head">Account Settings</h2>
								<form class="a-p-s-ac-se" action="" method="POST">
									<label class="first-name">
										<p class="label-text">First Name</p>
										<input type="text" name="fName" class="input2">
										<div class="line-box">
								      		<div class="line"></div>
								    	</div>
									</label>
									<label class="last-name">
										<p class="label-text">Last Name</p>
										<input type="text" name="fName" class="input2">
										<div class="line-box">
								      		<div class="line"></div>
								    	</div>
									</label>
									<label>
										<p class="label-text">City</p>
										<input type="text" name="fName" class="input2">
										<div class="line-box">
								      		<div class="line"></div>
								    	</div>
									</label>
									<label>
										<p class="label-text">Email</p>
										<input type="text" name="fName" class="input2">
										<div class="line-box">
								      		<div class="line"></div>
								    	</div>
									</label>
									<label>
										<p class="label-text">Country</p>
										<input type="text" name="fName" class="input2">
										<div class="line-box">
								      		<div class="line"></div>
								    	</div>
									</label>
									<label class="textarea">
										<p class="label-text">Address</p>
										<textarea name="address"></textarea>
										<div class="line-box">
								      		<div class="line"></div>
								    	</div>
									</label>
									<button type="submit">Save & Change</button>
								</form>
	                        </div>
	                    </div>
	                </div>
	            </div>
        	</section>
			</div>
		</div>
	</div>
</seciton>
<?php
    	}
    }
?>




<?php require_once("footer.php"); ?>