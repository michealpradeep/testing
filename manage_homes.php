<?php include 'includes/header.php'; ?>

<div class="manage_items">
	<div class="toggleMenuD">
	  <div class="bar1"></div>
	  <div class="bar2"></div>
	  <div class="bar3"></div>
	</div>

	<div class="leftSlideBlock">
		<ul>
			<li class="heading">Basics</li>
			<li><a href="#" class="active">Basic Info</a></li>
			<li><a href="#">Pricing</a></li>
			<li class="heading">Description</li>
			<li><a href="#">Overview</a></li>
			<li><a href="#">Photos</a></li>
			<li class="heading">Settings</li>
			<li><a href="#">Amenities</a></li>
			<li><a href="#">Listing</a></li>
			<li><a href="#">Location</a></li>
			<li><a href="#">Cancellation Policy</a></li>
		</ul>
	</div>

	<div class="centeredBlock">
		<div class="content">
			<h3>When is your listing available?</h3>
			<div class="form-group">
				<p>City <span class="impt">*</span> </p>
				<input id="autocomplete1" class="searchInput" placeholder='Try “Ooty”' type="text">
			</div>
			<div class="form-group">
				<p>Property Type</p>
				<select>
					<option>Always</option>
					<option>Sometimes</option>
				</select>
			</div>
			<div class="form-group">
				<p>Room Type <span class="impt">*</span> </p>
				<select>
					<option>Shared Room</option>
					<option>Private Room</option>
					<option>Standard Room</option>
					<option>Luxury Room</option>
				</select>
			</div>
			<div class="form-group">
				<p>Accommodates <span class="impt">*</span> </p>
				<select>
					<option>1</option>
					<option>2</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option>10</option>
					<option>10+</option>
				</select>
			</div>
			<div class="clear text-right">
				<button type="submit" class="submitBtn1">Continue</button>
			</div>
			
		</div>




		<div class="content">
			<div class="form-group">
				<h3>Overview</h3>
				<p>Title <small>(Maximum 60 words)</small></p>
				<input type="text" placeholder="Enter the Title" name="">
			</div>

			<div class="form-group">
				<p>Description</p>
				<textarea rows="5" placeholder="Enter Your Description"></textarea>
			</div>

			<div class="form-group">
				<div class="row">
					<div class="col-sm-6">
						<p>Request to Book</p>
					</div>
					<div class="col-sm-6">
						<label class="switch">
						  <input type="checkbox">
						  <span class="sliderC round"></span>
						</label>
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="row">
					<div class="col-sm-6">
						<p>Instant Pay</p>
					</div>
					<div class="col-sm-6">
						<label class="switch">
						  <input type="checkbox">
						  <span class="sliderC round"></span>
						</label>
					</div>
				</div>
			</div>
			<div class="clear text-right">
				<button type="submit" class="submitBtn1">Continue</button>
			</div>
		</div>

		<div class="content">
			<div class="form-group">
				<h3>Base Price</h3>
				<div class="row form-group">
					<div class="col-sm-4">
						<p>Currency</p>
						<select>
							<option>USD</option>
							<option>INR</option>
						</select>
					</div>
					<div class="col-sm-6">
						<p>Per Night</p>
						<input type="text" name="" placeholder="Price per night">
					</div>
				</div>
				<div class="row checkboxList">
					<h3>Common Amenities</h3>
					<div class="col-sm-6 form-group">
						<label>
		        			<span class="checkboxStyle">
		        				<input type="checkbox" name="" class="hideTemp">
			        			<i class="fa fa-check" aria-hidden="true"></i>
			        		</span>
		        			<div class="">Cable TV</div>
		        		</label>
					</div>
					<div class="col-sm-6 form-group">
						<label>
		        			<span class="checkboxStyle">
		        				<input type="checkbox" name="" class="hideTemp">
			        			<i class="fa fa-check" aria-hidden="true"></i>
			        		</span>
		        			<div class="">Internet</div>
		        		</label>
					</div>
					<div class="col-sm-6 form-group">
						<label>
		        			<span class="checkboxStyle">
		        				<input type="checkbox" name="" class="hideTemp">
			        			<i class="fa fa-check" aria-hidden="true"></i>
			        		</span>
		        			<div class="">Wheelchair</div>
		        		</label>
					</div>
					<div class="col-sm-6 form-group">
						<label>
		        			<span class="checkboxStyle">
		        				<input type="checkbox" name="" class="hideTemp">
			        			<i class="fa fa-check" aria-hidden="true"></i>
			        		</span>
		        			<div class="">Hot Tub</div>
		        		</label>
					</div>
				</div>
				<div class="row checkboxList">
					<h3>Extra Amenities</h3>
					<div class="col-sm-6 form-group">
						<label>
		        			<span class="checkboxStyle">
		        				<input type="checkbox" name="" class="hideTemp">
			        			<i class="fa fa-check" aria-hidden="true"></i>
			        		</span>
		        			<div class="">Cable TV</div>
		        		</label>
					</div>
					<div class="col-sm-6 form-group">
						<label>
		        			<span class="checkboxStyle">
		        				<input type="checkbox" name="" class="hideTemp">
			        			<i class="fa fa-check" aria-hidden="true"></i>
			        		</span>
		        			<div class="">Internet</div>
		        		</label>
					</div>
					<div class="col-sm-6 form-group">
						<label>
		        			<span class="checkboxStyle">
		        				<input type="checkbox" name="" class="hideTemp">
			        			<i class="fa fa-check" aria-hidden="true"></i>
			        		</span>
		        			<div class="">Wheelchair</div>
		        		</label>
					</div>
					<div class="col-sm-6 form-group">
						<label>
		        			<span class="checkboxStyle">
		        				<input type="checkbox" name="" class="hideTemp">
			        			<i class="fa fa-check" aria-hidden="true"></i>
			        		</span>
		        			<div class="">Hot Tub</div>
		        		</label>
					</div>
				</div>
				<div class="row checkboxList">
					<h3>Extras</h3>
					<div class="col-sm-6 form-group">
						<label>
		        			<span class="checkboxStyle">
		        				<input type="checkbox" name="" class="hideTemp">
			        			<i class="fa fa-check" aria-hidden="true"></i>
			        		</span>
		        			<div class="">Cable TV</div>
		        		</label>
					</div>
					<div class="col-sm-6 form-group">
						<label>
		        			<span class="checkboxStyle">
		        				<input type="checkbox" name="" class="hideTemp">
			        			<i class="fa fa-check" aria-hidden="true"></i>
			        		</span>
		        			<div class="">Internet</div>
		        		</label>
					</div>
					<div class="col-sm-6 form-group">
						<label>
		        			<span class="checkboxStyle">
		        				<input type="checkbox" name="" class="hideTemp">
			        			<i class="fa fa-check" aria-hidden="true"></i>
			        		</span>
		        			<div class="">Wheelchair</div>
		        		</label>
					</div>
					<div class="col-sm-6 form-group">
						<label>
		        			<span class="checkboxStyle">
		        				<input type="checkbox" name="" class="hideTemp">
			        			<i class="fa fa-check" aria-hidden="true"></i>
			        		</span>
		        			<div class="">Hot Tub</div>
		        		</label>
					</div>
				</div>
			</div>
			<div class="clear text-right">
				<button type="submit" class="submitBtn1">Continue</button>
			</div>
		</div>

		<div class="content">
			<h3>Add a photos!</h3>
			<p>Add two or more photos! Guests love photos that highlight the features of your space.</p>
			<input type="file" class="submitBtn1 marginBottom3"  name="">

			<div class="photoDesc clear">
				<div class="left">
					<img src="images/home1.jpg">
				</div>
				<div class="right">
					<textarea placeholder="Enter Description"></textarea>
				</div>
			</div>
			<div class="photoDesc clear">
				<div class="left">
					<img src="images/home1.jpg">
				</div>
				<div class="right">
					<textarea placeholder="Enter Description"></textarea>
				</div>
			</div>
			<div class="photoDesc clear">
				<div class="left">
					<img src="images/home1.jpg">
				</div>
				<div class="right">
					<textarea placeholder="Enter Description"></textarea>
				</div>
			</div>
			<div class="clear text-right">
				<button type="submit" class="submitBtn1">Continue</button>
			</div>
		</div>

		<div class="content">
			<h3>Address</h3>
			<p>Your Exact Address Is Private And Only Shared With Guests After A Reservation Is Confirmed.However The Host Are Responsible To Provide The Exact Road Name Of The Accommodations In Order For Guest To Be Able To Plan For Their Trip Smoothly.</p>
			<div class="text-right">
				<button class="submitBtn1 marginBottom3" data-toggle="modal" data-target="#addAddress">+ Add Address</button>
			</div>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d250646.68134923402!2d76.82713709236667!3d11.01201454032613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba859af2f971cb5%3A0x2fc1c81e183ed282!2sCoimbatore%2C+Tamil+Nadu!5e0!3m2!1sen!2sin!4v1514893648022" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			<div class="clear text-right">
				<button type="submit" class="submitBtn1">Continue</button>
			</div>
		</div>

		<div class="content">
			<h3>Cancellation Policy</h3>
			<div class="form-group">
				<p>Cancellation Policy</p>
				<select> 
					<option>Select</option>
					<option>Flexible</option>
					<option>Moderate</option>
					<option>Strict</option>
				</select>
			</div>
			<div class="currencyTxt form-group">
				<input type="text" placeholder="Enter the Amount" name="">
				<span>$</span>
			</div>
			<div class="clear text-right">
				<button type="submit" class="submitBtn1">Continue</button>
			</div>
		</div>

	</div>

	<div class="rightBlock">
		<h2><i class="fa fa-lightbulb-o" aria-hidden="true"></i> A great summary</h2>
		<p>A Great Summary Is Rich And Exciting! It Should Cover The Major Features Of Your Space</p> 
		<p> Neighborhood In 250 Characters Or Less.</p>
		<p><strong>Example:</strong> 
		<p>Our Cool And Comfortable One Bedroom Apartment With Exposed Brick Has A True City Feeling!</p>
		<p> It Comfortably Fits Two And Is Centrally Located On A Quiet Street, </p>
		<p>Just Two Blocks From Washington Park. </p>
		<p>Enjoy A Gourmet Kitchen, Roof Access, And Easy Access To All Major Subway Lines!</p>
	</div>
	<i class="fa fa-lightbulb-o toggleNotes" aria-hidden="true"></i>
</div>



<!-- EditPayout_M Modal -->
<div id="addAddress" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2 class="mHead">Add Address</h2>
      </div>
      <div class="modal-body">
        <form class="formFields">
		  <div class="form-group">
		    <label>Location</label>
		    <input type="text" placeholder="Enter Your Location">
		  </div>
		  <div class="form-group">
		    <label>Country</label>
		    <input type="text" placeholder="Your Country">
		  </div>
		  <div class="form-group">
		    <label>State</label>
		    <input type="text" placeholder="Your State">
		  </div>
		  <div class="form-group">
		    <label>City</label>
		    <input type="text" placeholder="Your City">
		  </div>
		  <div class="form-group">
		    <label>Street Address</label>
		    <input type="text" placeholder="Your Street Address">
		  </div>
		  <div class="form-group">
		    <label>ZIP Code</label>
		    <input type="text" placeholder="Your ZIP Code">
		  </div>
		  <input type="submit" class="submitBtn1" value="Submit" name="">
		</form>
      </div>
    </div>

  </div>

<script type="text/javascript">
	function initialize() {
		    new google.maps.places.Autocomplete(
		    (document.getElementById('autocomplete1')), {
		        types: ['geocode']
		    });
		}
			initialize();
</script>