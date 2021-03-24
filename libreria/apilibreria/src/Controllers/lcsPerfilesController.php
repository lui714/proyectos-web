<?php
    namespace App\Controllers;
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    use App\Model\lcsPerfilesModel;

    class lcsPerfilesController {

        public function lcsnew(Request  $request, Response $response, $args){

            $parametros = $request->getParsedBody();
           
            $perfilid = (int)$parametros['perfilid'];
            $email = $parametros['email'];
            $facebook = $parametros['facebook'];
            $instagram = $parametros['instagram'];
            $foto = $parametros['foto'];
            $rol = $parametros['rol'];
            $userid = $parametros['userid'];

            $valoresParametros = array($perfilid, $email, $facebook, $instagram, $foto, $rol, $userid);
            
            $perfiles = lcsPerfilesModel::lcsnew($valoresParametros);
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