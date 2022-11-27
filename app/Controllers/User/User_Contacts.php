<?php

namespace App\Controllers\User;
use App\Controllers\User\User_Base;
class User_Contacts extends User_Base
{
    public function add()
    {
        $data['countries'] = $this->shared->all_countries();
        return $this->loadViews('contacts/add',$data,"contacts/add_js");
    }
} 