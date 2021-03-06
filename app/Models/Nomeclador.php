<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nomeclador extends Model
{
    use HasFactory;

    protected $fillable=['agru','cod','descripcion','tipo_nomenclador'];
        
    public function plaza(){
        return $this ->hasmany(Plaza::class);
    }
}
