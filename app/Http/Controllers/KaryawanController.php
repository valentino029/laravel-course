<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Karyawan;

class KaryawanController extends Controller
{
    public function index(){
        $pegawai = DB::table('karyawan')->get();
        return view('karyawan/home',['data'=>$pegawai]);
    }

    public function create(){
        //
    }

    public function store(){
        //Eloquent ORM

        //insert biasa
        //$karyawan = new karyawan;
        //$karyawan->nama_karyawan = 'Valentino';
        //$karyawan->jabatan = '1';
        //$karyawan->save();

        //mass assigment

        karyawan::create(['nama_karyawan' => 'Valentino', 'telepon' => '082298688405',]);
    }

    public function show($id){
        $pegawai = DB::table('karyawan')->where('no', $id)->first();
        return view('karyawan/show',['data' => $pegawai]);
    }

    public function edit(){
        return view('karyawan/edit');
    }

    public function tambah(){
        return view('karyawan/tambah');
    }
}
