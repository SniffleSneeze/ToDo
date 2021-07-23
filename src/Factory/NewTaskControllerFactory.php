<?php


namespace App\Factory;


use App\Controllers\NewTaskController;

class NewTaskControllerFactory
{
    public function __invoke($container)
    {
        $model = $container->get('taskModel');
        return  new NewTaskController($model);
    }

}