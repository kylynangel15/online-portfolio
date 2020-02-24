import Vue from 'vue'
import axios from "axios";
import PortfolioCard from './components/PortfolioCard.vue';

new Vue({
 	el: "#portfolio",
	data: {
		portfolios: [],
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
		}
	},
	components: {
		PortfolioCard
	}
})