<?php include 'includes/header.php'; ?>

<section class="loggedBg">
	<div class="container">
		<ul class="loginMenu">
			<li><a href="dashboard.php">Dashboard</a></li>
			<li><a href="inbox.php">Inbox</a></li>
			<li><a href="mylisting.php">Mylisting</a></li>
			<li><a href="myexperience.php" class="active">My Experience</a></li>
			<li><a href="mytrips.php">My Trips</a></li>
			<li><a href="profile.php">Profile</a></li>
			<li><a href="account.php">Account</a></li>
			<li><a href="invite.php">Invite</a></li>
		</ul>
	</div>
</section>

<section>
	<div class="container">
		<div class="loggedIn clear">
			<div class="width20">
				<ul class="sideBarMenu">
					<li><a href="#">Add New Experience</a></li>
					<li><a href="#">Manage Experience</a></li>
					<li><a href="myexperience.php" class="active">My Experience</a></li>
					<li><a href="#">Previous Experience</a></li>
					<li><a href="#">My Experience Reservation</a></li>
					<li><a href="#">Transaction History</a></li>
					<li><a href="myreviews.php">Reviews</a></li>
					<li><a href="#">Cancel Booking</a></li>
					<li><a href="#">My Message</a></li>
				</ul>
			</div>
			<div class="width80">
				<div class="row">
					<div class="col-sm-12">
						<div class="searchTable clear">
							<form class="clear">
								<input type="text" name="" placeholder="Search by Experience">
								<input type="submit" name="" value="Search" class="submit">
							</form>
						</div>

						<table class="table  table-striped">
							<tr>
								<th width="10%">Booked On</th>
								<th width="10%">Experience Name</th>
								<th width="5%">Host</th>
								<th width="25%">Dates And Location</th>
								<th width="5%">Amount</th>
								<th width="5%">Payment Status</th>
								<th width="5%">Host Approval</th>
								<th width="5%">Host Status</th>
							</tr>
							<tr>
								<td>Dec 21, 2017</td>
								<td>
									<img src="images/exp1.jpg">
									Food And Drink Pairing Experience
								</td>
								<td>Micheal Pradeep</td>
								<td>
									Jan 25, 2018 - Jan 25, 2018 
									<div class="reduceFont">Allegheny County, Pennsylvania, United States.</div>
									<div>Booking No : XP1500308</div>
								</td>
								<td><span class="number_s120">$580</span> USD </td>
								<td>Expired</td>
								<td>-</td>
								<td>Host Is Available</td>
							</tr>

							<tr>
								<td>Dec 21, 2017</td>
								<td>
									<img src="images/exp1.jpg">
									Food And Drink Pairing Experience
								</td>
								<td>Micheal Pradeep</td>
								<td>
									Jan 25, 2018 - Jan 25, 2018 
									<div class="reduceFont">Allegheny County, Pennsylvania, United States.</div>
									<div>Booking No : XP1500308</div>
								</td>
								<td><span class="number_s120">$580</span> USD </td>
								<td>Expired</td>
								<td>-</td>
								<td>Host Is Available</td>
							</tr>

							<tr>
								<td>Dec 21, 2017</td>
								<td>
									<img src="images/exp1.jpg">
									Food And Drink Pairing Experience
								</td>
								<td>Micheal Pradeep</td>
								<td>
									Jan 25, 2018 - Jan 25, 2018 
									<div class="reduceFont">Allegheny County, Pennsylvania, United States.</div>
									<div>Booking No : XP1500308</div>
								</td>
								<td><span class="number_s120">$580</span> USD </td>
								<td>Expired</td>
								<td>-</td>
								<td>Host Is Available</td>
							</tr>

							<tr>
								<td>Dec 21, 2017</td>
								<td>
									<img src="images/exp1.jpg">
									Food And Drink Pairing Experience
								</td>
								<td>Micheal Pradeep</td>
								<td>
									Jan 25, 2018 - Jan 25, 2018 
									<div class="reduceFont">Allegheny County, Pennsylvania, United States.</div>
									<div>Booking No : XP1500308</div>
								</td>
								<td><span class="number_s120">$580</span> USD </td>
								<td>Expired</td>
								<td>-</td>
								<td>Host Is Available</td>
							</tr>


							<tr>
								<td>Dec 21, 2017</td>
								<td>
									<img src="images/exp1.jpg">
									Food And Drink Pairing Experience
								</td>
								<td>Micheal Pradeep</td>
								<td>
									Jan 25, 2018 - Jan 25, 2018 
									<div class="reduceFont">Allegheny County, Pennsylvania, United States.</div>
									<div>Booking No : XP1500308</div>
								</td>
								<td><span class="number_s120">$580</span> USD </td>
								<td>Expired</td>
								<td>-</td>
								<td>Host Is Available</td>
							</tr>

						</table>
					</div>
				</div>
		
			</div>
		</div>	
	</div>
</section>

<?php include 'includes/footer.php'; ?>