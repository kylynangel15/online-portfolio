 {{--Default Layout--}}
{{--This layout includes a navbar and a footer.--}}
{{--This will be the layout used for most pages.--}}
@extends('layouts.master')

@section('content')
  @include('layouts._navbar')
  <div class="main-wrapper">
	  @yield('main')
  </div>
  @include('layouts._footer')
@endsection
