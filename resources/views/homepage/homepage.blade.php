@extends('master')
@section('header')

@stop
@section('body')
<!-- <div class="container">  -->
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
	<!-- <my_counter derp="Likes"></my_counter>
	<my_counter derp="Dislikes"></my_counter> -->

	<!-- <template id="counter-template">
		<h1> @{{derp}} </h1>
		<button @click="count+= 1"> @{{count}}</button>
	</template> -->
	<!-- <h1> @{{ fullName}}</h1>
	<input type="text" v-model="first" placeholder="First Name">
	<input type="text" v-model="last" placeholder="Last Name"> -->
	<!-- <div class="container">
		<div v-for="plan in plans" class="row">
			<plan :plan="plan" :active.sync="active"></plan>
		</div>
	</div>

	<template id="plan-template">
		<div>
			<span class="col-md-4 col-sm-4">@{{plan.name}}</span>
			<span class="col-md-4 col-sm-4">@{{plan.price}}/month</span>

			<button class="col-md-4 col-sm-4" @click='setActivePlan' v-show="plan.name !== active.name"> @{{isUpgrade ? 'Upgrade' : 'Downgrade'}} </button>
			<span class="col-md-4 col-sm-4" v-else style="text-align:center"> Selected </span>
		</div>
	</template> -->
	<!-- <div class="container">
		<ul class="row">
			<li :class="{'completed' : task.completed}" v-for="task in tasks" @click='toggleCompleted(task)'>
				@{{task.body}} 
			</li>
		</ul>
	</div> -->
	<div class="container" id="app">
		<tasks :list="tasks"></tasks>
	<!-- 	<tasks :list="chores"></tasks> -->
	</div>
	<template id="tasks_template">
	<h1>My Tasks 
	<span v-show="remaining">( @{{ remaining }} )</span>
	</h1>
		<ul class="row" v-show="list.length">
			<li :class="{'completed' : task.completed}" v-for="task in list" @click='task.completed = !task.completed'>
				@{{task.body}} 
				<strong @click="deleteTask(task)">x</strong>
			</li>
		</ul>
		<p v-else>No tasks yet!</p>
		<button @click="clearCompleted">Clear completed!</button>
		<br>
	</template>
<script src="{{ asset('js/homepage.js') }}"></script>
<!-- <script>
	Vue.component('tasks', {
		props: ['list'],
		template: '#tasks_template'
	});

	new Vue({

		el: '#app',
		data: {
			tasks: [
				{ body: 'Go to the store', completed: false},
				{ body: 'Go to the bank', completed: false},
				{ body: 'Go to the doctor', completed: true}
			]
		},
		methods: {
			toggleCompleted: function(task) {
				task.completed = !task.completed;
			}
		}
	});
	</script> -->
@stop