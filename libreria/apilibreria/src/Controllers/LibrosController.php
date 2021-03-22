<?php
    namespace App\Controllers;
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    //use App\Controllers\BaseController;
    use App\Model\LibrosModel;    

    class LibrosController {

        public function getLibrosYCategorias($request, $response, $args){
            $libros = LibrosModel::getLibrosYCategorias();
            $librosJson = json_encode($libros);
            $response->getBody()->write($librosJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }
        
        public function new($request, $response, $args){
            $response->getBody()->write("Insertar un nuevo Libro");
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }

        public function getFilter(Request $request, Response $response, $args){
            $parametros = $request->getQueryParams();

            $precio = $parametros['precio'];
            $editorial = $parametros['editorial'];

            var_dump($precio);

            $valoresParametros = array ($precio, $editorial);
            $libros = LibrosModel::getFilter($valoresParametros);
            $librosJson = json_encode($libros);
            $response->getBody()->write($librosJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200); 
        }
        
        public function getAll($request, $response, $args){
            $libros = LibrosModel::getAll();
            $librosJson = json_encode($libros);
            $response->getBody()->write($librosJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
            /*//FUNCION DE PRUEBA /index.php/api/libros
            $response->getBody()->write("Hello, I'm your LibrosController.php file");
            return $response;*/
            
        }
    }