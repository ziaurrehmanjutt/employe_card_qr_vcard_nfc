<?php
//password_hash
namespace App\Models\Front;
use App\Models\Front\Front_Base_Model;
class Front_User_Model extends Front_Base_Model
{
    public function login($email){
        $builder =  $this->db->table('all_users');
        $builder->select('*')->where('user_email',$email);
        $result = $builder->get()->getRowArray();
        return $result;
    }
}