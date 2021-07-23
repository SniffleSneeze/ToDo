<?php


namespace App\Controllers;


use App\Abstracts\Controller;
use App\Model\TaskModel;
use Slim\Views\PhpRenderer;

class NewTaskController extends Controller
{
    private TaskModel $model;

    public function __construct(TaskModel $model)
    {
        $this->model = $model;
    }

    public function __invoke($request, $response, $args)
    {
        $task = $request->getParsedBody();
        $this->model->addTask($task['addTask']);
        return $response->withheader('Location','/');
    }


}