<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Jabatan;

class JabatanController extends Controller
{
    public function index(){
        $jabatan = Jabatan::all();
        return view('jabatan/home',['data'=>$jabatan]);
    }

    public function show($id){
        $jabatan = DB::table('jabatan')->where('no', $id)->first();
        return view('jabatan/show',['data' => $jabatan]);
    }

    public function edit($id){
        // $pegawai = DB::table('karyawan')
        // ->select('no','nama_karyawan','alamat','telp','jabatan')
        // ->where('no','=',$id)
        // ->get();
        $jabatan = DB::table('jabatan')->where('no', $id)->first();
        //dd($pegawai);
        return view('jabatan/edit',['data' => $jabatan]);
    }

    public function store(Request $request){

       Jabatan::create([
        'nama_jabatan' => $request->nama_jabatan
        ]);
        return redirect('/jabatan');
        }

    public function tambah(){
        return view('jabatan/tambah');
    }

    public function update(Request $request){
        
        Jabatan::where('no', $request->no)
        ->update([
            'nama_jabatan' => $request->nama_jabatan
        ]);
        return redirect('/jabatan');
    }
}
