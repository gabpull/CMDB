<?php

namespace App\Http\Controllers;

use App\Models\tb_piso;
use App\Http\Requests\Storetb_pisoRequest;
use App\Http\Requests\Updatetb_pisoRequest;

class TbPisoController extends Controller
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
     * @param  \App\Http\Requests\Storetb_pisoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storetb_pisoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tb_piso  $tb_piso
     * @return \Illuminate\Http\Response
     */
    public function show(tb_piso $tb_piso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tb_piso  $tb_piso
     * @return \Illuminate\Http\Response
     */
    public function edit(tb_piso $tb_piso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatetb_pisoRequest  $request
     * @param  \App\Models\tb_piso  $tb_piso
     * @return \Illuminate\Http\Response
     */
    public function update(Updatetb_pisoRequest $request, tb_piso $tb_piso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tb_piso  $tb_piso
     * @return \Illuminate\Http\Response
     */
    public function destroy(tb_piso $tb_piso)
    {
        //
    }
}
