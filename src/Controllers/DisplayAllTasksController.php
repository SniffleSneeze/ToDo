<?php


namespace App\Controllers;


use App\Abstracts\Controller;
use App\Model\TaskModel;
use Slim\Views\PhpRenderer;

class DisplayAllTasksController extends Controller
{
    private TaskModel $model;
    private PhpRenderer $renderer;

    public function __construct(TaskModel $model, PhpRenderer $renderer)
    {
        $this->model = $model;
        $this->renderer = $renderer;
    }

    public function __invoke($request, $response, $args)
    {
        $tasks = $this->model->getAllTasks();
        $sortedTask = $this->sortTask($tasks);
        return $this->renderer->render($response,"index.php",['tasks'=>$sortedTask]);
    }

    private function sortTask(array $tasks): array
    {
        $uncompleted = [];
        $completed = [];
        foreach($tasks as $task) {
            $task['completed'] ? array_push($completed,$task) : array_push($uncompleted,$task);
        }
        return [$completed ,$uncompleted];
    }


}