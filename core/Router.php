<?php

namespace Core;

use App\Controller\Errors\Error404;

class Router
{
    protected $controller;
    protected $method;
    protected $page;

    public function __construct()
    {
        $this->init();
    }

    public function run()
    {

        $folderPath = 'app/Controller/' .  ucfirst($this->page);

        if(is_dir($folderPath)) {
            $classNameSpace = 'App\Controller\\' . ucfirst($this->page) . '\\' . ucfirst($this->controller);
        } else {
            $classNameSpace = 'App\Controller\\' . ucfirst($this->controller);
        }

        if (class_exists($classNameSpace)) {
            $clsObj = new $classNameSpace;
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
        $this->page = (!empty($path[1])) ? $path[1] : 'Index';
        $this->controller = (!empty($path[2])) ? $path[2] : $path[1] ?? 'Index';
        $this->method = (!empty($path[3])) ? $path[3] : 'index';
    }
}

