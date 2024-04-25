<?php
declare(strict_types= 1);
namespace App\config;

use App\controller\SiteController;
use Core\Router;

function registerRouter(Router $router){
    $router->get("/", [SiteController::class, 'show']);
    $router->post("/d", [SiteController::class, 'store']);
//    var_dump($router);
}
