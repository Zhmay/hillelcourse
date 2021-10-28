<?php

namespace App\Controller;

class Index extends Controller
{
    public function index() {
        $this->generate('/index');
    }

    public function view() {
        print_r('Main view');
    }
}