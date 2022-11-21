<?php

namespace App\Models\Front;
use App\Models\Base_Model;
class Shared_Model extends Base_Model
{
    public function all_countries(){
        $builder =  $this->db->table('all_countries');
        $result = $builder->get()->getResultArray();
        return $result;
    }
}