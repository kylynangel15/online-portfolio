<div class="container about-skills" >
	<h2>Skills</h2>
	
	<div class="skills-container">
		<skill-card 
			v-for="(skill, index) in skills"
			:data="skill" 
			:key="index">
		</skill-card>
	</div>
</div>