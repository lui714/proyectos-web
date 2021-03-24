<?php

use Slim\Routing\RouteCollectorProxy;


$app->group('/api', function(RouteCollectorProxy $group){
    $group->get('/perfiles', 'App\Controllers\lcsPerfilesController:lcsAll');
    $group->post('/perfiles/lcsnew', 'App\Controllers\lcsPerfilesController:lcsnew');   
});
