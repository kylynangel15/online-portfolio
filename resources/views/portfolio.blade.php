@extends('layouts.default')

@section('css')
    <link rel="stylesheet" href="{{ asset(mix('/css/portfolio.css')) }}">
@endsection


@section('main')
<div class='portfolio'>
	<div class="portfolio-container">
		<div class='portfolio-item'>
			<img src="{{ asset('assets/images/murasaki/murasaki7.png') }}">
			<a href="https://www.murasaki7.com/en" target="_blank">Murasaki7</a>
		</div>
		<div class='portfolio-item'>
			<img src="{{ asset('assets/images/heyvideo/heyvideo.png') }}">
			<a href="https://www.heyvideo.app/en" target="_blank">Heyvideo</a>
		</div>
		<div class='portfolio-item'>
			<img src="{{ asset('assets/images/chamoji/chamoji.png') }}">
			<a href="https://www.chamoji.com/en" target="_blank">Chamoji</a>
		</div>
		<div class='portfolio-item'>
			<img src="{{ asset('assets/images/nstpictures/nstpicture.png') }}">
			<a href="https://nstpictures.com/" target="_blank">NST Pictures</a>
		</div>
		<div class='portfolio-item'>
			<img src="{{ asset('assets/images/gnn/gnn.png') }}">
			<a href="https://www.gamenewsninja.com" target="_blank">Game News Ninja</a>
		</div>
	</div>
</div>

@endsection


@section('js')
@endsection
