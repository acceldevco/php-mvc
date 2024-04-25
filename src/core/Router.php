<?php

namespace Core;

use App\controller\SiteController;
use Core\middleware\AuthMiddleware;

// use App\controller\SiteController;

class Router
{

    private array $routeMap = [];
    public Request $request;
    public Router $router;
    public function __construct()
    {
        $this->request = new Request();
        $this->router = $this;
    }
    public function get(string $url, $callback)
    {

        $this->routeMap['get'][$url] = $callback; //get many method get
        var_dump($this->routeMap['get'][$url]);

        return $this;

        // var_dump($this->routeMap);
        // return $this;
        // $te=new SiteController();
        // return $te;
        // var_dump($this->routeMap['get'][$url]);
    }

    public function post(string $url, $callback)
    {
        $this->routeMap['post'][$url] = $callback; //get many method post

        return $this;
    }
    public function add($mid)
    {
        $callback = $this->routeMap[$this->request->getReqMethod()][$this->request->getReqUrl()] ?? false;
        if ($callback) {
            $this->routeMap[$this->request->getReqMethod()][$this->request->getReqUrl()][] = $mid;
        }
    }
    public function render($path, array $args)
    {
        extract($args, EXTR_SKIP);
        ob_start();

        include __DIR__ . "/../App/views/$path";

        $var = ob_get_contents();
        ob_end_clean();
        return $var;
    }
    public function resolve()
    {
        $callback = $this->routeMap[$this->request->getReqMethod()][$this->request->getReqUrl()] ?? false;
        // var_dump($this->routeMap[$this->request->getReqMethod()]);
        if ($callback) {
            // var_dump($callback);
            if ($callback[2]) {
                // var_dump($callback);
                $mid = new $callback[2];

                if ($mid->execute()) {
                    $test = new $callback[0]();
                    echo $test->{$callback[1]}();
                } else {
                    echo 'no valid';
                }
            } else {
                $test = new $callback[0]();
                echo $test->{$callback[1]}();
            }
        } else {
            echo $this->render("404.php", []);
        }
    }
}
