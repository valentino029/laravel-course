<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class JabatanController extends Controller
{
    public function index(){
        $jabatan = DB::table('jabatan')->get();
        return view('jabatan/home',['data'=>$jabatan]);
    }

    public function show($id){
        $jabatan = DB::table('jabatan')->where('no', $id)->first();
        return view('jabatan/show',['data' => $jabatan]);
    }

    public function edit(){
        return view('jabatan/edit');
    }

    public function tambah(){
        return view('jabatan/tambah');
    }
}
