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
					<li><a href="photos.php">Photos</a></li>
					<li><a href="verification.php" class="active">Trust & Verification</a></li>
					<li><a href="#">Reviews</a></li>
					<li><a href="#">Dispute</a></li>
					<li><a href="#">View Profile</a></li>
				</ul>
			</div>
			<div class="width80">
				<div class="panel panel-default">
				  <div class="panel-heading">Verify Your ID</div>
					  <div class="panel-body">
					  	<p>Getting your Verified ID is the easiest way to help build trust in the community. We'll verify you by matching information from an online account to an official ID.</p>
					  	<p>Or, you can choose to only add the verifications you want below.</p>
					  	<div>
							<img src="images/verifiedIcon.png" width="25"> Verified
						</div>
					  </div>
				</div>

				<div class="panel panel-default">
				  <div class="panel-heading">Verifications</div>
					  <div class="panel-body">
					  	<p>Email Address Verification</p>
					  	<div class="marginBottom3">
							<img src="images/verifiedIcon.png" width="25"> Verified
						</div>
						<p>Phone Number Verification</p>
						<div>
							<img src="images/unverified.png" width="25"> Not Verified
						</div>
					  </div>
				</div>

				<div class="panel panel-default">
				  <div class="panel-heading">Add More Verifications</div>
				  <div class="panel-body">
					  <h5>Phone Number</h5>
					  <p>Make it easier to communicate with a verified phone number. We’ll send you a code by SMS or read it to you over the phone. Enter the code below to confirm that you’re the person on the other end.</p>

						<p>Rest assured, your number is only shared with another member once you have a confirmed booking. No phone number entered</p>
						<div class="row phoneVer">
							<div class="col-sm-3">
								<label>Choose a country</label>
								<select>
									<option>Select</option>
									<option>Australia</option>
									<option>India</option>
									<option>America</option>
									<option>Paris</option>
									<option>England</option>
									<option>West Indies</option>
								</select>
							</div>
							<div class="col-sm-4">
								<label>Phone Number</label>
								<div class="phoneNumber">
									<span class="code">+ 91</span>
									<input type="text" placeholder="Enter Phone Number" class="num" name="">
								</div>
							</div>
							<div class="col-sm-5">
								<input type="submit" class="submitBtn1" value="Verify via Sms" name="">
							</div>
						</div>
					</div>
				</div>

				<div class="panel panel-default">
				  <div class="panel-heading">Verification List</div>
					  <div class="panel-body">
					  		<table class="table table-bordered table-striped alignLeft">
					  			<tr>
					  				<th width="5%">S.No</th>
					  				<th width="50%">Proof Name</th>
					  				<th width="25%">File</th>
					  				<th width="20%">Status</th>
					  			</tr>
					  			<tr>
					  				<td>1</td>
					  				<td>Passport</td>
					  				<td><img src="images/vertifiedData.png" width="50"></td>
					  				<td>Request Sent</td>
					  			</tr>
					  			<tr>
					  				<td>2</td>
					  				<td>Passport</td>
					  				<td><img src="images/vertifiedData.png" width="50"></td>
					  				<td>Request Sent</td>
					  			</tr>
					  			<tr>
					  				<td>3</td>
					  				<td>Passport</td>
					  				<td><img src="images/vertifiedData.png" width="50"></td>
					  				<td>Request Sent</td>
					  			</tr>
					  			<tr>
					  				<td>4</td>
					  				<td>Passport</td>
					  				<td><img src="images/vertifiedData.png" width="50"></td>
					  				<td>Request Sent</td>
					  			</tr>
					  			<tr>
					  				<td>5</td>
					  				<td>Passport</td>
					  				<td><img src="images/vertifiedData.png" width="50"></td>
					  				<td>Request Sent</td>
					  			</tr>
					  		</table>
					  </div>
					</div>
				</div>

			</div>
		</div>	
	</div>
</section>

<!-- Add Language Modal -->
<div id="addLanguage" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2 class="mHead">Spoken Languages</h2>
      </div>
      <div class="modal-body">
        <p>What languages can you speak fluently? We have many international travelers who appreciate hosts who can speak their language.</p>
        <form>
	        <div class="clear allLang">
		        <label>
					<span class="checkboxStyle">
						<input type="checkbox" name="" class="hideTemp">
		    			<i class="fa fa-check" aria-hidden="true"></i>
		    		</span>
					<div class="">Tamil</div>
				</label>
				<label>
					<span class="checkboxStyle">
						<input type="checkbox" name="" class="hideTemp">
		    			<i class="fa fa-check" aria-hidden="true"></i>
		    		</span>
					<div class="">English</div>
				</label>
				<label>
					<span class="checkboxStyle">
						<input type="checkbox" name="" class="hideTemp">
		    			<i class="fa fa-check" aria-hidden="true"></i>
		    		</span>
					<div class="">Bengali</div>
				</label>
				<label>
					<span class="checkboxStyle">
						<input type="checkbox" name="" class="hideTemp">
		    			<i class="fa fa-check" aria-hidden="true"></i>
		    		</span>
					<div class="">Magyar</div>
				</label>
				<label>
					<span class="checkboxStyle">
						<input type="checkbox" name="" class="hideTemp">
		    			<i class="fa fa-check" aria-hidden="true"></i>
		    		</span>
					<div class="">Svenska</div>
				</label>
				<label>
					<span class="checkboxStyle">
						<input type="checkbox" name="" class="hideTemp">
		    			<i class="fa fa-check" aria-hidden="true"></i>
		    		</span>
					<div class="">Punjabi</div>
				</label>
				<label>
					<span class="checkboxStyle">
						<input type="checkbox" name="" class="hideTemp">
		    			<i class="fa fa-check" aria-hidden="true"></i>
		    		</span>
					<div class="">Hindi</div>
				</label>

		        <label>
					<span class="checkboxStyle">
						<input type="checkbox" name="" class="hideTemp">
		    			<i class="fa fa-check" aria-hidden="true"></i>
		    		</span>
					<div class="">Tamil</div>
				</label>
				<label>
					<span class="checkboxStyle">
						<input type="checkbox" name="" class="hideTemp">
		    			<i class="fa fa-check" aria-hidden="true"></i>
		    		</span>
					<div class="">English</div>
				</label>
				<label>
					<span class="checkboxStyle">
						<input type="checkbox" name="" class="hideTemp">
		    			<i class="fa fa-check" aria-hidden="true"></i>
		    		</span>
					<div class="">Bengali</div>
				</label>
				<label>
					<span class="checkboxStyle">
						<input type="checkbox" name="" class="hideTemp">
		    			<i class="fa fa-check" aria-hidden="true"></i>
		    		</span>
					<div class="">Magyar</div>
				</label>
				<label>
					<span class="checkboxStyle">
						<input type="checkbox" name="" class="hideTemp">
		    			<i class="fa fa-check" aria-hidden="true"></i>
		    		</span>
					<div class="">Svenska</div>
				</label>
				<label>
					<span class="checkboxStyle">
						<input type="checkbox" name="" class="hideTemp">
		    			<i class="fa fa-check" aria-hidden="true"></i>
		    		</span>
					<div class="">Punjabi</div>
				</label>
				<label>
					<span class="checkboxStyle">
						<input type="checkbox" name="" class="hideTemp">
		    			<i class="fa fa-check" aria-hidden="true"></i>
		    		</span>
					<div class="">Hindi</div>
				</label>
			</div>
			<input type="submit" class="submitBtn1" value="Submit" name="">
		</form>
      </div>
    </div>

  </div>
</div>

<?php include 'includes/footer.php'; ?>