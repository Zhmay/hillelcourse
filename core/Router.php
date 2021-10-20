<?php

namespace Core;

use App\Controller\Errors\Error404;


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
        $classNameSpaceFolder = 'App\Controller\\' . ucfirst($this->controller) . '\\' . ucfirst($this->controller);


        if(class_exists($classNameSpace)) {
            $clsObj = new $classNameSpace;
        } elseif(class_exists($classNameSpaceFolder)){
            $clsObj = new $classNameSpaceFolder;
        }

        if (isset($clsObj)) {
            $method = $this->method;

            if (method_exists($clsObj, $method)) {
                return $clsObj->$method();
            }
        }

        $error404 = new Error404();
        $error404->index();
    }

    public function init()
    {
        $path = [];
        if (!empty($_SERVER['REDIRECT_URL'])) {
            $path = explode('/', $_SERVER['REDIRECT_URL']);
        }
        $this->controller = (!empty($path[1]) && $path[1] != 'index') ? ucfirst($path[1]) : 'Index';
        $this->method = (!empty($path[2])) ? $path[2] : 'index';
    }
}
