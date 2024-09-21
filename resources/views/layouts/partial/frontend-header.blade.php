    <!--==================================================-->
	<!-----Start Header Top Section ----->
	<!--==================================================-->
	<!--Header top area-->
	<div class="header-top-area d-sm-none d-md-none d-lg-block">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-8">
					<div class="header-top-left-items">
						<div class="header-top-left-single-item">
							<a href="#">
								<div class="header-top-left-icon">
									<span>
										<i class="far fa-envelope"></i>
										hic_bd@yahoo.com
									</span>
								</div>
							</a>
						</div>
						<div class="header-top-left-single-item">
							<a href="#">
								<div class="header-top-left-icon">
									<span>
										<i class="fas fa-phone"></i>
										Dhaka Office: +8801818042291
									</span>
								</div>
							</a>
						</div>
						<div class="header-top-left-single-item">
							<a href="#">
								<div class="header-top-left-icon">
									<span>
										<i class="fas fa-phone"></i>
										Chattogram Office: +8801711781451
									</span>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="header-top-right-items text-right">
						<div class="header-top-right-icon-area">
							<ul>
								<li>
									<a href="https://www.facebook.com/HandICOUNCIL">
										<i class="fab fa-facebook-f"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fab fa-twitter"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fab fa-instagram"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fab fa-dribbble"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- Start itsoft Main Menu Area -->
	<!--==================================================-->
	<div id="sticky-header" class="itsoft_nav_manu d-md-none d-lg-block d-sm-none d-none">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="logo"> 
						<a href="index.html">
							<img style="max-width:60%;height:auto;box-sizing:border-box;margin-top:-15px;" src="{{asset('public/frontend')}}/images/logo.png" alt="logo">
							<img style="max-width:60%;height:auto;box-sizing:border-box;margin-top:-15px;" src="{{asset('public/frontend')}}/images/footer/logo.png" alt="logo">
						</a>
					</div>
				</div>
				<div class="col-md-9">
					<nav class="itsoft_menu">
						<ul class="nav_scroll">
							<li><a href="{{ route('home') }}" class="{{ Route::currentRouteNamed('home') ? 'text-primary' : '' }}">Home</a></li>
                            <li><a href="{{ route('page.about') }}" class="{{ Route::currentRouteNamed('page.about') ? 'text-primary' : '' }}">About Us</a></li>

                            <li><a href="{{route('page.message')}}">Message</a></li>
							<li>
								<a href="#">Services<i class="fas fa-angle-down"></i><span><i class="fas fa-angle-right"></i></span></a>
								<ul class="sub-menu">
									<li><a href="{{route('page.services')}}">Counseling Services</a></li>
									<li><a href="#">Authorized IELTS/TOEFL Registration Agent</a></li>
									<li><a href="#">Admission Services</a></li>
									<li><a href="#">Visa Processing</a></li>
									<li><a href="#">Accommodation Support</a></li>
									<li><a href="#">Pre-Departure Briefing</a></li>
									<li><a href="#">Airport Pickup</a></li>
								</ul>
							</li>

							<li>
								<a href="#">Study Abroad<i class="fas fa-angle-down"></i><span><i class="fas fa-angle-right"></i></span></a>
								<ul class="sub-menu">
									<li><a href="{{route('page.study-abroad')}}">UK</a></li>
									<li><a href="#">Malaysia</a></li>
									<li><a href="#">Canada</a></li>
									<li><a href="#">Australia</a></li>
									<li><a href="#">Germany</a></li>
									<li><a href="#">Dubai</a></li>
									<li><a href="#">Malta</a></li>
									<li><a href="#">New Zealand</a></li>
									<li><a href="#">USA</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Gallery<i class="fas fa-angle-down"></i><span><i class="fas fa-angle-right"></i></span></a>
								<ul class="sub-menu">
									<li><a href="{{route('page.gallery-photo')}}">Photo Gallery</a></li>
									<li><a href="{{route('page.gallery-video')}}">Video Gallery</a></li>
								</ul>
							</li>							
							<li><a href="{{route('page.activities')}}" class="{{ Route::currentRouteNamed('page.activities') ? 'text-primary' : '' }}">Activities</a></li>
							<li><a href="{{route('page.news')}}" class="{{ Route::currentRouteNamed('page.news') ? 'text-primary' : '' }}">Latest News</a></li>
							<li><a href="{{route('page.contact')}}" class="{{ Route::currentRouteNamed('page.contact') ? 'text-primary' : '' }}">Contact</a></li>
						</ul>			
					</nav>
				</div>
			</div>
		</div>
	</div>

	<!-- ITsoft Mobile Menu Area -->
    <div class="mobile-menu-area d-sm-block d-md-block d-lg-none ">
        <div class="mobile-menu">
            <nav class="itsoft_menu">
                <ul class="nav_scroll">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('page.about')}}">About Us</a></li>
                    <li><a href="{{route('page.message')}}">Message</a></li>
                    <li>
                        <a href="#">Services</a>
                        <ul class="sub-menu">
                            <li><a href="#">Counseling Services</a></li>
                            <li><a href="#">Authorized IELTS/TOEFL Registration Agent</a></li>
                            <li><a href="#">Admission Services</a></li>
                            <li><a href="#">Visa Processing</a></li>
                            <li><a href="#">Accommodation Support</a></li>
                            <li><a href="#">Pre-Departure Briefing</a></li>
                            <li><a href="#">Airport Pickup</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">Study Abroad</a>
                        <ul class="sub-menu">
                            <li><a href="#">UK</a></li>
                            <li><a href="#">Malaysia</a></li>
                            <li><a href="#">Canada</a></li>
                            <li><a href="#">Australia</a></li>
                            <li><a href="#">Germany</a></li>
                            <li><a href="#">Dubai</a></li>
                            <li><a href="#">Malta</a></li>
                            <li><a href="#">New Zealand</a></li>
                            <li><a href="#">USA</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Gallery</a>
                        <ul class="sub-menu">
                            <li><a href="{{route('page.gallery-photo')}}">Photo Gallery</a></li>
                            <li><a href="{{route('page.gallery-video')}}">Video Gallery</a></li>
                        </ul>
                    </li>							
                    <li><a href="{{route('page.activities')}}">Activities</a></li>
                    <li><a href="{{route('page.news')}}">Latest News</a></li>
                    <li><a href="{{route('page.contact')}}">Contact</a></li>
                </ul>	
            </nav>
        </div>
    </div>