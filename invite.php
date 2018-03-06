<?php include 'includes/header.php'; ?>

<section class="loggedBg">
	<div class="container">
		<ul class="loginMenu">
			<li><a href="dashboard.php">Dashboard</a></li>
			<li><a href="inbox.php">Inbox</a></li>
			<li><a href="mylisting.php">Mylisting</a></li>
			<li><a href="myexperience.php">My Experience</a></li>
			<li><a href="mytrips.php">My Trips</a></li>
			<li><a href="profile.php">Profile</a></li>
			<li><a href="account.php">Account</a></li>
			<li><a href="invite.php" class="active">Invite</a></li>
		</ul>
	</div>
</section>

<section>
	<div class="container-fluid inviteBg" style="background-image: url('images/invite_friend.jpg');">
		
	</div>
	<div class="container inviteFrnds">
		<div class="heading">
			<h2>Send A Friend Homestay Credit, You Will Get $20 Or When They Travel And $80 When They Host</h2>
			<h5>15,10 You Ve Got $ 0.00 In Travel Credit To Spend!</h5>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="searchTable clear">
					<form class="clear">
						<input type="text" name="" placeholder="Add Friend's Email Address">
						<input type="submit" name="" value="Search" class="submit">
						<p class="reduceFont">Separate multiple emails by comma.</p>
					</form>

				</div>
			</div>
			<div class="col-md-6">
				<div class="searchTable clear">
					<form class="clear">
						<input type="text" name="" readonly value="http://www.facebook.com/sharer.php?u=http%3A%2F%2Fdemo3.pofi5.com%2Frental%2F100" placeholder="">
						<input type="submit" name="" value="Share" class="submit">
						<p class="reduceFont">Share <i class="fa fa-twitter" aria-hidden="true"></i></p>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include 'includes/footer.php'; ?>