<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kk extends Model
{
    public function dusun()
    {
        return $this->belongsTo(Dusun::class);
    }
    public function penduduks()
    {
        return $this->belongsToMany(Penduduk::class);
    }
    public function addPenduduk($penduduk){
        if(is_int($penduduk)){
            $penduduk = Penduduk::where('id',$penduduk)->first();
        }
        return $this->penduduks()->attach($penduduk);
    }
    public function removePenduduk($penduduk){
        if(is_int($penduduk)){
            $penduduk = Penduduk::where('id',$penduduk)->first();
        }
        return $this->penduduks()->detach($penduduk);
    }
    public function upPenduduk($penduduk){
        if(is_array($penduduk)){
            $penduduk = Penduduk::whereIn('id',$penduduk)->first();
        }
        return $this->penduduks()->sync($penduduk);
    }
}
