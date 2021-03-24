<?php
    namespace App\Controllers;
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    //use App\Controllers\BaseController;
    use App\Model\lcsLibrosModel;    

    class lcsLibrosController {

        public function lcsLibrosYCategorias($request, $response, $args){
            $libros = lcsLibrosModel::lcsgetLibrosYCategorias();
            $librosJson = json_encode($libros);
            $response->getBody()->write($librosJson);
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
            $libros = lcsLibrosModel::getFilter($valoresParametros);
            $librosJson = json_encode($libros);
            $response->getBody()->write($librosJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200); 
        }
        
        public function lcsAll($request, $response, $args){
            $libros = lcsLibrosModel::lcsAll();
            $librosJson = json_encode($libros);
            $response->getBody()->write($librosJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
            
        }
    }