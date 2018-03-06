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
					<li><a href="profile.php" class="active">Edit Profile</a></li>
					<li><a href="photos.php">Photos</a></li>
					<li><a href="verification.php">Trust & Verification</a></li>
					<li><a href="#">Reviews</a></li>
					<li><a href="#">Dispute</a></li>
					<li><a href="#">View Profile</a></li>
				</ul>
			</div>
			<div class="width80">
				<form class="marginBottom2">
				<div class="panel panel-default">
				  <div class="panel-heading">Required</div>
					  <div class="panel-body">
					  			<div class="formList">
					  				<label>First Name</label>
					  				<div class="right">
					  					<input type="text" placeholder="Enter your First Name" name="">
					  				</div>
					  			</div>
					  			<div class="formList">
					  				<label>Last Name</label>
					  				<div class="right">
					  					<input type="text" placeholder="Enter your Last Name" name="">
					  					<p>Your public profile only shows your first name. When you request a booking, your host will see your first and last name.</p>
					  				</div>
					  			</div>
					  			<div class="formList">
					  				<label>Gender</label>
					  				<div class="right">
					  					<select>
					  						<option>Male</option>
					  						<option>Female</option>
					  					</select>
					  					<p>We use this data for analysis and never share it with other users.</p>
					  				</div>
					  			</div>
					  			<div class="formList">
					  				<label>Birthday</label>
					  				<div class="right">
						        		<select>
						        			<option>Month</option>
						        			<option>January</option>
						        			<option>February</option>
						        		</select>	
						        		<select>
						        			<option>Day</option>
						        			<option>01</option>
						        			<option>02</option>
						        		</select>	
						        		<select>
						        			<option>Year</option>
						        			<option>2017</option>
						        			<option>2018</option>
						        		</select>
						        		<p>The magical day you were dropped from the sky by a stork. We use this data for analysis and never share it with other users.</p>
					  				</div>
					  			</div>
					  			<div class="formList">
					  				<label>Email Address</label>
					  				<div class="right">
					  					<input type="email" placeholder="Enter your Email" name="">
					  					<p>This is only shared once you have a confirmed booking with another user.</p>
					  				</div>
					  			</div>
					  			<div class="formList">
					  				<label>Where You Live</label>
					  				<div class="right">
					  					<input type="text" placeholder="Enter your Place" name="">
					  				</div>
					  			</div>
					  			<div class="formList noMargin">
					  				<label>Describe Yourself</label>
					  				<div class="right">
					  					<textarea rows="5" placeholder="Tell Something about Yourself!"></textarea>
					  					<p>We built the relationships. We help other people get to know you.</p>
									<p>Tell them about the things you like: What are 5 things you can’t live without? Share your favorite travel destinations, books, movies, shows, music, food.</p>

									<p>Tell them what its like to have you as a guest or host: What your style of traveling? Of hosting?</p>

									<p>Tell them about you: Do you have a life motto?</p>
					  				</div>
					  			</div>
					  </div>
				</div>


				<div class="panel panel-default">
				  <div class="panel-heading">Optional</div>
					  <div class="panel-body">
					  			<div class="formList">
					  				<label>School</label>
					  				<div class="right">
					  					<input type="text" placeholder="Enter your School Name" name="">
					  				</div>
					  			</div>
					  			<div class="formList">
					  				<label>Work</label>
					  				<div class="right">
					  					<input type="text" placeholder="Enter your working place" name="">
					  				</div>
					  			</div>
					  			<div class="formList">
					  				<label>Time Zone</label>
					  				<div class="right">
					  					<select>
					  						<option>Select</option>
					  						<option value="">(GMT-11:00) Midway Island</option>
											<option value="">(GMT-11:00) Samoa</option>
											<option value="">(GMT-10:00) Hawaii</option>
											<option value="">(GMT-09:00) Alaska</option>
											<option value="">(GMT-08:00) America/Los_Angeles</option>
											<option value="">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
											<option value="">(GMT-08:00) Tijuana</option>
											<option value="">(GMT-07:00) Arizona</option>
											<option value="">(GMT-07:00) Chihuahua</option>
											<option value="">(GMT-07:00) Mazatlan</option>
					  					</select>
					  					<p>Your home time zone.</p>
					  				</div>
					  			</div>
					  			<div class="formList">
					  				<label>Language</label>
					  				<div class="right">
					  					<ul class="languageList">
					  						<li>Punjabi <span>X</span> </li>
					  						<li>Norsk <span>X</span> </li>
					  						<li>Tamil <span>X</span> </li>
					  						<li>English <span>X</span> </li>
					  					</ul>
					  					<div class="addLang" data-toggle="modal" data-target="#addLanguage"><span class="number_s120">+</span><a href="javascript:void(0)"> Add More</a></div>
					  				</div>
					  			</div>

					  		
					  </div>
				</div>
					<input type="submit" class="submitBtn1" value="Submit" name="">
				</form>

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