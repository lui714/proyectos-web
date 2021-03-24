<?php
    namespace App\Controllers;
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    use App\Model\lcsDetallePedidosModel;

    class lcsDetallePedidosController {
    
        public function new(Request  $request, Response $response, $args){
            $response->getBody()->write("Insertar una nueva Categoria");
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }
       
        public function getAll($request, $response, $args){
            $detallepedidos = lcsDetallePedidosModel::getALL();
            $detallepedidosJson = json_encode($detallepedidos);
            $response->getBody()->write($detallepedidosJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }
    }