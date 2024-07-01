const app = Vue.createApp({
    data() {
        return {
            tasks: []
        }
    },
    mounted() {
        this.fetchTasks();
    },
    methods: {
        fetchTasks() {
            axios.get('server.php')
                .then(response => {
                    this.tasks = response.data;
                })
                .catch(error => {
                    console.error('Error fetching tasks:', error);
                });
        },
        addTask(){
            const task = {
                text: this.newTask,
                completed: false
            };
            axios.post('server.php', task)
            .then(response => {
                this.tasks.push(response.data);
                this.newTask = '';
            })
            .catch(error => {
                console.error('Error adding task:', error);
            });
        }
    }
});
app.mount('#app');