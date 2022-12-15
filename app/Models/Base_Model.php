<?php

namespace App\Models;
use CodeIgniter\Model;
class Base_Model extends Model
{
    public $db;
    function __construct(){
        parent::__construct();
        $this->db = \Config\Database::connect();
    }

    function updateData($table,$data,$where){
        $builder =  $this->db->table($table);
        $builder->where($where);
        $builder->update($data);
    }

    function insertData($table,$data){
        $builder =  $this->db->table($table);
        $builder->insert($data);
    }
}