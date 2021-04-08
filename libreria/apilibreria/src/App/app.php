<?php
 
use Slim\Factory\AppFactory;
use Slim\Exception\NotFoundException;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

require __DIR__. '/../../vendor/autoload.php';
 

$app = AppFactory::create();
$app->setBasePath("/libreria/apilibreria/public/index.php");

require __DIR__. "/../Routes/lcslibros.php";
require __DIR__. "/../Routes/lcscategorias.php";
require __DIR__. "/../Routes/lcseditores.php";
require __DIR__. "/../Routes/lcsusuarios.php";
require __DIR__. "/../Routes/lcsperfiles.php";
require __DIR__. "/../Routes/lcsdetallepedidos.php";

$app->run();
