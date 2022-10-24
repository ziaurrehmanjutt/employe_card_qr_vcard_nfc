<?php

namespace App\Controllers\Front;
use App\Controllers\GlobalBase;
class Front_Base extends GlobalBase
{
    public function loadViews($page,$page_data=[],$footer=null,$footer_data=[]){
        $allViews = 
        view('front/include/header').view('front/pages/'.$page,$page_data).view('front/include/footer1');
        if($footer){
            $allViews .= view('front/pages/'.$footer,$footer_data);
        }
        return $allViews .view('front/include/footer2');
    }
}