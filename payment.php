<?php include 'includes/header.php'; ?>
<link rel="stylesheet" type="text/css" media="all" href="css/daterangepicker.css" />
<script type="text/javascript" src="js/moment.js"></script>
<script type="text/javascript" src="js/daterangepicker.js"></script>

<section>
	<div class="container">
		<div class="row">
			<div class="col-md-5 swapRight">
				<div class="paymentRight">
					<div class="tableRow head">
						<div class="left">
							<h5>Dreamy Tropical Tree House</h5>
							<div class="sub">Entire home/apt in Fern Forest</div>
							<div class="amt">Free parking on premises · Shampoo</div>
							<div class="clear">
				          		<div class="starRatingOuter1">
					          		<div class="starRatingInner1" style="width: 90%;"></div>
					          	</div>
					          	<span class="ratingCount">15</span>
				          	</div>
						</div>
						<div class="right">
							<img class="propImg" src="images/home1.jpg">
						</div>
					</div>
					<div class="divider"></div>
					<p><i class="fa fa-user-o" aria-hidden="true"></i> <span class="number_s120">1</span> guest</p>
					<p><i class="fa fa-calendar-check-o" aria-hidden="true"></i> <span class="number_s120">18</span> Apr <span class="number_s120">2018 - 19</span> Apr <span class="number_s120">2018</span></p>
					<div class="divider"></div>

					<div class="tableRow">
						<div class="left">
							<p> <span class="number_s120">₹13163.64 x 1</span> night </p>
						</div>
						<div class="right">
							<p class="number_s120"> ₹13163.64 </p>
						</div>
					</div>
					<div class="tableRow">
						<div class="left">
							<p> Cleaning fee</p>
						</div>
						<div class="right">
							<p class="number_s120"> ₹4936.37 </p>
						</div>
					</div>
					<div class="tableRow">
						<div class="left">
							<p>Service fee</p>
						</div>
						<div class="right">
							<p class="number_s120"> ₹2356.03 </p>
						</div>
					</div>
					<div class="tableRow">
						<div class="left">
							<p>Included amenities</p>
							<span class="reduceFont">Free parking on premises</span>
						</div>
						<div class="right">
							<p> Free </p>
						</div>
					</div>
					<div class="divider"></div>

					<div class="tableRow">
						<div class="left">
							<p>Total (INR)</p>
						</div>
						<div class="right">
							<h5>₹20456.04</h5>
						</div>
					</div>
					<p class="bottom">The adjusted exchange rate for booking this listing is ₹1.00 INR to $0.0152 USD.</p>

				</div>
			</div>
			<div class="col-md-7">
				<div class="paymentLeft">
					<h2 class="marginBottom3">Who’s coming?</h2>
					<h5>Guests</h5>
					<div>
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
			                      <p class="reduceFont">5 guests maximum. Infants don’t count toward the number of guests.</p>
			                  </div>
						
						</div>
					</div>
					<div class="tableRow contactTitle marginBottom2">
						<div class="left">
							<h5>Say hello to your host</h5>
							<p>Let Kristie know a little about yourself and why you’re coming.</p>
						</div>
						<div class="right">
							<img src="images/micheal.jpg">
						</div>
					</div>
					<form action="payment1.php">
						<textarea rows="5" placeholder="Hello Micheal! Can’t wait to spend 1 night in your home." class="marginBottom2"></textarea>
						<input type="submit" class="submitBtn1" name="" value="Continue">
					</form>
				</div>

			</div>

		</div>
	</div>	
</section>

<?php include 'includes/footer.php'; ?>

<script type="text/javascript">
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