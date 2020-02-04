@extends('layouts.default')

@section('css')
    <link rel="stylesheet" href="{{ asset(mix('/css/about.css')) }}">
@endsection


@section('main')
	<div class="about">
		<div class="container">
			<h1>Kylyn Angel M. Luterte</h1>
			<h3>Full Stack Web Developer</h3>
			
			<div class="about-info">
				<p>I'm a Full-Stack Web Developer specialised in PHP, Laravel Framework RESTful API, Javascript, CSS/SCSS, HTML, Vuejs and other skill sets. Hard Working individual and possessing a strong willingness to learn.</p>
				
				<div class="about-info-button">
					<button class="portfolio-button" type="button" class="btn btn-danger">View Portfolio</button>
					<button class="resume-button" type="button">Download Resume</button>
				</div>
			</div>
		</div>

		<hr>
		    <div class="c100 p30 small dark">
	            <span>30%</span>
	            <div class="slice">
	                <div class="bar"></div>
	                <div class="fill"></div>
	            </div>
	        </div>


	</div>


@endsection


@section('js')
@endsection



