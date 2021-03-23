<?php
    namespace App\Controllers;
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    use App\Model\lcsPerfilesModel;

    class lcsPerfilesController {
    
        public function new(Request  $request, Response $response, $args){
            $response->getBody()->write("Insertar una nueva Categoria");
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }

        public function lcsnew(Request  $request, Response $response, $args){
            $parametros = $request->getParsedBody();
           
            $usuarioid = (int)$parametros['usuarioid'];
            $nombre = $parametros['nombre'];
            $apellidos = $parametros['apellidos'];
            $direccion = $parametros['direccion'];
            $anioNac = (int)$parametros['anioNac'];
            $ciudad = $parametros['ciudad'];
            $valores = array($usuarioid, $nombre, $apellidos, $direccion, $anioNac, $ciudad);
            $perfiles = lcsPerfilesModel::lcsnew($valores);
            $perfilesJson = json_encode($perfiles);
            $response->getBody()->write($perfilesJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }

       
        public function getAll($request, $response, $args){
            $perfiles = lcsPerfilesController::getAll();
            $perfilesJson = json_encode($perfiles);
            $response->getBody()->write($perfilesJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }
    }