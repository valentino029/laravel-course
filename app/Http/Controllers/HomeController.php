<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; //ini fungsi untuk login
use App\Karyawan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id; //Ini Id User yang telah login

        $data_karyawan = Karyawan::where('id',$id)->first(); //data karyawan di looping
        session(['karyawan'=>$data_karyawan]); //data karyawan dimasukan kedalam session

        return view('home.home');
    }
}
