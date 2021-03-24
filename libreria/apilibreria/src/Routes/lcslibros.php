<?php

use Slim\Routing\RouteCollectorProxy;

$app->group('/api', function(RouteCollectorProxy $group){
    $group->get('/libros', 'App\Controllers\lcsLibrosController:lcsAll');
    $group->post('/libros/lcsnew', 'App\Controllers\lcsLibrosController:lcsnew'); 
    $group->get('/libros/filter', 'App\Controllers\lcsLibrosController:getFilter');
    $group->get('/libros/lcscategorias=programacion&precio=35', 'App\Controllers\lcsLibrosController:lcsLibrosYCategorias');
    $group->post('/libros/compras', 'App\Controllers\lcsLibrosController:lcsgetCompras');


});






