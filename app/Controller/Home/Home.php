<?php

namespace App\Controller\Home;

use App\Controller\Controller;

class Home extends Controller
{
    public function index() {
        $this->generate('home/index');
    }

    public function view() {
        print_r('Home view');
    }
}