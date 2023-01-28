<?php

namespace App\Controllers\User;

use App\Controllers\User\User_Base;
use App\Models\User\User_Other_Model;


class User_Categories extends User_Base
{
    public function methods()
    {
        $mdl = new User_Other_Model();
        if (isset($_POST['add_category'])) {
            $pData = array(
                "category_name" => $this->request->getVar('name'),
                "descriptions" => $this->request->getVar('description'),
                "company_id" => $mdl->login['company_id'],
            );
            $this->shared->insertData("categories", $pData);
            $this->setToast("Category Added Successfully");
        }
        else if (isset($_POST['update_category'])) {
            $pData = array(
                "category_name" => $this->request->getVar('name'),
                "descriptions" => $this->request->getVar('description'),
            );
            $this->shared->updateData("categories", $pData,["rowid"=>$_POST['cate_id']]);
            $this->setToast("Category Updated Successfully");
        }

        else if (isset($_POST['delete_category']) && $_POST['delete_category']) {
            $this->shared->deleteData("categories", ["rowid"=>$_POST['delete_category']]);
            $this->setToast("Category Deleted");
        }

        return redirect()->route('user/categories');   //
    }
    public function list()
    {
        $mdl = new User_Other_Model();
        $data['list'] = $mdl->get_all_categories();
        return $this->loadViews('categories/list', $data);
    }
    public function detail($id)  
    {
        $resp = $this->shared->getRow("categories", ["rowid"=>$id],"*"); 
        echo json_encode($resp);
        return;
    }
}
