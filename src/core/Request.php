<?php 

namespace Core;

class Request{
    public function getReqMethod(){
      return  strtolower($_SERVER['REQUEST_METHOD']);
    }
    public function getReqUrl(){
        $path = $_SERVER['REQUEST_URI'];
        $position = strpos($path, '?');
        if ($position !== false) {
            $path = substr($path, 0, $position);
        }
        return $path;
    }
    public function getReqAjax($data2){
        $request_body = file_get_contents('php://input');
        $data = json_decode($request_body, true);
        $item = $data[$data2];
    //    return var_dump($item);
        // return $item;
        return $item;
    }
}