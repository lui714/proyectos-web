<?php
    namespace App\Controllers;
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    //use App\Controllers\BaseController;
    use App\Model\lcsLibrosModel;    

    class lcsLibrosController {

        public function lcsupdate(Request $request, Response $response, $args){

            $parametros = $request->getQueryParams();

            $categoriaid = $parametros['categoriaid'];
            $precio = $parametros['precio'];
            $stock = $parametros['stock'];

            $valoresParametros = array ($categoriaid, $precio, $stock);

            $libros = lcsLibrosModel::lcsupdate($valoresParametros);
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