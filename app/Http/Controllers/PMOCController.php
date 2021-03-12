<?php

namespace App\Http\Controllers;

use App\Models\PMOC;
use Illuminate\Http\Request;

class PMOCController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        PMOC::create($request->all());

        return redirect()->route('index.machines')->with('error', 'Ação realizada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PMOC  $pMOC
     * @return \Illuminate\Http\Response
     */
    public function show(PMOC $pMOC)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PMOC  $pMOC
     * @return \Illuminate\Http\Response
     */
    public function edit(PMOC $pMOC)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PMOC  $pMOC
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PMOC $pMOC)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PMOC  $pMOC
     * @return \Illuminate\Http\Response
     */
    public function destroy(PMOC $pMOC)
    {
        //
    }
}
