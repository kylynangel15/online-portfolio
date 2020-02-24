@extends('layouts.default')

@section('css')
    <link rel="stylesheet" href="{{ asset(mix('/css/portfolio.css')) }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

    <style type="text/css">
    	.gallery {
    		display: none;
    	}	
    
		.gallery > a > img {
			width: 10%;
		}		
    </style>
@endsection


@section('main')
<div class='portfolio'>
	<div class="portfolio-container">
		
		<div class='portfolio-item'>
			<img src="{{ asset('assets/images/murasaki/murasaki7.png') }}" onclick="test()">
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

<div class="gallery">
	<a id="sample" href="{{ asset('assets/images/murasaki/m7_1.png') }}" data-fancybox="gallery" data-caption="Visit <a href='http://www.murasaki7.com/en' target='_blank'>Murasaki7</a> ">
		<img src="{{ asset('assets/images/murasaki/m7_1.png') }}" >
	</a>
    <a href="{{ asset('assets/images/murasaki/m7_2.png') }}" data-fancybox="gallery">
  		<img src="{{ asset('assets/images/murasaki/m7_2.png') }}" >
    </a>
	<a href="{{ asset('assets/images/murasaki/m7_3.png') }}" data-fancybox="gallery">
		<img src="{{ asset('assets/images/murasaki/m7_3.png') }}" >
	</a>
</div>

@endsection


@section('js')
<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

<script type="text/javascript">
	function test() {
		$( "#sample" ).click();	 	
	}



</script>
@endsection
