<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    public function kks(){
        return $this->belongsToMany(Kk::class);
    }
}
