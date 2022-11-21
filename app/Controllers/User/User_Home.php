<?php

namespace App\Controllers\User;
use App\Controllers\User\User_Base;
class User_Home extends User_Base
{
    public function home()
    {
        return $this->loadViews('home/home');
    }
    public function setting()
    {
        $sm = new \App\Models\Front\Shared_Model();
        $data['all_countries'] = $sm->all_countries();
        return $this->loadViews('home/settings/update',$data,'home/settings/update_js');
    }
}