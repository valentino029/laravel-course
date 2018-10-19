<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departement;

class DepartementController extends Controller
{
    public function index(){
        $departement = Departement::all();
        return view('departement/home',['data'=>$departement]);
    }

    public function show($id){
        $departement = Departement::where('id', $id)->first();
        return view('departement/show',['data' => $departement]);
    }

    public function edit(){
        return view('departement/edit');
    }

    public function tambah(){
        return view('departement/tambah');
    }
}
