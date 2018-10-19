<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Departement extends Model
{
   
    // whitelist
    protected $fillable = ['nama_departement']; 
    // blacklist
    protected $guarded = ['id'];

    use softDeletes;
    protected $dates = ['deleted_at'];

    public function jabatan(){
        return $this->hasMany('App\Jabatan','id_departement');
    }

    
}
