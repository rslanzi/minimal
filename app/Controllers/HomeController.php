<?php

namespace App\Controllers;

use Minimal\Controllers\BaseController;

class HomeController extends BaseController
{
    public function index()
    {
        return $this->render('home', [
        	'title' => 'Home page'
        ]);
    }
}
