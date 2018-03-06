<div class="propertyListHeader">

<?php include 'includes/header.php'; ?>
<link rel="stylesheet" href="css/jquery-ui1.12.1.css">
<link rel="stylesheet" type="text/css" media="all" href="css/daterangepicker.css" />
<script type="text/javascript" src="js/moment.js"></script>
<script type="text/javascript" src="js/daterangepicker.js"></script>
<script src="js/jquery-ui1.12.1.js"></script>
<script type="text/javascript" src="js/jquery.ui.touch-punch.min0.2.3.js"></script>


<style type="text/css">
	footer{
		display: none;
		z-index: 12;
	    position: fixed;
	    bottom: 0px;
	    width: 100%;
	    background-color: #fff;
	}
	.daterangepicker {
	    top: 135px!important;
	}
</style>

<section>
	<div class="container-fluid bordered">
		<div class="filterBlock clear">
			<div class="backDrop"></div>
			<div class="filterBtn">
				<button class="toggleBtn" id="config-demo"	>Dates</button>
			</div>
			<div class="filterBtn">
				<button class="toggleBtn"> <input type="text" name="guests" id='guestCount' value="1" readonly=""> Guests</button>
				<div class="openFilter guestFilter">
					<div class="guestInfo">
                      <div class="rowB clear">
                          <div class="leftBlock">
                              <p>Adult</p>
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
                              <p>Children</p>
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
                              <p>Infants</p>
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
                      <div class="appCanl clear">
                      		<button class="applyBtn btn btn-sm btn-success" type="button">Apply</button> 
                      		<button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button>
                      </div>
                  </div>
				</div>
			</div>
			<div class="filterBtn">
				<button class="toggleBtn filterToggle">Home Type <span class="homeTypeCount"></span> </button>
				<div class="openFilter trashHometype">
					<div class="homeType">
						<label>
		        			<span class="checkboxStyle">
		        				<input type="checkbox" name="homeType" class="hideTemp">
			        			<i class="fa fa-check" aria-hidden="true"></i>
			        		</span>
			        		<div class="checkboxRight">
			        			<div>Entire place</div>
			        			<p class="reduceFont">Have a place to yourself</p>
			        		</div>
		        		</label>
		        		<label>
		        			<span class="checkboxStyle">
		        				<input type="checkbox" name="homeType" class="hideTemp">
			        			<i class="fa fa-check" aria-hidden="true"></i>
			        		</span>
			        		<div class="checkboxRight">
			        			<div>Private room</div>
			        			<p class="reduceFont">Have your own room and share some common spaces</p>
			        		</div>
		        		</label>
		        		<label>
		        			<span class="checkboxStyle">
		        				<input type="checkbox" name="homeType" class="hideTemp">
			        			<i class="fa fa-check" aria-hidden="true"></i>
			        		</span>
			        		<div class="checkboxRight">
			        			<div>Shared room</div>
			        			<p class="reduceFont">Stay in a shared space, like a common room</p>
			        		</div>
		        		</label>
					</div>
					<div class="appCanl clear">
                      		<button class="applyBtn btn btn-sm btn-success" type="button">Apply</button> 
                      		<button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button>
                      </div>
				</div>
			</div>
			<div class="filterBtn">
				<button class="toggleBtn filterToggle">Price</button>
				<div class="openFilter">
					<div class="trashPrice">
						<div class="priceRange">
							<input type="text" id="amount" readonly>
			  				<p class="reduceFont">The average nightly price is <span class="number_s">₹4,624.</span></p>
			 
							<div id="slider-range"></div>
						</div>
						<div class="appCanl clear">
	                      		<button class="applyBtn btn btn-sm btn-success" type="button">Apply</button> 
	                      		<button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button>
	                      </div>
	                  </div>
					
				</div>
			</div>
			<div class="filterBtn">
				<button class="toggleBtn filterToggle">Instant Book</button>
				<div class="openFilter trashInstance">
					<div class="instanceBooking">
						<div class="left">
							<h4>Instant Book</h4>
							<p class="reduceFont">Listings you can book without waiting for host approval</p>
						</div>
						<div class="right">
							<label class="switch">
							  <input type="checkbox">
							  <span class="sliderC round"></span>
							</label>
						</div>
					</div>
					<div class="appCanl clear">
                      		<button class="applyBtn btn btn-sm btn-success" type="button">Apply</button> 
                      		<button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button>
                      </div>
				</div>
			</div>
			<div class="filterBtn">
				<button class="toggleBtn">More Filter</button>
				<div class="openFilter moreFilter">
					<div class="guestInfo fullWidth">
						<h5>Rooms and beds</h5>
                      <div class="rowB clear">
                          <div class="leftBlock">
                              <p>Beds</p>
                          </div>
                          <div class="rightBlock">
                              <div class="countBlock">
                                  <span class="dec"> - </span>
                                  <input type="text" name="" readonly="" value="1" class="guestVal">
                                  <span class="inc"> + </span>
                              </div>
                          </div>
                      </div>
                      <div class="rowB clear">
                          <div class="leftBlock">
                              <p>Bedrooms</p>
                          </div>
                          <div class="rightBlock">
                            <div class="countBlock">
                              <span class="dec"> - </span>
                              <input type="text" name="" readonly="" value="0" class="guestVal">
                              <span class="inc"> + </span>
                            </div>
                          </div>
                      </div>
                      <div class="rowB clear">
                          <div class="leftBlock">
                              <p>Bathrooms</p>
                          </div>
                          <div class="rightBlock">
                            <div class="countBlock">
                              <span class="dec"> - </span>
                              <input type="text" name="" readonly="" value="0" class="guestVal">
                              <span class="inc"> + </span>
                            </div>
                          </div>
                      </div>
                  </div>
                  <div class="divider"></div>
                  <div class="appendPriceRange"></div>
				  
				  <div class="appendInstance"></div>

				  <div class="appendHometype"></div>
				  

                  <h5>More options</h5>
                  <div class="instanceBooking fullWidth">
						<div class="left">
							<h4>Superhost</h4>
							<p class="reduceFont">Stay with recognized hosts.</p>
						</div>
						<div class="right">
							<label class="switch">
							  <input type="checkbox">
							  <span class="sliderC round"></span>
							</label>
						</div>
					</div>
					<div class="divider"></div>
	              	<h5>Amenities</h5>
	              	<div class="checkList">
	              		<div class="row">
	              			<div class="listingResult">
	              				<label>
				        			<span class="checkboxStyle">
				        				<input type="checkbox" name="" class="hideTemp">
					        			<i class="fa fa-check" aria-hidden="true"></i>
					        		</span>
				        			<div class="">Kitchen</div>
				        		</label>
	              			</div>
	              			<div class="listingResult">
	              				<label>
				        			<span class="checkboxStyle">
				        				<input type="checkbox" name="" class="hideTemp">
					        			<i class="fa fa-check" aria-hidden="true"></i>
					        		</span>
				        			<div class="">Shampoo</div>
				        		</label>
	              			</div>
	              			<div class="listingResult">
	              				<label>
				        			<span class="checkboxStyle">
				        				<input type="checkbox" name="" class="hideTemp">
					        			<i class="fa fa-check" aria-hidden="true"></i>
					        		</span>
				        			<div class="">Heating</div>
				        		</label>
	              			</div>
	              			<div class="listingResult">
	              				<label>
				        			<span class="checkboxStyle">
				        				<input type="checkbox" name="" class="hideTemp">
					        			<i class="fa fa-check" aria-hidden="true"></i>
					        		</span>
				        			<div class="">Air conditioning</div>
				        		</label>
	              			</div>
	              			<div class="listingResult toggleCheckbox">
	              				<label>
				        			<span class="checkboxStyle">
				        				<input type="checkbox" name="" class="hideTemp">
					        			<i class="fa fa-check" aria-hidden="true"></i>
					        		</span>
				        			<div class="">Shampoo</div>
				        		</label>
	              			</div>
	              			<div class="listingResult toggleCheckbox">
	              				<label>
				        			<span class="checkboxStyle">
				        				<input type="checkbox" name="" class="hideTemp">
					        			<i class="fa fa-check" aria-hidden="true"></i>
					        		</span>
				        			<div class="">Sample 2</div>
				        		</label>
	              			</div>
	              			<div class="listingResult toggleCheckbox">
	              				<label>
				        			<span class="checkboxStyle">
				        				<input type="checkbox" name="" class="hideTemp">
					        			<i class="fa fa-check" aria-hidden="true"></i>
					        		</span>
				        			<div class="">Heating</div>
				        		</label>
	              			</div>
	              			<a href="#" class="allcheckBox">See all amenities <span class="arrow"> > </span> </a>
	              		</div>
	              	</div>

	              	<div class="divider"></div>
	              	<h5>House rules</h5>
	              	<div class="checkList">
	              		<div class="row">
	              			<div class="listingResult">
	              				<label>
				        			<span class="checkboxStyle">
				        				<input type="checkbox" name="" class="hideTemp">
					        			<i class="fa fa-check" aria-hidden="true"></i>
					        		</span>
				        			<div class="">Suitable for events</div>
				        		</label>
	              			</div>
	              			<div class="listingResult">
	              				<label>
				        			<span class="checkboxStyle">
				        				<input type="checkbox" name="" class="hideTemp">
					        			<i class="fa fa-check" aria-hidden="true"></i>
					        		</span>
				        			<div class="">Pets allowed</div>
				        		</label>
	              			</div>
	              			<div class="listingResult">
	              				<label>
				        			<span class="checkboxStyle">
				        				<input type="checkbox" name="" class="hideTemp">
					        			<i class="fa fa-check" aria-hidden="true"></i>
					        		</span>
				        			<div class="">Smoking allowed</div>
				        		</label>
	              			</div>
	              			<div class="listingResult">
	              				<label>
				        			<span class="checkboxStyle">
				        				<input type="checkbox" name="" class="hideTemp">
					        			<i class="fa fa-check" aria-hidden="true"></i>
					        		</span>
				        			<div class="">Air conditioning</div>
				        		</label>
	              			</div>
	              			<div class="listingResult toggleCheckbox">
	              				<label>
				        			<span class="checkboxStyle">
				        				<input type="checkbox" name="" class="hideTemp">
					        			<i class="fa fa-check" aria-hidden="true"></i>
					        		</span>
				        			<div class="">Shampoo</div>
				        		</label>
	              			</div>
	              			<div class="listingResult toggleCheckbox">
	              				<label>
				        			<span class="checkboxStyle">
				        				<input type="checkbox" name="" class="hideTemp">
					        			<i class="fa fa-check" aria-hidden="true"></i>
					        		</span>
				        			<div class="">Sample 2</div>
				        		</label>
	              			</div>
	              			<div class="listingResult toggleCheckbox">
	              				<label>
				        			<span class="checkboxStyle">
				        				<input type="checkbox" name="" class="hideTemp">
					        			<i class="fa fa-check" aria-hidden="true"></i>
					        		</span>
				        			<div class="">Heating</div>
				        		</label>
	              			</div>
	              			<a href="#" class="allcheckBox">See all house rules <span class="arrow"> > </span> </a>
	              		</div>
	              	</div>

	              	<div class="divider"></div>
	              	<h5>Host language</h5>
	              	<div class="checkList">
	              		<div class="row">
	              			<div class="listingResult">
	              				<label>
				        			<span class="checkboxStyle">
				        				<input type="checkbox" name="" class="hideTemp">
					        			<i class="fa fa-check" aria-hidden="true"></i>
					        		</span>
				        			<div class="">English</div>
				        		</label>
	              			</div>
	              			<div class="listingResult">
	              				<label>
				        			<span class="checkboxStyle">
				        				<input type="checkbox" name="" class="hideTemp">
					        			<i class="fa fa-check" aria-hidden="true"></i>
					        		</span>
				        			<div class="">Deutsch</div>
				        		</label>
	              			</div>
	              			<div class="listingResult">
	              				<label>
				        			<span class="checkboxStyle">
				        				<input type="checkbox" name="" class="hideTemp">
					        			<i class="fa fa-check" aria-hidden="true"></i>
					        		</span>
				        			<div class="">Tamil</div>
				        		</label>
	              			</div>
	              			<div class="listingResult">
	              				<label>
				        			<span class="checkboxStyle">
				        				<input type="checkbox" name="" class="hideTemp">
					        			<i class="fa fa-check" aria-hidden="true"></i>
					        		</span>
				        			<div class="">Français</div>
				        		</label>
	              			</div>
	              			<div class="listingResult toggleCheckbox">
	              				<label>
				        			<span class="checkboxStyle">
				        				<input type="checkbox" name="" class="hideTemp">
					        			<i class="fa fa-check" aria-hidden="true"></i>
					        		</span>
				        			<div class="">Shampoo</div>
				        		</label>
	              			</div>
	              			<div class="listingResult toggleCheckbox">
	              				<label>
				        			<span class="checkboxStyle">
				        				<input type="checkbox" name="" class="hideTemp">
					        			<i class="fa fa-check" aria-hidden="true"></i>
					        		</span>
				        			<div class="">Sample 2</div>
				        		</label>
	              			</div>
	              			<div class="listingResult toggleCheckbox">
	              				<label>
				        			<span class="checkboxStyle">
				        				<input type="checkbox" name="" class="hideTemp">
					        			<i class="fa fa-check" aria-hidden="true"></i>
					        		</span>
				        			<div class="">Heating</div>
				        		</label>
	              			</div>
	              			<a href="#" class="allcheckBox">See all host language <span class="arrow"> > </span> </a>
	              		</div>
	              	</div>
	              	<div class="divider"></div>
	              	<div class="ApplyBottom">
	              		<button class="cancelFilter">Cancel</button>
	              		<button class="seeHomes applyBtn">See Homes</button>
	              	</div>

				</div>
			</div>
		</div>
	</div>
</section>

</div>
<section>
	<div class="container-fluid">
		<div class="listingRow">
			<div class="propertyListing">
				<div class="row">
					<div class="listingResult">
						<div class="wishList_I"></div>
						<div class="owl-carousel owl-theme listing-carousel">
					        <div class="item">
					          <a href="propertyDetail.php">
					          	<div class="myPlace" style="background-image: url('images/exp2.jpg')"></div>
					          </a>
					        </div>

					        <div class="item">
					          <a href="#">
					          	<div class="myPlace" style="background-image: url('images/exp1.jpg')"></div>
					          </a>
					        </div>

					        <div class="item">
					          <a href="#">
					          	<div class="myPlace" style="background-image: url('images/exp3.jpg')"></div>
					          </a>
					        </div>

					</div>
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
				</div>
					<div class="listingResult">
						<div class="wishList_I yes"></div>
						<div class="owl-carousel owl-theme listing-carousel">
					        <div class="item">
					          <a href="#">
					          	<div class="myPlace" style="background-image: url('images/exp11.jpg')"></div>
					          </a>
					        </div>

					        <div class="item">
					          <a href="#">
					          	<div class="myPlace" style="background-image: url('images/exp12.jpg')"></div>
					          </a>
					        </div>

					        <div class="item">
					          <a href="#">
					          	<div class="myPlace" style="background-image: url('images/exp1.jpg')"></div>
					          </a>
					        </div>

					      </div>
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
					</div>


					<div class="listingResult">
						<div class="wishList_I"></div>
						<div class="owl-carousel owl-theme listing-carousel">
					        <div class="item">
					          <a href="#">
					          	<div class="myPlace" style="background-image: url('images/exp1.jpg')"></div>
					          </a>
					        </div>

					        <div class="item">
					          <a href="#">
					          	<div class="myPlace" style="background-image: url('images/exp12.jpg')"></div>
					          </a>
					        </div>

					        <div class="item">
					          <a href="#">
					          	<div class="myPlace" style="background-image: url('images/exp3.jpg')"></div>
					          </a>
					        </div>

					      </div>
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
					</div>
					<div class="listingResult">
						<div class="wishList_I"></div>
						<div class="owl-carousel owl-theme listing-carousel">
					        <div class="item">
					          <a href="propertyDetail.php">
					          	<div class="myPlace" style="background-image: url('images/exp2.jpg')"></div>
					          </a>
					        </div>

					        <div class="item">
					          <a href="#">
					          	<div class="myPlace" style="background-image: url('images/exp1.jpg')"></div>
					          </a>
					        </div>

					        <div class="item">
					          <a href="#">
					          	<div class="myPlace" style="background-image: url('images/exp3.jpg')"></div>
					          </a>
					        </div>

					</div>
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
				</div>
					<div class="listingResult">
						<div class="wishList_I yes"></div>
						<div class="owl-carousel owl-theme listing-carousel">
					        <div class="item">
					          <a href="#">
					          	<div class="myPlace" style="background-image: url('images/exp11.jpg')"></div>
					          </a>
					        </div>

					        <div class="item">
					          <a href="#">
					          	<div class="myPlace" style="background-image: url('images/exp12.jpg')"></div>
					          </a>
					        </div>

					        <div class="item">
					          <a href="#">
					          	<div class="myPlace" style="background-image: url('images/exp1.jpg')"></div>
					          </a>
					        </div>

					      </div>
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
					</div>


					<div class="listingResult">
						<div class="wishList_I"></div>
						<div class="owl-carousel owl-theme listing-carousel">
					        <div class="item">
					          <a href="#">
					          	<div class="myPlace" style="background-image: url('images/exp1.jpg')"></div>
					          </a>
					        </div>

					        <div class="item">
					          <a href="#">
					          	<div class="myPlace" style="background-image: url('images/exp12.jpg')"></div>
					          </a>
					        </div>

					        <div class="item">
					          <a href="#">
					          	<div class="myPlace" style="background-image: url('images/exp3.jpg')"></div>
					          </a>
					        </div>

					      </div>
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
					</div>
					<div class="listingResult">
						<div class="wishList_I"></div>
						<div class="owl-carousel owl-theme listing-carousel">
					        <div class="item">
					          <a href="#">
					          	<div class="myPlace" style="background-image: url('images/exp1.jpg')"></div>
					          </a>
					        </div>

					        <div class="item">
					          <a href="#">
					          	<div class="myPlace" style="background-image: url('images/exp12.jpg')"></div>
					          </a>
					        </div>

					        <div class="item">
					          <a href="#">
					          	<div class="myPlace" style="background-image: url('images/exp3.jpg')"></div>
					          </a>
					        </div>

					      </div>
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
					</div>
				</div>
				<div class="myPagination">
					<a href="#" class="prev"> < </a>
					<a href="#" class="pages">1</a>
					<a href="#" class="active">2</a>
					<a href="#" class="pages">3</a>
					<a href="#" class="pages">4</a>
					<a href="#" class="pages">5</a>
					<a href="#" class="next"> > </a>
				</div>
				<div class="text-center h7"><span class="number_s120"> 1 – 18 </span> of <span class="number_s120">300+ </span> Rentals</div>
				<p class="listingDesc_B">Enter dates to see full pricing. Additional fees apply. Taxes may be added.</p>
			</div>
			<div class="mapListing">
				<img src="images/mapSample.png" width="100%">
			</div>
		</div>
	</div>
</section>

<button class="toggleFooter"> <i class="fa fa-globe" aria-hidden="true"></i> Language and Currency</button>

<?php include 'includes/footer.php'; ?>


<script>
$(document).ready(function() {
      $('.listing-carousel').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: true
          },
          480: {
            items: 1,
            nav: true
          },
          800: {
            items: 1,
            nav: true
          },
          1200: {
            items: 1,
            nav: true,
            loop: true,
            margin: 16
          }
        }
      });

      $(".wishList_I, .wishList_I.yes").show();
     


      $("body").click(function(e){
      	
      	if($(e.target).is(".applyBtn")){
      		$(".filterBtn.active").addClass("chooseFilter");
      	}

      	 if(!$(e.target).closest(".filterBtn.active").length ==1 && !$(e.target).closest(".daterangepicker").length ==1 && !$(e.target).closest(".next.available, .prev.available").length ==1  ){

      	 	console.log($(e.target.length));
      	 	$(".backDrop").hide();
      	 	$(".filterBtn").removeClass("active");
      	 }
      	 if($(e.target).is(".cancelBtn, .applyBtn, .cancelFilter, .seeHomes")){
      		$(".filterBtn").removeClass("active");
      		$(".backDrop").hide();
      	}
      	
      });
      /*$(document).on("click",".next.available, .prev.available",function(){
      	$(".backDrop").show();
      });*/


      


      $(document).on("click",".toggleBtn",function(){
      	$(".backDrop").toggle();
      	
      	if($(this).is("#config-demo") && $(this).parent(".filterBtn").hasClass("active")){

      		$(".daterangepicker").hide();
      	}
      	else if($(this).is("#config-demo")){
      		$(".daterangepicker").show();
      	}
      	$(".filterBtn").not($(this).parent(".filterBtn")).removeClass("active");
      	$(this).parent(".filterBtn").toggleClass("active");	

      });

      updateConfig();
	    function updateConfig() {
	      var options = { locale: {
            	format: 'MMM-DD'
        	}};

	        $('#config-demo').daterangepicker(options, function(start, end, label) { 
	        	$('#config-demo').text(start.format('MMM-DD') + ' - ' + end.format('MMM-DD'));
	        	// $('#config-demo').addClass("chooseFilter");
	        	 console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD')); 
	        });
	      }

	    
	    $(document).on("click",".allcheckBox", function(){
	    	$(this).children(".arrow").toggleClass("active");
	    	$(this).prevAll(".toggleCheckbox").slideToggle(200);
	    });

	    

	});

	function affectGuestCount(mode, select) {
	 $existVAl =  Number($("#guestCount").val());

	 if(mode=='increase'){
	 	$("#guestCount").show();
	    // if($existVAl !=20){
	      $("#guestCount").val($existVAl+1) ;
	    // }
	 }
	 if(mode=='decrease'){
	    if($existVAl !=0 && $(select).next().val() !=0){
	      $("#guestCount").val($existVAl-1) ;
	    }
	 }
	}

	    $("input[name='homeType']").change(function() {
	    	var homeTypeLen = $("input[name='homeType']:checked").length;
	    	
	    	if(homeTypeLen > 0){
	    		$(".homeTypeCount").html(homeTypeLen);
	    		$(".homeTypeCount").show();
	    	}
	    	else{
	    		$(".homeTypeCount").hide();	
	    	}
	    });

	    $(window).on("resize", function () {
		    if(screen.width < 768){

		    	// var trashPrice = $(".trashPrice").clone();
		    	$(".trashPrice").html('');
		    	$(".appendPriceRange").html('<h5> Price Range</h5> <div class="priceRange">						<input type="text" id="amount" readonly>		  				<p class="reduceFont">The average nightly price is <span class="number_s">₹4,624.</span></p>		 						<div id="slider-range"></div>					</div> <div class="divider"></div>');

		    	// var trashInstance = $(".trashInstance").clone();
		    	$(".trashInstance").html('');
		    	$(".appendInstance").html('<h5> Instance Booking</h5> <div class="instanceBooking"> <div class="left">							<p class="reduceFont">Listings you can book without waiting for host approval</p>						</div>						<div class="right">							<label class="switch">							  <input type="checkbox">  <span class="sliderC round"></span>	</label>	</div>	</div>					<div class="divider"></div>');

		    	// var trashHometype = $(".trashHometype").clone();
		    	$(".trashHometype").html('');
		    	$(".appendHometype").html('<h5> Home Type</h5> <div class="homeType">	<label>		        			<span class="checkboxStyle">     				<input type="checkbox" name="homeType" class="hideTemp">		<i class="fa fa-check" aria-hidden="true"></i>			        		</span>			        		<div class="checkboxRight">			        			<div>Entire place</div> <p class="reduceFont">Have a place to yourself</p>			        		</div>		        		</label>			<label>		        			<span class="checkboxStyle">		        				<input type="checkbox" name="homeType" class="hideTemp"><i class="fa fa-check" aria-hidden="true"></i></span>			        		<div class="checkboxRight"><div>Private room</div>			        			<p class="reduceFont">Have your own room and share some common spaces</p>			        		</div></label><label>     			<span class="checkboxStyle">		        				<input type="checkbox" name="homeType" class="hideTemp">			        			<i class="fa fa-check" aria-hidden="true"></i></span>			        		<div class="checkboxRight"><div>Shared room</div><p class="reduceFont">Stay in a shared space, like a common room</p> </div></label></div> <div class="divider"></div>');
				    
				    $( "#slider-range" ).slider({
				      range: true,
				      min: 0,
				      max: 500,
				      values: [ 35, 345 ],
				      slide: function( event, ui ) {
				        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
				      }
				    });
				    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
				      " - $" + $( "#slider-range" ).slider( "values", 1 ) );
			
		    }/*
		    else{
		    	$(".trashPrice").html("trashPrice");
		    	$(".trashInstance").html(trashInstance);
		    	$(".trashHometype").html(trashHometype);
		    }*/

		    $( "#slider-range" ).slider({
		      range: true,
		      min: 0,
		      max: 500,
		      values: [ 35, 345 ],
		      slide: function( event, ui ) {
		        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
		      }
		    });
		    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
		      " - $" + $( "#slider-range" ).slider( "values", 1 ) );

		}).resize();
  </script>