<?php

namespace App\Controllers;

class Cash extends BaseController
{
     public function topup()
     {
         $data = [
             'title' => 'Top Up',
             'menu' => 'topup'
         ];
         echo view('pages/topup', $data);
     }
     public function prabayar()
     {
         $data = [
             'title' => 'PraBayar',
             'menu' => 'transaction'
         ];
         echo view('pages/prabayar', $data);
     }


     public function transaction()
     {
         $data = [
             'title' => 'Transaction',
             'menu' => 'transaction'
         ];
         echo view('pages/transaction', $data);
     }
}
