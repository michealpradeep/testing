<?php include 'includes/header.php'; ?>

<section class="loggedBg">
	<div class="container">
		<ul class="loginMenu">
			<li><a href="dashboard.php">Dashboard</a></li>
			<li><a href="inbox.php">Inbox</a></li>
			<li><a href="mylisting.php" class="active">Mylisting</a></li>
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
		<div class="loggedIn clear">
			<div class="width20">
				<ul class="sideBarMenu">
					<li><a href="#" class="active">Manage Listing</a></li>
					<li><a href="#">My Reservation</a></li>
				</ul>
			</div>
			<div class="width80">
				<div class="row">
					<div class="col-sm-12">
						<div class="searchTable clear">
							<form class="clear">
								<input type="text" name="" placeholder="Search by Property">
								<input type="submit" name="" value="Search" class="submit">
							</form>
						</div>
						<table class="table  table-striped leftAlign">
							<tr>
								<th width="5%">S.No</th>
								<th width="10%">Image</th>
								<th width="30%">Title</th>
								<th width="5%">Action</th>
							</tr>
							<tr>
								<td>1</td>
								<td><img src="images/home1.jpg"></td>
								<td>
									<div>Lovely 2 Bdr Bungalow - Views!</div>
									<a href="#">Manage Listing and Calendar</a>
								</td>
								<td>
									<a href="#">Pay</a>
								</td>
							</tr>
							<tr>
								<td>2</td>
								<td><img src="images/home2.jpg"></td>
								<td>
									<div>Lovely 2 Bdr Bungalow - Views!</div>
									<a href="#">Manage Listing and Calendar</a>
								</td>
								<td>
									<div>Listed</div>
								</td>
							</tr>
							<tr>
								<td>3</td>
								<td><img src="images/home3.jpg"></td>
								<td>
									<div>Lovely 2 Bdr Bungalow - Views!</div>
									<a href="#">Manage Listing and Calendar</a>
								</td>
								<td>
									<div>Listed</div>
								</td>
							</tr>
							<tr>
								<td>4</td>
								<td><img src="images/home1.jpg"></td>
								<td>
									<div>Lovely 2 Bdr Bungalow - Views!</div>
									<a href="#">Manage Listing and Calendar</a>
								</td>
								<td>
									<a href="#">Pay</a>
								</td>
							</tr>
							<tr>
								<td>5</td>
								<td><img src="images/home2.jpg"></td>
								<td>
									<div>Lovely 2 Bdr Bungalow - Views!</div>
									<a href="#">Manage Listing and Calendar</a>
								</td>
								<td>
									<a href="#">Pay</a>
								</td>
							</tr>

						</table>
					</div>
				</div>
		
			</div>
		</div>	
	</div>
</section>

<?php include 'includes/footer.php'; ?>