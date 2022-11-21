<?php

namespace App\Controllers\User;
use App\Controllers\User\User_Base;
class User_Contacts extends User_Base
{
    public function add()
    {
        return $this->loadViews('contacts/add');
    }
} 