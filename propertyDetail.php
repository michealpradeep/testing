<?php include 'includes/header.php'; ?>

<link rel="stylesheet" type="text/css" media="all" href="css/daterangepicker.css" />
<script type="text/javascript" src="js/moment.js"></script>
<script type="text/javascript" src="js/daterangepicker.js"></script>

<style type="text/css">
	.daterangepicker{
		position: absolute;
	}
	@media (max-width: 740px){
		.daterangepicker {
		    height: 320px;
		    width: 280px;
		}
	}
</style>



<div id="lightBox">
	<div class="closeLightBox">X</div>
<div class="outerBlock">
<div class="slider-container" >
	<div id="slider" class="slider owl-carousel lightBoxSlider">
		<div class="item">
			<div class="content">
				<img src="images/exp1.jpg" class="img-responsive">
			</div>
		</div>
		<div class="item">
			<div class="content">
				<img src="images/exp2.jpg" class="img-responsive">
			</div>
		</div>
		<div class="item">
			<div class="content">
				<img src="images/exp3.jpg" class="img-responsive">
			</div>
		</div>
		<div class="item">
			<div class="content">
				<img src="images/exp10.jpg" class="img-responsive">
			</div>
		</div>
		<div class="item">
			<div class="content">
				<img src="images/exp11.jpg" class="img-responsive">
			</div>
		</div>
		<div class="item">
			<div class="content">
				<img src="images/exp12.jpg" class="img-responsive">
			</div>
		</div>
		<div class="item">
			<div class="content">
				<img src="images/exp13.jpg" class="img-responsive">
			</div>
		</div>
		<div class="item">
			<div class="content">
				<img src="images/exp14.jpg" class="img-responsive">
			</div>
		</div>
	</div>

	<div class="slider-controls">
		<a class="slider-left" href="javascript:;"><span><i class="fa fa-2x fa-chevron-left"></i></span></a>
		<a class="slider-right" href="javascript:;"><span><i class="fa fa-2x fa-chevron-right"></i></span></a>
	</div>
	</div>
	<div class="thumbnail-slider-container">
	<div id="thumbnailSlider" class="thumbnail-slider owl-carousel">
		<div class="item">
			<div class="content">
				<img src="images/exp1.jpg" class="img-responsive">
			</div>
		</div>
		<div class="item">
			<div class="content">
				<img src="images/exp2.jpg" class="img-responsive">
			</div>
		</div>
		<div class="item">
			<div class="content">
				<img src="images/exp3.jpg" class="img-responsive">
			</div>
		</div>
		<div class="item">
			<div class="content">
				<img src="images/exp10.jpg" class="img-responsive">
			</div>
		</div>
		<div class="item">
			<div class="content">
				<img src="images/exp11.jpg" class="img-responsive">
			</div>
		</div>
		<div class="item">
			<div class="content">
				<img src="images/exp12.jpg" class="img-responsive">
			</div>
		</div>
		<div class="item">
			<div class="content">
				<img src="images/exp13.jpg" class="img-responsive">
			</div>
		</div>
		<div class="item">
			<div class="content">
				<img src="images/exp14.jpg" class="img-responsive">
			</div>
		</div>
	</div>
	</div>
</div>
</div>

<section>
	<div class="container-fluid lightboxBanner" style="background-image: url('images/roombg.jpg')">
		<button class="viewPhotos">View Photos</button>
	</div>	
</section>

<section>
	<div class="container">
		<div class="row">
			<div class="detailLeft">
				<div class="fixedHeader clear" data-spy="affix" data-offset-top="400">
					<div class="fixedContainer">
						<a href="#overview" class="current">Overview</a>
						<a href="#reviews"> <span class="dot">.</span> Reviews</a>
						<a href="#host"> <span class="dot">.</span> The Host</a>
						<a href="#location"> <span class="dot">.</span> Location</a>
					</div>
				</div>
				<div class="title">
					<div class="left">
						<h2 id="overview">Malibu Yurt Retreat On Organic Farm</h2>
						<div class="clear">
							<div class="colLeft catego">
								Entire yurt . Malibu
							</div> 

							<div class="starRatingOuter1">
				          		<div class="starRatingInner1" style="width: 90%;"></div>
				          	</div>

				          	<div class="colLeft">
				          		<span class="number_s120">521</span> review
				          	</div>
						</div>
					</div>
					<div class="right">
						<img src="images/micheal.jpg">
						<p>Micheal</p>
					</div>
				</div>
				<div class="features">
					<ul class="clear">
						<li><i class="fa fa-user-times" aria-hidden="true"></i> guests</li>
						<li><i class="fa fa-university" aria-hidden="true"></i> bedroom</li>
						<li><i class="fa fa-bed" aria-hidden="true"></i> 2 beds</li>
						<li><i class="fa fa-bath" aria-hidden="true"></i> 1 bath</li>
					</ul>
				</div>
				<p>Stay in Malibu's TOP-RANKING AirBnB property with over 750 5-star reviews! Guests and others enjoy all-organic 'farm-to-table' meals on this certifiied organic farm just 2 miles from the beach and surrounded 180 degrees by the Santa Monica Mountains Conservancy. Look also at our 3 other rooms -the Safari thumbnail-slider-container, the 'OCEANVIEW reTREAT on Malibu (EMAIL HIDDEN)/rooms/961535 or our NEW Tiny Japanese Tea House - a Tiny House on Wheels at https://www.airbnb.com/rooms/18786416.</p>
				<a href="#" class="contactHost" data-toggle="modal" data-target="#contactHost">Contact host</a>
				<div class="divider"></div>

				<h4>Amenities</h4>

				<div class="amenities">
					<ul class="row">
						<li><i class="fa fa-cutlery" aria-hidden="true"></i> Kitchen</li>
						<li><i class="fa fa-television" aria-hidden="true"></i> TV</li>
						<li><i class="fa fa-product-hunt" aria-hidden="true"></i> Free parking on premises</li>
						<li><i class="fa fa-wifi" aria-hidden="true"></i> Wireless Internet</li>
						<li><i class="fa fa-deaf" aria-hidden="true"></i> Heating</li>
						<li><i class="fa fa-coffee" aria-hidden="true"></i> Break fast</li>
						<li class="more"><i class="fa fa-paw" aria-hidden="true"></i> Pets Allowed</li>
						<li class="more"><i class="fa fa-cutlery" aria-hidden="true"></i> Kitchen</li>
						<li class="more"><i class="fa fa-television" aria-hidden="true"></i> TV</li>
						<li class="more"><i class="fa fa-product-hunt" aria-hidden="true"></i> Free parking on premises</li>
						<li class="more"><i class="fa fa-wifi" aria-hidden="true"></i> Wireless Internet</li>
						<li class="more"><i class="fa fa-deaf" aria-hidden="true"></i> Heating</li>
						<li class="more"><i class="fa fa-coffee" aria-hidden="true"></i> Break fast</li>
						<li class="more"><i class="fa fa-paw" aria-hidden="true"></i> Pets Allowed</li>
						<a href="javascript:void(0)" class="toggleMore">See All Amenities</a>
					</ul>
				</div>
				<div class="divider"></div>
				<div>
					<h4>House Rules</h4>
					<p>Not suitable for pets</p>
					<p>No parties or events</p>
					<p>Not safe or suitable for children (0-12 years)</p>
					<p>Check-in is anytime after 3PM</p>
					<div class="text-left">
						<hr style="width: 15%; display: inline-block;">
					</div>
					<p><span><span>No infants or children</span><br><span>No pets</span><br><span>Smoking only on gravel or cement areas which are designated areas</span><br><span>No smoking in the Yurt.</span><br><span>Advance permission required for 5 guests. No more than 5 guests allowed.</span><br><span>Check in is at 3:00 and check out is at 11:00.  </span><br><span>Organic, home-cooked meals are available at additional charge. Reservation required.  Additional guests who are not overnighting are welcomed for meals pending approval by hosts.</span><br><span>Be prepared to do a self check in please.</span><br><span>At check out, leave the room as you found it.</span></span></p>
				</div>

				<div class="divider"></div>
				<div>
					<h4>Cancellations</h4>
					<p>Moderate</p>
					<p>Cancel up to 5 days before check in and get a full refund (minus service fees). Cancel within 5 days of your trip and the first night is non-refundable, but 50% of the cost for the remaining nights will be refunded. Service fees are refunded when cancellation happens before check in and within 48 hours of booking.
					</p>
					<a href="#">Get details</a>
				</div>

				<div class="divider"></div>
				<h3 class="clear" id="reviews">
					<div class="colLeft">
						<span class="number_s120">521</span> Reviews 
					</div>
					<div class="starRatingOuter2">
		          		<div class="starRatingInner2" style="width: 90%;"></div>
		          	</div>
				</h3>
				<ul class="reviewPoints row">
					<li>
						<p>Accuracy</p>
						<div class="starRatingOuter1">
			          		<div class="starRatingInner1" style="width: 80%;"></div>
			          	</div>
					</li>
					<li>
						<p>Location</p>
						<div class="starRatingOuter1">
			          		<div class="starRatingInner1" style="width: 80%;"></div>
			          	</div>
					</li>
					<li>
						<p>Communication</p>
						<div class="starRatingOuter1">
			          		<div class="starRatingInner1" style="width: 85%;"></div>
			          	</div>
					</li>
					<li>
						<p>Check In</p>
						<div class="starRatingOuter1">
			          		<div class="starRatingInner1" style="width: 70%;"></div>
			          	</div>
					</li>
					<li>
						<p>Cleanliness</p>
						<div class="starRatingOuter1">
			          		<div class="starRatingInner1" style="width: 40%;"></div>
			          	</div>
					</li>
					<li>
						<p>Value</p>
						<div class="starRatingOuter1">
			          		<div class="starRatingInner1" style="width: 90%;"></div>
			          	</div>
					</li>
				</ul>

				<div class="reviewList">
					<div class="reviewItems">
						<div class="top">
							<div class="left">
								<img src="images/micheal.jpg">
							</div>
							<div class="right">
								<div class="h7">Micheal</div>
								<p>November <span class="number_s120">2017</span></p>
							</div>
						</div>
						<p>This place is such a treat! We stayed at the Yurt for a couple of days and it was nicely decorated, clean, and cozy. We had a lot of extra amenities, like extra towels, pots, pans, dishes, and extra comforters that were at our usage during our stay - which was a very nice surprise. Bibi was very versed in her direction and communication with us and we were able to do a self-check in with no problem. She has a very nice crew and they were also very accommodating and responsive during our stay. </p>
					</div>

					<div class="reviewItems">
						<div class="top">
							<div class="left">
								<img src="images/noUser.png">
							</div>
							<div class="right">
								<div class="h7">Pradeep</div>
								<p>December <span class="number_s120">2017</span></p>
							</div>
						</div>
						<p>This place is such a treat! We stayed at the Yurt for a couple of days and it was nicely decorated, clean, and cozy. We had a lot of extra amenities, like extra towels, pots, pans, dishes, and extra comforters that were at our usage during our stay</p>
					</div>

					<div class="reviewItems">
						<div class="top">
							<div class="left">
								<img src="images/micheal.jpg">
							</div>
							<div class="right">
								<div class="h7">Micheal Pradeep</div>
								<p>September <span class="number_s120">1992</span></p>
							</div>
						</div>
						<p>This place is such a treat! We stayed at the Yurt for a couple of days and it was nicely decorated, clean, and cozy. We had a lot of extra amenities. </p>
					</div>
					<div class="myPagination left">
						<a href="#" class="prev"> < </a>
						<a href="#" class="pages">1</a>
						<a href="#" class="active">2</a>
						<a href="#" class="pages">3</a>
						<a href="#" class="pages">4</a>
						<a href="#" class="pages">5</a>
						<a href="#" class="next"> > </a>
					</div>
				</div>

				<div class="hostDetail">
					<div class="row">
						<div class="col-sm-8 left">
							<h3 id="host">Hosted by Micheal</h3>
							<p>Malibu, California, United States . Joined in January 2013</p>
							<div class="clear">
								<a href="#" class="reRef">
									<span>1827</span> Reviews
								</a>
								<a href="#" class="reRef">
									<span>1</span> References
								</a>
							</div>
							<div class="verified">
								<img src="images/verifiedIcon.png"> Verified
							</div>
						</div>
						<div class="col-sm-4 right">
							<div class="hostImg">
								<img src="images/micheal.jpg">
							</div>
						</div>
					</div>
					<p>WE EMBRACE DIVERSITY! I'm an author/photographer by profession, but a traveler by vocation ... that's why I'm running an AirBnB... because even when I'm not traveling, I'm always on a journey! I love learning languages and speak Spanish, Portuguese and French with a smattering of Japanese and Arabic. Bruce is a Director of Photography specializing in 3D films.</p>
					<a href="#contactHost" class="contactHost" data-toggle="modal" data-target="#contactHost">Contact host</a>

					<ul>
						<li>Languages : <span class="weight_500">English, Español, Français, Português</span></li>
						<li>Response rate: <span class="weight_500">99%</span></li>
						<li>Response time: <span class="weight_500">within an hour</span></li>
					</ul>
				</div>
			</div>
			<div class="toggleBooking">
				<div class="price_B">
					<h5 class="price"><span class="number_s150">₹8,964</span> per night</h5>
					<div class="clear">
						<div class="starRatingOuter">
			          		<div class="starRatingInner" style="width: 90%;"></div>
			          	</div>
			          	<span class="reviewCount">524</span>
					</div>
				</div>
				<div class="request_B">
					<button type="button" class="submitBtn tRB">Request to Book</button>
				</div>
			</div>
			<div class="detailRight toggleRequestBook" >
				<div class="bookingBlock" >
					<button type="button" class="tRB close" >&times;</button>
					<h5 class="price"><span class="number_s150">₹8,964</span> per night</h5>
					<div class="clear">
						<div class="starRatingOuter">
			          		<div class="starRatingInner" style="width: 90%;"></div>
			          	</div>
			          	<span class="reviewCount">524</span>
					</div>
					<div class="divider"></div>
					<div class="clear chkInOut">
						<div class="colLeft">
							<p>Check in</p>
							<input type="text" id="checkIn" readonly="" placeholder="dd/mm/yyyy" name="">
						</div>
						<div class="colLeft">
							<p>Check out</p>
							<input type="text" id="checkOut" readonly="" placeholder="dd/mm/yyyy" name="">
						</div>
					</div>
					<div>
						<p>Guest</p>
						<div class="selectGuest">
							<button class="showResult">
								<input type="text" readonly class="number_s120 guestCount" value="1"> Guest
								<span class="arrow"> > </span>
							</button>

								<div class="guestInfo">
			                      <div class="rowB clear">
			                          <div class="leftBlock">
			                              <h5>Adult</h5>
			                          </div>
			                          <div class="rightBlock">
			                              <div class="countBlock">
			                                  <span class="dec" onclick="affectGuestCount('decrease', this)"> - </span>
			                                  <input type="text" name="" readonly="" value="1" class="guestVal">
			                                  <span class="inc" onclick="affectGuestCount('increase')"> + </span>
			                              </div>
			                          </div>
			                      </div>
			                      <div class="rowB clear">
			                          <div class="leftBlock">
			                              <h5>Children</h5>
			                              <div class="reduceFont">Ages <span class="number_s">2 - 12</span></div>
			                          </div>
			                          <div class="rightBlock">
			                            <div class="countBlock">
			                              <span class="dec" onclick="affectGuestCount('decrease', this)"> - </span>
			                              <input type="text" name="" readonly="" value="0" class="guestVal">
			                              <span class="inc" onclick="affectGuestCount('increase')"> + </span>
			                            </div>
			                          </div>
			                      </div>
			                      <div class="rowB clear">
			                          <div class="leftBlock">
			                              <h5>Infants</h5>
			                              <div class="reduceFont">Under <span class="number_s">2</span></div>
			                          </div>
			                          <div class="rightBlock">
			                            <div class="countBlock">
			                              <span class="dec" onclick="affectGuestCount('decrease', this)"> - </span>
			                              <input type="text" name="" readonly="" value="0" class="guestVal">
			                              <span class="inc" onclick="affectGuestCount('increase')"> + </span>
			                            </div>
			                          </div>
			                      </div>
			                      <p>5 guests maximum. Infants don’t count toward the number of guests.</p>
			                  </div>
						</div>

						<div class="feeList">
							<p><span class="number_s140">₹8,964 x 1</span> night	<span class="right">₹8,964</span></p>
							<p>Cleaning fee <span class="right">₹1,660</span></p>
							<p>Service fee <span class="right">₹1,394</span></p>
							<div class="total">Total	<span class="right">₹42,018</span></div>
						</div>
						<input type="submit" class="submitBtn" name="">
						<p class="text-center btmTxt">You won’t be charged yet</p>
					</div>
				</div>
			</div>
		</div> 
		<div class="centeredBtm">
		<h3 id="location">Location</h3>
		<div class="row mapSection">
			<div class="col-sm-12">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d250646.96827224366!2d76.82714653112293!3d11.011677490280869!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba859af2f971cb5%3A0x2fc1c81e183ed282!2sCoimbatore%2C+Tamil+Nadu!5e0!3m2!1sen!2sin!4v1512995030663" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				
				<p>Exact location information is provided after a booking is confirmed.</p>
			</div>
		</div>


			<div class="similarHead">
				<h3>Experiences in Sydney</h3>
			</div>
			<div class="owl-carousel owl-theme experience-carousel bottomSpace">
		        <div class="item">
		          <div class="wishList_I yes"></div>
		          <a href="#">
		          	<div class="myPlace" style="background-image: url('images/exp15.jpg')"></div>
			          <div class="bottom">
			          	<div class="loc">Nightlife · New York</div>
			          	<h5>Discover the city's party scene</h5>
			          	<div class="price"><span class="number_s">₹1,329</span> per person</div>
			          	<div class="clear">
			          		<div class="starRatingOuter">
				          		<div class="starRatingInner" style="width: 90%;"></div>
				          	</div>
				          	<span class="ratingCount">15</span>
			          	</div>
			          </div>
		          </a>
		        </div>

		        <div class="item">
		          <div class="wishList_I"></div>
		          <a href="#">
		          	<div class="myPlace" style="background-image: url('images/exp16.jpg')"></div>
			          <div class="bottom">
			          	<div class="loc">cooking class · Milan</div>
			          	<h5>Morning Hot Spring Detox</h5>
			          	<div class="price"><span class="number_s">₹70,328</span> per person</div>
			          	<div class="clear">
			          		<div class="starRatingOuter">
				          		<div class="starRatingInner" style="width: 90%;"></div>
				          	</div>
				          	<span class="ratingCount">18</span>
			          	</div>
			          </div>
		          </a>
		        </div>

		        <div class="item">
		          <div class="wishList_I"></div>
		          <a href="#">
		          	<div class="myPlace" style="background-image: url('images/exp17.jpg')"></div>
			          <div class="bottom">
			          	<div class="loc">boat ride · Amsterdam</div>
			          	<h5>Cruise the canals of Amsterdam</h5>
			          	<div class="price"><span class="number_s">₹5,049</span> per person</div>
			          	<div class="clear">
			          		<div class="starRatingOuter">
				          		<div class="starRatingInner" style="width: 90%;"></div>
				          	</div>
				          	<span class="ratingCount">130</span>
			          	</div>
			          </div>
		          </a>
		        </div>

		        <div class="item">
		          <div class="wishList_I"></div>
		          <a href="#">
		          	<div class="myPlace" style="background-image: url('images/exploreIcon1.jpg')"></div>
			          <div class="bottom">
			          	<div class="loc">concert · London</div>
			          	<h5>Brixton Hidden Jazz Club</h5>
			          	<div class="price"><span class="number_s">₹1,329</span> per person</div>
			          	<div class="clear">
			          		<div class="starRatingOuter">
				          		<div class="starRatingInner" style="width: 90%;"></div>
				          	</div>
				          	<span class="ratingCount">45</span>
			          	</div>
			          </div>
		          </a>
		        </div>

		        <div class="item">
		          <div class="wishList_I"></div>
		          <a href="#">
		          	<div class="myPlace" style="background-image: url('images/exploreIcon.jpg')"></div>
			          <div class="bottom">
			          	<div class="loc">Nightlife · New York</div>
			          	<h5>Discover the city's party scene</h5>
			          	<div class="price"><span class="number_s">₹1,329</span> per person</div>
			          	<div class="clear">
			          		<div class="starRatingOuter">
				          		<div class="starRatingInner" style="width: 90%;"></div>
				          	</div>
				          	<span class="ratingCount">15</span>
			          	</div>
			          </div>
		          </a>
		        </div>

		        <div class="item">
		          <div class="wishList_I yes"></div>
		          <a href="#">
		          	<div class="myPlace" style="background-image: url('images/exploreIcon1.jpg')"></div>
			          <div class="bottom">
			          	<div class="loc">Nightlife · New York</div>
			          	<h5>Discover the city's party scene</h5>
			          	<div class="price"><span class="number_s">₹1,329</span> per person</div>
			          	<div class="clear">
			          		<div class="starRatingOuter">
				          		<div class="starRatingInner" style="width: 90%;"></div>
				          	</div>
				          	<span class="ratingCount">15</span>
			          	</div>
			          </div>
		          </a>
		        </div>

		        <div class="item">
		          <div class="wishList_I"></div>
		          <a href="#">
		          	<div class="myPlace" style="background-image: url('images/exploreIcon.jpg')"></div>
			          <div class="bottom">
			          	<div class="loc">Nightlife · New York</div>
			          	<h5>Discover the city's party scene</h5>
			          	<div class="price"><span class="number_s">₹1,329</span> per person</div>
			          	<div class="clear">
			          		<div class="starRatingOuter">
				          		<div class="starRatingInner" style="width: 90%;"></div>
				          	</div>
				          	<span class="ratingCount">15</span>
			          	</div>
			          </div>
		          </a>
		        </div>
		      </div>
		  </div>

	</div>
</section>

<!-- Contact Host Modal -->
<div id="contactHost" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      	<div class="row">
      		<div class="col-md-6 contactLeft">
      			<h1>Contact Micheal</h1>
		        <h5>Languages: Deutsch, English, Español, Français</h5>
		        <p class="space">Once you send a message, Rani can invite you to book their home.</p>
		        <p class="space">Make sure you share the following:</p>
		        <ul>
		        	<li>Tell Rani a little about yourself</li>
		        	<li>What brings you to Malibu? Who’s joining you?</li>
		        	<li>What do you love about this listing? Mention it!</li>
		        </ul>
      		</div>
      		<div class="col-md-6 contactRight">
      			
				<div class="detailRight">
					<h5>When are you traveling?</h5>
					<div class="clear chkInOut">
						<div class="colLeft">
							<input type="text" id="checkIn_C" readonly="" placeholder="dd/mm/yyyy" name="">
						</div>
						<div class="colLeft">
							<input type="text" id="checkOut_C" readonly="" placeholder="dd/mm/yyyy" name="">
						</div>
					</div>
					<div>
						<h5>Guest</h5>
						<div class="selectGuest">
							<button class="showResult">
								<input type="text" readonly class="number_s120 guestCount" value="1"> Guest
								<span class="arrow"> > </span>
							</button>

								<div class="guestInfo">
			                      <div class="rowB clear">
			                          <div class="leftBlock">
			                              <h5>Adult</h5>
			                          </div>
			                          <div class="rightBlock">
			                              <div class="countBlock">
			                                  <span class="dec" onclick="affectGuestCount('decrease', this)"> - </span>
			                                  <input type="text" name="" readonly="" value="1" class="guestVal">
			                                  <span class="inc" onclick="affectGuestCount('increase')"> + </span>
			                              </div>
			                          </div>
			                      </div>
			                      <div class="rowB clear">
			                          <div class="leftBlock">
			                              <h5>Children</h5>
			                              <div class="reduceFont">Ages <span class="number_s">2 - 12</span></div>
			                          </div>
			                          <div class="rightBlock">
			                            <div class="countBlock">
			                              <span class="dec" onclick="affectGuestCount('decrease', this)"> - </span>
			                              <input type="text" name="" readonly="" value="0" class="guestVal">
			                              <span class="inc" onclick="affectGuestCount('increase')"> + </span>
			                            </div>
			                          </div>
			                      </div>
			                      <div class="rowB clear">
			                          <div class="leftBlock">
			                              <h5>Infants</h5>
			                              <div class="reduceFont">Under <span class="number_s">2</span></div>
			                          </div>
			                          <div class="rightBlock">
			                            <div class="countBlock">
			                              <span class="dec" onclick="affectGuestCount('decrease', this)"> - </span>
			                              <input type="text" name="" readonly="" value="0" class="guestVal">
			                              <span class="inc" onclick="affectGuestCount('increase')"> + </span>
			                            </div>
			                          </div>
			                      </div>
			                      <p>5 guests maximum. Infants don’t count toward the number of guests.</p>
			                  </div>
						</div>

						<div class="msgHost">
							<h5>Message host</h5>
							<textarea rows="5" placeholder="Start Your Message..."></textarea>
						</div>

						<input type="submit" class="submitBtn" name="" value="Send Message">
					</div>
				</div>

			
      		</div>
      	</div>
      </div>
    </div>

  </div>
</div>


<script>
	$(document).ready(function () {

		$('.experience-carousel').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: true
          },
          480: {
            items: 2,
            nav: false
          },
          800: {
            items: 3,
            nav: false
          },
          1200: {
            items: 3,
            nav: true,
            loop: false,
            margin: 16
          }
        }
      });


	  $(".wishList_I, .wishList_I.yes").show();

		// reference for main items
		var slider = $('#slider');
		// reference for thumbnail items
		var thumbnailSlider = $('#thumbnailSlider');
		//transition time in ms
		var duration = 250;

		// carousel function for main slider
		slider.owlCarousel({
			loop:false,
			nav:false,
			items:1
		}).on('changed.owl.carousel', function (e) {
			console.log(e.item.count);
			console.log(e.item.index);
			if(e.item.index == e.item.count-1){
				console.log("last");
				$(".fa-chevron-right").addClass("disable");
				$(".fa-chevron-left").removeClass("disable");
			}
			else if(e.item.index == 0){
				$(".fa-chevron-right").removeClass("disable");
				$(".fa-chevron-left").addClass("disable");
				console.log("first");
			}
			else{
				$(".fa-chevron-right").removeClass("disable");
				$(".fa-chevron-left").removeClass("disable");
			}
			//On change of main item to trigger thumbnail item
			thumbnailSlider.trigger('to.owl.carousel', [e.item.index, duration, true]);
		});

		// carousel function for thumbnail slider
		thumbnailSlider.owlCarousel({
			loop:false,
			center:true, //to display the thumbnail item in center
			nav:false,
			responsive:{
				0:{
					items:3
				},
				600:{
					items:4
				},
				1000:{
					items:6
				}
			}
		}).on('click', '.owl-item', function () {
			// On click of thumbnail items to trigger same main item

			slider.trigger('to.owl.carousel', [$(this).index(), duration, true]);

		}).on('changed.owl.carousel', function (e) {

			// On change of thumbnail item to trigger main item
			slider.trigger('to.owl.carousel', [e.item.index, duration, true]);

		});


		//These two are navigation for main items
		$('.slider-right').click(function() {
			slider.trigger('next.owl.carousel');
		});
		$('.slider-left').click(function() {
			slider.trigger('prev.owl.carousel');
		});

		


		updateConfig();
	    function updateConfig() {
	      var options = {
            	format: 'DD-MM-YYYY',
            	singleDatePicker: true,
            	autoUpdateInput : false,
            	minDate:new Date(),
            	isInvalidDate: function (date) {
				    var formatted = date.format('MM/DD/YYYY');

				    return ["02/15/2018","02/16/2018"].indexOf(formatted) > -1;
				}
        	};

    		chkInDate = '';
    		chkInDate1 = '';
	        $('#checkIn').daterangepicker(options, function(start, end, label) { 
	        	$('#checkIn').val(start.format('DD-MM-YYYY'));
	        	chkInDate = start.format('MM-DD-YYYY');
	        	
	        	//$('#checkIn').text(start.format('MMM-DD') + ' - ' + end.format('MMM-DD'));
	        	//console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD')); 
	        });

	        $('#checkIn').on('apply.daterangepicker', function(ev, picker) {
			  $('#checkOut').val('');
			  chkoutFunction();
			});
			$('#checkIn_C').on('apply.daterangepicker', function(ev, picker) {
			  $('#checkOut_C').val('');
			  chkoutFunction();
			});

			$('#checkOut').on('apply.daterangepicker', function(ev, picker) {
			  $(this).val(picker.startDate.format('DD/MM/YYYY'));
			});
			

	        function chkoutFunction(){
	        	$('#checkOut').daterangepicker({
		    		"format": 'MM-DD-YYYY',
		        	"singleDatePicker": true,
		        	"autoUpdateInput" : false,
		        	"minDate" : chkInDate
		    	}, function(start, end, label) {
	        		$('#checkOut').val(start.format('DD-MM-YYYY'));
	        	});

	        	$('#checkOut_C').daterangepicker({
		    		"format": 'MM-DD-YYYY',
		        	"singleDatePicker": true,
		        	"autoUpdateInput" : false,
		        	"minDate" : chkInDate1
		    	}, function(start, end, label) {

	        		$('#checkOut_C').val(start.format('DD-MM-YYYY'));
	        	});

	        	$('#checkOut_C').on('apply.daterangepicker', function(ev, picker) {
				  $(this).val(picker.startDate.format('DD/MM/YYYY'));
				});

	        }

	        $('#checkIn_C').daterangepicker(options, function(start, end, label) { 
	        	$('#checkIn_C').val(start.format('DD-MM-YYYY'));
	        	chkInDate1 = start.format('MM-DD-YYYY');
	        	chkoutFunction();
	        });

	      }

	     

		   var yOffset = $(".bookingBlock").offset().top;
				var yOffset1 = $(".mapSection").offset().top-$(".bookingBlock").innerHeight()-55;
				$(window).scroll(function() {
					if(window.outerWidth > 1200){
						if ($(window).scrollTop() > yOffset && $(window).scrollTop() < yOffset1) 
						{	
							$(".bookingBlock").addClass("active");
						}
				        else if($(window).scrollTop() > yOffset1)
				        {
				            $(".bookingBlock").removeClass("active");
				        }
						else {
							$(".bookingBlock").removeClass("active");
						}
					}
					

				});

			   
				

				$(window).scroll(function() {
				    var scrollPos = $(document).scrollTop();
				    $('.fixedContainer a').each(function () {
				        var currLink = $(this);
				        var refElement = $(currLink.attr("href"));
				        // console.log(refElement);
				        // console.log(refElement.offset());
				        if(refElement.offset().top-60 <= scrollPos && scrollPos <= (refElement.offset().top-60 + refElement.height())){
				        	//console.log("Micheallll",refElement.attr("id"));
				        	refElement.addClass("current");
				        	var activeClass = "a[href='#" + refElement.attr("id") + "']";
				        	$('.fixedContainer a').removeClass("current");
				        	$(activeClass).addClass("current");
				        }
				    });
				});
		
	});
	function affectGuestCount(mode, select) {
		 $existVAl =  Number($(".guestCount").val());

		 if(mode=='increase'){
		    // if($existVAl !=20){
		      $(".guestCount").val($existVAl+1) ;
		    // }
		 }
		 if(mode=='decrease'){
		    if($existVAl !=0 && $(select).next().val() !=0){
		      $(".guestCount").val($existVAl-1) ;
		    }
		 }
		}


		
  
</script>

<div>
</div>

<?php include 'includes/footer.php'; ?>