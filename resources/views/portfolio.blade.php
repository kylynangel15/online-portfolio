@extends('layouts.default')

@section('css')
    <link rel="stylesheet" href="{{ asset(mix('/css/portfolio.css')) }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
@endsection


@section('main')
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

@endsection


@section('js')
<script type="text/javascript">
	var  getPortfolioRoute = "{{route('portfolio.get')}}";
</script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script src="{{ asset('js/portfolio.js') }}"></script>
@endsection
