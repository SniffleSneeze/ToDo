<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>ToDo List</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;1,100&display=swap" rel="stylesheet">
        <link href="/css/normalise.css" rel='stylesheet' type="text/css">
        <link href="/css/styles.css" rel='stylesheet' type="text/css">
    </head>
    <body>
        <div class="container">
            <h1>To Do List</h1>
            <form class="new-task-form" method="post" action="/newTask">
                <input type="text" name="addTask">
                <button type="submit">Add Task</button>
            </form>
            <main>
                <div class="completed-task-container">
                    <h2>Completed Task</h2>
                    <div class="completed-task">
                        <?php foreach($tasks[0] as $task) {
                            echo '<p><s>' . $task['task'] . '</s></p>';
                        } ?>
                    </div>
                </div>
                <div class="uncompleted-task-container">
                    <h2>Uncompleted Task</h2>
                    <form method="post" action="/updated">
                        <div class="uncompleted-task-form">
                            <?php foreach($tasks[1] as $task) {
                                echo '<label class="label" for="'. $task['task'] .'"> '. $task['task'] .'</label>
                            <input class="checkbox" type="checkbox" id="'. $task['id'] .'" name="taskToUpdate" value="'. $task['task'] .'">';
                            }
                            ?>
                        </div>
                        <button type="submit">Update tasks</button>
                    </form>
                </div>
            </main>
        </div>
    </body>
</html>
