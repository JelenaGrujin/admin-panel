<?php
namespace Admin\classes;

class Router{

    public $routes = [
        
        'GET'=>[],
        'POST'=>[]
    ];

    public static function insert($file){
        
        $router = new self();
        
        require_once $file;
        return $router;
    }
    
    public function get($url, $controller){
        $this->routes['GET'][$url]=$controller;
    }
    
    public function post($url, $controller){
        $this->routes['POST'][$url]=$controller;
    }

    public function direct($url, $method){

        $redirect= new Redirect();
        if (array_key_exists($url, $this->routes[$method])){
               $redirect->callAction(...explode('::',$this->routes[$method][$url]));
        }else{
            $redirect->callAction('Login','showError');
        }

    }
}