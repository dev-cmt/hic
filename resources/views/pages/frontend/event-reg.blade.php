<x-frontend-layout :title="'Event Register'">
@if($latestEvent)
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
							<form action="{{ route('event-register.store') }}" method="POST" id="dreamit-form">
								@csrf
								<input type="hidden" name="event_id" value="{{ $latestEvent->id }}">
								<div class="row">
									<!-- Name -->
									<div class="col-lg-12">
										<div class="form_box mb-15">
											<input type="text" name="name" placeholder="Name" class="form-control" required>
										</div>
									</div>

									<!-- Email -->
									<div class="col-lg-12">
										<div class="form_box mb-15">
											<input type="email" name="email" placeholder="Email Address" class="form-control" required>
										</div>
									</div>

									<!-- Phone -->
									<div class="col-lg-12">
										<div class="form_box mb-15">
											<input type="text" name="phone" placeholder="Phone Number" class="form-control" required>
										</div>
									</div>

									<!-- Preferred Location -->
									<div class="col-lg-12">
										<div class="form_box mb-15">
											<select name="location" class="form-control" required>
												<option value="">Preferred Location</option>
												<option value="Dhaka Office">Dhaka Office</option>
												<option value="Chittagong Office">Chittagong Office</option>
											</select>
										</div>
									</div>

									<!-- Preferred Destination -->
									<div class="col-lg-12">
										<div class="form_box mb-15">
											<select name="destination" class="form-control" required>
												<option value="">Your preferred study destination</option>
												<option value="Australia">Australia</option>
												<option value="Canada">Canada</option>
												<option value="Germany">Germany</option>
												<option value="Dubai">Dubai</option>
												<option value="Malaysia">Malaysia</option>
												<option value="Malta">Malta</option>
												<option value="New Zealand">New Zealand</option>
												<option value="UK">UK</option>
												<option value="USA">USA</option>
												<option value="Others">Others</option>
											</select>
										</div>
									</div>

									<!-- Academic Qualification -->
									<div class="col-lg-12">
										<div class="form_box mb-15">
											<select name="qualification" class="form-control" required>
												<option value="">Your Last Academic Qualification?</option>
												<option value="O Level/ SSC">O Level/ SSC</option>
												<option value="A Level/ HSC">A Level/ HSC</option>
												<option value="Bachelor">Bachelor</option>
												<option value="Masters">Masters</option>
												<option value="PhD">PhD</option>
												<option value="Others">Others</option>
											</select>
										</div>
									</div>

									<!-- IELTS/PTE Score -->
									<div class="col-lg-12">
										<div class="form_box mb-15">
											<select name="score" class="form-control" required>
												<option value="">IELTS/PTE Score?</option>
												<option value="9">9</option>
												<option value="8 or 8.5">8 or 8.5</option>
												<option value="7 or 7.5 / 65-79">7 or 7.5 / 65-79</option>
												<option value="6 or 6.5 / 51-64">6 or 6.5 / 51-64</option>
												<option value="5 or 5.5 / 35-50">5 or 5.5 / 35-50</option>
												<option value="No English proficiency">I haven't taken English proficiency yet</option>
												<option value="Others">Others</option>
											</select>
										</div>
									</div>

									<!-- Submit Button -->
									<div class="col-lg-12">
										<div class="quote_btn text-center">
											<button class="btn btn-primary" type="submit">Help me study abroad</button>
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

@else
	<div class="alert alert-warning" role="alert">
		<h1 class="text-center py-5">No latest event found.</h1>
	</div>
@endif
</x-frontend-layout>