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
        return $this->renderer->render($response,"index.php",['tasks'=>$tasks]);
    }


}