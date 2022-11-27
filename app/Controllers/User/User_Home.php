<?php

namespace App\Controllers\User;
use App\Controllers\User\User_Base;
use App\Models\User\User_Settings_Model;
class User_Home extends User_Base
{
    public function home()
    {
        return $this->loadViews('home/home');
    }
    public function setting()
    {
        $data['all_countries'] = $this->shared->all_countries();
        $setting = new User_Settings_Model();
        $data['profile'] = $setting->get_my_profile($this->session->get('user_login'));
        return $this->loadViews('home/settings/update',$data,'home/settings/update_js');
    }
}