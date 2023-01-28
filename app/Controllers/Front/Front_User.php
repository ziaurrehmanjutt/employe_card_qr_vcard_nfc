<?php

namespace App\Controllers\Front;
use App\Controllers\Front\Front_Base;

///Models Use
use App\Models\Front\Front_User_Model;
class Front_User extends Front_Base
{
    protected $helpers = ['form'];
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
                        $this->session->set('user_login',$r);
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


    public function register()
    {
        $e= "";
        if(isset($_POST['login'])){
            $validation = \Config\Services::validation();
            $validation->setRules([
                'company_name' => 'required',
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|is_unique[all_users.user_email]|valid_email',
                'password' => 'required|min_length[6]',
            ]);
            if($validation->withRequest($this->request)->run()){
                $m = new Front_User_Model();

                $data = [
                    "company_name" => $this->request->getVar('company_name'),
                ];
                $comp  = $m->insertData("all_companies",$data);
        
                $data = [
                    "first_name" => $this->request->getVar('first_name'),
                    "last_name" => $this->request->getVar('last_name'),
                    "user_email" => $this->request->getVar('email'),
                    "user_password" => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                    "company_id" =>  $comp,
                    "user_type" => 2,
                ];
                $user = $m->insertData("all_users",$data);
                $m->updateData("all_companies",["user_id"=>$user],["rowid"=>$comp]);
                return redirect()->to('login');
            }else{
                $e = "Can't Register, Please Fix above fields";
            }
        }
        $er['error'] = $e;
        return $this->loadViews('profile/register', $er);
    }
} //app\Views\front\pages\home.php
