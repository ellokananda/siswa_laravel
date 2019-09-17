<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Walikelas;
use App\Guru;
use App\Kelas;

class walicontroller extends Controller
{
  public function walikelas(){
    $halaman = 'walikelas';
    $walikelas_list = Walikelas::all();
    return view('walikelas.walikelas', compact('halaman', 'walikelas_list'));
  }
  public function create(){
    $halaman = 'walikelas';
    $kelas = Kelas::all();
    $guru = Guru::all();
    return view('walikelas.create', compact('halaman', 'kelas', 'guru'));
  }

  public function store(Request $request){
    Walikelas::create($request->all());
    return redirect('walikelas');
  }

  public function show($id){
    $halaman = 'walikelas';
    $walikelas = Walikelas::findOrFail($id);
    return view('walikelas.show', compact('halaman', 'walikelas'));
  }

  public function edit($id){
    $halaman = 'walikelas';
    $walikelas = Walikelas::findOrFail($id);
    $guru = Guru::all();
    $kelas = Kelas::all();
    return view('walikelas.edit', compact('halaman', 'walikelas', 'guru', 'kelas'));
  }
  public function update($id, Request $request){
    $halaman = 'walikelas';
    $walikelas = Walikelas::findOrFail($id);
    $walikelas->id_kelas = $request->id_kelas;
    $walikelas->id_guru = $request->id_guru;
    $walikelas->save();
    return redirect('walikelas');
  }

  public function delete($id)
  {
    $walikelas = Walikelas::findOrFail($id);
    $walikelas->delete();
    return redirect('walikelas');
  }
}
