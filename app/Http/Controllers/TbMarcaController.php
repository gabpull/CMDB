<?php

namespace App\Http\Controllers;

use App\Models\tb_marca;
use App\Http\Requests\Storetb_marcaRequest;
use App\Http\Requests\Updatetb_marcaRequest;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storetb_marcaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storetb_marcaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tb_marca  $tb_marca
     * @return \Illuminate\Http\Response
     */
    public function show(tb_marca $tb_marca)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tb_marca  $tb_marca
     * @return \Illuminate\Http\Response
     */
    public function edit(tb_marca $tb_marca)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatetb_marcaRequest  $request
     * @param  \App\Models\tb_marca  $tb_marca
     * @return \Illuminate\Http\Response
     */
    public function update(Updatetb_marcaRequest $request, tb_marca $tb_marca)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tb_marca  $tb_marca
     * @return \Illuminate\Http\Response
     */
    public function destroy(tb_marca $tb_marca)
    {
        //
    }
}
