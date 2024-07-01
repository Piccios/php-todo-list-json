<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-todo-list-json</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style/style.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary justify-content-center">
            <h1>Todo List</h1>
        </nav>
    </header>
    <main id="app">
        <section class="container justify-content-center mt-5">
            <div class="row">
                <div class="col-12">
                    <ul class="list-group">
                    <li class="list-group-item" v-for="task in tasks" :key="task.id">
                            <input class="form-check-input me-1" type="checkbox" v-model="task.completed">
                            <label class="form-check-label" :class="{ 'text-decoration-line-through': task.completed }">
                                <p>{{task.text}}</p>
                            </label>
                        </li>
                    </ul>
                    <form @submit.prevent="addTask">
                        <div class="input-group mt-3">
                            <input type="text" v-model="newTask" class="form-control" placeholder="Add new task" required>
                            <button class="btn btn-primary" type="submit">Add Task</button>
                        </div>
                    </form>
        </section>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>