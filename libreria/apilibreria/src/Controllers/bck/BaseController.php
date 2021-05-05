<?php
namespace App\Controllers;

use Psr\Container\ContainerInterface;

class BaseController {
    protected $container;
    // se inyectan los contenedores. Se obtiene la interfaz del contenedor
    public function __construct(ContainerInterface $c){ 
        $this->container = $c;
    }
}