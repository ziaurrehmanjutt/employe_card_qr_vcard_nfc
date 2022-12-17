<?php

namespace App\Controllers\Front;
use App\Controllers\GlobalBase;
use App\Models\Front\Front_Base_Model;
class Front_Base extends GlobalBase
{

    public function loadViews($page,$page_data=[],$footer=null,$footer_data=[],$header_data=[]){
        $siteMDl = new Front_Base_Model();
        $siteData = $siteMDl->getSiteData();
        $footer_data['site'] = $header_data['site'] =  $siteData;
        $allViews = view('front/include/header',$header_data).view('front/pages/'.$page,$page_data).view('front/include/footer1');
        if($footer){
            $allViews .= view('front/pages/'.$footer,$footer_data);
        }
        return $allViews .view('front/include/footer2');
    }
}