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
        helper('text');
    }

    public function index()
    {
        return view('welcome_message');
    }
    public function not_found($message = "Not Found")
    {
        return view('errors/html/error_404.php',["message"=>$message]);
    } 
}
