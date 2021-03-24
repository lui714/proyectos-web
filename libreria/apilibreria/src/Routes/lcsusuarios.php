<?php

use Slim\Routing\RouteCollectorProxy;


$app->group('/api', function(RouteCollectorProxy $group){
    $group->get('/usuarios', 'App\Controllers\lcsUsuariosController:lcsAll');
    $group->post('/usuarios/lcsnew', 'App\Controllers\lcsUsuariosController:lcsnew');
    $group->get('/usuarios/delete', 'App\Controllers\lcsUsuariosController:delete');
    $group->post('/usuarios/update', 'App\Controllers\lcsUsuariosController:lcsupdate');
});
