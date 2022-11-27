<?php

namespace App\Controllers;
use App\Models\Front\Shared_Model;

class GlobalBase extends BaseController
{
    public $session;
    public $shared;
    public function __construct(){
        $this->session = session();
        $this->shared = new Shared_Model();
    }
    public function index()
    {
        return view('welcome_message');
    }
}
