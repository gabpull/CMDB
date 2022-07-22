<?php

namespace App\Http\Controllers;

use App\Models\tb_marca;
use App\Http\Requests\Storetb_marcaRequest;
use App\Http\Requests\Updatetb_marcaRequest;
use Illuminate\Http\Request;

class TbMarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marcas = new tb_marca();
        return view('forms.marcas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storetb_marcaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storetb_marcaRequest $request)
    {
        $request->validate([
            'desc_marca' => 'required|unique:tb_marcas|max:250',
        ]);

        tb_marca::create([
            'desc_marca' => $request->input('desc_marca'),
            'usuario_creacion' => $request->input('usuario_creacion'),
            'usuario_modificacion' => $request->input('usuario_modificacion'),
        ]);

        

        return redirect('marcas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tb_marca  $tb_marca
     * @return \Illuminate\Http\Response
     */
    public function show(tb_marca $tb_marca)
    {
        $marcas = tb_marca::all();

        return view('forms.marcas.index', compact('marcas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tb_marca  $tb_marca
     * @return \Illuminate\Http\Response
     */
    public function edit(tb_marca $marca)
    {
        return view('forms.marcas.edit')->with([
            'marca' => $marca,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatetb_marcaRequest  $request
     * @param  \App\Models\tb_marca  $tb_marca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tb_marca $marca)
    {
        $request->validate([
            'desc_marca' => 'required|max:250',
        ]);
        $marca->update([
            'desc_marca' => $request->input('desc_marca'),
            'usuario_modificacion' => $request->input('usuario_modificacion'),
        ]);
        return redirect('/marcas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tb_marca  $tb_marca
     * @return \Illuminate\Http\Response
     */
    public function destroy(tb_marca $marca)
    {
        $marca->delete();
        return redirect('/marcas');
    }
}
