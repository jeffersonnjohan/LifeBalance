<?php

namespace App\Http\Controllers;

use App\Models\DietDay;
use App\Http\Requests\StoreDietDayRequest;
use App\Http\Requests\UpdateDietDayRequest;

class DietDayController extends Controller
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
     * @param  \App\Http\Requests\StoreDietDayRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDietDayRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DietDay  $dietDay
     * @return \Illuminate\Http\Response
     */
    public function show(DietDay $dietDay)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DietDay  $dietDay
     * @return \Illuminate\Http\Response
     */
    public function edit(DietDay $dietDay)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDietDayRequest  $request
     * @param  \App\Models\DietDay  $dietDay
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDietDayRequest $request, DietDay $dietDay)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DietDay  $dietDay
     * @return \Illuminate\Http\Response
     */
    public function destroy(DietDay $dietDay)
    {
        //
    }
}
