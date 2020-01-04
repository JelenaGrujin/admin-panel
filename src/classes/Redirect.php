<?php

namespace Admin\classes;

class Redirect {

    public function sessionRedirect() {

        $session= new Session();
        if ($session->sessionExist('Admin\controller\Login')==false){

            header('Location:index.php?$msg=need to login');
        }
    }

    public function callAction($controller, $action) {

        $con=self::getController($controller);

        is_callable(array($con,$action),$controller)?call_user_func(array($con,$action),$controller):$con->$action();

    }

    public function getController($class){

            $cl=ucfirst($class);
            $c = "Admin\\controller\\$cl";
            $object = new $c;
            return $object;
    }
/*
    public function getBaseDao($class){

        $cl=str_replace('controller','model',$class);
        $c=$cl.'Dao';
        $object = new $c;
        return $object;
    }*/

}