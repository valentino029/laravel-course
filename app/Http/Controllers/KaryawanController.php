<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Karyawan;

class KaryawanController extends Controller
{
    public function index(){
        //$pegawai = DB::table('karyawan')->get();

        // Eloquent
        $pegawai = Karyawan::all();
        return view('karyawan/home',['data'=>$pegawai]);

         
    }

    public function create(){
        //
    }

    public function tambah(){
        return view('karyawan/tambah');
    }

    public function store(Request $request){

        Karyawan::create([
         'nama_karyawan' => $request->nama_karyawan,
         'alamat' => $request->alamat,
         'telepon' => $request->telepon,
         'jabatan' => $request->jabatan
         ]);
         return redirect('/karyawan');
         }

    //public function store(){
        // Insert use query builder
        // DB::table('karyawan')->insert(
        //     ['nama_karyawan' => 'yusup bin sanusi',
        //      'alamat' => 'kalijodo',
        //      'telp' => '085672',
        //      'jabatan' => 'juragan kost']
        // );
         
        
        // Eloquent ORM
         // insert biasa
         //$karyawan = new Karyawan;
         //$karyawan->nama_karyawan = 'Herlambang';
         //$karyawan->alamat = 'skskssj';
         //$karyawan->telepon = '082728290';
         //$karyawan->jabatan = '1';
         //$karyawan->save();

         // mass assigment
        //Karyawan::create([
        //'nama_karyawan' => 'Herlambang',
        //'tlpn' => '012892109821',
        // ]);
        
        // Karyawan::create([
        // 'nama_karyawan' => 'asd',
        // 'alamat' => 'sasasa',
        // 'telp' => '012892109821',
        // 'jabatan' => 'programmer',
        // ]);
        //}

    public function show($id){
        //$pegawai = DB::table('karyawan')->where('no', $id)->first();
        // Eloquent
        $pegawai = Karyawan::where('no','=',$id)->first();
        if(!$pegawai){
            abort(404);
        }
        return view('karyawan/show',['data' => $pegawai]);
    }

    public function edit($id){
 
        // $pegawai = DB::table('karyawan')
        // ->select('no','nama_karyawan','alamat','telp','jabatan')
        // ->where('no','=',$id)
        // ->get();

        $pegawai = DB::table('karyawan')->where('no', $id)->first();

        //dd($pegawai);

       return view('karyawan/edit',['data' => $pegawai]);
   }

   public function update(Request $request){
    // use Query Builder
    // DB::table('karyawan')
    //     ->where('no', $id)
    //     ->update(['nama_karyawan' => 'Sanusi bin Ucok']);
     // Eloquent
     // Update biasa
    // $karyawan = Karyawan::where('no', $id)->first();
    // $karyawan->nama_karyawan = 'Herlambang';
    // $karyawan->alamat = 'skskssj';
    // $karyawan->telp = '082728290';
    // $karyawan->jabatan = '1';
    // $karyawan->save();
     // Update Mass Asigment
     //dd($request);
     Karyawan::where('no', $request->no)
    ->update([
        'nama_karyawan' => $request->nama_karyawan,
        'alamat' => $request->alamat,
        'telepon' => $request->telepon,
        'jabatan' => $request->jabatan
    ]);
     return redirect('/karyawan');
    }

    public function delete($id){
        
        // use Query Builder
        // DB::table('karyawan')->where('no', '=', $id)->delete();
    }
    
}