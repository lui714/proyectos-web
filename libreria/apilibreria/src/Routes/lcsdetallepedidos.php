<?php

use Slim\Routing\RouteCollectorProxy;


$app->group('/api', function(RouteCollectorProxy $group){
    $group->get('/detallespedidos', 'App\Controllers\lcsDetallesPedidosController:getAll');
    $group->post('/detallepedidos/lcsnew', 'App\Controllers\lcsDetallePedidosController:lcsnew');   
});
