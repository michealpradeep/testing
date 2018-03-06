<?php include 'includes/header.php'; ?>

<section class="loggedBg">
	<div class="container">
		<div class="toggleMenuD">
		  <div class="bar1"></div>
		  <div class="bar2"></div>
		  <div class="bar3"></div>
		</div>
		<ul class="loginMenu leftSlideBlock">
			<li><a href="dashboard.php" class="active">Dashboard</a></li>
			<li><a href="inbox.php">Inbox</a></li>
			<li><a href="mylisting.php">Mylisting</a></li>
			<li><a href="myexperience.php">My Experience</a></li>
			<li><a href="mytrips.php">My Trips</a></li>
			<li><a href="profile.php">Profile</a></li>
			<li><a href="account.php">Account</a></li>
			<li><a href="invite.php">Invite</a></li>
		</ul>
	</div>
</section>
<section>
	<div class="container">
		<div class="dashboard loggedIn clear">
			<div class="row">
				<div class="col-sm-3 width20">
					<div class="left">
						<div class="profile_I">
							<img src="images/micheal.jpg" class="opacity">
							<img src="images/micheal.jpg" class="dp">
						</div>
						<!-- <div class="reduceFont">Upload Profile Picture</div> -->
						<div class="name">Micheal Pradeep</div>
						<a href="#" class="editPro"><i class="fa fa-pencil" aria-hidden="true"></i> Edit Profile</a>
						<a href="#" class="viewPro">View Profile <i class="fa fa-sign-in" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="col-sm-9 width80">
					<div class="right">
						<div class="panel panel-default">
						  <div class="panel-heading">Alert</div>
						  <div class="panel-body">
						  	<a href="#">Please tell us how to pay you.</a>
						  </div>
						</div>

						<div class="panel panel-default">
						  <div class="panel-heading">New Messages <span class="number_s120">(4)</span></div>
						  <div class="panel-body">
						  	You have received <span class="number_s120">4</span> New Message(s) <a href="#" class="asideR">View Messages</a>
						  </div>
						</div>

						<div class="panel panel-default">
						  <div class="panel-heading">Verifications</div>
						  <div class="panel-body">
						  	<p>Email Address Verification </p>
						  	<div class="verify">
								<img src="images/verifiedIcon.png" width="30"> Verified
								<a href="#" class="asideR">Add More</a>
							</div>
						  </div>
						</div>

						<div class="panel panel-default">
						  <div class="panel-heading">Available Coupons <a href="#" class="asideR">View All</a> </div>
						  <div class="panel-body">
						  	<table class="table  table-striped">
						  		<tr>
							  		<th>S.No</th>
							  		<th>Coupon Name	</th>
							  		<th>Coupon Code	</th>
							  		<th>Product List</th>
							  		<th>From</th>
							  		<th>To</th>
							  		<th>Limit Count</th>
							  		<th>Status</th>
							  	</tr>
							  	<tr>
							  		<td>1</td>
							  		<td>New Year Discount</td>
							  		<td>michealpradeep</td>
							  		<td>Electronics</td>
							  		<td>01-01-2018</td>
							  		<td>01-01-2018</td>
							  		<td>150</td>
							  		<td>Available</td>
							  	</tr>
							  	<tr>
							  		<td>2</td>
							  		<td>New Year Discount</td>
							  		<td>michealpradeep</td>
							  		<td>Electronics</td>
							  		<td>01-01-2018</td>
							  		<td>01-01-2018</td>
							  		<td>150</td>
							  		<td>Available</td>
							  	</tr>
							  	<tr>
							  		<td>3</td>
							  		<td>New Year Discount</td>
							  		<td>michealpradeep</td>
							  		<td>Electronics</td>
							  		<td>01-01-2018</td>
							  		<td>01-01-2018</td>
							  		<td>150</td>
							  		<td>Available</td>
							  	</tr>
						  	</table>
						  </div>
						</div>

					</div>
				</div>
			</div>
		</div>	
	</div>
</section>

<?php include 'includes/footer.php'; ?>