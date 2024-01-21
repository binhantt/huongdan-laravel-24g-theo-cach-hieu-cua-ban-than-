<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class table extends Controller
{
  
    public function index(){
        $data  =[];
        $data ["table"] = 'table/index';
        return view( 'table' ,$data);
    }
}
