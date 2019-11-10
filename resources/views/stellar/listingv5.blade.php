<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="zxx"> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang="zxx"> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang="zxx"> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang="zxx"> <!--<![endif]-->



<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Search Engine Find products, services and businesses around you. Quick and easy.</title>

	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/bootstrap-slider.css">
	<link rel="stylesheet" href="/css/normalize.css">
	<link rel="stylesheet" href="/css/font-awesome.min.css">
	<link rel="stylesheet" href="/css/icomoon.css">
	<link rel="stylesheet" href="/css/chosen.css">
	<link rel="stylesheet" href="/css/prettyPhoto.css">
	<link rel="stylesheet" href="/css/scrollbar.css">
	<link rel="stylesheet" href="/css/morris.css">
	<link rel="stylesheet" href="/css/owl.carousel.css">
	<link rel="stylesheet" href="/css/YouTubePopUp.css">
	<link rel="stylesheet" href="/css/auto-complete.css">
	<link rel="stylesheet" href="/css/jquery.navhideshow.css">
	<link rel="stylesheet" href="/css/transitions.css">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/color.css">
	<link rel="stylesheet" href="/css/responsive.css">
	<script src="/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body>
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<!--************************************
			Preloader Start
	*************************************-->
	<div class="preloader-outer">
		<div class="pin"></div>
		<div class="pulse"></div>
	</div>
	<!--************************************
			Preloader End
	*************************************-->
	<!--************************************
			Wrapper Start
	*************************************-->
	<div id="listar-wrapper" class="listar-wrapper listar-haslayout">
		<!--************************************
				Header Start
		*************************************-->
		<header id="listar-header" class="listar-header cd-auto-hide-header listar-haslayout">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<strong class="listar-logo"><a href="/"><img src="/images/NetLogo.jpg" width="117px" height="65px" alt="company logo here"></a></strong>
					<nav class="listar-addnav">
							<ul>

								@auth

								@if(Auth::user()->registrationPurpose ==='Business')
								
								<li>
									<a class="listar-btn listar-btngreen" href="/application/dashboard/profile">
										<i class=""></i>
										<span>Dashboard</span>
									</a>
								</li>

								@endif

								@endauth

								@guest

								<li>
									<a class="listar-btn listar-btnblue" href="{{ route('register') }}">
										<i class="icon-plus"></i>
										<span>Add Business</span>
									</a>
								</li>

								@endguest


								<li>
									<div class="dropdown listar-themedropdown">
										<a id="listar-cartdropdown" class="listar-btn listar-btnround listar-btncartdropdown" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<em class="fa fa-check-circle-o"></em>
											<i class="fa fa-search-plus"></i>
										</a>
										<div class="dropdown-menu listar-themedropdownmenu listar-minicart" aria-labelledby="listar-cartdropdown">
										
										
											<div class="listar-cartitem listar-totalarea">
												<span>Search Guba Handle:</span>
												<span class="fa fa-compass"></span>
											</div>
												<form action="/search/guba/{handle}/function" method="GET">
												<div class="listar-cartitem">
											
												<div class="listar-iteminfo">
													<input type="text" required name="gubaHandle">
												</div>
											</div>
											<button type="submit" class="btn btn-success btn-md" name="gubahandle"> Search</button>

											</form>
										</div>  
									</div> 
								</li>
							</ul>
						</nav>
							<nav id="listar-nav" class="listar-nav">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#listar-navigation" aria-expanded="false">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<div id="listar-navigation" class="collapse navbar-collapse listar-navigation">
								<ul>
								
									
								<li class="current-menu-item"><a href="/resources/blog/homestead">Blog</a></li>
										<li class="current-menu-item"><a href="/resources/course/homestead">Courses</a></li>
									
										<li class="current-menu-item"><a href="/about">About</a></li>
									<li class="current-menu-item"><a href="/services">Services</a></li>



								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</header>
		<!--************************************
				Header End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="listar-main" class="listar-main listar-haslayout">
			<div id="listar-content" class="listar-content">
				<div class="listar-listing listar-listingvone">
					<div id="listar-mapclustring" class="listar-mapclustring">
						<div class="listar-maparea">
							<div id="listar-listingmap" class="listar-listingmap"></div>
							<div class="listar-mapcontrols">
								<span id="doc-mapplus"><i class="fa fa-plus"></i></span>
								<span id="doc-mapminus"><i class="fa fa-minus"></i></span>
								<span id="doc-lock"><i class="fa fa-lock"></i></span>
								<span id="listar-geolocation"><i class="fa fa-crosshairs"></i></span>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 pull-left">
						<div class="row">
							<div class="listar-listingarea">
								<div class="listar-innerpagesearch">
									<div class="listar-innersearch">
										<div class="listar-searchstatus"><h1><span>Results For</span> Food &amp; Drinks Listings</h1></div>
										<form class="listar-formtheme listar-formsearchlisting">
											<fieldset>
												<div class="form-group listar-inputwithicon">
													<i class="icon-icons185"></i>
													<input type="text" name="q" id="listar-autosearch" class="form-control" placeholder="What are you looking for ?">
												</div>
												<div class="form-group listar-inputwithicon">
													<i class="icon-global"></i>
													<div class="listar-select listar-selectlocation">
														<select id="listar-locationchosen" class="listar-locationchosen listar-chosendropdown">
															<option>All Locations</option>
															<option>Lahore</option>
															<option>Bayonne</option>
															<option>Greenville</option>
															<option>Manhattan</option>
															<option>Queens</option>
															<option>The Heights</option>
														</select>
													</div>
												</div>
												<div class="form-group listar-inputwithicon">
													<i class="icon-layers"></i>
													<div class="listar-select listar-selectlocation">
														<select id="listar-categorieschosen" class="listar-categorieschosen listar-chosendropdown">
															<option>All Categories</option>
															<option class="icon-entertainment">Art &amp; Entertainment</option>
															<option class="icon-shopping">Beauty &amp; Health</option>
															<option class="icon-study">Education</option>
															<option class="icon-healthfitness">Fitness</option>
															<option class="icon-icons240">Hotels</option>
															<option class="icon-localservice">Motor Mechanic</option>
															<option class="icon-nightlife">Night Life</option>
															<option class="icon-tourism">Restaurant</option>
															<option class="icon-shopping">Real Estate</option>
															<option class="icon-shopping">Shopping</option>
														</select>
													</div>
												</div>
											</fieldset>
											<fieldset>
												<div class="listar-distance">
													<h2>Distance Radius</h2>
													<input id="listar-distancerangeslider" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="14">
												</div>
											</fieldset>
											<fieldset>
												<div class="listar-leftbox">
													<a id="listar-btnadvancefeatures" class="listar-btnadvancefeatures" href="javascript:void(0);"><i class="icon-minus"></i><span>Advanced Features</span></a>
												</div>
												<div class="listar-rightbox">
													<div class="listar-select">
														<select>
															<option>Default Order</option>
															<option>Ascending</option>
															<option>Descending</option>
														</select>
													</div>
													<ul class="listar-views">
														<li class="listar-active"><a href="listingv1.html"><i class="icon-icons152"></i></a></li>
														<li><a href="listingvlist.html"><i class="icon-icons152"></i></a></li>
													</ul>
												</div>
												<div id="listar-advancefitures" class="listar-advancefitures">
													<span class="listar-checkbox">
														<input id="listar-aircondation" type="checkbox" name="Advanced Features" value="Air Conditioning">
														<label for="listar-aircondation">Air Conditioning</label>
													</span>
													<span class="listar-checkbox">
														<input id="listar-freeparking" type="checkbox" name="Advanced Features" value="Free Parking">
														<label for="listar-freeparking">Free Parking</label>
													</span>
													<span class="listar-checkbox">
														<input id="listar-cardpayment" type="checkbox" name="Advanced Features" value="Card Payment">
														<label for="listar-cardpayment">Card Payment</label>
													</span>
													<span class="listar-checkbox">
														<input id="listar-smokingallowed" type="checkbox" name="Advanced Features" value="Smoking Allowed">
														<label for="listar-smokingallowed">Smoking Allowed</label>
													</span>
													<span class="listar-checkbox">
														<input id="listar-wifi" type="checkbox" name="Advanced Features" value="Wi-Fi">
														<label for="listar-wifi">Wi-Fi</label>
													</span>
													<span class="listar-checkbox">
														<input id="listar-swimmingpool" type="checkbox" name="Advanced Features" value="Swimming Pool">
														<label for="listar-swimmingpool">Swimming Pool</label>
													</span>
													<span class="listar-checkbox">
														<input id="listar-balcony" type="checkbox" name="Advanced Features" value="Balcony">
														<label for="listar-balcony">Balcony</label>
													</span>
													<span class="listar-checkbox">
														<input id="listar-reservations" type="checkbox" name="Advanced Features" value="Reservations">
														<label for="listar-reservations">Reservations</label>
													</span>
													<span class="listar-checkbox">
														<input id="listar-snackbar" type="checkbox" name="Advanced Features" value="Snack bar">
														<label for="listar-snackbar">Snack bar</label>
													</span>
													<span class="listar-checkbox">
														<input id="listar-familyfriendly" type="checkbox" name="Advanced Features" value="Family Friendly">
														<label for="listar-familyfriendly">Family Friendly</label>
													</span>
													<span class="listar-checkbox">
														<input id="listar-guidedtours" type="checkbox" name="Advanced Features" value="Guided Tours">
														<label for="listar-guidedtours">Guided Tours</label>
													</span>
												</div>
											</fieldset>
											<button type="button" class="listar-btn listar-btngreen">Submit Result</button>
										</form>
									</div>
								</div>
								<div class="listar-themeposts listar-placesposts listar-gridview">
									<div class="listar-themepost listar-placespost">
										<figure class="listar-featuredimg"><a href="javascript:void(0);"><img src="/images/post/img-13.jpg" alt="image description" class="mCS_img_loaded"></a></figure>
										<div class="listar-postcontent">
											<h3><a href="javascript:void(0);">



										</a></h3>
											<div class="listar-description">
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
											</div>
											<div class="listar-reviewcategory">
												<div class="listar-review">
													<span class="listar-stars"><span></span></span>
													<em>(3 Review)</em>
												</div>
												<a href="javascript:void(0);" class="listar-category">
													<i class="icon-nightlife"></i>
													<span>Night Life</span>
												</a>
											</div>
											<div class="listar-themepostfoot">
												<a class="listar-location" href="javascript:void(0);">
													<i class="icon-icons74"></i>
													<em>New York</em>
												</a>
												<div class="listar-postbtns">
													<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
													<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
													<div class="listar-btnquickinfo">
														<div class="listar-shareicons">
															<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
														</div>
														<a class="listar-btnshare" href="javascript:void(0);">
															<i class="icon-share3"></i>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="listar-themepost listar-placespost">
										<figure class="listar-featuredimg"><a href="javascript:void(0);"><img src="/images/post/img-14.jpg" alt="image description" class="mCS_img_loaded"></a></figure>
										<div class="listar-postcontent">
											<h3><a href="javascript:void(0);">Serena Hotel</a><i class="icon-checkmark listar-postverified listar-themetooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Verified"></i></h3>
											<div class="listar-description">
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
											</div>
											<div class="listar-reviewcategory">
												<div class="listar-review">
													<span class="listar-stars"><span></span></span>
													<em>(3 Review)</em>
												</div>
												<a href="javascript:void(0);" class="listar-category">
													<i class="icon-tourism"></i>
													<span>Hotel</span>
												</a>
											</div>
											<div class="listar-themepostfoot">
												<a class="listar-location" href="javascript:void(0);">
													<i class="icon-icons74"></i>
													<em>New York</em>
												</a>
												<div class="listar-postbtns">
													<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
													<a class="listar-btnquickinfo listar-liked" href="javascript:void(0);"><i class="icon-heart2"></i></a>
													<div class="listar-btnquickinfo">
														<div class="listar-shareicons">
															<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
														</div>
														<a class="listar-btnshare" href="javascript:void(0);">
															<i class="icon-share3"></i>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="listar-themepost listar-placespost">
										<figure class="listar-featuredimg"><a href="javascript:void(0);"><img src="/images/post/img-15.jpg" alt="image description" class="mCS_img_loaded"></a></figure>
										<div class="listar-postcontent">
											<h3><a href="javascript:void(0);">Tourist Guide</a></h3>
											<div class="listar-description">
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
											</div>
											<div class="listar-reviewcategory">
												<div class="listar-review">
													<span class="listar-stars"><span></span></span>
													<em>(3 Review)</em>
												</div>
												<a href="javascript:void(0);" class="listar-category">
													<i class="icon-foods"></i>
													<span>Food and Drinks</span>
												</a>
											</div>
											<div class="listar-themepostfoot">
												<a class="listar-location" href="javascript:void(0);">
													<i class="icon-icons74"></i>
													<em>New York</em>
												</a>
												<div class="listar-postbtns">
													<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
													<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
													<div class="listar-btnquickinfo">
														<div class="listar-shareicons">
															<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
														</div>
														<a class="listar-btnshare" href="javascript:void(0);">
															<i class="icon-share3"></i>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="listar-themepost listar-placespost">
										<figure class="listar-featuredimg"><a href="javascript:void(0);"><img src="/images/post/img-13.jpg" alt="image description" class="mCS_img_loaded"></a></figure>
										<div class="listar-postcontent">
											<h3><a href="javascript:void(0);">Tourist Guide</a></h3>
											<div class="listar-description">
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
											</div>
											<div class="listar-reviewcategory">
												<div class="listar-review">
													<span class="listar-stars"><span></span></span>
													<em>(3 Review)</em>
												</div>
												<a href="javascript:void(0);" class="listar-category">
													<i class="icon-nightlife"></i>
													<span>Night Life</span>
												</a>
											</div>
											<div class="listar-themepostfoot">
												<a class="listar-location" href="javascript:void(0);">
													<i class="icon-icons74"></i>
													<em>New York</em>
												</a>
												<div class="listar-postbtns">
													<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
													<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
													<div class="listar-btnquickinfo">
														<div class="listar-shareicons">
															<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
														</div>
														<a class="listar-btnshare" href="javascript:void(0);">
															<i class="icon-share3"></i>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="listar-themepost listar-placespost">
										<figure class="listar-featuredimg"><a href="javascript:void(0);"><img src="/images/post/img-14.jpg" alt="image description" class="mCS_img_loaded"></a></figure>
										<div class="listar-postcontent">
											<h3><a href="javascript:void(0);">Serena Hotel</a><i class="icon-checkmark listar-postverified listar-themetooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Verified"></i></h3>
											<div class="listar-description">
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
											</div>
											<div class="listar-reviewcategory">
												<div class="listar-review">
													<span class="listar-stars"><span></span></span>
													<em>(3 Review)</em>
												</div>
												<a href="javascript:void(0);" class="listar-category">
													<i class="icon-tourism"></i>
													<span>Hotel</span>
												</a>
											</div>
											<div class="listar-themepostfoot">
												<a class="listar-location" href="javascript:void(0);">
													<i class="icon-icons74"></i>
													<em>New York</em>
												</a>
												<div class="listar-postbtns">
													<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
													<a class="listar-btnquickinfo listar-liked" href="javascript:void(0);"><i class="icon-heart2"></i></a>
													<div class="listar-btnquickinfo">
														<div class="listar-shareicons">
															<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
														</div>
														<a class="listar-btnshare" href="javascript:void(0);">
															<i class="icon-share3"></i>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="listar-themepost listar-placespost">
										<figure class="listar-featuredimg"><a href="javascript:void(0);"><img src="/images/post/img-15.jpg" alt="image description" class="mCS_img_loaded"></a></figure>
										<div class="listar-postcontent">
											<h3><a href="javascript:void(0);">Tourist Guide</a></h3>
											<div class="listar-description">
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
											</div>
											<div class="listar-reviewcategory">
												<div class="listar-review">
													<span class="listar-stars"><span></span></span>
													<em>(3 Review)</em>
												</div>
												<a href="javascript:void(0);" class="listar-category">
													<i class="icon-foods"></i>
													<span>Food and Drinks</span>
												</a>
											</div>
											<div class="listar-themepostfoot">
												<a class="listar-location" href="javascript:void(0);">
													<i class="icon-icons74"></i>
													<em>New York</em>
												</a>
												<div class="listar-postbtns">
													<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
													<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
													<div class="listar-btnquickinfo">
														<div class="listar-shareicons">
															<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
														</div>
														<a class="listar-btnshare" href="javascript:void(0);">
															<i class="icon-share3"></i>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<nav class="listar-pagination">
										<ul>
											<li class="listar-prevpage"><a href="javascript:void(0);"><i class="fa fa-angle-left"></i></a></li>
											<li class="listar-active"><a href="javascript:void(0);">1</a></li>
											<li><a href="javascript:void(0);">2</a></li>
											<li><a href="javascript:void(0);">3</a></li>
											<li class="listar-nextpage"><a href="javascript:void(0);"><i class="fa fa-angle-right"></i></a></li>
										</ul>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!--************************************
				Main End
		*************************************-->
		<!--************************************
				Footer Start
		*************************************-->
		<footer id="listar-footer" class="listar-footer listar-haslayout">
			<div class="listar-footeraboutarea">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="listar-upperbox">
								<strong class="listar-logo"><a href="javascript:void(0);"><img src="images/logo.png" alt="image description"></a></strong>
								<ul class="listar-socialicons">
									<li class="listar-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
									<li class="listar-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
									<li class="listar-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
									<li class="listar-googleplus"><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
									<li class="listar-vimeo"><a href="javascript:void(0);"><i class="fa fa-vimeo"></i></a></li>
								</ul>
								<nav class="listar-navfooter">
									<ul>
										<li><a href="javascript:void(0);">Home</a></li>
										<li><a href="javascript:void(0);">how it work</a></li>
										<li><a href="javascript:void(0);">Shop</a></li>
										<li><a href="javascript:void(0);">Packages</a></li>
										<li><a href="javascript:void(0);">News</a></li>
										<li><a href="javascript:void(0);">Contact Us</a></li>
									</ul>
								</nav>
							</div>
							<div class="listar-lowerbox">
								<div class="listar-description">
									<p>Lorem ipsum dolor sit amet, eu per legimus referrentur. Ius ne viris repudiare, nominavi sententiae eos in. Et duo salutatus consequat Lorem ipsum dolor sit amet.</p>
								</div>
								<address><strong>Address:</strong> No.200 Josecph, San Francisco <span><strong>Tel:</strong> 01-987-654-3210</span></address>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="listar-footerbar">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<span class="listar-copyright">Copyright &copy; 2018 Listingstar. All rights reserved.</span>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!--************************************
				Footer End
		*************************************-->
	</div>
	<!--************************************
			Wrapper End
	*************************************-->
	<!--************************************
			Theme Modal Box Start
	*************************************-->
	<div class="modal fade listar-placequickview" tabindex="-1" role="dialog">
		<div class="modal-dialog listar-modaldialog" role="document">
			<div class="modal-content listar-modalcontent">
				<div class="listar-themepost listar-placespost">
					<span class="listar-btnclosequickview" data-toggle="modal" data-target=".listar-placequickview">X</span>
					<figure class="listar-featuredimg" data-vide-bg="poster: images/post/img-16.jpg" data-vide-options="position: 50% 50%">
						<span class="listar-contactnumber">
							<i class="icon-"><img src="images/icons/icon-03.png" alt="image description"></i>
							<em> + 7890 456 133</em>
						</span>
					</figure>
					<div class="listar-postcontent">
						<h3><a href="javascript:void(0);">Serena Hotel</a><i class="icon-checkmark listar-postverified listar-themetooltip" data-toggle="tooltip" data-placement="top" title="Verified"></i></h3>
						<div class="listar-description">
							<p>Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla. Nulla eget iaculis lectus. Mauris ac maximus neque. Nam in mauris quis libero sodales eleifend. Morbi varius, nulla sit Nam in mauris quis libero sodales eleifend amet rutrum elementum, est elit finibus tellus, ut tristique elit risus at metus</p>
						</div>
						<ul class="listar-listfeatures">
							<li>Pets allowed</li>
							<li>Kitchen</li>
							<li>Internet</li>
							<li>Suitable for events</li>
							<li>Gym</li>
							<li>Dryer</li>
							<li>Hot tub</li>
							<li>Family/kid friendly</li>
							<li>Wireless Internet</li>
						</ul>
						<div class="listar-reviewcategory">
							<div class="listar-review">
								<span class="listar-stars"><span></span></span>
								<em>(3 Review)</em>
							</div>
							<a href="javascript:void(0);" class="listar-category">
								<i class="icon-tourism"></i>
								<span>Hotel</span>
							</a>
						</div>
						<div class="listar-themepostfoot">
							<span class="listar-openinghours">
								<i class="icon-alarmclock2"></i>
								<em>Today <span class="listar-greenthemecolor">Open Now</span> 10:00 AM - 5:00 PM</em>
							</span>
							<div class="listar-postbtns">
								<a class="listar-btnquickinfo listar-liked" href="javascript:void(0);"><i class="icon-heart2"></i></a>
								<div class="listar-btnquickinfo">
									<div class="listar-shareicons">
										<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
									</div>
									<a class="listar-btnshare" href="javascript:void(0);">
										<i class="icon-share3"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--************************************
			Theme Modal Box End
	*************************************-->
	<!--************************************
			Login Singup Start
	*************************************-->
	<div id="listar-loginsingup" class="listar-loginsingup">
		<button type="button" class="listar-btnclose">x</button>
		<figure class="listar-loginsingupimg" data-vide-bg="poster: images/bgjoin.jpg" data-vide-options="position: 50% 50%"></figure>
		<div class="listar-contentarea">
			<div class="listar-themescrollbar">
				<div class="listar-logincontent">
					<div class="listar-themetabs">
						<ul class="listar-tabnavloginregistered" role="tablist">
							<li role="presentation" class="active"><a href="#listar-loging" data-toggle="tab">Log in</a></li>
							<li role="presentation"><a href="#listar-register" data-toggle="tab">Register</a></li>
						</ul>
						<div class="tab-content listar-tabcontentloginregistered">
							<div role="tabpanel" class="tab-pane active fade in" id="listar-loging">
								<form class="listar-formtheme listar-formlogin">
									<fieldset>
										<div class="form-group listar-inputwithicon">
											<i class="icon-profile-male"></i>
											<input type="text" name="username" class="form-control" placeholder="Username Or Email">
										</div>
										<div class="form-group listar-inputwithicon">
											<i class="icon-icons208"></i>
											<input type="password" name="password" class="form-control" placeholder="Password">
										</div>
										<div class="form-group">
											<div class="listar-checkbox">
												<input type="checkbox" name="remember" id="rememberpass2">
												<label for="rememberpass2">Remember me</label>
											</div>
											<span><a href="#">Lost your Password?</a></span>
										</div>
										<button class="listar-btn listar-btngreen">Register</button>
									</fieldset>
								</form>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="listar-register">
								<form class="listar-formtheme listar-formlogin">
									<fieldset>
										<div class="form-group listar-inputwithicon">
											<i class="icon-profile-male"></i>
											<input type="text" name="username" class="form-control" placeholder="Username">
										</div>
										<div class="form-group listar-inputwithicon">
											<i class="icon-icons208"></i>
											<input type="email" name="emailaddress" class="form-control" placeholder="Email Address">
										</div>
										<div class="form-group listar-inputwithicon">
											<i class="icon-lock-stripes"></i>
											<input type="password" name="password" class="form-control" placeholder="Password">
										</div>
										<div class="form-group listar-inputwithicon">
											<i class="icon-lock-stripes"></i>
											<input type="password" name="confirmpassword" class="form-control" placeholder="Password">
										</div>
										<div class="form-group">
											<div class="listar-checkbox">
												<input type="checkbox" name="remember" id="rememberpass">
												<label for="rememberpass">Remember me</label>
											</div>
											<span><a href="#">Lost your Password?</a></span>
										</div>
										<button class="listar-btn listar-btngreen">login</button>
									</fieldset>
								</form>
							</div>
						</div>
					</div>
					<div class="listar-shareor"><span>or</span></div>
					<div class="listar-signupwith">
						<h2>Sign in With...</h2>
						<ul class="listar-signinloginwithsocialaccount">
							<li class="listar-facebook"><a href="javascript:void(0);"><i class="icon-facebook-1"></i><span>Facebook</span></a></li>
							<li class="listar-twitter"><a href="javascript:void(0);"><i class="icon-twitter-1"></i><span>Twitter</span></a></li>
							<li class="listar-googleplus"><a href="javascript:void(0);"><i class="icon-google4"></i><span>Google +</span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--************************************
			Login Singup End
	*************************************-->
	<script src="/js/vendor/jquery-library.js"></script>
	<script src="/js/vendor/bootstrap.min.js"></script>
	<script src="/js/mapclustering/data.json"></script>
	<script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en"></script>
	<script src="/js/tinymce/tinymce.min4bb5.js?apiKey=4cuu2crphif3fuls3yb1pe4qrun9pkq99vltezv2lv6sogci"></script>
	<script src="/js/mapclustering/markerclusterer.min.js"></script>
	<script src="/js/mapclustering/infobox.js"></script>
	<script src="/js/mapclustering/map.js"></script>
	<script src="/js/ResizeSensor.js.js"></script>
	<script src="/js/jquery.sticky-sidebar.js"></script>
	<script src="/js/YouTubePopUp.jquery.js"></script>
	<script src="/js/jquery.navhideshow.js"></script>
	<script src="/js/backgroundstretch.js"></script>
	<script src="/js/jquery.sticky-kit.js"></script>
	<script src="/js/bootstrap-slider.js"></script>
	<script src="/js/owl.carousel.min.js"></script>
	<script src="/js/jquery.vide.min.js"></script>
	<script src="/JS/auto-complete.html"></script>
	<script src="/js/chosen.jquery.js"></script>
	<script src="/js/scrollbar.min.js"></script>
	<script src="/js/isotope.pkgd.js"></script>
	<script src="/js/jquery.steps.js"></script>
	<script src="/js/prettyPhoto.js"></script>
	<script src="/js/raphael-min.js"></script>
	<script src="/js/parallax.js"></script>
	<script src="/js/sortable.js"></script>
	<script src="/js/countTo.js"></script>
	<script src="/js/appear.js"></script>
	<script src="/js/gmap3.js"></script>
	<script src="/js/dev_themefunction.js"></script>
	<script>
		/*--------------------------------------
				AUTO COMPLETE JQUERY
		--------------------------------------*/
		if(jQuery('#listar-autosearch').length > 0){
			jQuery('#listar-autosearch').autoComplete({
				minChars: 1,
				source: function(term, suggest){
					term = term.toLowerCase();
					var choices = ['ActionScript', 'AppleScript', 'Asp', 'Assembly', 'BASIC', 'Batch', 'C', 'C++', 'CSS', 'Clojure', 'COBOL', 'ColdFusion', 'Erlang', 'Fortran', 'Groovy', 'Haskell', 'HTML', 'Java', 'JavaScript', 'Lisp', 'Perl', 'PHP', 'PowerShell', 'Python', 'Ruby', 'Scala', 'Scheme', 'SQL', 'TeX', 'XML'];
					var suggestions = [];
					for (i=0;i<choices.length;i++)
						if (~choices[i].toLowerCase().indexOf(term)) suggestions.push(choices[i]);
					suggest(suggestions);
				}
			});
			if (~window.location.href.indexOf('http')) {
				(function() {var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;po.src = '../../../apis.google.com/js/plusone.js';var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);})();
				(function(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0];if (d.getElementById(id)) return;js = d.createElement(s); js.id = id;js.src = "../../../connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=114593902037957";fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));
				!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
				jQuery('#github_social').html('\
					<iframe style="float:left;margin-right:15px" src="//ghbtns.com/github-btn.html?user=Pixabay&repo=jQuery-autoComplete&type=watch&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="110" height="20"></iframe>\
					<iframe style="float:left;margin-right:15px" src="//ghbtns.com/github-btn.html?user=Pixabay&repo=jQuery-autoComplete&type=fork&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="110" height="20"></iframe>\
				');
			}
		}
	</script>
</body>


</html>