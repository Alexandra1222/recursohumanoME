<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nomeclador;



class NomencladorCargosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nomenclador=Nomeclador::all();
        dd($nomenclador);
        return view('admin.cargos.index',compact('nomenclador'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cargos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'agru'=>'required',
            'cod'=>'required',
            'descripcion'=>'required',
            'tipo_nomenclador'=>'required',

        ]);

        //para tener un nuevo registro de categoria
        $nomenclador = Nomeclador::create($request->all());
         return redirect()->route('admin.cargos.edit',$nomenclador);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Nomeclador $nomenclador)
    {
        return view('admin.cargos.show',compact('nomenclador'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Nomeclador $nomenclador)
    {
        return view('admin.cargos.edit',compact('nomenclador'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( Nomeclador $nomenclador)
    {
        $request->validate([
            'agru'=>'required',
            'cod'=>'required',
            'descripcion'=>'required',
            'tipo_nomenclador'=>'required',

        ]);
        $nomenclador->update($request->all());
        return redirect()->route('admin.cargos.edit',$nomenclador);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nomeclador $nomenclador)
    {
        return view('admin.cargos.destroy',compact('nomenclador'));
    }
}
