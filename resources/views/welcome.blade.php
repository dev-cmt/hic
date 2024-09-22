<x-frontend-layout :title="'Welcome'">
	
	<!--==================================================-->
	<!-----Srart About Section ----->
	<!--=================================================-->
	<div class="appointment-section bg-2 pt-75 pb-75">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-6">
					<div class="appointment-section-thumb">
						<img src="{{asset('public/frontend')}}/images/consult/cnst1.jpg" alt="appointment">
					</div>
				</div>
				<div class="col-sm-12 col-md-6">
					<div class="appointment-content-section pt-40 pb-30 pl-50 pr-50">
						<div class="appointment-content">
							<h3>Request Free Consultation</h3>
							<p class="mt-0 pb-10">Get in touch and discover how we can help. We aim to be in touch for a consultation </p>
						</div>
						<div class="appointment-form-section">
							<form action="https://formspree.io/f/myyleorq" method="POST" id="dreamit-form">
								<div class="row">
									<div class="col-lg-12">
										<div class="form_box mb-30">
											<input type="text" name="name"  placeholder="Name">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form_box mb-30">
											<input type="email" name="email" placeholder="Email Address">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form_box mb-30">
											<input type="number" name="number" placeholder="Mobile Number">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form_box mb-30">
											<textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message"></textarea>
										</div>
										<div class="quote_btn text_center">
											<button class="btn" type="submit">Send Message</button>
										</div>
									</div>
								</div>
							</form>
							<div id="status"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!--==================================================-->
	<!-----Srart Why Choose Section ----->
	<!--=================================================-->
	<div class="services-section style-9 bg-1 pt-75 pb-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-head text-center pb-55">
						<h2>Why Choose <span> H&I Council?</span></h2>
						<span class="section-head-bar-2"></span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-6 col-lg-4">
					<div class="service-single-items d-flex">
						<div class="service-single-icon mr-20">
                            <i class="fas fa-graduation-cap"></i>
						</div>
						<div class="service-content-inner">
							<h2>24+ years experienced</h2>
							<p class="truncate-2-lines">Since 2000 H & I Council has been recruiting students for different Universities.</p>
                            <hr style="margin: 0; padding:0">
                            <div class="btn-read-more mt-2">
                                <a href="{{route('why.choose')}}">Read More <span><i class="fas fa-angle-right"></i></span></a>
                            </div>
                        </div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-4">
					<div class="service-single-items d-flex">
						<div class="service-single-icon mr-20">
							<i class="fas fa-users"></i>
						</div>
						<div class="service-content-inner">
							<h2>3,000+ success students</h2>
							<p class="truncate-2-lines">Helped by H & I Council in securing admissions to leading universities across UK, Australia, Malaysia, New Zealand, Canada and more.</p>
                            <hr style="margin: 0; padding:0">
                            <div class="btn-read-more mt-2">
                                <a href="{{route('why.choose')}}">Read More <span><i class="fas fa-angle-right"></i></span></a>
                            </div>
                        </div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-4">
					<div class="service-single-items d-flex">
						<div class="service-single-icon mr-20">
							<i class="fab fa-gg-circle"></i>
						</div>
						<div class="service-content-inner">
							<h2>9/10</h2>
							<p class="truncate-2-lines">9/10 of our customers said that they would recommend our students placement service to their family and friends.</p>
                            <hr style="margin: 0; padding:0">
                            <div class="btn-read-more mt-2">
                                <a href="{{route('why.choose')}}">Read More <span><i class="fas fa-angle-right"></i></span></a>
                            </div>
                        </div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-4">
					<div class="service-single-items d-flex">
						<div class="service-single-icon mr-20">
							<i class="fas fa-university"></i>
						</div>
						<div class="service-content-inner">
							<h2>Represent over 100 institutions</h2>
							<p class="truncate-2-lines">We are authorized representatives for Over 100 Institutes worldwide.</p>
                            <hr style="margin: 0; padding:0">
                            <div class="btn-read-more mt-2">
                                <a href="{{route('why.choose')}}">Read More <span><i class="fas fa-angle-right"></i></span></a>
                            </div>
                        </div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-4">
					<div class="service-single-items d-flex">
						<div class="service-single-icon mr-20">
							<i class="fas fa-hands-helping"></i>
						</div>
						<div class="service-content-inner">
							<h2>Free services</h2>
							<p class="truncate-2-lines">We have no service charge before or after the visa.</p>
                            <hr style="margin: 0; padding:0">
                            <div class="btn-read-more mt-2">
                                <a href="{{route('why.choose')}}">Read More <span><i class="fas fa-angle-right"></i></span></a>
                            </div>
                        </div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-4">
					<div class="service-single-items d-flex">
						<div class="service-single-icon mr-20">
							<i class="fas fa-headset"></i>
						</div>
						<div class="service-content-inner">
							<h2>Accommodation support</h2>
							<p class="truncate-2-lines">We have partnerships with various accommodation providers, ensuring that housing bookings are available. Moreover, students who apply through us can also purchase plane tickets at a reduced cost</p>
                            <hr style="margin: 0; padding:0">
                            <div class="btn-read-more mt-2">
                                <a href="{{route('why.choose')}}">Read More <span><i class="fas fa-angle-right"></i></span></a>
                            </div>
                        </div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-4">
					<div class="service-single-items d-flex">
						<div class="service-single-icon mr-20">
							<i class="fas fa-user-astronaut"></i>
						</div>
						<div class="service-content-inner">
							<h2>Authorized British Council exam registration agent</h2>
							<p class="truncate-2-lines">As an official British Council exam registration agent, we are authorized to register students for IELTS and TOEFL exams. Additionally, students can enroll in English classes through us to achieve optimal scores.</p>
                            <hr style="margin: 0; padding:0">
                            <div class="btn-read-more mt-2">
                                <a href="{{route('why.choose')}}">Read More <span><i class="fas fa-angle-right"></i></span></a>
                            </div>
                        </div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-4">
					<div class="service-single-items d-flex">
						<div class="service-single-icon mr-20">
							<i class="fas fa-pencil-ruler"></i>
						</div>
						<div class="service-content-inner">
							<h2>International education expert</h2>
							<p class="truncate-2-lines">Our counsellors have received specialized training from the British Council, British High Commission, QEAC Australia, ICEF, MSM, and several universities. We are also proud members of FADCAB and have extensive experience collaborating as approved partners of High Commissions.</p>
                            <hr style="margin: 0; padding:0">
                            <div class="btn-read-more mt-2">
                                <a href="{{route('why.choose')}}">Read More <span><i class="fas fa-angle-right"></i></span></a>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>

    <!--==================================================-->
	<!-----Srart Service Section ----->
	<!--=================================================-->
    <div class="services-section style-3 bg-1 pt-75 pb-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-head text-center pb-35">
						<h3>World best Services </h3>
						<h2>we provide</h2>
						<span class="section-head-bar-2"></span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-6 col-lg-4 pl-0 pr-0">
					<div class="services-single-items">
						<div class="services-single-content">
							<div class="services-single-icon">
								<i class="flaticon-business-and-finance"></i>
							</div>
							<div class="services-content-inner">
								<h2>Counseling Services</h2>
								<p class="truncate-3-lines">We offer expert counseling to help you make informed decisions about your academic future. Our services include providing authentic information on selecting the right course and country that aligns with your educational and career goals.</p>
							</div>
						</div>
						<div class="service-bottom-link">
							<a href="#"><i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-4 pl-0 pr-0">
					<div class="services-single-items">
						<div class="services-single-content">
							<div class="services-single-icon">
								<i class="flaticon-computer"></i>
							</div>
							<div class="services-content-inner">
								<h2>Authorized IELTS/TOEFL Registration Agent</h2>
								<p class="truncate-3-lines">As an authorized agent for IELTS and TOEFL, we facilitate the registration process for these English proficiency tests. We provide assistance with scheduling, preparing for the exams, and ensuring that you meet the requirements for your academic or immigration needs. Additionally, students can enroll in English classes through us to achieve optimal scores.</p>
							</div>
						</div>
						<div class="service-bottom-link">
							<a href="#"><i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-4 pl-0 pr-0">
					<div class="services-single-items">
						<div class="services-single-content">
							<div class="services-single-icon">
								<i class="flaticon-business-and-finance"></i>
							</div>
							<div class="services-content-inner">
								<h2>Admission Services</h2>
								<p class="truncate-3-lines">Our team facilitates a seamless admission process, assisting you with application preparation, submission, and communication with educational institutions. We ensure that you meet all necessary requirements and deadlines for successful admission.</p>
							</div>
						</div>
						<div class="service-bottom-link">
							<a href="#"><i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-4 pl-0 pr-0">
					<div class="services-single-items">
						<div class="services-single-content">
							<div class="services-single-icon">
								<i class="flaticon-resume"></i>
							</div>
							<div class="services-content-inner">
								<h2>Visa Processing</h2>
								<p class="truncate-3-lines">We simplify the visa application process by providing detailed guidance and support. Our services include assistance with preparing and submitting visa applications, ensuring compliance with immigration regulations, and facilitating a smooth approval process.</p>
							</div>
						</div>
						<div class="service-bottom-link">
							<a href="#"><i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-4 pl-0 pr-0">
					<div class="services-single-items">
						<div class="services-single-content">
							<div class="services-single-icon">
								<i class="flaticon-data-2"></i>
							</div>
							<div class="services-content-inner">
								<h2>Accommodation Support</h2>
								<p class="truncate-3-lines">Finding appropriate housing is crucial for a successful study experience. We offer comprehensive support in locating and securing suitable accommodation, whether it be on-campus or private rentals, tailored to your preferences and needs. Moreover, students who apply through us can also purchase plane tickets at a reduced cost</p>
							</div>
						</div>
						<div class="service-bottom-link">
							<a href="#"><i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-4 pl-0 pr-0">
					<div class="services-single-items">
						<div class="services-single-content">
							<div class="services-single-icon">
								<i class="flaticon-resume"></i>
							</div>
							<div class="services-content-inner">
								<h2>Pre-Departure Briefing</h2>
								<p class="truncate-3-lines">Our pre-departure briefing sessions equip you with essential information about your destination, including cultural norms and practical advice. This preparation helps ensure a smooth transition and successful adaptation to your new environment.</p>
							</div>
						</div>
						<div class="service-bottom-link">
							<a href="#"><i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-4 pl-0 pr-0">
					<div class="services-single-items">
						<div class="services-single-content">
							<div class="services-single-icon">
								<i class="flaticon-data"></i>
							</div>
							<div class="services-content-inner">
								<h2>Airport Pickup</h2>
								<p class="truncate-3-lines">Based on student needs, we can coordinate airport pickups in partnership with the relevant universities, ensuring a smooth transition to accommodation upon arrival. Additionally, students applying through us have the advantage of purchasing plane tickets at discounted rates.</p>
							</div>
						</div>
						<div class="service-bottom-link">
							<a href="#"><i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<div class="services-section style-2 bg-3 pt-75 pb-45">
		<div class="container">
			<div class="section-head pb-65">
				<div class="row align-items-center">
					<div class="col-sm-12 col-md-12 col-lg-4">
						<div class="section-title">
							<h3>Study Abroad</h3>
						</div>
					</div>
				
				</div>
			</div>
			<div class="services-content-container">
				<div class="row">
					<div class="col-sm-12 col-md-6 col-lg-4">
						<div class="services-single-item pb-30">
							<div class="services-thumb">
								<img src="{{asset('public/frontend')}}/images/study/uk.png" alt="Services">
								<div class="services-overlay">
									<div class="overlay-content-inner">
										<div class="overlay-icon">
											<i class="flaticon-mail"></i>
										</div>
										<div class="overlay-title">
											<h6>Study in UK</h6>
										</div>
										<p>Nullam tincidunt augue eget densis volu tpat, vitae ultri ces lectus and posuere. Duis urna lacus.</p>
										<div class="btn-common services-overlay-btn">
											<a href="#">Read More <i class="fas fa-angle-right"></i></a>
										</div>
									</div>
								</div>
								<div class="services-bottom-content align-items-center d-flex">
									<div class="services-bottom-icon">
										<i class="flaticon-mail"></i>
									</div>
									<div class="services-bottom-title">
										<h6>UK</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
						<div class="col-sm-12 col-md-6 col-lg-4">
						<div class="services-single-item pb-30">
							<div class="services-thumb">
								<img src="{{asset('public/frontend')}}/images/study/new.jpg" alt="Services">
								<div class="services-overlay">
									<div class="overlay-content-inner">
										<div class="overlay-icon">
											<i class="flaticon-briefcase"></i>
										</div>
										<div class="overlay-title">
											<h6>Study in New Zealand</h6>
										</div>
										<p>Nullam tincidunt augue eget densis volu tpat, vitae ultri ces lectus and posuere. Duis urna lacus.</p>
										<div class="btn-common services-overlay-btn">
											<a href="single-study.html">Read More <i class="fas fa-angle-right"></i></a>
										</div>
									</div>
								</div>
								<div class="services-bottom-content align-items-center d-flex">
									<div class="services-bottom-icon">
										<i class="flaticon-briefcase"></i>
									</div>
									<div class="services-bottom-title">
										<h6>New Zealand</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
						<div class="col-sm-12 col-md-6 col-lg-4">
						<div class="services-single-item pb-30">
							<div class="services-thumb">
								<img src="{{asset('public/frontend')}}/images/study/usa.jpg" alt="Services">
								<div class="services-overlay">
									<div class="overlay-content-inner">
										<div class="overlay-icon">
											<i class="flaticon-briefcase"></i>
										</div>
										<div class="overlay-title">
											<h6>Study in USA</h6>
										</div>
										<p>Nullam tincidunt augue eget densis volu tpat, vitae ultri ces lectus and posuere. Duis urna lacus.</p>
										<div class="btn-common services-overlay-btn">
											<a href="single-study.html">Read More <i class="fas fa-angle-right"></i></a>
										</div>
									</div>
								</div>
								<div class="services-bottom-content align-items-center d-flex">
									<div class="services-bottom-icon">
										<i class="flaticon-briefcase"></i>
									</div>
									<div class="services-bottom-title">
										<h6>USA</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
						<div class="col-sm-12 col-md-6 col-lg-4">
						<div class="services-single-item pb-30">
							<div class="services-thumb">
								<img src="{{asset('public/frontend')}}/images/study/dubai.jpg" alt="Services">
								<div class="services-overlay">
									<div class="overlay-content-inner">
										<div class="overlay-icon">
											<i class="flaticon-briefcase"></i>
										</div>
										<div class="overlay-title">
											<h6>Study in Dubai</h6>
										</div>
										<p>Nullam tincidunt augue eget densis volu tpat, vitae ultri ces lectus and posuere. Duis urna lacus.</p>
										<div class="btn-common services-overlay-btn">
											<a href="single-study.html">Read More <i class="fas fa-angle-right"></i></a>
										</div>
									</div>
								</div>
								<div class="services-bottom-content align-items-center d-flex">
									<div class="services-bottom-icon">
										<i class="flaticon-briefcase"></i>
									</div>
									<div class="services-bottom-title">
										<h6>Dubai</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-4">
						<div class="services-single-item pb-30">
							<div class="services-thumb">
								<img src="{{asset('public/frontend')}}/images/study/malaysian.jpg" alt="Services">
								<div class="services-overlay">
									<div class="overlay-content-inner">
										<div class="overlay-icon">
											<i class="flaticon-content"></i>
										</div>
										<div class="overlay-title">
											<h6>Study in Malaysia</h6>
										</div>
										<p>Nullam tincidunt augue eget densis volu tpat, vitae ultri ces lectus and posuere. Duis urna lacus.</p>
										<div class="btn-common services-overlay-btn">
											<a href="#">Read More <i class="fas fa-angle-right"></i></a>
										</div>
									</div>
								</div>
								<div class="services-bottom-content align-items-center d-flex">
									<div class="services-bottom-icon">
										<i class="flaticon-content"></i>
									</div>
									<div class="services-bottom-title">
										<h6>Malaysia</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
			<div class="col-sm-12 col-md-6 col-lg-4">
						<div class="services-single-item pb-30">
							<div class="services-thumb">
								<img src="{{asset('public/frontend')}}/images/study/canada.jpg" alt="Services">
								<div class="services-overlay">
									<div class="overlay-content-inner">
										<div class="overlay-icon">
											<i class="flaticon-briefcase"></i>
										</div>
										<div class="overlay-title">
											<h6>Study in Canada</h6>
										</div>
										<p>Nullam tincidunt augue eget densis volu tpat, vitae ultri ces lectus and posuere. Duis urna lacus.</p>
										<div class="btn-common services-overlay-btn">
											<a href="single-study.html">Read More <i class="fas fa-angle-right"></i></a>
										</div>
									</div>
								</div>
								<div class="services-bottom-content align-items-center d-flex">
									<div class="services-bottom-icon">
										<i class="flaticon-briefcase"></i>
									</div>
									<div class="services-bottom-title">
										<h6>Canada</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-4">
						<div class="services-single-item pb-30">
							<div class="services-thumb">
								<img src="{{asset('public/frontend')}}/images/study/australian.jpg" alt="Services">
								<div class="services-overlay">
									<div class="overlay-content-inner">
										<div class="overlay-icon">
											<i class="flaticon-briefcase"></i>
										</div>
										<div class="overlay-title">
											<h6>Study in Australia</h6>
										</div>
										<p>Nullam tincidunt augue eget densis volu tpat, vitae ultri ces lectus and posuere. Duis urna lacus.</p>
										<div class="btn-common services-overlay-btn">
											<a href="single-study.html">Read More <i class="fas fa-angle-right"></i></a>
										</div>
									</div>
								</div>
								<div class="services-bottom-content align-items-center d-flex">
									<div class="services-bottom-icon">
										<i class="flaticon-briefcase"></i>
									</div>
									<div class="services-bottom-title">
										<h6>Australia</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-4">
						<div class="services-single-item pb-30">
							<div class="services-thumb">
								<img src="{{asset('public/frontend')}}/images/study/malta.jpg" alt="Services">
								<div class="services-overlay">
									<div class="overlay-content-inner">
										<div class="overlay-icon">
											<i class="flaticon-briefcase"></i>
										</div>
										<div class="overlay-title">
											<h6>Study in Malta</h6>
										</div>
										<p>Nullam tincidunt augue eget densis volu tpat, vitae ultri ces lectus and posuere. Duis urna lacus.</p>
										<div class="btn-common services-overlay-btn">
											<a href="single-study.html">Read More <i class="fas fa-angle-right"></i></a>
										</div>
									</div>
								</div>
								<div class="services-bottom-content align-items-center d-flex">
									<div class="services-bottom-icon">
										<i class="flaticon-briefcase"></i>
									</div>
									<div class="services-bottom-title">
										<h6>Malta</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-4">
						<div class="services-single-item pb-30">
							<div class="services-thumb">
								<img src="{{asset('public/frontend')}}/images/study/germany.jpg" alt="Services">
								<div class="services-overlay">
									<div class="overlay-content-inner">
										<div class="overlay-icon">
											<i class="flaticon-briefcase"></i>
										</div>
										<div class="overlay-title">
											<h6>Study in Germany</h6>
										</div>
										<p>Nullam tincidunt augue eget densis volu tpat, vitae ultri ces lectus and posuere. Duis urna lacus.</p>
										<div class="btn-common services-overlay-btn">
											<a href="single-study.html">Read More <i class="fas fa-angle-right"></i></a>
										</div>
									</div>
								</div>
								<div class="services-bottom-content align-items-center d-flex">
									<div class="services-bottom-icon">
										<i class="flaticon-briefcase"></i>
									</div>
									<div class="services-bottom-title">
										<h6>Germany</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<div class="about-section pt-80 pb-80">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-sm-12 col-md-6">
					<div class="about-thumb-section">
						<div class="about-single-thumb">
							<img src="{{asset('public/frontend')}}/images/about/ab1.jpg" alt="about-img">
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6">
					<div class="about-content-container pl-30">
						<div class="section-head-container">
							<div class="section-head">
								<h3>Message from the CEO</h3>
								<span class="section-head-bar"></span>
								<p>What makes us different, makes us better.<br>Dear Students,
								<br><br>
								Studying abroad is a unique opportunity to experience a new culture, and the most important part of any culture is its people. By immersing yourself in a multicultural environment, you can learn a great deal and grow both personally and professionally.
								<br><br>
								However, studying abroad is more than just visiting a foreign country. It is a life-changing investment. To make the right decision, you need to understand various factors such as the country, visa process, benefits, university recognition, and the future prospects of your chosen course. It can seem overwhelming, but don’t worry—you’re in the right place.</p>
							
							</div>
						</div>
						<div class="btn-common btn-cda mt-40">
					<a href="message.html">Read More</a>
				</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!----START WHY CHOOSE US Section ----->
	<!--===================================================-->
	<div class="services-section pt-70 pb-80">
		<div class="container">
			<div class="section-head pb-65">
				<div class="row align-items-center">
					<div class="col-sm-12 col-md-12 col-lg-4">
						<div class="section-title">
							<h3>Upcoming Events</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="owl-carousel service-carousel">
					<div class="services-carousel-single-item ml-15 mr-15">
						<div class="services-carousel-thumb">
							<img src="{{asset('public/frontend')}}/images/services/svs1.jpg" alt="carousel-img">
						</div>
						<div class="services-carousel-icon">
							<i class="flaticon-briefcase"></i>
						</div>
						<div class="services-content-section">
							<div class="services-content-title">
								<h2>Product Design</h2>
							</div>
							<div class="services-content">
								<p>Nullam tincidunt augue eget densis volu tpat, vitae ultri ces lectus and posuere. Duis urna lacus.</p>
							</div>
							<div class="services-content-btn">
								<a href="#">	Read More
									<i class="fas fa-angle-right"></i>
									<span><i class="fas fa-long-arrow-alt-right"></i></span>
								</a>
							</div>
						</div>
					</div>
					<div class="services-carousel-single-item ml-15 mr-15">
						<div class="services-carousel-thumb">
							<img src="{{asset('public/frontend')}}/images/services/svs2.jpg" alt="carousel-img">
						</div>
						<div class="services-carousel-icon">
							<i class="flaticon-mail"></i>
						</div>
						<div class="services-content-section">
							<div class="services-content-title">
								<h2>Cloud Services</h2>
							</div>
							<div class="services-content">
								<p>Nullam tincidunt augue eget densis volu tpat, vitae ultri ces lectus and posuere. Duis urna lacus.</p>
							</div>
							<div class="services-content-btn">
								<a href="#">	Read More
									<i class="fas fa-angle-right"></i>
									<span><i class="fas fa-long-arrow-alt-right"></i></span>
								</a>
							</div>
						</div>
					</div>
					<div class="services-carousel-single-item ml-15 mr-15">
						<div class="services-carousel-thumb">
							<img src="{{asset('public/frontend')}}/images/services/svs3.jpg" alt="carousel-img">
						</div>
						<div class="services-carousel-icon">
							<i class="flaticon-system"></i>
						</div>
						<div class="services-content-section">
							<div class="services-content-title">
								<h2>Cloud Computing</h2>
							</div>
							<div class="services-content">
								<p>Nullam tincidunt augue eget densis volu tpat, vitae ultri ces lectus and posuere. Duis urna lacus.</p>
							</div>
							<div class="services-content-btn">
								<a href="#">	Read More
									<i class="fas fa-angle-right"></i>
									<span><i class="fas fa-long-arrow-alt-right"></i></span>
								</a>
							</div>
						</div>
					</div>
					<div class="services-carousel-single-item ml-15 mr-15">
						<div class="services-carousel-thumb">
							<img src="{{asset('public/frontend')}}/images/services/svs4.jpg" alt="carousel-img">
						</div>
						<div class="services-carousel-icon">
							<i class="flaticon-business-and-finance"></i>
						</div>
						<div class="services-content-section">
							<div class="services-content-title">
								<h2>IT Consultancy</h2>
							</div>
							<div class="services-content">
								<p>Nullam tincidunt augue eget densis volu tpat, vitae ultri ces lectus and posuere. Duis urna lacus.</p>
							</div>
							<div class="services-content-btn">
								<a href="#">	Read More
									<i class="fas fa-angle-right"></i>
									<span><i class="fas fa-long-arrow-alt-right"></i></span>
								</a>
							</div>
						</div>
					</div>
					<div class="services-carousel-single-item ml-15 mr-15">
						<div class="services-carousel-thumb">
							<img src="{{asset('public/frontend')}}/images/services/svs5.jpg" alt="carousel-img">
						</div>
						<div class="services-carousel-icon">
							<i class="flaticon-computer"></i>
						</div>
						<div class="services-content-section">
							<div class="services-content-title">
								<h2>IT Management</h2>
							</div>
							<div class="services-content">
								<p>Nullam tincidunt augue eget densis volu tpat, vitae ultri ces lectus and posuere. Duis urna lacus.</p>
							</div>
							<div class="services-content-btn">
								<a href="#">	Read More
									<i class="fas fa-angle-right"></i>
									<span><i class="fas fa-long-arrow-alt-right"></i></span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--==================================================-->
	<!----START Univercity Logo Section ----->
	<!--===================================================-->
	<div class="brand-section pt-40 pb-30">
		<div class="container">
			<div class="row hr">
				<div class="col-lg-12">
					<div class="section-head text-center pb-55">
						<h2>World Ranking<span> Universities: </span></h2>
						<span class="section-head-bar-2"></span>
					</div>
				</div>
				<div class="brand-carousel owl-carousel">
					<div class="single-brand">
						<img src="{{asset('public/frontend')}}/images/brand/uk/uk_01.jpg" alt="Brand">
					</div>
					<div class="single-brand">
						<img src="{{asset('public/frontend')}}/images/brand/uk/uk_02.jpg" alt="Brand">
					</div>
					<div class="single-brand">
						<img src="{{asset('public/frontend')}}/images/brand/uk/uk_03.jpg" alt="Brand">
					</div>
					<div class="single-brand">
						<img src="{{asset('public/frontend')}}/images/brand/uk/uk_04.jpg" alt="Brand">
					</div>
					<div class="single-brand">
						<img src="{{asset('public/frontend')}}/images/brand/uk/uk_05.jpg" alt="Brand">
					</div>
					<div class="single-brand">
						<img src="{{asset('public/frontend')}}/images/brand/australia/aus_01.jpg" alt="Brand">
					</div>
					<div class="single-brand">
						<img src="{{asset('public/frontend')}}/images/brand/australia/aus_02.jpg" alt="Brand">
					</div>
					<div class="single-brand">
						<img src="{{asset('public/frontend')}}/images/brand/australia/aus_03.jpg" alt="Brand">
					</div>
					<div class="single-brand">
						<img src="{{asset('public/frontend')}}/images/brand/australia/aus_04.jpg" alt="Brand">
					</div>
					<div class="single-brand">
						<img src="{{asset('public/frontend')}}/images/brand/australia/aus_05.jpg" alt="Brand">
					</div>
					<div class="single-brand">
						<img src="{{asset('public/frontend')}}/images/brand/australia/aus_06.jpg" alt="Brand">
					</div>
						<div class="single-brand">
						<img src="{{asset('public/frontend')}}/images/brand/canada/ca_01.jpg" alt="Brand">
					</div>
					<div class="single-brand">
						<img src="{{asset('public/frontend')}}/images/brand/canada/ca_02.jpg" alt="Brand">
					</div>
					<div class="single-brand">
						<img src="{{asset('public/frontend')}}/images/brand/canada/ca_03.jpg" alt="Brand">
					</div>
					<div class="single-brand">
						<img src="{{asset('public/frontend')}}/images/brand/canada/ca_04.jpg" alt="Brand">
					</div>
					<div class="single-brand">
						<img src="{{asset('public/frontend')}}/images/brand/canada/ca_05.jpg" alt="Brand">
					</div>
					<div class="single-brand">
						<img src="{{asset('public/frontend')}}/images/brand/malaysia/ma_01.jpg" alt="Brand">
					</div>
						<div class="single-brand">
						<img src="{{asset('public/frontend')}}/images/brand/malaysia/ma_02.jpg" alt="Brand">
					</div>
						<div class="single-brand">
						<img src="{{asset('public/frontend')}}/images/brand/malaysia/ma_03.jpg" alt="Brand">
					</div>
						<div class="single-brand">
						<img src="{{asset('public/frontend')}}/images/brand/malaysia/ma_04.jpg" alt="Brand">
					</div>
						<div class="single-brand">
						<img src="{{asset('public/frontend')}}/images/brand/malaysia/ma_05.jpg" alt="Brand">
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--==================================================-->
	<!----START CALL-DO-ACTION Section ----->
	<!--===================================================-->
	<div class="call-do-action-section pt-90 pb-220">
		<div class="container">
			<div class="call-do-action-video text-center mb-35">
				<div class="video-icon video-icon-cda">
					<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="https://youtu.be/BS4TUd7FJSg"><i class="fas fa-play-circle"></i></a>
				</div>
			</div>
			<div class="call-do-action-content text-center">
				<h2 class="text-white">We Deliver Solution With The Goal Of <br><span class="sub-title"> A Trusting Relationships</span></h2>
				<p class="text-white">Appropriate for your specific business, making it easy for you to have quality IT services.</p>
				<div class="btn-common btn-cda mt-40">
					<a href="#">Watch More</a>
				</div>
			</div>
		</div>
	</div>

	<!--==================================================-->
	<!----START Testimon Section ----->
	<!--===================================================-->
	<div class="testimonial-section">
		<div class="container">
			<div class="owl-carousel testimonial-carousel">
				<div class="testimonial-single-item">
					<div class="testimonial-thumb">
						<img src="{{asset('public/frontend')}}/images/testimonial/tstm1.jpg" alt="testimonial Img">
						<div class="testimonial-icon">
							<span><i class="fas fa-quote-left"></i></span>
						</div>
					</div>
					<div class="testimonial-content">
						<p class="testimonial-content-text">Sorem ipsum dolor sit amet there any consectetur adipisicing eliter sed do the eiusmod tempor asem incididunt ut labore dolore magna aliqua. Ut enim adern minim.</p>
						<h4>John Abraham</h4>
						<p class="testimonial-designation">Web developer</p>
					</div>
				</div>
				<div class="testimonial-single-item">
					<div class="testimonial-thumb">
						<img src="{{asset('public/frontend')}}/images/testimonial/tstm2.jpg" alt="testimonial Img">
						<div class="testimonial-icon">
							<span><i class="fas fa-quote-left"></i></span>
						</div>
					</div>
					<div class="testimonial-content">
						<p class="testimonial-content-text">Sorem ipsum dolor sit amet there any consectetur adipisicing eliter sed do the eiusmod tempor asem incididunt ut labore dolore magna aliqua. Ut enim adern minim.</p>
						<h4>Ellen Erye </h4>
						<p class="testimonial-designation">Project Manager</p>
					</div>
				</div>
				<div class="testimonial-single-item">
					<div class="testimonial-thumb">
						<img src="{{asset('public/frontend')}}/images/testimonial/tstm3.jpg" alt="testimonial Img">
						<div class="testimonial-icon">
							<span><i class="fas fa-quote-left"></i></span>
						</div>
					</div>
					<div class="testimonial-content">
						<p class="testimonial-content-text">Sorem ipsum dolor sit amet there any consectetur adipisicing eliter sed do the eiusmod tempor asem incididunt ut labore dolore magna aliqua. Ut enim adern minim.</p>
						<h4>Shene Watsan </h4>
						<p class="testimonial-designation">Founder</p>
					</div>
				</div>
				<div class="testimonial-single-item">
					<div class="testimonial-thumb">
						<img src="{{asset('public/frontend')}}/images/testimonial/tstm2.jpg" alt="testimonial Img">
						<div class="testimonial-icon">
							<span><i class="fas fa-quote-left"></i></span>
						</div>
					</div>
					<div class="testimonial-content">
						<p class="testimonial-content-text">Sorem ipsum dolor sit amet there any consectetur adipisicing eliter sed do the eiusmod tempor asem incididunt ut labore dolore magna aliqua. Ut enim adern minim.</p>
						<h4>Monalysha</h4>
						<p class="testimonial-designation">CEO</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--==================================================-->
	<!----START BLOG  Section ----->
	<!--===================================================-->
	<div class="blog-section pt-70 pb-70">
		<div class="container">
			<div class="section-head text-center mb-85">
				<h5>// Our Blogs</h5>
				<h2 class="text-white"> Resources & Latest <span> News  </span></h2>
				<span class="section-head-bar-2"></span>
			</div>
			<div class="owl-carousel blog-carousel">
				<div class="blog-single-carousel">
					<div class="blog-thumb">
						<a href="#">
							<img src="{{asset('public/frontend')}}/images/blog/bg1.jpg" alt="Blog img">
						</a>
						<div class="blog-meta-top">
							<ul>
								<li><a href="#">Graphics</a></li>
								<li><a href="#">Technology</a></li>
							</ul>
						</div>
					</div>
					<div class="blog-content">
						<div class="blog-meta">
							<span><a href="#">Itsoft</a></span> - <span>January 01, 2024</span>
						</div>
						<h5><a href="single-blog.html">Plan Your Project with Your Software</a></h5>
						<p>Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache. </p>
						<div class="blog-learn-more">
							<a href="single-blog.html">
								Read More
								<i class="fas fa-angle-right"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="blog-single-carousel">
					<div class="blog-thumb">
						<a href="#">
							<img src="{{asset('public/frontend')}}/images/blog/bg2.jpg" alt="Blog img">
						</a>
						<div class="blog-meta-top">
							<ul>
								<li><a href="#">Tips</a></li>
							</ul>
						</div>
					</div>
					<div class="blog-content">
						<div class="blog-meta">
							<span><a href="#">Itsoft</a></span> - <span>January 01, 2024</span>
						</div>
						<h5><a href="single-blog.html">You have a Great Business Idea?</a></h5>
						<p>Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache. </p>
						<div class="blog-learn-more">
							<a href="single-blog.html">
								Read More
								<i class="fas fa-angle-right"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="blog-single-carousel">
					<div class="blog-thumb">
						<a href="#">
							<img src="{{asset('public/frontend')}}/images/blog/bg3.jpg" alt="Blog img">
						</a>
						<div class="blog-meta-top">
							<ul>
								<li><a href="#">Development</a></li>
							</ul>
						</div>
					</div>
					<div class="blog-content">
						<div class="blog-meta">
							<span><a href="#">Itsoft</a></span> - <span>January 01, 2024</span>
						</div>
						<h5><a href="single-blog.html">How to Make Website WCAG Compliant?</a></h5>
						<p>Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache. </p>
						<div class="blog-learn-more">
							<a href="single-blog.html">
								Read More
								<i class="fas fa-angle-right"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="blog-single-carousel">
					<div class="blog-thumb">
						<a href="#">
							<img src="{{asset('public/frontend')}}/images/blog/bg4.jpg" alt="Blog img">
						</a>
						<div class="blog-meta-top">
							<ul>
								<li><a href="#">Design</a></li>
								<li><a href="#">Technology</a></li>
							</ul>
						</div>
					</div>
					<div class="blog-content">
						<div class="blog-meta">
							<span><a href="#">Itsoft</a></span> - <span>January 01, 2024</span>
						</div>
						<h5><a href="single-blog.html">The Future of Enterprise API Development</a></h5>
						<p>Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache. </p>
						<div class="blog-learn-more">
							<a href="single-blog.html">
								Read More
								<i class="fas fa-angle-right"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="blog-single-carousel">
					<div class="blog-thumb">
						<a href="#">
							<img src="{{asset('public/frontend')}}/images/blog/bg5.jpg" alt="Blog img">
						</a>
						<div class="blog-meta-top">
							<ul>
								<li><a href="#">Graphics</a></li>
							</ul>
						</div>
					</div>
					<div class="blog-content">
						<div class="blog-meta">
							<span><a href="#">Itsoft</a></span> - <span>January 01, 2024</span>
						</div>
						<h5><a href="single-blog.html">How To Make Your iOS 13 Compatible?</a></h5>
						<p>Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache. </p>
						<div class="blog-learn-more">
							<a href="single-blog.html">
								Read More
								<i class="fas fa-angle-right"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="blog-single-carousel">
					<div class="blog-thumb">
						<a href="#">
							<img src="{{asset('public/frontend')}}/images/blog/bg6.jpg" alt="Blog img">
						</a>
						<div class="blog-meta-top">
							<ul>
								<li><a href="#">Tips</a></li>
							</ul>
						</div>
					</div>
					<div class="blog-content">
						<div class="blog-meta">
							<span><a href="#">Itsoft</a></span> - <span>January 01, 2024</span>
						</div>
						<h5><a href="single-blog.html">The Next Big Challenge for Content Marketer</a></h5>
						<p>Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache. </p>
						<div class="blog-learn-more">
							<a href="single-blog.html">
								Read More
								<i class="fas fa-angle-right"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="blog-single-carousel">
					<div class="blog-thumb">
						<a href="#">
							<img src="{{asset('public/frontend')}}/images/blog/bg1.jpg" alt="Blog img">
						</a>
						<div class="blog-meta-top">
							<ul>
								<li><a href="#">Design</a></li>
							</ul>
						</div>
					</div>
					<div class="blog-content">
						<div class="blog-meta">
							<span><a href="#">Itsoft</a></span> - <span>January 01, 2024</span>
						</div>
						<h5><a href="single-blog.html">Tackling the Changes of Retail Industry</a></h5>
						<p>Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache. </p>
						<div class="blog-learn-more">
							<a href="single-blog.html">
								Read More
								<i class="fas fa-angle-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--==================================================-->
	<!-----STSRT SUSCRIBE  Section ----->
	<!--===================================================-->
	<div class="subscribe-section">
		<div class="container">
			<div class="row footer-hr">
				<div class="col-md-6">
					<div class="subscribe-section-content d-flex">
						<div class="subscribe-section-icon">
							<i class="flaticon-time"></i>
						</div>
						<div class="subscribe-section-title">
							<h5>Sign up to get latest updates</h5>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="subscribe-input-field">
						<form action="https://html.ditsolution.net/itsoft/POST">
							<div class="subscribe-mail-box">
								<input class="subscribe-mail-box" type="email" name="email" placeholder="Enter Your Email...." required>
								<button class="subscribe-submit-btn" type="submit" name="submit">Subscribe</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
    
</x-frontend-layout>
