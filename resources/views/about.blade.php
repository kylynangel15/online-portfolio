@extends('layouts.default')

@section('css')
    <link rel="stylesheet" href="{{ asset(mix('/css/about.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('/css/portfolio.css')) }}">
@endsection


@section('main')
	<div id="about" class="about">
		<div class="container">
			<div class="about-info">
                <div class="about-info-desc">
                    <h1>Kylyn Angel M. Luterte</h1>
                    <h3>Full Stack Web Developer</h3>    
                    <p>I'm a Full-Stack Web Developer specialised in PHP, Laravel Framework, RESTful API, Javascript, CSS/SCSS, HTML, Vuejs and other skill sets. Hard Working individual and possessing a strong willingness to learn.</p>

                    <a class="active" href="https://www.facebook.com/kylynangel15" target="_blank">
                        <img src="{{ asset('assets/images/Facebook.png') }}">
                    </a>
                    <a class="active" href="https://gitlab.com/kylynangel15/" target="_blank">
                        <img src="{{ asset('assets/images/gitlab.png') }}">
                    </a>

                    <div class="about-info-button">
                        <button class="portfolio-button" type="button" class="btn btn-danger">View Portfolio</button>
                        <button class="resume-button" type="button">Download Resume</button>
                    </div>
                </div>
				
				 <div class="about-info-img">
                    <img src="{{ asset('assets/images/id_pic.jpg') }}">
                </div>
				
			</div>
		</div>
		<hr>
	    @include('components.work')
	    <hr>
	    @include('components.awards')
		<hr>
	    @include('components.skills')
        <hr>
        @include('components.school')
        <hr>

        <div id="portfolio" class='portfolio'>
            <div class="portfolio-container" id="portfolioCard">
                <div v-for="(portfolio, index) in portfolios">
                    <portfolio-card 
                        :data="portfolio" 
                        :key="index" 
                        v-on:change_images="updateImages($event)">
                    </portfolio-card>
                </div>
            </div>
            <div class="gallery" id="gallery"></div>
        </div>
	</div>
@endsection


@section('js')
<script type="text/javascript">
	var  getSkillsRoute = "{{route('skills.get')}}";
    var  getPortfolioRoute = "{{route('portfolio.get')}}";

</script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script src="{{ asset('js/about.js') }}"></script>
@endsection



