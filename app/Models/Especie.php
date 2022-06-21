<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especie extends Model
{
    use HasFactory;
    protected $table = 'especies';

    public function fotografia(){
        return $this->hasMany('App\Models\Fotografia');
    }
}
