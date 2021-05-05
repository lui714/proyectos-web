<?php

use Slim\Factory\AppFactory;
use Slim\Exception\NotFoundException;
// cargamos el autoload para que pueda detectar el resto de las clases
require __DIR__ . '/../../vendor/autoload.php';


// creamos la aplicación php
$app = AppFactory::create();
$app->setBasePath("/libreria/apilibreria/public/index.php");



require __DIR__ . "/../Routes/libros.php";
//require __DIR__ . "/../Config/config.php";
//require __DIR__ . "/../Config/DB.php";



$app->run();