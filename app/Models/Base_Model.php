<?php

namespace App\Models;
use CodeIgniter\Model;
class Base_Model extends Model
{

    public $db;
    public $login;
    function __construct(){
        parent::__construct();
        $this->db = \Config\Database::connect();
        $this->login  = session()->get('user_login');
    }

    function updateData($table,$data,$where){
        $builder =  $this->db->table($table);
        $builder->where($where);
        $builder->update($data);
    }

    function insertData($table,$data){
        $builder =  $this->db->table($table);
        $builder->insert($data);
        return $this->db->insertID();
    }

    function deleteData($table,$where){
        $builder =  $this->db->table($table);
        return $builder->delete($where);
    }

    function getRow($table,$where,$select){
        $builder =  $this->db->table($table);
        $builder->select($select)->where($where);
        $result = $builder->get()->getRowArray();
        return $result;
    }
}