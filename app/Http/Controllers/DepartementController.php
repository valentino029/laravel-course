<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DepartementController extends Controller
{
    public function index(){
        $departement = DB::table('departement')->get();
        return view('departement/home',['data'=>$departement]);
    }

    public function show($id){
        $departement = DB::table('departement')->where('no', $id)->first();
        return view('departement/show',['data' => $departement]);
    }

    public function edit(){
        return view('departement/edit');
    }

    public function tambah(){
        return view('departement/tambah');
    }
}
