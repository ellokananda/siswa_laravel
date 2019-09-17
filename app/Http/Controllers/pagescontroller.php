<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagescontroller extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
    public function homepage(){
      return view('pages.homepage');
    }

    public function about(){
      return view('pages.about', compact('halaman'));
    }

    public function siswa(){
      return view('pages.siswa.index', compact('halaman'));
    }

    public function template(){
      return view('templatee');
    }
}
