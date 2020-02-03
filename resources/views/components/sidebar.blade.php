<style type="text/scss">
	

</style>

<div class="sidebar">
	<div class="sidebar-content">
		<img src="{{ asset('assets/images/id_pic.jpg') }}">
		<div class="sidebar-content-info">
			<h3>Kylyn Angel M. Luterte</h3>
			<p>Hi, my name is Kylyn and I'm Full-Stack Web Developer. Welcome to my website! 
			</p>
		</div>

		<div class="sidebar-content-social">
			
		<a class="active" href="https://www.facebook.com/kylynangel15" target="_blank">
			<img src="{{ asset('assets/images/Facebook.png') }}">
		</a>
		<a class="active" href="https://gitlab.com/kylynangel15/" target="_blank">
			<img src="{{ asset('assets/images/gitlab.png') }}">
		</a>
		</div>
	</div>
	
	<hr>

	<div class="sidebar-menu">
		<a id="sidenav-about" class="" href="{{ route('home') }}">
			<i class="fa fa-user" aria-hidden="true"></i>About me
		</a>
		<a id="sidenav-portfolio" href="{{ route('portfolio') }}"> 
			<i class="fa fa-code" aria-hidden="true"></i>Portfolio
		</a>
		<a id="sidenav-resume" href="{{ route('resume') }}"> 
			<i class="fa fa-file" aria-hidden="true"></i>Resume
		</a>
	</div>
		
	<hr>




		
	
</div>	