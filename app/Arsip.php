<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Arsip extends Model
{
    // if table name not plural
    
    // whitelist
    protected $fillable = ['nama_arsip']; 
    // blacklist
    protected $guarded = ['no'];

    public function Inventori(){
        return $this->hasOne('App\Inventori','id_arsip');
    }

    use softDeletes;
    protected $dates = ['deleted_at'];
    
}
