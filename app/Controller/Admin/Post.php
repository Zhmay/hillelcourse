<?php

namespace App\Controller\Admin;

use App\Controller\Controller;
use App\Models\Post as PostModel;
use App\Helpers\GlobalFilters;

class Post extends Controller
{
    private $postList;
    public function __construct()
    {
        $this->postList = new PostModel();
    }

    public function post() {

        $this->generate('admin/post/index', $this->postList->getPost(GlobalFilters::postFilter()));
    }

    public function create() {
        $this->generate('admin/post/create');
    }

    public function update() {
        $this->generate('admin/post/update');
    }

    public function delete() {

    }
}