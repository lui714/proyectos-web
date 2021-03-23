<?php
# para agrupar las rutas en grupos
use Slim\Routing\RouteCollectorProxy;

//contendrá los entrypoints (acciones CRUD) de la tabla categorias
$app->group('/api', function(RouteCollectorProxy $group){
    $group->get('/perfiles', 'App\Controllers\lcsPerfilesController:getAll');
    $group->post('/perfiles/new', 'App\Controllers\lcsPerfilesController:lcsnew');   
});
