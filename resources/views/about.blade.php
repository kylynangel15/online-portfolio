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
				<div class="skills-item">
					<img src="{{ asset('assets/images/laravel.png') }}">
					<p>Laravel</p>
				</div>
				<div class="skills-item">
					<img src="{{ asset('assets/images/wordpress.png') }}">
					<p>Wordpress</p>
				</div>
				<div class="skills-item">
					<img src="{{ asset('assets/images/php.png') }}">
					<p>PHP</p>
				</div>
				<div class="skills-item">
					<img src="{{ asset('assets/images/devc.png') }}">
					<p>C++</p>
				</div>
				<div class="skills-item">
					<img src="{{ asset('assets/images/vb.net.png') }}">
					<p>VB.NET</p>
				</div>
				<div class="skills-item">
					<img src="{{ asset('assets/images/mysql.png') }}">
					<p>SQL Database</p>
				</div>
				<div class="skills-item">
					<img src="{{ asset('assets/images/npm.png') }}">
					<p>NPM</p>
				</div>
				<div class="skills-item">
					<img src="{{ asset('assets/images/yarn.png') }}">
					<p>YARN</p>
				</div>
				<div class="skills-item">
					<img src="{{ asset('assets/images/restapi.png') }}">
					<p>REST API</p>
				</div>
				<div class="skills-item">
					<img src="{{ asset('assets/images/vue.png') }}">
					<p>Vue JS</p>
				</div>
				<div class="skills-item">
					<img src="{{ asset('assets/images/html.png') }}">
					<p>HTML</p>
				</div>
				<div class="skills-item">
					<img src="{{ asset('assets/images/css.png') }}">
					<p>CSS</p>
				</div>
				<div class="skills-item">
					<img src="{{ asset('assets/images/js.png') }}">
					<p>Javascript</p>
				</div>
				<div class="skills-item">
					<img src="{{ asset('assets/images/sass.png') }}">
					<p>SASS</p>
				</div>
				<div class="skills-item">
					<img src="{{ asset('assets/images/ps.png') }}">
					<p>Photoshop</p>
				</div>
			</div>
		</div>
	</div>
@endsection


@section('js')
@endsection



