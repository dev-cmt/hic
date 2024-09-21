<x-frontend-layout :title="'Gallery Photo'">
    <!--==================================================-->
	<!----START PORTFOLIO Section ----->
	<!--===================================================-->
	<div class="portfolio-section style-2 pt-95 pb-85" style="background: #fff;">
		<div class="container">
			<div class="section-head text-center pb-55">
				<h5>Our Photo Gallery</h5>
				<h2>Photo Gallery</h2>
				<span class="section-head-bar-2"></span>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="portfolio_nav">
						<div class="portfolio_menu">
							<ul class="menu-filtering">
								<li class="current_menu_item" data-filter="*">All Works </li>
								<li data-filter=".branding" >Branding</li>
								<li data-filter=".design" >Design</li>
								<li data-filter=".development" >Development</li>
								<li data-filter=".graphics">Graphice </li>
								<li data-filter=".portfolio">Portfolio </li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row image_load">
				<div class="col-lg-4 col-md-6 col-sm-12 p-0 grid-item design cemes">
					<div class="single_portfolio">
						<div class="portfolio-thumb">
							<img src="{{asset('public/frontend')}}/images/portfolio/pf1.jpg" alt="Portfolio">
							<div class="portfolio-icon" >
								<div class="port-icon">
									<span uk-lightbox><a  href="{{asset('public/frontend')}}/images/portfolio/pf1.jpg" ><i class="fas fa-image"></i></a></span>
									<a href="project-details.html"><i class="fas fa-link"></i></a>
								</div>
							</div>
							<div class="portfolio-content">
								<h5><a href="case-study-details.html">UX/UI Design</a></h5>
								<p>Design</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 p-0 grid-item portfolio cemes">
					<div class="single_portfolio">
						<div class="portfolio-thumb">
							<img src="{{asset('public/frontend')}}/images/portfolio/pf2.jpg" alt="Portfolio">
							<div class="portfolio-icon" >
								<div class="port-icon">
									<span uk-lightbox><a  href="{{asset('public/frontend')}}/images/portfolio/pf2.jpg" ><i class="fas fa-image"></i></a></span>
									<a href="project-details.html"><i class="fas fa-link"></i></a>
								</div>
							</div>
							<div class="portfolio-content">
								<h5><a href="case-study-details.html">Project Analicys</a></h5>
								<p>portfolio</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 p-0 grid-item  development  cemes">
					<div class="single_portfolio">
						<div class="portfolio-thumb">
							<img src="{{asset('public/frontend')}}/images/portfolio/pf3.jpg" alt="Portfolio">
							<div class="portfolio-icon" >
								<div class="port-icon">
									<span uk-lightbox><a  href="{{asset('public/frontend')}}/images/portfolio/pf3.jpg" ><i class="fas fa-image"></i></a></span>
									<a href="project-details.html"><i class="fas fa-link"></i></a>
								</div>
							</div>
							<div class="portfolio-content">
								<h5><a href="case-study-details.html">Network Management</a></h5>
								<p>Development</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 p-0 grid-item  development  cemes">
					<div class="single_portfolio">
						<div class="portfolio-thumb">
							<img src="{{asset('public/frontend')}}/images/portfolio/pf4.jpg" alt="Portfolio">
							<div class="portfolio-icon" >
								<div class="port-icon">
									<span uk-lightbox><a  href="{{asset('public/frontend')}}/images/portfolio/pf4.jpg" ><i class="fas fa-image"></i></a></span>
									<a href="project-details.html"><i class="fas fa-link"></i></a>
								</div>
							</div>
							<div class="portfolio-content">
								<h5><a href="case-study-details.html">IT Solution</a></h5>
								<p>Development</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 p-0 grid-item  branding  cemes">
					<div class="single_portfolio">
						<div class="portfolio-thumb">
							<img src="{{asset('public/frontend')}}/images/portfolio/pf5.jpg" alt="Portfolio">
							<div class="portfolio-icon" >
								<div class="port-icon">
									<span uk-lightbox><a  href="{{asset('public/frontend')}}/images/portfolio/pf5.jpg" ><i class="fas fa-image"></i></a></span>
									<a href="project-details.html"><i class="fas fa-link"></i></a>
								</div>
							</div>
							<div class="portfolio-content">
								<h5><a href="case-study-details.html">Corporate Branding</a></h5>
								<p>Branding</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 p-0 grid-item  portfolio  cemes">
					<div class="single_portfolio">
						<div class="portfolio-thumb">
							<img src="{{asset('public/frontend')}}/images/portfolio/pf6.jpg" alt="Portfolio">
							<div class="portfolio-icon" >
								<div class="port-icon">
									<span uk-lightbox><a  href="{{asset('public/frontend')}}/images/portfolio/pf6.jpg" ><i class="fas fa-image"></i></a></span>
									<a href="project-details.html"><i class="fas fa-link"></i></a>
								</div>
							</div>
							<div class="portfolio-content">
								<h5><a href="case-study-details.html"> Portfolio Branding</a></h5>
								<p>Portfolio</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</x-frontend-layout>