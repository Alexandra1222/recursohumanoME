<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pof;

class PofController extends Controller
{
    public function index(){
        
        $pofs=Pof::where('estado',2)->get();

        return view('pofs.index',compact('pofs'));
    }
}
