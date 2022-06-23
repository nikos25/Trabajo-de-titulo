<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fotografia extends Model
{
    use HasFactory;
    protected $table = 'fotografias';

    public function especie(){
        return $this->belongsTo('App\Models\Especie');
    }
}
