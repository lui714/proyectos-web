<?php

use Slim\Routing\RouteCollectorProxy;

$app->group('/api', function(RouteCollectorProxy $group){
    $group->get('/libros', 'App\Controllers\lcsLibrosController:lcsAll');
    $group->post('/libros/lcsnew', 'App\Controllers\lcsLibrosController:lcsnew'); 
    $group->get('/libros/lcsfilter', 'App\Controllers\lcsLibrosController:lcsFilter');
    $group->post('/libros/compras', 'App\Controllers\lcsLibrosController:lcsgetCompras');


});






