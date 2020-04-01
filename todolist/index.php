<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todolist Project</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h1>Todolist Ajax</h1>
    <form action="" method="post">
        <div>
            <label for="title">Titre de la tâche</label>
            <input type="text" name="title" id="title">
        </div>
        <div>
            <label for="description">Description de la tâche</label>
            <input type="text" name="description" id="description">
        </div>
        <button>Save</button>
    </form>
    <div class="todos"></div>
    <script src="assets/js/main.js"></script>
</body>
</html>