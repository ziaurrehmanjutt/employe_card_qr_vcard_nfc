<?php
//password_hash
namespace App\Models\User;
use App\Models\User\User_Base_Model;
class User_Other_Model extends User_Base_Model
{
    public function get_all_categories(){
        $builder =  $this->db->table('categories');
        $select = "*";
        $builder->select($select)->where('company_id',$this->login['company_id']);
        $result = $builder->get()->getResultArray();
        return $result;
    }
}