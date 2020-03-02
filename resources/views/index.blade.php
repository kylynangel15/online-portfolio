@extends('layouts.default')

@section('css')
    <link rel="stylesheet" href="{{ asset(mix('/css/main.css')) }}">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
@endsection

@section('main')
<div id="main-content">
    @include('components.header')
    @include('components.timeline')
    <!-- @include('components.awards')
    @include('components.skills')
    @include('components.portfolio') -->        
</div>


@endsection

@section('js')
<script type="text/javascript">
    var  getSkillsRoute = "{{route('skills.get')}}";
    var  getPortfolioRoute = "{{route('portfolio.get')}}";

</script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script src="{{ asset('js/main.js') }}"></script>
@endsection
