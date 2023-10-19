<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\UserModel;

class Register extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     * 
     */
    use ResponseTrait;

    public function register()
   {
       $data = [
           'title' => 'Register'
       ];
       echo view('pages/register', $data);
   }
   
    public function index()
    {
        helper(['form']);

        // RULES REGIST
        $rules = [
            'email' => 'required|valid_email|is_unique[users.email]',
            'firstName' => 'required',
            'lastName' => 'required',
            'password' => 'required|min_length[8]',
            'confpassword' => 'matches[password]'
        ];

        // VALIDASI INPUT
        if(!$this->validate($rules)) return $this->fail($this->validator->getErrors());

        $data = [
            'email' => $this->request->getVar('email'),
            'firstName' => $this->request->getVar('firstName'),
            'lastName' => $this->request->getVar('lastName'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT)
        ];
        
        $model =  new UserModel();
        $registered = $model->save($data);
        $this->respondCreated($registered);

        return redirect('/')->with('error', 'Registrasi berhasil silahkan login');
    }
}
