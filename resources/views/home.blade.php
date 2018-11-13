@extends('layouts.app')

@section('content')

	<section id="home">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-2 col-md-8">
					<h1 class="wow fadeIn" data-wow-offset="50" data-wow-delay="0.9s"> At Scoolnetwork, we build and develop <span> awesomely... </span> </h1>
					<div class="element">
						<div class="sub-element"> Hello, sure you are good. </div>
						<div class="sub-element"> With a motivation full of compassion, we make all solutions with  with <span> good intension </span> and <span> lots of <i class="fa fa-heart neart"></i> . </span></div>
						<div class="sub-element"> Contact us to help you with a solution made just for you. </div>
						<div class="sub-element"> Innovation and collaboration is our way... </div>
					</div>
					<a data-scroll href="#about" class="btn btn-default wow fadeInUp" data-wow-offset="50" data-wow-delay="0.6s">GET STARTED</a>
				</div>
			</div>
		</div>
	</section>

	@include('inc.about')

	@include('inc.team')

	@include('inc.services')

	@include('inc.projects')

	@include('inc.technologies')

	@include('inc.contact')

	@include('inc.footer')


@endsection