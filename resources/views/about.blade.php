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
				<p>I'm a Full-Stack Web Developer specialised in PHP, Laravel Framework, RESTful API, Javascript, CSS/SCSS, HTML, Vuejs and other skill sets. Hard Working individual and possessing a strong willingness to learn.</p>
				
				<div class="about-info-button">
					<button class="portfolio-button" type="button" class="btn btn-danger">View Portfolio</button>
					<button class="resume-button" type="button">Download Resume</button>
				</div>
			</div>
		</div>

		<hr>
		
		<div class="container about-skills" >
			<h2>Skills</h2>
			
			<div class="skills-container">
				<img class="skills-item" src="{{ asset('assets/images/laravel.png') }}">
				<img class="skills-item" src="{{ asset('assets/images/wordpress.png') }}">
				<img class="skills-item" src="{{ asset('assets/images/vue.png') }}">
				<img class="skills-item" src="{{ asset('assets/images/restapi.png') }}">
				<img class="skills-item" src="{{ asset('assets/images/css_html_js.png') }}">
				<img class="skills-item" src="{{ asset('assets/images/sass.png') }}">
				<img class="skills-item" src="{{ asset('assets/images/npm.png') }}">
				<img class="skills-item" src="{{ asset('assets/images/yarn.png') }}">
				<img class="skills-item" src="{{ asset('assets/images/devc.png') }}">
				<img class="skills-item" src="{{ asset('assets/images/php.png') }}">
				<img class="skills-item" src="{{ asset('assets/images/vbnet.png') }}">
				<img class="skills-item" src="{{ asset('assets/images/mysql.png') }}">
			</div>

		</div>

	</div>


@endsection


@section('js')
@endsection



