<section id="skills-page" class="skills-page">
	<h2 class="section-title">SKILLS</h2>
	<p class="section-subtitle">over the pass one year i managed to improved my coding and technical understanding.</p>

	<div class="skills-container section-content">
		<skill-card 
			v-for="(skill, index) in skills"
			:data="skill" 
			:key="index">
		</skill-card>
	</div>

</section>