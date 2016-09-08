@extends('master')
@section('header')


@section('body')
<div class="container"> 
<!-- <form>
	<span class="error" v-show="!message">
		You must enter message
	</span>
	<button type="submit" v-show="message">
		Send Message
	</button>
	<div>
		<textarea v-model="message"></textarea>
	</div>
</form> -->
<!-- 	<form action="done.html" @submit.prevent="handleIt">
		<button type="submit">
			Submit me!
		</button>
	</form> -->
<!-- 	<div @click="count+= 1"> click click </div>
	<button type="submit" @click="updateCount">
		Counter: @{{ count }}
	</button> -->
	<my_counter derp="Likes"></my_counter>
	<my_counter derp="Dislikes"></my_counter>

	<template id="counter-template">
		<h1> @{{derp}} </h1>
		<button @click="count+= 1"> @{{count}}</button>
	</template>

</div>


<script>
	new Vue({
		el: 'body',
		components: {
			my_counter: {
				template: '#counter-template',
				props: ['derp'],
				data: function() {
					return {count: 0};
				}
			}

		}
		/*data: {
			count: 0
		},
		methods: {
			updateCount: function() {
					this.count +=1;
				
			}
		}*/
	});
</script>
@stop