import Vue from 'vue'
import axios from "axios";
import SkillCard from './components/SkillCard.vue';

new Vue({
 	el: "#about",
	data: {
		skills: [],
		get_skills_route: getSkillsRoute,
	},
	created() {
		this.getSkills()
	},

	methods: {
		getSkills() {
			axios
			  .get(this.get_skills_route)
			  .then(response => {
		          this.skills = response.data;
			  })
			  .catch(error => {
			  	console.log(error);
			  });
		},
	},
	components: {
		SkillCard,
	}
})