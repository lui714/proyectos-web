<?php
    namespace App\Controllers;
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    use App\Controllers\BaseController;
    use App\Model\LibrosModel;    

    class LibrosController {
        public function show(Request  $request, Response $response, $args){
              $id = $request->getAttribute('id'); // $id = $args['id'];
              echo $id;
          //   $ciudad = $request->getAttribute('ciudad');
           //   $ciudad = $args['ciudad'];
              $param = array($id);
              $libro = LibrosModel::show($param);
          //    $libro = $this->model->show($sql, $param);
              $dataJson = json_encode($libro);
              $response->getBody()->write($dataJson);
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
        public function getAll($request, $response, $args){
            $libros = LibrosModel::getAll();
            $librosJson = json_encode($libros);
            $response->getBody()->write($librosJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }
    }