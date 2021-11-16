<?php

namespace App\Controller\Admin;

use App\Controller\Controller;
use App\Models\Post as PostModel;
use App\Helpers\GlobalFilters;

class Post extends Controller
{
    public function post() {
        $postList = new PostModel();
        $this->generate('admin/post/index', $postList->getPost(GlobalFilters::postFilter()));
    }
}