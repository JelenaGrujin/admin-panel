<?php 
namespace Admin\classes;

use Admin\controller\LogController;

class Router{
    

    public $routes = [
        
        'GET'=>[],
        'POST'=>[]
    ];

    public static function insert($file){
        
        $ruter = new self();
        
        require_once 'src/classes/'.$file;
        return $ruter;
    }
    
    public function get($url, $controller){
        $this->routes['GET'][$url]=$controller;
    }
    
    public function post($url, $controller){
        $this->routes['POST'][$url]=$controller;
    }
    
    public function direct($url, $method) {

        if (array_key_exists($url, $this->routes[$method])){
            
     
            $this->callAction(...explode('::', $this->routes[$method][$url]));
           
           
        }else {
           
            echo'route does not exist';
        }
        
       
}

    protected function callAction($controller, $action) {
        
        $c="Admin\\controller\\$controller";
        
        $con=new $c;
        $con::$action();

        
    }

}
?>
  
