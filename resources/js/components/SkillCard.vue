<template>
	<div class="skills-item" @mouseover="active = true" @mouseleave="active = false" >
		<img :src="data.img" v-show="active == false">
		<div class="skill-rate">
			<div class="c100 small" :class="'p'+ data.rate" v-show="active">
	            <span v-html="data.rate + '%' "></span>
	            <div class="slice">
	                <div class="bar"></div>
	                <div class="fill"></div>
	            </div>
	        </div>
		</div>
		<p v-html="data.title"></p>
	</div>

</template>

<script>
	
	export default {
		data() {
	        return {
	        	active: false
	        };
		},
			props: {
		 		data: Object,
		},
		methods: {
		}
	}
</script>

<style type="text/scss">

</style>