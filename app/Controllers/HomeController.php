<?php

namespace App\Controllers;

use Minimal\Controllers\BaseController;

class HomeController extends BaseController
{
    public function index()
    {
        // return 'Home page';
        return $this->render('home', ['title' => 'Home page']);
    }
}
