<?php
//password_hash
namespace App\Models\User;
use App\Models\User\User_Base_Model;
class User_Settings_Model extends User_Base_Model
{
    public function get_my_profile($user_id){

        $builder =  $this->db->table('all_users');
        $builder->select('*')->where('user_id',$user_id);
        $result = $builder->get()->getRowArray();
        return $result;
    }
}