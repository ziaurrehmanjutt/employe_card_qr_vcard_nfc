<?php
//password_hash
namespace App\Models\Front;
use App\Models\Front\Front_Base_Model;
class Front_User_Model extends Front_Base_Model
{
    protected $table = "all_users";
    public function login($email){
        $builder =  $this->db->table('all_users');
        $builder->select('all_users.user_id,user_email,first_name,last_name,user_password,user_type,user_status,rowid as company_id');
        $builder->join("all_companies","all_companies.rowid = all_users.company_id","left")->where('user_email',$email);
        $result = $builder->get()->getRowArray();
        return $result;
    }

   

}