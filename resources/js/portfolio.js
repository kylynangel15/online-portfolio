import Vue from 'vue'
import axios from "axios";
import PortfolioCard from './components/PortfolioCard.vue';

new Vue({
 	el: "#portfolio",
	data: {
		portfolios: [],
		selected_porfolio: [],
		portfolio_imgs: [],
		get_portfolio_route: getPortfolioRoute,
	},
	created() {
		this.getPortfolios()
	},

	methods: {
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
		PortfolioCard,
	}
})