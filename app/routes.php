<?php
declare(strict_types=1);

use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {

    $app->get('/','displayAllTasksController');
    $app->post('/newTask','NewTaskController');
    $app->post('/updated','MarkAsCompletedController');
};
