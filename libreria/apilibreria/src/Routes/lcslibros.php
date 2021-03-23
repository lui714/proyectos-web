<?php
# para agrupar las rutas en grupos
use Slim\Routing\RouteCollectorProxy;
/*//FUNCION DE PRUEBA /index.php/libros
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;*/

//contendrá los entrypoints (acciones CRUD) de la tabla libros
$app->group('/api', function(RouteCollectorProxy $group){
    $group->get('/libros', 'App\Controllers\lcsLibrosController:getAll');
    $group->post('/libros/new', 'App\Controllers\lcsLibrosController:new'); 
    $group->get('/libros/filter', 'App\Controllers\lcsLibrosController:getFilter');
    $group->get('/libros/categorias=programacion&precio=35', 'App\Controllers\lcsLibrosController:getLibrosYCategorias');
    #  $group->get('/libros/{id}', 'App\Controllers\LibrosController:show');
});

/*//FUNCION DE PRUEBA /index.php/libros
$app->get("/libros", function(Request $request, Response $response, $args) {
    $response->getBody()->write("Hello, I'm your libros.php file");
    return $response;
});*/






