<?php

namespace App\Controllers\User;
use App\Controllers\GlobalBase;
class User_Base extends GlobalBase
{
    public function loadViews($page,$page_data=[],$footer=null,$footer_data=[]){
        $allViews = 
        view('user/include/header').view('user/pages/'.$page,$page_data).view('user/include/footer1');
        if($footer){
            $allViews .= view('user/pages/'.$footer,$footer_data);
        }
        return $allViews .view('user/include/footer2');
    }
}