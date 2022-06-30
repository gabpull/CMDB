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
     * @param  \App\Http\Requests\Storetb_edificioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storetb_edificioRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tb_edificio  $tb_edificio
     * @return \Illuminate\Http\Response
     */
    public function show(tb_edificio $tb_edificio)
    {
        //
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
