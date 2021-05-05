<?php
use Psr\Container\ContainerInterface; // traemos la ifaz del contenedor

//en $c tenemos el contenedor general y podremos acceder a todas las configuraciones
$containerAPP->set('DB', function(ContainerInterface $c){ 
    $config = $c->get('db_settings');
    $dbname = $config->DB_NAME;
    $dbpassword = $config->DB_PASS;
    $dbuser = $config->DB_USER;
    $dbcharset = $config->DB_CHARSET;
    $dbhost = $config->DB_HOST;

    $opciones = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //que PDO lance las excepciones si hay errores
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ //los resultados los regrese en un objeto
    ];
    $dsn = "mysql:host=".$dbhost.";dbname=".$dbname.";charset=".$dbcharset;
    return new PDO($dsn, $dbuser, $dbpassword, $opciones);
});

