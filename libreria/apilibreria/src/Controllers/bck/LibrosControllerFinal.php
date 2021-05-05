<?php
    namespace App\Controllers;
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    use App\Controllers\BaseController;
    use App\Model\LibrosModel;    

    class LibrosController {
        private $model;

        public function __construct(){
            $this->model = new LibrosModel();
        }
        
        public function show(Request  $request, Response $response, $args){
          //   var_dump($args);
          //  $id = $request->getAttribute('id');
            $id = $args['id'];
         //   $ciudad = $request->getAttribute('ciudad');
         //   $ciudad = $args['ciudad'];
            $param = array($id);
            $sql = 'SELECT * from libros where libro_id = ?';
            $libro = $this->model->show($sql, $param);
            $dataJson = json_encode($libro);
            $response->getBody()->write($dataJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }

        public function create(Request  $request, Response $response, $args){
            $parametros = $request->getParsedBody();
            var_dump($parametros);
            $precio = $parametros['precio'];
            $ciudad = $parametros['ciudad'];
            echo $ciudad. " " . $precio;
           //  $html = var_export($data, true);
        }

        public function getFilter(Request  $request, Response $response, $args){
            $parametros = $request->getQueryParams();            
          //  var_dump($parametros);
            $precio = $parametros['precio'];
          //  $ciudad = $parametros['ciudad'];
         //   echo $ciudad. " " . $precio;
            $param = array($precio);
            $sql = 'SELECT * from libros where precio > ?';

            $libros = $this->model->getFilter($sql, $param);
            $dataJson = json_encode($libros);
            $response->getBody()->write($dataJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }

        public function getAll($request, $response, $args){

            $libros = $this->model->getAll();
            // fetchAll --> array de registros,  fetch --> 1 solo registro
            $dataJson = json_encode($libros);
            $response->getBody()->write($dataJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }
    }