const { createApp } = Vue

createApp({
	data() {
		return {
            title:'ToDo List',
            todos: []
		}
	},
    methods: {
        fetchTodoList() {
			axios
				.get('./server.php')
                .then((res) => {
                    console.log(res.data)
                }).catch((err) => {
                    console.log(err)
                })

		},
    },
    mounted() {
		this.fetchTodoList()
	},
	
}).mount('#app')
