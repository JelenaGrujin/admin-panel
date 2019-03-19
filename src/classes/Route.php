<?php
namespace Admin\classes;

class Route{
   
    public static $_routes=array();
    
    public static function set($route, $function) {
        
        $_routes[$route]=$function;
        
        if ($route==$_GET['url']) {
            
            $c=explode('::', $function);
            $co=$c["0"];
            $con="Admin\\controller\\$co";
            $fun=$c['1'];
            
            
            new $con;
           
            echo $con.'->'.$fun;
        }
       
    }
}


?>
