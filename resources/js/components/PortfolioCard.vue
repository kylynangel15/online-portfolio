<template>
	<div class='portfolio-item'>
		<div class="portfolio-item-content">
			<div class="portfolio-image">
				<img :src="data.cover" v-on:click="showGallery(data)">
			</div>
			<div class="portfolio-caption">
					<a class="a-black" :href="data.site" target="_blank" v-html="data.title"></a>
					<p v-html="data.subtitle"></p>
			</div>
			
		</div>
	</div>
</template>

<script>
	
	export default {
		data() {
	        return {
	        };
		},
			props: {
		 		data: Object,
		},
		methods: {
			showGallery(data){
				this.$emit('change_images', data)
			}
		}
	}
</script>

<style type="text/css">
	
	

</style>