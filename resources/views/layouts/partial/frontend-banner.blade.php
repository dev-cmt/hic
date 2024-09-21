@if (Request::is('event-reg'))
    
@else
    <!--==================================================-->
	<!-----Start Header Slider Section ----->
	<!--===================================================-->
    <div class="breadcumb-area" style="background: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0,0,0,0.5)), url('{{ asset('public/frontend/images/about/iab1.jpg') }}') no-repeat center/cover;">
		<div class="container">
			<div class="row">
				<div class="breadcumb-content">
					<h1>{{ $title }}</h1>
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><i class="fa fa-angle-right"></i></li>
						<li>{{ $title }}</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
@endif