<?php
//password_hash
namespace App\Models\User;
use App\Models\User\User_Base_Model;
class User_Contact_Model extends User_Base_Model
{
    public function get_all_cards($user_id){
        $builder =  $this->db->table('all_user_contacts');
        $select = "contatc_id,user_id,card_url,first_name,last_name,mobile_number_code,mobile_number,card_image,company_name";
        $builder->select($select)->where('user_id',$user_id);
        $result = $builder->get()->getResultArray();
        return $result;
    }
    public function get_single_card($card_url){
        $builder =  $this->db->table('all_user_contacts');
        $select = "*";
        $builder->select($select)->where('card_url',$card_url);
        $result = $builder->get()->getRowArray();
        return $result;
    }
}