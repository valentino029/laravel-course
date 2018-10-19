<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inventori extends Model
{
    // if table name not plural
    
    // whitelist
    protected $fillable = ['nama_inventori']; 
    // blacklist
    protected $guarded = ['no'];

    public function Arsip(){
        return $this->belongsTo('App\Arsip','id');
    }

    use softDeletes;
    protected $dates = ['deleted_at'];
    
}
