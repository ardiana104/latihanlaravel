<?php

namespace App\Http\Controllers;

use App\Models\hometoko;
use Illuminate\Http\Request;

class DashboardHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'ini halaman home toko';
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\hometoko  $hometoko
     * @return \Illuminate\Http\Response
     */
    public function show(hometoko $hometoko)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\hometoko  $hometoko
     * @return \Illuminate\Http\Response
     */
    public function edit(hometoko $hometoko)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\hometoko  $hometoko
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, hometoko $hometoko)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\hometoko  $hometoko
     * @return \Illuminate\Http\Response
     */
    public function destroy(hometoko $hometoko)
    {
        //
    }
}
