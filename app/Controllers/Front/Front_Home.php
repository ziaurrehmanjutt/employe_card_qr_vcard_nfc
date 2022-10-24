<?php

namespace App\Controllers\Front;
use App\Controllers\Front\Front_Base;
class Front_Home extends Front_Base
{
    public function index()
    {
        return $this->loadViews('home');
    }
} //app\Views\front\pages\home.php
