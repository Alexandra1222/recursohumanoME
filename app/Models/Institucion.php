<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    use HasFactory;

    //relacion de uno a muchos entre instituciones  y pofs
    public function pofs(){
        return $this ->hasmany(Pof::class);
    }

    //relacion de uno a muchos entre instituciones  y plaza
    public function plaza(){
        return $this ->hasmany(Plaza::class);
    }

}
