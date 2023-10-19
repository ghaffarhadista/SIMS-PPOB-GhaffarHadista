<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Beranda',
            'menu' => 'home'
        ];
       echo view('pages/home', $data);
    }
}
