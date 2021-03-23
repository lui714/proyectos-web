<?php
# para agrupar las rutas en grupos
use Slim\Routing\RouteCollectorProxy;

//contendrá los entrypoints (acciones CRUD) de la tabla categorias
$app->group('/api', function(RouteCollectorProxy $group){
    $group->get('/detallepedidos', 'App\Controllers\lcsDetallePedidosController:getAll');
    $group->post('/detallepedidos/new', 'App\Controllers\lcsDetallePedidosController:new');   
});
