<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class ArsipController extends Controller
{
    public function index(){
        $arsip = DB::table('arsip')->get();
        return view('arsip/home',['data'=>$arsip]);
    }

    public function show($id){
        $arsip = DB::table('arsip')->where('no', $id)->first();
        return view('arsip/show',['data' => $arsip]);
    }

    public function edit(){
        return view('arsip/edit');
    }

    public function tambah(){
        return view('arsip/tambah');
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
