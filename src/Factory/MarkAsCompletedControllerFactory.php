<?php


namespace App\Factory;


use App\Controllers\MarkAsCompletedController;

class MarkAsCompletedControllerFactory
{
    public function __invoke($container)
    {
        $model = $container->get('taskModel');
        return new MarkAsCompletedController($model);
    }

}