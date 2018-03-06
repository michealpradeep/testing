<div class="propertyListHeader">

<?php include 'includes/header.php'; ?>
<link rel="stylesheet" type="text/css" media="all" href="css/daterangepicker.css" />
<script type="text/javascript" src="js/moment.js"></script>
<script type="text/javascript" src="js/daterangepicker.js"></script>

<style type="text/css">
	.daterangepicker {
	    top: 135px!important;
	}
</style>
<section>
	<div class="container-fluid bordered experience ">
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
				<button class="toggleBtn filterToggle">Type <span class="homeTypeCount"></span> </button>
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
				<button class="toggleBtn">Categories</button>
				<div class="openFilter categoriesBlock">
					<div class="checkList">
              		<div class="row">
              			<div class="chkboxStyle">
              				<label>
			        			<span class="checkboxStyle">
			        				<input type="checkbox" name="" class="hideTemp">
				        			<i class="fa fa-check" aria-hidden="true"></i>
				        		</span>
			        			<div class="">Suitable for events</div>
			        		</label>
              			</div>
              			<div class="chkboxStyle">
              				<label>
			        			<span class="checkboxStyle">
			        				<input type="checkbox" name="" class="hideTemp">
				        			<i class="fa fa-check" aria-hidden="true"></i>
				        		</span>
			        			<div class="">Pets allowed</div>
			        		</label>
              			</div>
              			<div class="chkboxStyle">
              				<label>
			        			<span class="checkboxStyle">
			        				<input type="checkbox" name="" class="hideTemp">
				        			<i class="fa fa-check" aria-hidden="true"></i>
				        		</span>
			        			<div class="">Smoking allowed</div>
			        		</label>
              			</div>
              			<div class="chkboxStyle">
              				<label>
			        			<span class="checkboxStyle">
			        				<input type="checkbox" name="" class="hideTemp">
				        			<i class="fa fa-check" aria-hidden="true"></i>
				        		</span>
			        			<div class="">Air conditioning</div>
			        		</label>
              			</div>
              			<div class="chkboxStyle">
              				<label>
			        			<span class="checkboxStyle">
			        				<input type="checkbox" name="" class="hideTemp">
				        			<i class="fa fa-check" aria-hidden="true"></i>
				        		</span>
			        			<div class="">Shampoo</div>
			        		</label>
              			</div>
              			<div class="chkboxStyle">
              				<label>
			        			<span class="checkboxStyle">
			        				<input type="checkbox" name="" class="hideTemp">
				        			<i class="fa fa-check" aria-hidden="true"></i>
				        		</span>
			        			<div class="">Sample 2</div>
			        		</label>
              			</div>
              			<div class="chkboxStyle">
              				<label>
			        			<span class="checkboxStyle">
			        				<input type="checkbox" name="" class="hideTemp">
				        			<i class="fa fa-check" aria-hidden="true"></i>
				        		</span>
			        			<div class="">Heating</div>
			        		</label>
              			</div>
              			<div class="chkboxStyle">
              				<label>
			        			<span class="checkboxStyle">
			        				<input type="checkbox" name="" class="hideTemp">
				        			<i class="fa fa-check" aria-hidden="true"></i>
				        		</span>
			        			<div class="">Suitable for events</div>
			        		</label>
              			</div>
              			<div class="chkboxStyle">
              				<label>
			        			<span class="checkboxStyle">
			        				<input type="checkbox" name="" class="hideTemp">
				        			<i class="fa fa-check" aria-hidden="true"></i>
				        		</span>
			        			<div class="">Pets allowed</div>
			        		</label>
              			</div>
              			<div class="appCanl clear cat">
                      		<button class="applyBtn btn btn-sm btn-success" type="button">Apply</button> 
                      		<button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button>
                      </div>

              		</div>
              	</div>

              	
              	<div class="appendHometype"></div>
				
				</div>
			</div>
		</div>
	</div>
</section>
</div>

<section>
	<div class="container-fluid experience">
		<div class="row listings">
			<div class="col-sm-6 col-md-3">
				<div class="owl-carousel show">
		          <a href="experienceDetail.php">
		          	<div class="myPlace" style="background-image: url('images/exp1.jpg')"></div>
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
			<div class="col-sm-6 col-md-3">
				<div class="owl-carousel show">
		          <a href="#">
		          	<div class="myPlace" style="background-image: url('images/exp2.jpg')"></div>
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
			<div class="col-sm-6 col-md-3">
				<div class="owl-carousel show">
		          <a href="#">
		          	<div class="myPlace" style="background-image: url('images/exp3.jpg')"></div>
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
			<div class="col-sm-6 col-md-3">
				<div class="owl-carousel show">
		          <a href="#">
		          	<div class="myPlace" style="background-image: url('images/exp10.jpg')"></div>
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
			<div class="col-sm-6 col-md-3">
				<div class="owl-carousel show">
		          <a href="#">
		          	<div class="myPlace" style="background-image: url('images/exp11.jpg')"></div>
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
			<div class="col-sm-6 col-md-3">
				<div class="owl-carousel show">
		          <a href="#">
		          	<div class="myPlace" style="background-image: url('images/exp12.jpg')"></div>
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
			<div class="col-sm-6 col-md-3">
				<div class="owl-carousel show">
		          <a href="#">
		          	<div class="myPlace" style="background-image: url('images/exp13.jpg')"></div>
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
			<div class="col-sm-6 col-md-3">
				<div class="owl-carousel show">
		          <a href="#">
		          	<div class="myPlace" style="background-image: url('images/exp14.jpg')"></div>
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
			<div class="col-sm-6 col-md-3">
				<div class="owl-carousel show">
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
			</div>
		</div>
	</div>
</section>


<?php include 'includes/footer.php'; ?>


<script>
$(document).ready(function() {
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
            items: 4,
            nav: true,
            loop: false,
            margin: 16
          }
        }
      });
  });

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

	$("body").click(function(e){
      	
      	if($(e.target).is(".applyBtn")){
      		$(".filterBtn.active").addClass("chooseFilter");
      	}

      	 if(!$(e.target).closest(".filterBtn.active").length ==1 && !$(e.target).closest(".daterangepicker").length ==1 && !$(e.target).closest(".next.available, .prev.available").length ==1  ){

      	 	$(".backDrop").hide();
      	 	$(".filterBtn").removeClass("active");
      	 }
      	 if($(e.target).is(".cancelBtn, .applyBtn, .cancelFilter, .seeHomes")){
      		$(".filterBtn").removeClass("active");
      		$(".backDrop").hide();
      	}
      	
      });

	$(window).on("resize", function () {
		    if(screen.width < 768){

		    	$(".trashHometype").html('');
		    	$(".appendHometype").html('<div class="divider"></div> <h5> Type</h5> <div class="homeType">	<label>		        			<span class="checkboxStyle">     				<input type="checkbox" name="homeType" class="hideTemp">		<i class="fa fa-check" aria-hidden="true"></i>			        		</span>			        		<div class="checkboxRight">			        			<div>Entire place</div> <p class="reduceFont">Have a place to yourself</p>			        		</div>		        		</label>			<label>		        			<span class="checkboxStyle">		        				<input type="checkbox" name="homeType" class="hideTemp"><i class="fa fa-check" aria-hidden="true"></i></span>			        		<div class="checkboxRight"><div>Private room</div>			        			<p class="reduceFont">Have your own room and share some common spaces</p>			        		</div></label><label>     			<span class="checkboxStyle">		        				<input type="checkbox" name="homeType" class="hideTemp">			        			<i class="fa fa-check" aria-hidden="true"></i></span>			        		<div class="checkboxRight"><div>Shared room</div><p class="reduceFont">Stay in a shared space, like a common room</p> </div></label></div> <div class="divider"></div>');
				   
			
		    }
		}).resize();

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

</script>