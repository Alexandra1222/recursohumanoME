<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    //relacion uno a muchos inversa 
    public function plaza(){
        return $this->belongsTo(Plaza::class);
    }

    //relacion uno a muchos inversa 
    public function personas(){
        return $this->belongsTo(Persona::class);
    }
}
