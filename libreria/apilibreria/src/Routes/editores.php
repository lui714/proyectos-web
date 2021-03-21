<?php
# para agrupar las rutas en grupos
use Slim\Routing\RouteCollectorProxy;
/*//FUNCION DE PRUEBA /index.php/editores
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;*/

//contendrá los entrypoints (acciones CRUD) de la tabla editores
$app->group('/api', function(RouteCollectorProxy $group){
    $group->get('/editores', 'App\Controllers\EditoresController:getAll');
    $group->post('/editores/new', 'App\Controllers\EditoresController:new'); 
    $group->get('/editores/filter', 'App\Controllers\EditoresController:getFilter');  
    #  $group->get('/editores/{id}', 'App\Controllers\EditoresController:show');
});

