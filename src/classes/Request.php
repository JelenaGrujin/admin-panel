<?php 
namespace Admin\classes;

class Request{
    
    public static function url(){
        //return parse_url(trim($_SERVER['REQUEST_URI'],'/'), PHP_URL_PATH);
        return $_GET['url'];
    }
    
    public static function method(){
        return $_SERVER['REQUEST_METHOD'];
    }
}