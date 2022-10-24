<?php

namespace App\Controllers;

class GlobalBase extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
}
