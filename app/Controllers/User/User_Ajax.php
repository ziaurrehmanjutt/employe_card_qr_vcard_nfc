<?php

namespace App\Controllers\User;
use App\Controllers\User\User_Base;
use App\Models\User\User_Settings_Model;
class User_Ajax extends User_Base
{
    public function get_profile()
    {
        $setting = new User_Settings_Model();
        $user_id = $this->session->get('user_login');
        $response = $setting->get_my_settings($user_id);
        echo json_encode($response);
    }
}