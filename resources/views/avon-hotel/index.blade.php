
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Home Page One</title>
	<!-- Font Awesome Css -->
	<link rel="stylesheet" href="assets/css/all.min.css">

	<!-- Bootstrap version 4.4.1 -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!-- animate css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>	
    <!-- meanmenu version 2.0.7 -->
	<link rel="stylesheet" href="assets/css/meanmenu-2.0.7.min.css">
	<!-- Carousel Css -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <!-- datetimepicker -->
	<link rel="stylesheet" href="assets/css/bootstrap-datepicker.css" />
	<!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/style.css" />
	<!-- Responsive Css -->
	<link rel="stylesheet" href="assets/css/responsive.css" />
</head>

<body>
    <main>
        <!-- Hero Section Start -->
        <section class="hero-section" id="heroSlideActive">
              <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="single-hero-slide bg-img-center d-flex align-items-center text-center"
                    style="background-image: url(assets/img/bg/hero-bg-1.jpg); width: 100%;">
                    <div class="container">
                        <div class="slider-text">
                            <span class="small-text animate__animated animate__fadeInDown" style="animation-delay: .3s;" >Welcome to Avason</span>
                            <h1 class="animate__animated animate__fadeInLeft" style="animation-delay: 0.6s;">Luxury Living</h1>
                            <a class="btn filled-btn animate__animated animate__fadeInUp" style="animation-delay: 0.9s;" href="#">get started <i
                                    class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <h1 class="big-text">Avson</h1>
                </div>
                  </div>
                  <div class="carousel-item">
                    <div class="single-hero-slide bg-img-center d-flex align-items-center text-center"
                    style="background-image: url(assets/img/bg/hero-bg-2.jpg);">
                    <div class="container">
                        <div class="slider-text">
                            <span class="small-text animate__animated animate__fadeInDown" style="animation-delay: .3s;">Welcome to Avason</span>
                            <h1 class="animate__animated animate__fadeInLeft" style="animation-delay: 0.6s;">Luxury Living</h1>
                            <a class="btn filled-btn animate__animated animate__fadeInUp" style="animation-delay: 0.9s;" href="#" data-animation="fadeInUp" data-delay=".9s">get started <i
                                    class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <h1 class="big-text">Avson</h1>
                </div>
                  </div>
                  
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-icon" aria-hidden="true"><i class="fal fa-angle-double-left" style="font-size: 50px;"></i></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-icon" aria-hidden="true"><i class="fal fa-angle-double-right" style="font-size: 50px;"></i></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </section>
        <!-- End Hero Section -->
        <!-- Book Form Start -->
		<section class="booking-section">
			<div class="container">
				<div class="booking-form-wrap bg-img-center section-bg">
					<form id="bookIng-form">
						<div class="row">
							<div class="col-lg-4 col-md-6">
								<div class="input-wrap">
									<input type="text" placeholder="Location" id="location">
									<i class="far fa-search"></i>
								</div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div class="input-wrap">
									<input type="text" placeholder="Arrive Date" id="arrive-date">
									<i class="far fa-calendar-alt"></i>
								</div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div class="input-wrap">
									<input type="text" placeholder="Depart Date" id="depart-date">
									<i class=""></i>
									<i class="far fa-calendar-alt"></i>
								</div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div class="input-wrap">
									<select name="guests" id="guests">
										<option value="Guests">Guests</option>
										<option value="Guests">Guests</option>
										<option value="Guests">Guests</option>
									</select>
								</div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div class="input-wrap">
									<select name="adult" id="adult">
										<option value="Adult">Adult</option>
										<option value="Adult">Adult</option>
										<option value="Adult">Adult</option>
									</select>
								</div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div class="input-wrap">
									<button type="submit" class="btn filled-btn btn-block">
										book now <i class="far fa-long-arrow-right"></i>
									</button>
								</div>
							</div>
						</div>
					</form>
					<div class="booking-shape-1">
						<img src="assets/img/shape/01.png" alt="shape">
					</div>
					<div class="booking-shape-2">
						<img src="assets/img/shape/02.png" alt="shape">
					</div>
					<div class="booking-shape-3">
						<img src="assets/img/shape/03.png" alt="shape">
					</div>
				</div>
			</div>
		</section>
		<!-- Book Form End -->
		<!-- Welcome section start -->
		<section class="welcome-section section-padding">
			<div class="container">
				<div class="row align-items-center no-gutters">
					<!-- Tile Gallery -->
					<div class="col-lg-6">
						<div class="tile-gallery">
							<img src="assets/img/tile-gallery/01.jpg" alt="Tile Gallery">
							<div class="tile-gallery-content">
								<div class="tile-icon">
									<img src="assets/img/icons/hostel-hover.png" alt="">
								</div>
								<h3>Luxury Interior</h3>
								<p>Builder of human happiness. No one rejects dislikes or apleasure itself cause it is
									pleasure, but
									because</p>
							</div>
						</div>
					</div>
					<!-- End tile Gallery -->
					<div class="col-lg-5 offset-lg-1">
						<!-- Section Title -->
						<div class="section-title">
							<span class="title-top with-border">About Us</span>
							<h1>Welcome To Avson Modern Hotel Room Sells Services</h1>
							<p>But I must explain to you how all this mistaken idea denouncing
								pleasure and praising pain was born and I will give you a complec
								ount of the system, and expound the actual teachin reatexplorer of the truth, the
								master-builder of
								human happiness. No ways
								one rejdislikes, or avoids pleasure itself, because</p>
						</div>
						<!-- counter up -->
						<div class="counter">
							<div class="row" id="stop_count">
								<div class="col-4">
									<div class="counter-box wow animate__animated animate__fadeInLeft" >
										<img src="assets/img/icons/building.png" alt="">
										<span class="counter-number">506</span>
										<p>Luxury Appartment</p>
									</div>
								</div>
								<div class="col-4">
									<div class="counter-box wow animate__animated animate__fadeInUp">
										<img src="assets/img/icons/hostel.png" alt="">
										<span class="counter-number">252</span>
										<p>Modern Bedroom</p>
									</div>
								</div>
								<div class="col-4">
									<div class="counter-box wow animate__animated animate__fadeInRight">
										<img src="assets/img/icons/trophy.png" alt="">
										<span class="counter-number">420</span>
										<p>Win Int Awards</p>
									</div>
								</div>
							</div>
						</div>
						<!-- End counter -->
					</div>
				</div>
			</div>
		</section>
		<!-- Welcome section End -->
		<!-- Latest Room Section -->
		<section class="latest-room section-bg section-padding">
			<div class="container-fluid">
				<div class="row align-items-center no-gutters">
					<div class="col-lg-3">
						<!-- Section Title -->
						<div class="section-title">
							<span class="title-top with-border">Latest Product</span>
							<h1>Modern Hotel & Room For Luxury Living</h1>
							<p>Ullam corporis suscipit laboriosam nisi ut aliqucoe modi consequatur Quis autem vel eum
								iure repreh nderitqui in ea voluptate velit esse quam nihil molestiae </p>
							<!-- Page Info -->
							<div class="pagingInfo">
								<!-- <div class="slider-counter">

								</div> -->
							</div>
							<!-- Room Arrow -->
							<div class="room-arrows">
                
              </div>
              </div>
						</div>
            <div class="col-lg-8 offset-lg-1">
              <div class="owl-carousel owl-theme latest-room-slider">
                <div class="  owl-item">
                <!-- Single Room -->
                <div class="single-room">
                  <div class="room-thumb">
                  <img src="assets/img/rooms/01.jpg" alt="Room">
                  </div>
                  <div class="room-desc">
                  <div class="room-cat">
                    <p>Guest House</p>
                  </div>
                  <h4><a href="single-room.html">Modern Guest Rooms</a></h4>
                  <p>
                    Avoids pleasure itself, because pleasure,
                    but because those who do not know how
                    to pursue pleasure rationally encounter
                  </p>
                  <ul class="room-info list-inline">
                    <li><i class="far fa-bed"></i>3 Bed</li>
                    <li><i class="far fa-bath"></i>2 Baths</li>
                    <li><i class="far fa-ruler-triangle"></i>72 m</li>
                  </ul>
                  <div class="room-price">
                    <p>$180.00</p>
                  </div>
                  </div>
                </div>
                </div>
                <div class="  owl-item">
                <!-- Single Room -->
                <div class="single-room">
                  <div class="room-thumb">
                  <img src="assets/img/rooms/02.jpg" alt="Room">
                  </div>
                  <div class="room-desc">
                  <div class="room-cat">
                    <p>Meeting Room</p>
                  </div>
                  <h4><a href="single-room.html">Conference Room</a></h4>
                  <p>
                    Great explorer of the truth, the master-
                    builder of human happiness one rejects,
                    dislikes avoids pleasure because
                  </p>
                  <ul class="room-info list-inline">
                    <li><i class="far fa-bed"></i>3 Bed</li>
                    <li><i class="far fa-bath"></i>2 Baths</li>
                    <li><i class="far fa-ruler-triangle"></i>72 m</li>
                  </ul>
                  <div class="room-price">
                    <p>$205.00</p>
                  </div>
                  </div>
                </div>
                </div>
                <div class="  owl-item">
                <!-- Single Room -->
                <div class="single-room">
                  <div class="room-thumb">
                  <img src="assets/img/rooms/03.jpg" alt="Room">
                  </div>
                  <div class="room-desc">
                  <div class="room-cat">
                    <p>Guest Room</p>
                  </div>
                  <h4><a href="single-room.html">Deluxe Couple Room</a></h4>
                  <p>
                    Provident, similique sunt in culpa qui
                    officia deserunt mollitia animi laborum
                    dolorum fuga. Et harum quidem
                  </p>
                  <ul class="room-info list-inline">
                    <li><i class="far fa-bed"></i>3 Bed</li>
                    <li><i class="far fa-bath"></i>2 Baths</li>
                    <li><i class="far fa-ruler-triangle"></i>72 m</li>
                  </ul>
                  <div class="room-price">
                    <p>$199.00</p>
                  </div>
                  </div>
                </div>
                </div>
                <div class="  owl-item">
                  <!-- Single Room -->
                  <div class="single-room">
                    <div class="room-thumb">
                    <img src="assets/img/rooms/01.jpg" alt="Room">
                    </div>
                    <div class="room-desc">
                    <div class="room-cat">
                      <p>Guest House</p>
                    </div>
                    <h4><a href="single-room.html">Modern Guest Rooms</a></h4>
                    <p>
                      Avoids pleasure itself, because pleasure,
                      but because those who do not know how
                      to pursue pleasure rationally encounter
                    </p>
                    <ul class="room-info list-inline">
                      <li><i class="far fa-bed"></i>3 Bed</li>
                      <li><i class="far fa-bath"></i>2 Baths</li>
                      <li><i class="far fa-ruler-triangle"></i>72 m</li>
                    </ul>
                    <div class="room-price">
                      <p>$180.00</p>
                    </div>
                    </div>
                  </div>
                  </div>
                  <div class="  owl-item">
                  <!-- Single Room -->
                  <div class="single-room">
                    <div class="room-thumb">
                    <img src="assets/img/rooms/02.jpg" alt="Room">
                    </div>
                    <div class="room-desc">
                    <div class="room-cat">
                      <p>Meeting Room</p>
                    </div>
                    <h4><a href="single-room.html">Conference Room</a></h4>
                    <p>
                      Great explorer of the truth, the master-
                      builder of human happiness one rejects,
                      dislikes avoids pleasure because
                    </p>
                    <ul class="room-info list-inline">
                      <li><i class="far fa-bed"></i>3 Bed</li>
                      <li><i class="far fa-bath"></i>2 Baths</li>
                      <li><i class="far fa-ruler-triangle"></i>72 m</li>
                    </ul>
                    <div class="room-price">
                      <p>$205.00</p>
                    </div>
                    </div>
                  </div>
                  </div>
                  <div class="  owl-item">
                  <!-- Single Room -->
                  <div class="single-room">
                    <div class="room-thumb">
                    <img src="assets/img/rooms/03.jpg" alt="Room">
                    </div>
                    <div class="room-desc">
                    <div class="room-cat">
                      <p>Guest Room</p>
                    </div>
                    <h4><a href="single-room.html">Deluxe Couple Room</a></h4>
                    <p>
                      Provident, similique sunt in culpa qui
                      officia deserunt mollitia animi laborum
                      dolorum fuga. Et harum quidem
                    </p>
                    <ul class="room-info list-inline">
                      <li><i class="far fa-bed"></i>3 Bed</li>
                      <li><i class="far fa-bath"></i>2 Baths</li>
                      <li><i class="far fa-ruler-triangle"></i>72 m</li>
                    </ul>
                    <div class="room-price">
                      <p>$199.00</p>
                    </div>
                    </div>
                  </div>
                  </div>
                
              </div>
              
					</div>
				</div>
			</div>
		</section>
		
		
		<!-- Latest Room Section Ends -->
		<!-- Service Section Start -->
		<section class="service-section section-padding">
			<div class="container">
				<!-- Section Title -->
				<div class="section-title text-center">
					<span class="title-top">Our Services</span>
					<h1>We Provide Most Exclusive <br> Hotel & Room Services </h1>
				</div>

				<!-- Service Boxes -->
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<!-- SingleBox -->
						<div class="single-service-box text-center wow fadeIn animated" data-wow-duration="1500ms"
							data-wow-delay="400ms">
							<span class="service-counter">01</span>
							<div class="service-icon">
								<img src="assets/img/icons/01.png" alt="Icon" class="first-icon">
								<img src="assets/img/icons/01-hover.png" alt="Hover Icon" class="second-icon">
							</div>
							<h4>Rooms & Appartment</h4>
							<p>Great explorer of the truth the ter-blde human happiness one reject</p>
							<a href="service.html" class="read-more">raed more <i
									class="far fa-long-arrow-right"></i></a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<!-- SingleBox -->
						<div class="single-service-box text-center wow fadeIn animated" data-wow-duration="1500ms"
							data-wow-delay="500ms">
							<span class="service-counter">02</span>
							<div class="service-icon">
								<img src="assets/img/icons/02.png" alt="Icon" class="first-icon">
								<img src="assets/img/icons/02-hover.png" alt="Hover Icon" class="second-icon">
							</div>
							<h4>Food & Restaurant</h4>
							<p>Great explorer of the truth the ter-blde human happiness one reject</p>
							<a href="service.html" class="read-more">raed more <i
									class="far fa-long-arrow-right"></i></a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<!-- SingleBox -->
						<div class="single-service-box text-center wow fadeIn animated" data-wow-duration="1500ms"
							data-wow-delay="600ms">
							<span class="service-counter">03</span>
							<div class="service-icon">
								<img src="assets/img/icons/03.png" alt="Icon" class="first-icon">
								<img src="assets/img/icons/03-hover.png" alt="Hover Icon" class="second-icon">
							</div>
							<h4>Spa & Fitness</h4>
							<p>Great explorer of the truth the ter-blde human happiness one reject</p>
							<a href="service.html" class="read-more">raed more <i
									class="far fa-long-arrow-right"></i></a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<!-- SingleBox -->
						<div class="single-service-box text-center wow fadeIn animated" data-wow-duration="1500ms"
							data-wow-delay="700ms">
							<span class="service-counter">03</span>
							<div class="service-icon">
								<img src="assets/img/icons/04.png" alt="Icon" class="first-icon">
								<img src="assets/img/icons/04-hover.png" alt="Hover Icon" class="second-icon">
							</div>
							<h4>Sports & Gaming</h4>
							<p>Great explorer of the truth the ter-blde human happiness one reject</p>
							<a href="service.html" class="read-more">raed more <i
									class="far fa-long-arrow-right"></i></a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<!-- SingleBox -->
						<div class="single-service-box text-center wow fadeIn animated" data-wow-duration="1500ms"
							data-wow-delay="800ms">
							<span class="service-counter">03</span>
							<div class="service-icon">
								<img src="assets/img/icons/05.png" alt="Icon" class="first-icon">
								<img src="assets/img/icons/05-hover.png" alt="Hover Icon" class="second-icon">
							</div>
							<h4>Event & Party</h4>
							<p>Great explorer of the truth the ter-blde human happiness one reject</p>
							<a href="service.html" class="read-more">raed more <i
									class="far fa-long-arrow-right"></i></a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<!-- SingleBox -->
						<div class="single-service-box text-center wow fadeIn animated" data-wow-duration="1500ms"
							data-wow-delay="900ms">
							<span class="service-counter">03</span>
							<div class="service-icon">
								<img src="assets/img/icons/06.png" alt="Icon" class="first-icon">
								<img src="assets/img/icons/06-hover.png" alt="Hover Icon" class="second-icon">
							</div>
							<h4>GYM & Yoga</h4>
							<p>Great explorer of the truth the ter-blde human happiness one reject</p>
							<a href="service.html" class="read-more">raed more <i
									class="far fa-long-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Service Section End -->
		<!-- Call TO action start -->
		<section class="cta-section bg-img-center" style="background-image: url(assets/img/bg/cta-01.jpg);">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-10">
						<div class="cta-left-content">
							<span>Looking For Luxury Hotel</span>
							<h1>Booking Now</h1>
							<a href="#" class="btn filled-btn">Booking now <i class="far fa-long-arrow-right"></i></a>
						</div>
					</div>
					<div class="col-md-2">
						<div class="video-icon text-right">
							<a href="https://www.youtube.com/watch?v=NpEaa2P7qZI" class="video-popup"> <i
									class="fas fa-play"></i></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Call TO action end -->
		<!-- gallery Section Start -->
		<section class="ma-gallery-section section-padding">
			<div class="container">
				<!-- Section Title -->
				<div class="section-title text-center">
					<span class="title-top">Our Project</span>
					<h1>Let’s See Luxury Property <br> Insides Beautys </h1>
				</div>

				<!-- Gallery Start -->
				<div class="row">
					<div class="col-lg-6">
						<!-- SingleBox -->
						<div class="gallery-box bg-img-center big wow fadeIn animated" data-wow-duration="1500ms"
							data-wow-delay="0ms" style="background-image: url(assets/img/home-gallery/01.jpg);">
							<div class="gallery-box-content">
								<a href="#" class="view-more">
									<i class="far fa-plus"></i>
								</a>
								<h3>Deluxe Rooms</h3>
								<p>Couple Room Deluxe</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-8 col-md-6">
								<!-- SingleBox -->
								<div class="gallery-box bg-img-center semi-big wow fadeIn animated"
									data-wow-duration="1500ms" data-wow-delay="400ms"
									style="background-image: url(assets/img/home-gallery/02.jpg);">
									<div class="gallery-box-content">
										<a href="#" class="view-more">
											<i class="far fa-plus"></i>
										</a>
										<h3>Deluxe Rooms</h3>
										<p>Couple Room Deluxe</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6">
								<!-- SingleBox -->
								<div class="gallery-box bg-img-center small wow fadeIn animated"
									data-wow-duration="1500ms" data-wow-delay="800ms"
									style="background-image: url(assets/img/home-gallery/03.jpg);">
									<div class="gallery-box-content">
										<a href="#" class="view-more">
											<i class="far fa-plus"></i>
										</a>
										<h3>Deluxe Rooms</h3>
										<p>Couple Room Deluxe</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<!-- SingleBox -->
								<div class="gallery-box bg-img-center medium wow fadeIn animated"
									data-wow-duration="1500ms" data-wow-delay="1200ms"
									style="background-image: url(assets/img/home-gallery/04.jpg);">
									<div class="gallery-box-content">
										<a href="#" class="view-more">
											<i class="far fa-plus"></i>
										</a>
										<h3>Deluxe Rooms</h3>
										<p>Couple Room Deluxe</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<!-- SingleBox -->
								<div class="gallery-box bg-img-center medium wow fadeIn animated"
									data-wow-duration="1500ms" data-wow-delay="1600ms"
									style="background-image: url(assets/img/home-gallery/05.jpg);">
									<div class="gallery-box-content">
										<a href="#" class="view-more">
											<i class="far fa-plus"></i>
										</a>
										<h3>Deluxe Rooms</h3>
										<p>Couple Room Deluxe</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- gallery Section End -->
		<!-- feature us start -->
		<section class="wcu-section section-bg section-padding">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-5 offset-lg-1">
						<!-- Section Title -->
						<div class="feature-left">
							<div class="section-title">
								<span class="title-top with-border">Why Choose Us</span>
								<h1>We Care You & We Feel What’s Needs For Good Living</h1>
							</div>
							<ul class="feature-list">
								<li class="wow fadeInUp animated" data-wow-duration="1000ms" data-wow-delay="0ms">
									<div class="feature-icon"><i class="far fa-cocktail"></i></div>
									<h4>Relex Living</h4>
									<p>Dreat explorer of the truth, the master-builder of human happines one rejects,
										dislikes avoids</p>
								</li>
								<li class="wow fadeInUp animated" data-wow-duration="1000ms" data-wow-delay="200ms">
									<div class="feature-icon"><i class="far fa-box-full"></i></div>
									<h4>High Security System</h4>
									<p>Procure him some great pleasure. To take a trivial example, which of us ever
										undertakes labor</p>
								</li>
								<li class="wow fadeInUp animated" data-wow-duration="1000ms" data-wow-delay="300ms">
									<div class="feature-icon"><i class="far fa-music"></i></div>
									<h4>Such Events & Party</h4>
									<p>Libero tempore, cum soluta nobis est eligenoptio cumque nihil impedit quo minus
										id quod </p>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="feature-img">
							<div class="feature-abs-con">
								<div class="f-inner">
									<i class="far fa-stars"></i>
									<p>Popular Features</p>
								</div>
							</div>
							<img src="assets/img/tile-gallery/02.jpg" alt="Image">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Feature us end -->
		<!-- Feedback Section start -->
		<section class="feedback-section section-padding">
			<div class="container">
				<!-- Section Title -->
				<div class="section-title text-center">
					<span class="title-top">Clients Feedback</span>
					<h1>Our Satisfaction People Say <br> About Our Services </h1>
				</div>
				<div class="owl-carousel owl-theme feadback-slide row" id="feedbackSlideActive">
					
					<div class="item">
						<div class="single-feedback-box">
							<p>Omnis voluptas assumde est omnis dolor reporibus autem quidam et aut ciise debitiset
								arerum
								neces tibus saep on ways feels like ways.</p>
							<h5 class="feedback-author">James M. Varney</h5>
						</div>
					</div>
					<div class="item">
						<div class="single-feedback-box">
							<p>At vero eos et accusamu way set iusto odio dignis ducimus qui bpraes enum voluptatum
								deleniti
								atque corrupti quos dolores others worlds.</p>
							<h5 class="feedback-author">David K. Vinson</h5>
						</div>
					</div>
					<div class="item">
						<div class="single-feedback-box">
							<p>Omnis voluptas assumde est omnis dolor reporibus autem quidam et aut ciise debitiset
								arerum
								neces tibus saep on ways feels like ways.</p>
							<h5 class="feedback-author">James M. Varney</h5>
						</div>
					</div>
					<div class="item">
						<div class="single-feedback-box">
							<p>At vero eos et accusamu way set iusto odio dignis ducimus qui bpraes enum voluptatum
								deleniti
								atque corrupti quos dolores others worlds.</p>
							<h5 class="feedback-author">David K. Vinson</h5>
						</div>
					</div>
					
				</div>
			</div>
		</section>
		<!-- Feedback Section end -->
		<!-- Contact Section Start -->
		<section class="contact-section section-padding">
			<div class="container">
				<div class="row align-items-center no-gutters">
					<div class="col-lg-6">
						<div id="contactMapOne">
						</div>
					</div>
					<div class="col-lg-5 offset-lg-1">
						<!-- Section Title -->
						<div class="section-title">
							<span class="title-top with-border">Have A Coffee </span>
							<h1>Don’t Hesitate To Contact With Us</h1>
							<p>Provident, similique sunt in culpa qui officia deserunt mollitia animie est laborum et
								dolorum fuga harum quidem</p>
						</div>
						<div class="contact-box wow fadeInUp animated" data-wow-duration="1500ms"
							data-wow-delay="400ms">
							<ul>
								<li><i class="far fa-map-marker-alt"></i>205 Main Road, New York</li>
								<li>
									<a href="#">
										<i class="far fa-envelope-open"></i>supportinfo@gmail.com
									</a>
								</li>
								<li><a href="#"><i class="far fa-phone"></i>+89 (456) 789 999</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Contact Section End -->
		<!-- Brands section start -->
		<section class="brands-section section-bg">
			<div class="container">
				<div id="brandsSlideActive" class="owl-carousel owl-theme row brands-Slide">
					<div class="item">
						<div class="brand-item text-center">
							<img src="assets/img/brands/01.png" alt="Brands">
						</div>
					</div>
					<div class="item">
						<div class="brand-item text-center">
							<img src="assets/img/brands/02.png" alt="Brands">
						</div>
					</div>
					<div class="item">
						<div class="brand-item text-center">
							<img src="assets/img/brands/03.png" alt="Brands">
						</div>
					</div>
					<div class="item">
						<div class="brand-item text-center">
							<img src="assets/img/brands/04.png" alt="Brands">
						</div>
					</div>
					<div class="item">
						<div class="brand-item text-center">
							<img src="assets/img/brands/05.png" alt="Brands">
						</div>
					</div>
					<div class="item">
						<div class="brand-item text-center">
							<img src="assets/img/brands/06.png" alt="Brands">
						</div>
					</div>
					
				</div>
			</div>
		</section>
		<!-- Brands section End -->
    </main>
    
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<!-- Slick Version 1.9.0 -->
	
	<!-- <script src="assets/js/slick.min-1.9.0.js"></script> -->
	<script src="assets/js/owl.carousel.js"></script>
	<!-- MeanMenu version 2.0.7-->
    <script src="assets/js/meanmenu-2.0.7.min.js"></script>
    <!-- Bootstrap Version 4.5.0 -->
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- owl carousel js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
	<!-- Waypoints js version 2.0.3 -->

	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script> -->
	<script src="assets/js/jquery.countup.js"></script>
	<script src="assets/js/jquery.waypoints.min.js"></script>
	<!-- counterup js version 1.0 -->
	<!-- <script src="assets/js/jquery.counterup-1.0.min.js"></script> -->
    <!-- bootstrap datepicker -->
	<script src="assets/js/bootstrap-datepicker.js"></script>
	<script src="assets/js/main.js"></script>
</body>


</html>