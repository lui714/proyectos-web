<?php
use Slim\Routing\RouteCollectorProxy;

$app->group('/api', function(RouteCollectorProxy $group){
    $group->get('/editores', 'App\Controllers\lcsEditoresController:getALL');
    $group->post('/editores/new', 'App\Controllers\lcsEditoresController:new');
    $group->get('/editores/libros', 'App\Controllers\lcsEditoresController:getEditoresYLibros');
});