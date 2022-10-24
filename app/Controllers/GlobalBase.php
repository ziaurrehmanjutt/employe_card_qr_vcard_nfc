<?php

namespace App\Controllers;

class GlobalBase extends BaseController
{
    public $session;
    public function __construct(){
        $this->session = session();
    }
    public function index()
    {
        return view('welcome_message');
    }
}
