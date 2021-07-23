<?php


namespace App\Factory;


use App\Model\TaskModel;

class TaskModelFactory
{
    public function __invoke($container)
    {
        $db = $container->get('dbConnection');
        return new TaskModel($db);
    }
}