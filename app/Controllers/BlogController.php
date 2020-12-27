<?php

namespace App\Controllers;

use Minimal\Controllers\BaseController;

class BlogController extends BaseController
{
    public function index()
    {
        return $this->render('home', ['title' => 'Blog index']);
    }

    public function show()
    {
        return $this->render('home', ['title' => 'Blog show']);
    }
}
