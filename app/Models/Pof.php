<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pof extends Model
{
    use HasFactory;


    

    //relacion uno a muchos inversa 
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    //relacion uno a muchos inversa 
    public function institucion (){
        return $this->belongsTo(Institucion::class);
    }

    //relacion de uno a muchos
    public function plaza(){
        return $this ->hasmany(Plaza::class);
    }

}