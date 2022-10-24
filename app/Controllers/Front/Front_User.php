<?php

namespace App\Controllers\Front;
use App\Controllers\GlobalBase;
class Front_User extends GlobalBase
{
    public function index()
    {
        return view('welcome_message');
    }
} //app\Views\front\pages\home.php
