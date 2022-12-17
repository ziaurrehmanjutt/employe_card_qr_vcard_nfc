<?php

namespace App\Controllers\Front;

use App\Controllers\Front\Front_Base;

class Front_Home extends Front_Base
{
    public function index()
    {
        return $this->loadViews('home');
    }
    public function about()
    {
        return $this->loadViews('about');
    }
    public function contact()
    {
        return $this->loadViews('contact');
    }
    public function services()
    {
        return $this->loadViews('services');
    }
    public function pricing()
    {
        return $this->loadViews('pricing');
    }
} //app\Views\front\pages\home.php
