<?php

namespace App\Controllers\User;
use App\Controllers\GlobalBase;
class User_Base extends GlobalBase
{
    public $headerTitle;
    public $headerDescription;
    public $headerIcon;
    public $activeLink = "";
    public function loadViews($page,$page_data=[],$footer=null,$footer_data=[]){
        $headData['title'] = $this->headerTitle;
        $headData['description'] = $this->headerDescription;
        $headData['icon'] = $this->headerIcon;
        $headData['active'] = $this->activeLink;
        $allViews = 
        view('user/include/header',$headData).view('user/pages/'.$page,$page_data).view('user/include/footer1');
        if($footer){
            $allViews .= view('user/pages/'.$footer,$footer_data);
        }
        return $allViews .view('user/include/footer2');
    }
}