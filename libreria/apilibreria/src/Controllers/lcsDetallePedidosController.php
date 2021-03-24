<?php
    namespace App\Controllers;
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    use App\Model\lcsDetallesPedidosModel;

    class lcsDetallesPedidosController {
    

        public function lcsnew(Request  $request, Response $response, $args){

            $parametros = $request->getParsedBody();
           
            $CodigoLibro = (int)$parametros['CodigoLibro'];
            $CodigoUsuario = (int)$parametros['CodigoUsuario'];
            $Cantidad = (int)$parametros['Cantidad'];
            $descuento = $parametros['descuento'];
            $fecha = $parametros['fecha'];

            $valoresParametros = array ($CodigoLibro, $CodigoUsuario, $Cantidad, $descuento, $fecha);
            
            $detallepedidos = lcsDetallePedidosModel::lcsnew($valoresParametros);
            $detallepedidosJson = json_encode($detallepedidos);
            $response->getBody()->write($detallepedidosJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }

        public function getAll($request, $response, $args){
            $detallespedidos = lcsDetallesPedidosModel::getALL();
            $detallespedidosJson = json_encode($detallespedidos);
            $response->getBody()->write($detallespedidosJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }
    }