<?php

namespace App\Controller\Admin;

use App\Controller\Controller;

class Admin extends Controller
{
    public function index() {
        $this->generate('admin/index');
    }
    public function view() {
        print_r('Admin view');
    }
}