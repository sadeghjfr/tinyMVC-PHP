<?php

namespace System\Traits;

trait Redirect{

    protected function redirect($url){

        $protocol = stripos($_SERVER['SERVER_PROTOCOL'], 'https') ? 'https://' : 'http://';
        header("Location: " . $protocol . $_SERVER['HTTP_HOST'] . "/tinyMVC/" . $url);
    }

    protected function back(){

        $httpReferer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : null;

        if ($httpReferer != null)
            header("Location: " . $_SERVER['HTTP_REFERER']);

        else
            echo "route not found";

    }

}