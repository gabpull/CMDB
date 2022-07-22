<?php

namespace App\Http\Controllers;

use App\Models\tb_modelo;
use App\Http\Requests\Storetb_modeloRequest;
use App\Http\Requests\Updatetb_modeloRequest;
use App\Models\tb_marca;

class TbModeloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modelo = tb_modelo::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modelo = new tb_modelo();

        $marcas = tb_marca::all();
        return view('forms.modelos.create', compact('modelo', 'marcas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storetb_modeloRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storetb_modeloRequest $request)
    {
        $request->validate([
            'desc_modelo' => 'required|max:250|unique:tb_modelos,desc_modelo,'.$request->desc_modelo.',id,id_marca,'.$request->id_marca,
            'id_marca' => 'required',
        ]);

        tb_modelo::create([
            'desc_modelo' => $request->input('desc_modelo'),
            'id_marca' => $request->input('id_marca'),
            'usuario_creacion' => $request->input('usuario_creacion'),
            'usuario_modificacion' => $request->input('usuario_modificacion'),
        ]);

        return redirect('modelos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tb_modelo  $tb_modelo
     * @return \Illuminate\Http\Response
     */
    public function show(tb_modelo $modelo)
    {
        $modelos = tb_modelo::all();
        $marcas = tb_marca::all();
        return view('forms.modelos.index', compact('modelos'))->with([
            'marcas' => $marcas,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tb_modelo  $tb_modelo
     * @return \Illuminate\Http\Response
     */
    public function edit(tb_modelo $tb_modelo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatetb_modeloRequest  $request
     * @param  \App\Models\tb_modelo  $tb_modelo
     * @return \Illuminate\Http\Response
     */
    public function update(Updatetb_modeloRequest $request, tb_modelo $tb_modelo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tb_modelo  $tb_modelo
     * @return \Illuminate\Http\Response
     */
    public function destroy(tb_modelo $tb_modelo)
    {
        //
    }
}
