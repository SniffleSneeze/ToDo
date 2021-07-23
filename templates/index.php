<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Slim 4</title>
        <link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <h1>To Do List</h1>
        <main>
            <nav>
                <form method="post" action="/newTask">
                    <input type="text" name="addTask">
                    <button type="submit">Add Task</button>
                </form>
            </nav>
            <div>
                <h2>Completed Task</h2>
                <?php foreach($tasks[0] as $task) {
                    echo $task['task'].'<br>';
                } ?>
            </div>
            <div>
                <h2>Uncompleted Task</h2>
                <form method="post" action="/updated">
                    <button type="submit">Update tasks</button>
                    <br>
                    <?php foreach($tasks[1] as $task) {
                        echo '<label for="'. $task['task'] .'"> '. $task['task'] .'</label>
                        <input type="checkbox" id="'. $task['id'] .'" name="taskToUpdate" value="'. $task['task'] .'"><br>';
                    }
                    ?>

                </form>
            </div>
        </main>
    </body>
</html>
