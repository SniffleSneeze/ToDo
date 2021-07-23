<?php


namespace App\Factory;


use App\Controllers\DisplayAllTasksController;

class DisplayAllTasksControllerFactory
{
    public function __invoke($container)
    {
        $model = $container->get('taskModel');
        $renderer = $container->get('renderer');
        return new DisplayAllTasksController($model, $renderer);
    }

}