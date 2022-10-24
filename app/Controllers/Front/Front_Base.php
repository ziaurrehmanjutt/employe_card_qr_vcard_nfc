<?php

namespace App\Controllers\Front;
use App\Controllers\GlobalBase;
class Front_Base extends GlobalBase
{
    public function index()
    {
        return view('welcome_message');
    }
}
