<template>
	<div class='portfolio-item'>
		<img :src="data.cover" v-on:click="showGallery(data)">
		<a :href="data.site" target="_blank" v-html="data.title"></a>
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