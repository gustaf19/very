<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dusun extends Model
{
    public function kks(){
        return $this->belongsToMany(Kk::class);
    }
}
