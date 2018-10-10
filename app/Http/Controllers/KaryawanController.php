<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class KaryawanController extends Controller
{
    public function index(){
        return view('karyawan/home');
    }
}
