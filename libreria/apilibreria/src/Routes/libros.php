<?php
# para agrupar las rutas en grupos
use Slim\Routing\RouteCollectorProxy;
/*//FUNCION DE PRUEBA /index.php/libros
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;*/

//contendrá los entrypoints (acciones CRUD) de la tabla libros
$app->group('/api', function(RouteCollectorProxy $group){
    $group->get('/libros', 'App\Controllers\LibrosController:getAll');
    $group->post('/libros/new', 'App\Controllers\LibrosController:new'); 
    $group->get('/libros/filter', 'App\Controllers\LibrosController:getFilter');  
    $group->get('/libros/categorias', 'App\Controllers\LibrosController:getLibrosyCategorias')
    #  $group->get('/libros/{id}', 'App\Controllers\LibrosController:show');
});





