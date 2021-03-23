<?php
namespace App\Controllers;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

use App\Model\lcsEditoresModel;

class lcsEditoresController{
    public function lcsgetEditoresYLibros($request, $response, $args){
        $editores = lcsEditoresModel::lcsgetEditoresYLibros();
        $editoresJson = json_encode($editores);
        $response->getBody()->write($editoresJson);
        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(200);
    }

    public function lcsnew($request, $response, $args){
        $response->getBody()->write("Insertar un nuevo editor");
        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(200);
    }
    public function lcsgetALL($request, $response, $args){
        $editores = lcsEditoresModel::getALL();
        $editoresJson = json_encode($editores);
        $response->getBody()->write($editoresJson);
        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(200);
    }
}