<?php

namespace App\Controllers\Front;
use App\Controllers\GlobalBase;
class Front_Home extends GlobalBase
{
    public function index()
    {
        return view('front/pages/home');
    }
} //app\Views\front\pages\home.php
