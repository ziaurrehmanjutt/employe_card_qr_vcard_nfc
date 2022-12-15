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
        $setting = new User_Settings_Model();
        $user_id = $this->session->get('user_login');
        if(isset($_POST['update_basic'])){
            $pData = array(
                "first_name" => $this->request->getVar('first_name'),
                "last_name" => $this->request->getVar('last_name'),
            );
            $setting->updateData('all_users',$pData,["user_id"=>$user_id]);
            $pData = array(
                "default_country_code" => $this->request->getVar('default_country_code'),
                "user_time_zone" => $this->request->getVar('user_time_zone'),
                "is_setup_complete"  => 1
            );
            $setting->updateData('user_settings',$pData,["user_id"=>$user_id]);
            $this->session->setFlashdata('toaster', [
                "type"=> "success",
                "message" => "Profile Data Updated Successfully"
            ]);
            return redirect()->route('user/settings');
        }else if(isset($_POST['setting_update'])){
            $data = $_POST;
            unset($data['setting_update']);
            $setting->updateData('user_settings',$data,["user_id"=>$user_id]);
            $this->session->setFlashdata('toaster', [
                "type"=> "success",
                "message" => "Profile Data Updated Successfully"
            ]);
            return redirect()->route('user/settings');
        }
        $data['all_countries'] = $this->shared->all_countries();
        $data['profile'] = $setting->get_my_profile($user_id);
        $data['settings'] = $setting->get_my_settings($user_id);
        // echo "<pre>";
        // print_r($data);
        // die;
        return $this->loadViews('home/settings/update',$data,'home/settings/update_js');
    }
}