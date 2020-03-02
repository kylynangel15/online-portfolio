
<!DOCTYPE html>
<html lang="en"> 
<head>
	<title>My Personal Website | Kylyn Angel Luterte</title>
	
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="I'm Kylyn Angel Luterte and I'm applying for Web Developer">
	<meta name="author" content="Designed by Xiaoying Riley at 3rd Wave Media ">    
	<link rel="shortcut icon" href="favicon.ico"> 
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Import CSS -->
    <link rel="stylesheet" href="{{ asset(mix('/css/master.css')) }}">

	@yield('pre-css')
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" media="none" onload="if(media!='all')media='all'">
	@yield('css')

</head> 

<body>

@yield('content')

@yield('pre-js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="{{ asset('js/master.js') }}"></script>
<script type="text/javascript">
	  $(".scroll-nav").on('click', function(e) {
	     e.preventDefault();
	     var target = $(this).attr('href');
	     $('html, body').animate({
	       scrollTop: ($(target).offset().top)
	     }, 2000);
	     console.log($(target).offset().top);
	  });
</script>
@yield('js')


</body>