@extends('layouts.default')

@section('css')
    <link rel="stylesheet" href="{{ asset(mix('/css/about.css')) }}">
@endsection


@section('main')
	<div id="about" class="about">
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
					<skill-card 
						v-for="(skill, index) in skills"
						:data="skill" 
						:key="index">
					</skill-card>
			</div>
		</div>
	</div>
@endsection


@section('js')
<script type="text/javascript">
	var  getSkillsRoute = "{{route('skills.get')}}";
</script>
<script src="{{ asset('js/about.js') }}"></script>
@endsection



