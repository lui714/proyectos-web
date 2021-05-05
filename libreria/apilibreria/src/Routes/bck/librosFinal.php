<?php
# para agrupar las rutas en grupos
use Slim\Routing\RouteCollectorProxy;

$app->group('/api', function(RouteCollectorProxy $group){
    $group->get('/libros', 'App\Controllers\LibrosController:getAll');
});

$app->group('/api', function(RouteCollectorProxy $group){
    $group->get('/libros/show/{id}', 'App\Controllers\LibrosController:show');
    $group->get('/libros/filter', 'App\Controllers\LibrosController:getFilter');
    $group->post('/libros/new', 'App\Controllers\LibrosController:Create');   
});
