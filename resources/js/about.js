import Vue from 'vue'
import axios from "axios";
import SkillCard from './components/SkillCard.vue';
import PortfolioCard from './components/PortfolioCard.vue';

new Vue({
 	el: "#about",
	data: {
		skills: [],
		get_skills_route: getSkillsRoute,
		portfolios: [],
		get_portfolio_route: getPortfolioRoute,
	},
	created() {
		this.getSkills()
		this.getPortfolios()
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

		getPortfolios() {
			axios
			  .get(this.get_portfolio_route)
			  .then(response => {
		          this.portfolios = response.data;
			  })
			  .catch(error => {
			  	console.log(error);
			  });
		},
		updateImages(updateImgs) {
			$(".gallery").find("a").remove()

			var images = updateImgs.imgs[0] 
			images.forEach(function(path) {
			    $('.gallery').append( 
				`<a href="`+path+`" 
						data-fancybox="gallery" 
						data-caption="`+updateImgs.cap+`">
					<img src="`+path+`" >
				</a>`);
			});

			$(".gallery").find("a")[0].click()
		}
	},
	components: {
		SkillCard,
		PortfolioCard,

	}
})