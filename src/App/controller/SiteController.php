<?php

namespace App\controller;

use Core\Controller;
use Core\Request;
use Core\Router;

class SiteController extends Controller
{

    public Request $request;
    public function __construct()
    {
        $this->request = new Request();
    }
    public function index()
    {
    }
    public function create()
    {
    }
    public function store()
    {
        return  json_encode($this->request->getReqAjax('name'));
    }
    public function show()
    {

        $render = new Router();
        return $render->render("index.php", ['test' => 'gdfggf']);
    }
    public function edit()
    {
    }
    public function update()
    {
    }
    public function destroy()
    {
    }
}
