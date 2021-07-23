<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Slim 4</title>
        <link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <h1>To Do List</h1>
        <div>
            <?php foreach($tasks as $task){
                echo $task['task'].'<br>';
            }?>
        </div>

    </body>
</html>
