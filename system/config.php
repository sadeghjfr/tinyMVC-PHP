<?php

const BASE_URL = "http://localhost/tinyMVC/";
const BASE_DIR = "/tinyMVC/";

$tmp = explode("?", $_SERVER['REQUEST_URI']);
$currentRoute = str_replace(BASE_DIR, '', $tmp[0]);
unset($tmp);

$dbHost = "localhost";
$dbName = "tinymvc_db";
$dbUsername = "root";
$dbPassword = "";