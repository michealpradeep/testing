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
			<li><a href="account.php"  class="active">Account</a></li>
			<li><a href="invite.php">Invite</a></li>
		</ul>
	</div>
</section>

<section>
	<div class="container">
		<div class="loggedIn clear">
			<div class="width20">
				<ul class="sideBarMenu">
					<li><a href="account.php" class="active">Payout Preference</a></li>
					<li><a href="transaction_history.php">Transaction History</a></li>
					<li><a href="#">Security</a></li>
					<li><a href="#">Settings</a></li>
					<li><a href="#">Your Wallet</a></li>
				</ul>
			</div>
			<div class="width80">
				<div class="panel panel-default">
				  <div class="panel-heading">Payout Methods</div>
				  <div class="panel-body">
				  	<table class="table table-bordered table-striped">
				  		<tr>
				  			<th>Account Name</th>
				  			<th>Account Number</th>
				  			<th>Bank Name</th>
				  			<th>Paypal Email</th>
				  			<th>Settings</th>
				  		</tr>
				  		<tr>
				  			<td>Savings Account</td>
				  			<td>4578965126544</td>
				  			<td>Indian Bank</td>
				  			<td>michealpradeep@gmail.com</td>
				  			<td>
				  				<div class="dropdown">
								  <button class="dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa fa-cog" aria-hidden="true"></i></button>
								  <ul class="dropdown-menu sm">
								    <li><a href="#" data-toggle="modal" data-target="#editPayout_M">Edit</a></li>
								    <li><a href="#">Delete</a></li>
								  </ul>
								</div>
				  			</td>
				  		</tr>
				  	</table>
				  </div>
				</div>
			</div>
		</div>	
	</div>
</section>

<!-- EditPayout_M Modal -->
<div id="editPayout_M" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2 class="mHead">Payout Details</h2>
      </div>
      <div class="modal-body">
        <form class="formFields">
		  <div class="form-group">
		    <label>Account Name</label>
		    <input type="text" placeholder="Account name here">
		  </div>
		  <div class="form-group">
		    <label>Account Number</label>
		    <input type="text" placeholder="Account Number here">
		  </div>
		  <div class="form-group">
		    <label>Bank Name</label>
		    <input type="text" placeholder="Bank Name here">
		  </div>
		  <div class="form-group">
		    <label>Paypal Email</label>
		    <input type="text" placeholder="Paypal Email here">
		  </div>
		  <input type="submit" class="submitBtn1" value="Submit" name="">
		</form>
      </div>
    </div>

  </div>
</div>

<?php include 'includes/footer.php'; ?>