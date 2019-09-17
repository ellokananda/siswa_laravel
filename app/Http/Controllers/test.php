<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test extends Controller
{
    public function form(){
      return view('form_view');
    }

    public function first(){
      $data["tittle"] = "Hello Laravel";
      $data["message"] = "Belajar Laravel itu mudah";
      return view("test_view",$data);
    }

    
}
