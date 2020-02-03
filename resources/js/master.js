$( document ).ready(function() {
	var path = window.location.pathname;
	
	if(path == '/portfolio')
		$('#sidenav-portfolio').addClass("active")
	else if(path == '/resume')
		$('#sidenav-resume').addClass("active")
	else
		$('#sidenav-about').addClass("active")
});