<?php

require __DIR__ . "/../vendor/autoload.php";

use Core\App;
use App\controller\SiteController;
use Core\Router;
use Core\middleware\AuthMiddleware;
// use function App\config\registerRouter;
$app = new App();
// $ro = $app->router;
// registerRouter($ro);

// $app->router->get("/", [SiteController::class, 'show']);

// $app->router->post("/d", [SiteController::class, 'store']);


function registerRouter(Router $router)
{
    $router->get("/", [SiteController::class, 'show'])->add(AuthMiddleware::class);
    $router->post("/d", [SiteController::class, 'store'])->add(AuthMiddleware::class);
    // var_dump($router);
}

registerRouter($app->router);




$app->run();
