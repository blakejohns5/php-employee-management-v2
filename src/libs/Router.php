<?php


class Router
{
    public function __construct()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : null;  
        $url = rtrim($url, '/');  // removes the bars at the beginning and end of string
        $url = explode('/', $url);  // creates array of strings separated by /  
    }
}



$obj = new Router();