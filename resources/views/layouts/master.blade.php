
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

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-24707561-56"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	
	  gtag('config', 'UA-24707561-56');
	</script>
	
	<!-- Facebook Pixel Code -->
	<script>
	  !function(f,b,e,v,n,t,s)
	  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	  n.queue=[];t=b.createElement(e);t.async=!0;
	  t.src=v;s=b.getElementsByTagName(e)[0];
	  s.parentNode.insertBefore(t,s)}(window, document,'script',
	  'https://connect.facebook.net/en_US/fbevents.js');
	  fbq('init', '1506230579705064');
	  fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	  src="https://www.facebook.com/tr?id=1506230579705064&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Facebook Pixel Code -->


</head> 

<body>

@yield('content')

@yield('pre-js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="{{ asset('js/master.js') }}"></script>
@yield('js')


</body>