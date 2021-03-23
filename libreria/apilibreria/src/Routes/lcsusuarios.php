<?php
# para agrupar las rutas en grupos
use Slim\Routing\RouteCollectorProxy;

//contendrá los entrypoints (acciones CRUD) de la tabla usuarios

$app->group('/api', function(RouteCollectorProxy $group){
    $group->get('/usuarios', 'App\Controllers\lcsUsuariosController:getAll');
    $group->post('/usuarios/new', 'App\Controllers\lcsUsuariosController:new');
    $group->get('/usuarios/delete', 'App\Controllers\lcsUsuariosController:delete');
    $group->post('/usuarios/update', 'App\Controllers\lcsUsuariosController:update');
});
