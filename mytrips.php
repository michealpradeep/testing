<?php include 'includes/header.php'; ?>

<section class="loggedBg">
	<div class="container">
		<ul class="loginMenu">
			<li><a href="dashboard.php">Dashboard</a></li>
			<li><a href="inbox.php">Inbox</a></li>
			<li><a href="mylisting.php">Mylisting</a></li>
			<li><a href="myexperience.php">My Experience</a></li>
			<li><a href="mytrips.php" class="active">My Trips</a></li>
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
					<li><a href="#">My Trips</a></li>
					<li><a href="#" class="active">Previous Trips</a></li>
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

						<table class="table  table-striped">
							<tr>
								<th width="10%">Booked On</th>
								<th width="10%">Property Name</th>
								<th width="5%">Host</th>
								<th width="25%">Dates And Location</th>
								<th width="5%">Amount</th>
								<th width="5%">Status</th>
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
								<td>
									<div class="dropdown">
									  <button class="dropdown-toggle" type="button" data-toggle="dropdown">
									  	Booked <i class="fa fa-caret-down" aria-hidden="true"></i></button>
									  <ul class="dropdown-menu">
									  	<div class="dropdownIcon"></div>
									    <li><a href="#">Confirmation</a></li>
									    <li><a href="#myReview" data-toggle="modal">Your Review</a></li>
									    <li><a href="#myDispute" data-toggle="modal">Disputed</a></li>
									    <li><a href="#message" data-toggle="modal">Message</a></li>
									  </ul>
									</div>
								</td>
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
								<td>
									<div class="dropdown">
									  <button class="dropdown-toggle" type="button" data-toggle="dropdown">
									  	Expired</button>
									</div>
								</td>
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
								<td>
									<div class="dropdown">
									  <button class="dropdown-toggle" type="button" data-toggle="dropdown">
									  	Booked <i class="fa fa-caret-down" aria-hidden="true"></i></button>
									  <ul class="dropdown-menu">
									  	<div class="dropdownIcon"></div>
									    <li><a href="#">Confirmation</a></li>
									    <li><a href="#myReview" data-toggle="modal">Your Review</a></li>
									    <li><a href="#myDispute" data-toggle="modal">Disputed</a></li>
									    <li><a href="#message" data-toggle="modal">Message</a></li>
									  </ul>
									</div>
								</td>
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
								<td>
									<div class="dropdown">
									  <button class="dropdown-toggle" type="button" data-toggle="dropdown">
									  	Expired </button>
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

<!-- My Review Modal -->
<div id="myReview" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2>Your Review</h2>
      </div>
      <div class="modal-body">
        <div class="tableRow reviewList_1 noBorder">
	    	<div class="left">
	    		<img src="images/micheal.jpg" class="userIcon">
	    	</div>
	    	<div class="right">
	    		<div class="clear">
	    			<div class="colLeft">
		          		<div class="starRatingOuter1">
			          		<div class="starRatingInner1" style="width: 90%;"></div>
			          	</div>
		          	</div>
		          	<div class="colRight">
		          		at <a href="">Magic</a> for	Booking No: XP1500078
		          	</div>
	    		</div>
	          	<div class="content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard printing and typesetting industry. Lorem Ipsum has been the industry's standard printing and typesetting industry. Lorem Ipsum has been the industry's standard. </div>
	          	<div class="colRight">
	          		<div class="email">micheal@pofitec.com - 28-12-2017</div>
	          	</div>
	    	</div>
	    </div>
      </div>
    </div>

  </div>
</div>

<!-- Dispute Modal -->
<div id="myDispute" class="modal2Col modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2>Dispute</h2>
      </div>
      <div class="modal-body">
        <div class="tableRow">
	    	<div class="left">
	    		<img src="images/home1.jpg" class="propIcon">
	    	</div>
	    	<div class="right">
	    		<div class="clear">
	    			<h5>Charming Sunny Guesthouse</h5>
	    			<div class="address">Nairobi</div>
	    		</div>
	          	<div class="content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard printing and typesetting industry. Lorem Ipsum has been the industry's standard printing and typesetting industry. Lorem Ipsum has been the industry's standard. </div>
	          	<div class="colRight">
	          		<i class="">28-12-2017</i>
	          	</div>
	    	</div>
	    </div>
      </div>
    </div>

  </div>
</div>

<!-- Message Modal -->
<div id="message" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2 class="mHead">Message to Host</h2>
      </div>
      <div class="modal-body">
      	<div>
      		<form>
      			<textarea rows="7" placeholder="Send Message to Host..."></textarea>
      			<input type="submit" value="Send" class="submitBtn1" name="">
      		</form>
      	</div>
      </div>
    </div>

  </div>
</div>

<?php include 'includes/footer.php'; ?>