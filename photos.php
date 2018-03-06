<?php include 'includes/header.php'; ?>

<section class="loggedBg">
	<div class="container">
		<ul class="loginMenu">
			<li><a href="dashboard.php">Dashboard</a></li>
			<li><a href="inbox.php">Inbox</a></li>
			<li><a href="mylisting.php">Mylisting</a></li>
			<li><a href="myexperience.php">My Experience</a></li>
			<li><a href="mytrips.php">My Trips</a></li>
			<li><a href="profile.php" class="active">Profile</a></li>
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
					<li><a href="profile.php">Edit Profile</a></li>
					<li><a href="photos.php" class="active">Photos</a></li>
					<li><a href="verification.php">Trust & Verification</a></li>
					<li><a href="#">Reviews</a></li>
					<li><a href="#">Dispute</a></li>
					<li><a href="#">View Profile</a></li>
				</ul>
			</div>
			<div class="width80">
				<div class="tableRow photos marginBottom2">
					<div class="left">
						<div class="profile_I">
							<img src="images/micheal.jpg" class="opacity">
							<img src="images/micheal.jpg" class="dp">
						</div>
					</div>
					<div class="right">
						<h5>Upload Profile Picture</h5>
						<p class="note">Clear frontal face photos are an important way for hosts and guests to learn about each other. It’s not much fun to host a landscape! Be sure to use a photo that clearly shows your face and doesn’t include any personal or sensitive info you’d rather not have hosts or guests see.</p>
						<form>
							<input type="file" name="" class="marginBottom2 fileStyle">
							<input type="submit" class="submitBtn1" name="">
						</form>
					</div>
				</div>
			</div>
		</div>	
	</div>
</section>

<?php include 'includes/footer.php'; ?>