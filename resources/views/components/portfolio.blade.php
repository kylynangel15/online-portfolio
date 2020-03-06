<section id="portfolio-page" class="portfolio-page">
	<h2 class="section-title">PORTFOLIO</h2>
	<p class="section-subtitle">Projects from NSTBG i supported and handled</p>

	<div class="portfolio-container section-content" id="portfolioCard">
			<portfolio-card 
				v-for="(portfolio, index) in portfolios"
				:data="portfolio" 
				:key="index" 
				v-on:change_images="updateImages($event)">
			</portfolio-card>
	</div>
	<div class="gallery" id="gallery"></div>

</section>