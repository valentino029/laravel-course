<?php
 namespace App;
 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;

 class Karyawan extends Model
{
    
    //whitelist
    protected $fillable = ['nama_karyawan','alamat','telepon','jabatan'];
    //blacklist
    protected $guarded = ['id'];
    // created_at updated_at tidak terpakai
    public $timestamps = false;
     
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function jabatan(){
        return $this->belongsTo('App\Jabatan','id_jabatan');
    }

    public function user(){
        return $this->belongsTo('App\User','id_user');
    }

    public function inventori(){
        return $this->belongsToMany('App\Inventori','karyawan_inventorys','id_karyawan','id_inventori');
    }
    
}