<?php
    namespace App\Controllers;
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    use App\Model\EditoresModel;    

    class EditoresController {
    
              
        public function getAll($request, $response, $args){
            $editores = EditoresModel::getAll();
            $editoresjson = json_encode($editores);
            $response->getBody()->write($editoresjson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }
    }