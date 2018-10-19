<?php
 namespace App;
 use Illuminate\Database\Eloquent\Model;

 class Karyawan extends Model
{
    // jika nama tabel bukan plural
    protected $table = 'karyawan';
    //whitelist
    protected $fillable = ['nama_karyawan','alamat','telepon','jabatan'];
    //blacklist
    protected $guarded = ['no'];
    // created_at updated_at tidak terpakai
    public $timestamps = false;
     
    // use SoftDeletes;
    // protected $dates = ['deleted_at];
    
}