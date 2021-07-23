<?php


namespace App\Controllers;


use App\Model\TaskModel;

class MarkAsCompletedController
{
    private TaskModel $model;

    public function __construct(TaskModel $model)
    {
        $this->model = $model;
    }

    public function __invoke($request, $response, $args)
    {
        $task = $request->getParsedBody();
        $this->model->updateTask($task['taskToUpdate']);
        return $response->withheader('Location','/');
    }
}