<?php

namespace Core;

use Controller\Controller;

class Router
{
    protected $controller;
    protected $method;

    public function __construct()
    {
        $this->init();
    }

    public function run()
    {
        $classNameSpace = 'App\Controller\\' . ucfirst($this->controller);

        if (class_exists($classNameSpace)) {
            $clsObj = new $classNameSpace;
            $method = $this->method;
            if (method_exists($clsObj, $method)) {
                return $clsObj->$method();
            }
        }

        print_r('Error');
    }

    public function init()
    {
        $path = [];
        if (!empty($_SERVER['REDIRECT_URL'])) {
            $path = explode('/', $_SERVER['REDIRECT_URL']);
        }
        $this->controller = (!empty($path[1])) ? $path[1] : 'Index';
        $this->method = (!empty($path[2])) ? $path[2] : 'index';
    }
}
