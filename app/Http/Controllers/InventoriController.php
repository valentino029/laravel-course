<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class InventoriController extends Controller
{
    public function index(){
        $inventori = DB::table('inventori')->get();
        return view('inventori/home',['data'=>$inventori]);
    }

    public function show($id){
        $inventori = DB::table('inventori')->where('no', $id)->first();
        return view('inventori/show',['data' => $inventori]);
    }

    public function edit(){
        return view('inventori/edit');
    }

    public function tambah(){
        return view('inventori/tambah');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
