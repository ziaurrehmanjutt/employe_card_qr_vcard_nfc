<?php

namespace App\Controllers\Front;
use App\Controllers\Front\Front_Base;

///Models Use
use App\Models\Front\Front_User_Model;
class Front_User extends Front_Base
{
    public function login()
    {
        $e= "";
        if(isset($_POST['login'])){
            $m = new Front_User_Model();
            $r = $m->login($this->request->getVar('email'));
            if($r){
                $verify = password_verify($this->request->getVar('password'), $r['user_password']);
                if($verify){
                    if($r['user_status'] != 1){
                        $e = "Your Account is Not Active";
                    }else{
                        $this->session->set('user_login',$verify);
                        return redirect()->to('home');
                        // echo "login";die;
                    }
                }else{
                    $e = "Invalid Password Used";
                }
            }else{
                $e = "No User With This Email";
            }
        }
        $er['error'] = $e;
        return $this->loadViews('profile/login', $er);
    }
} //app\Views\front\pages\home.php
