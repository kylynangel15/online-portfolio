<template>
	<div class='portfolio-item'>
		<img :src="data.cover" v-on:click="showGallery()">
		<a :href="data.site" target="_blank" v-html="data.title"></a>
		



	<div class="gallery" v-for="(img, index) in data.imgs">

	<a :href="img" data-fancybox="gallery" data-caption="Visit <a href='http://www.murasaki7.com/en' target='_blank'>Murasaki7</a> ">
		<img :src="img" >
	</a>

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
			showGallery(){
				console.log('sample');
			}
		}
	}
</script>