<?php
# para agrupar las rutas en grupos
use Slim\Routing\RouteCollectorProxy;

//contendrá los entrypoints (acciones CRUD) de la tabla usuarios

$app->group('/api', function(RouteCollectorProxy $group){
    $group->get('/usuarios', 'App\Controllers\lcsUsuariosController:lcsgetAll');
    $group->post('/usuarios/new', 'App\Controllers\lcsUsuariosController:lcsnew');
    $group->get('/usuarios/delete', 'App\Controllers\lcsUsuariosController:lcsdelete');
    $group->post('/usuarios/update', 'App\Controllers\lcsUsuariosController:lcssupdate');
});
