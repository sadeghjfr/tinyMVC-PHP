<?php

namespace System\Router;
use ReflectionException;
use ReflectionMethod;

class Routing{

    private $currentRoute;

    public function __construct(){

        global $currentRoute;
        $this->currentRoute = explode('/', $currentRoute);
    }


    /**
     * @throws ReflectionException
     */
    public function run(){

        $path = realpath(dirname(__FILE__) . "/../../application/controller/" . $this->currentRoute[0] . '.php');

        if (!file_exists($path)){
            echo "<br/>" . "404 - NOT FOUND...";
            exit();
        }

        require_once ($path);
        sizeof($this->currentRoute) == 1 ? $method = 'index' : $method = $this->currentRoute[1];

        $class = "Application\Controller\\" . $this->currentRoute[0];
        $object = new $class;

        if (method_exists($object, $method)){

            $reflection = new ReflectionMethod($class, $method);
            $parameterCount = $reflection->getNumberOfParameters();

            if ($parameterCount <= count(array_slice($this->currentRoute, 2)))
                call_user_func_array(array($object, $method), array_slice($this->currentRoute, 2));

            else
                echo "404 - parameter error";
        }

        else
            echo "404 - method not exist";




    }


}