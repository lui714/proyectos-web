<?php
use Slim\Routing\RouteCollectorProxy;

$app->group('/api', function(RouteCollectorProxy $group){
    $group->get('/editores', 'App\Controllers\lcsEditoresController:lcsgetALL');
    $group->post('/editores/new', 'App\Controllers\lcsEditoresController:lcsnew');
    $group->get('/editores/libros', 'App\Controllers\lcsEditoresController:lcsgetEditoresYLibros');
});