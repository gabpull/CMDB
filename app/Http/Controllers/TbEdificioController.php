<?php

namespace App\Http\Controllers;

use App\Models\tb_edificio;
use App\Http\Requests\Storetb_edificioRequest;
use App\Http\Requests\Updatetb_edificioRequest;

class TbEdificioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* $edificios = tb_edificio::all();
        return view('forms.index', compact('edificios')); */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $edificios = new tb_edificio();
        return view('forms.create');
        //return 'Hola';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storetb_edificioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storetb_edificioRequest $request)
    {
        //tb_edificio::create($request->all());

        tb_edificio::create([
            'desc_edificio' => $request->input('desc_edificio'),
            'activo' => $request->input('activo'),
            'usuario_creacion' => $request->input('usuario_creacion'),
            'usuario_modificacion' => $request->input('usuario_modificacion'),
        ]);

        

        return redirect('/edificios');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tb_edificio  $tb_edificio
     * @return \Illuminate\Http\Response
     */
    public function show(tb_edificio $tb_edificio)
    {
        $edificios = tb_edificio::all();
        return view('forms.index', compact('edificios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tb_edificio  $tb_edificio
     * @return \Illuminate\Http\Response
     */
    public function edit(tb_edificio $tb_edificio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatetb_edificioRequest  $request
     * @param  \App\Models\tb_edificio  $tb_edificio
     * @return \Illuminate\Http\Response
     */
    public function update(Updatetb_edificioRequest $request, tb_edificio $tb_edificio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tb_edificio  $tb_edificio
     * @return \Illuminate\Http\Response
     */
    public function destroy(tb_edificio $tb_edificio)
    {
        //
    }
}
