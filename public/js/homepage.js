	Vue.component('tasks', {
		/*props: ['list'],*/
		template: '#tasks_template', 
		data: function() {
			return {
				list: []
			};
		},
		created: function() {
			var vm = this;
			$.getJSON('api/tasks', function(tasks) {
				vm.list = tasks;
			});
		},
		computed: {
			remaining: function() {
				var vm = this;
				return this.list.filter(function(task) {
					return ! vm.isCompleted(task);
				}).length;
			}
		},
		methods: {
			isCompleted: function(task) {
				return task.completed;
			},
			inProgress: function(task) {
				return ! this.isCompleted(task);
			},
			deleteTask: function(task) {
				this.list.$remove(task);
			},
			clearCompleted: function() {
				this.list = this.list.filter(this.inProgress);
			}
		}
	});
	new Vue({
		el: 'body',
		data: {
			tasks: [
				{ body: 'Go to the store', completed: false},
				{ body: 'Go to the bank', completed: false},
				{ body: 'Go to the doctor', completed: true}
			],
			chores: [
				{ body: 'Clean up Room', completed: false},
				{ body: 'Clean up Kitchen', completed: false},
				{ body: 'Clean up Bathroom', completed: false}
			]
		},
	});








		/*data: {
			plans: [
				{name: 'Enterprice', price: 100},
				{name: 'Pro', price: 50},
				{name: 'Personal', price: 10},
				{name: 'Free', price: 0},
			],
			active: {}
		},
		components: {
			plan: {
				template: '#plan-template',

				props: ['plan', 'active'],

				computed: {
					isUpgrade: function() {
						return this.plan.price >= this.active.price;
					}
				},

				methods: {
					setActivePlan: function() {
						this.active = this.plan;
					}
				}
			}*/
	/*	}
		computed: {
			fullName: function() {
				return this.first+' '+this.last;
			}
		}*/




	/*new Vue({
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
		data: {
			count: 0
		},
		methods: {
			updateCount: function() {
					this.count +=1;
				
			}
		}
	});*/