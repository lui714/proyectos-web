<?php
    namespace App\Controllers;
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    use App\Model\lcsUsuariosModel;


    class lcsUsuariosController {

        public function lcsupdate(Request  $request, Response $response, $args){
            $parametros = $request->getParsedBody();

            $usuarioid = (int)$parametros['usuarioid'];
            $nombre = $parametros['nombre'];
            $apellidos = $parametros['apellidos'];
            $direccion = $parametros['direccion'];
            $anioNac = (int)$parametros['anioNac'];
            $ciudad = $parametros['ciudad'];
            $valores = array($usuarioid, $nombre, $apellidos, $direccion, $anioNac, $ciudad);
            $usuarios = lcsUsuariosModel::lcsupdate($valores);
            $usuariosJson = json_encode($usuarios);
            $response->getBody()->write($usuariosJson);
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
            $valoresParametros = array ($usuarioid, $nombre, $apellidos, $direccion, $anioNac, $ciudad);
            $usuarios = lcsUsuariosModel::lcsnew($valoresParametros);
            $usuariosJson = json_encode($usuarios);
            $response->getBody()->write($usuariosJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }

        public function delete(Request $request, Response $response, $args) {
            $parametros = $request->getQueryParams();
            $id = (int)$parametros['usuarioid'];
          
            $valoresParametros = array ($id);
            $usuarios = lcsUsuariosModel::delete($valoresParametros);
            $usuariosJson = json_encode($usuarios);
            $response->getBody()->write($usuariosJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200); 
          }
       
        public function lcsAll($request, $response, $args){
            $usuarios = lcsUsuariosModel::lcsAll();
            $usuariosJson = json_encode($usuarios);
            $response->getBody()->write($usuariosJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
            }
    }
