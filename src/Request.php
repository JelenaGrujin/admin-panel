<?php 
namespace Admin\classes;

class Request{
    
    public static function url() {
      return $_GET['url'];
    }
    
    public static function method() {
        return $_SERVER['REQUEST_METHOD'];
    }
}

?>