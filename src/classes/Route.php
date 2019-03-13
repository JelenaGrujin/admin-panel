<?php
namespace Admin\classes;

class Route{
   
    public static $_routes=array();
    
    public static function set($route, $function) {
        
        $_routes[$route]=$function;
        
        if ($route==$_GET['url']) {
            
              call_user_func($function);
        }
       
    }
}


?>
