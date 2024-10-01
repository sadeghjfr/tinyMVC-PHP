<?php

namespace System\Bootstrap;

class Autoload{

    public function autoLoader(){

        spl_autoload_register(function ($className){

            $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
            require_once $_SERVER['DOCUMENT_ROOT'] . BASE_DIR . $className . ".php";
        });
    }
}