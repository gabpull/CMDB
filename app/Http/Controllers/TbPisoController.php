<?php

namespace App\Http\Controllers;

use App\Models\tb_piso;
use App\Http\Requests\Storetb_pisoRequest;
use App\Http\Requests\Updatetb_pisoRequest;
use App\Models\tb_edificio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class TbPisoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $piso = tb_piso::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $piso = new tb_piso();

        //dd($piso);
        $edificios = tb_edificio::all();
        return view('forms.pisos.create', compact('piso', 'edificios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storetb_pisoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storetb_pisoRequest $request)
    {
        $request->validate([
            'desc_piso' => 'required|max:250|unique:tb_pisos,desc_piso,'.$request->desc_piso.',id,id_edificio,'.$request->id_edificio,
            'id_edificio' => 'required',
        ]);

        tb_piso::create([
            'desc_piso' => $request->input('desc_piso'),
            'id_edificio' => $request->input('id_edificio'),
            'activo' => $request->input('activo'),
            'usuario_creacion' => $request->input('usuario_creacion'),
            'usuario_modificacion' => $request->input('usuario_modificacion'),
        ]);

        return redirect('pisos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tb_piso  $tb_piso
     * @return \Illuminate\Http\Response
     */
    public function show(tb_piso $tb_piso)
    {
        $pisos = tb_piso::all();
        $edificios = tb_edificio::all();
        //dd($edificios);
        return view('forms.pisos.index', compact('pisos'))->with([
            'edificios' => $edificios,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tb_piso  $tb_piso
     * @return \Illuminate\Http\Response
     */
    public function edit(tb_piso $piso)
    {
        $pis = new tb_piso();

        //dd($piso);
        $edificios = tb_edificio::all();
        //dd($piso);

        $piru = $piso->pisos;
        //dd(123,$piru);

        return view('forms.pisos.edit', compact('edificios'))->with([
            'piso' => $piso,
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatetb_pisoRequest  $request
     * @param  \App\Models\tb_piso  $tb_piso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tb_piso $piso)
    {
        $request->validate([
            'desc_piso' => 'required|max:250',
        ]);
        $piso->update([
            'desc_piso' => $request->input('desc_piso'),
            'activo' => $request->input('activo'),
            'id_edi' => $request->input('id_edificio'),
            'usuario_modificacion' => $request->input('usuario_modificacion'),
        ]);
        return redirect('/pisos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tb_piso  $tb_piso
     * @return \Illuminate\Http\Response
     */
    public function destroy(tb_piso $piso)
    {
        $piso->delete();
        return redirect('/pisos');
    }
}
