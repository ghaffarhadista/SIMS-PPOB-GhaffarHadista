<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Controllers\BaseController;

class User extends BaseController
{
   public function akun()
   {
       $data = [
           'title' => 'Akun',
           'menu' => 'akun'
       ];
       echo view('pages/akun', $data);
   }

   public function edit()
   {
        $userModel = new UserModel();
        $data = [
            'title' => 'Edit Profile',
            'menu' => 'akun',
            'userModel' => $userModel
        ];
        echo view('pages/akun-edit', $data);
   }
   
   public function update()
   {
    dd($this->request->getVar());
   }
}
