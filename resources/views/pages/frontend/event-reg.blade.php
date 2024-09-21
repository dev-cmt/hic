<x-frontend-layout :title="'Event Register'">
    <!--==================================================-->
	<!-----Start Header Slider Section----->
	<!--===================================================-->
	<div class="hero-section style-eight align-items-center d-flex" style="background: url({{asset('public/frontend')}}/images/hero/slider-bg.jpg) no-repeat center / cover;">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-6">
					<div class="hero-content-area">
						<div class="hero-content">
							<h4>Welcome to H & I Council</h4>
							<h1 class="text-white">Knowledge is Power, </h1>
							<h2 class="text-white">for your success</h2>
							<p class="text-white">Embrace Education</p>
							<div class="rs-video">
								<div class="animate-border">
									<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="https://youtu.be/BS4TUd7FJSg">
										<i class="fas fa-play-circle"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-5 col-md-6">
					<div class="appointment-content-section pt-40 pb-35 pl-50 pr-50">
						<div class="appointment-content">
							<h3>Register for events below</h3>
						</div>
						<div class="appointment-form-section">
							<form action="#" method="POST" id="dreamit-form">
								<div class="row">
									<div class="col-lg-12">
										<div class="form_box mb-15">
											<input type="text" name="name"  placeholder="Name">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form_box mb-15">
											<input type="email" name="email" placeholder="Email Address">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form_box mb-15">
											<input type="phone" name="phone" placeholder="Phone Number">
										</div>
									</div>
									<div class="col-lg-12">
										<select class="Your Inquiry About form-box-input">
											<option>Preferred Location</option>
											<option>Dhaka Office</option>
											<option>Chittagong Office</option>
										</select>
									</div>
									<div class="col-lg-12">
										<select class="Your Inquiry About form-box-input">
											<option>Your preferred study destination</option>
											<option>Australia</option>
											<option>Canada</option>
											<option>Germany</option>
											<option>Dubai</option>
											<option> Malaysia</option>
											<option> Mailta</option>
											<option> New Zealand</option>
											<option>UK</option>
											<option> USA</option>
											<option> Others</option>											
										</select>
									</div>
										<div class="col-lg-12">
										<select class="Your Inquiry About form-box-input">
											<option>Your Last Academic Qualification?</option>
											<option>O Level/ SSC</option>
											<option>A Level/ HSC</option>
											<option>Bachelor</option>
											<option> Masters</option>
											<option> PHD</option>
											<option> Others</option>											
										</select>
									</div>
										<div class="col-lg-12">
										<select class="Your Inquiry About form-box-input">
											<option>IELTS/PTE Score?</option>
											<option>9</option>
											<option>8 or 8.5</option>
											<option>7 or 7.5 / 65-79</option>
											<option> 6 or 6.5 / 51-64</option>
											<option> 5 or 5.5 / 35-50</option>
											<option> I haven't taken English proficiency yet.</option>			
											<option> Others</option>								
										</select>
									</div>
									
									<div class="col-lg-12">
										<div class="quote_btn text_center">
											<button class="btn" type="submit">Help me study abroad</button>
										</div>
									</div>
								</div>
							</form>
							<p class="form-message"></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</x-frontend-layout>