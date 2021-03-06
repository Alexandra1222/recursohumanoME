<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plaza extends Model
{
    use HasFactory;

    //relacion de uno a muchos
    public function servicio(){
        return $this ->hasmany(Servicio::class);
    }

     //relacion uno a muchos inversa 
     public function cargos(){
        return $this->belongsTo(NomencladorCargo::class);
    }

    //relacion uno a muchos inversa 
    public function institucion (){
        return $this->belongsTo(Institucion::class);
    }

     //relacion uno a muchos inversa 
     public function pof(){
        return $this->belongsTo(Pof::class);
    }

    
}
