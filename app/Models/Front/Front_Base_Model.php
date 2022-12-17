<?php

namespace App\Models\Front;
use App\Models\Base_Model;
class Front_Base_Model extends Base_Model
{
    public function getSiteData(){
        return $this->db->table('site_settings')->get()->getRowArray();
    }
}