<?php

namespace App\Http\Controllers;

use App\Models\Diet;
use App\Http\Requests\StoreDietRequest;
use App\Http\Requests\UpdateDietRequest;

class DietController extends Controller
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
     * @param  \App\Http\Requests\StoreDietRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDietRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Diet  $diet
     * @return \Illuminate\Http\Response
     */
    public function show(Diet $diet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Diet  $diet
     * @return \Illuminate\Http\Response
     */
    public function edit(Diet $diet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDietRequest  $request
     * @param  \App\Models\Diet  $diet
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDietRequest $request, Diet $diet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Diet  $diet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Diet $diet)
    {
        //
    }
}