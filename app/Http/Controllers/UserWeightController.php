<?php

namespace App\Http\Controllers;

use App\Models\UserWeight;
use App\Http\Requests\StoreUserWeightRequest;
use App\Http\Requests\UpdateUserWeightRequest;

class UserWeightController extends Controller
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
     * @param  \App\Http\Requests\StoreUserWeightRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserWeightRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserWeight  $userWeight
     * @return \Illuminate\Http\Response
     */
    public function show(UserWeight $userWeight)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserWeight  $userWeight
     * @return \Illuminate\Http\Response
     */
    public function edit(UserWeight $userWeight)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserWeightRequest  $request
     * @param  \App\Models\UserWeight  $userWeight
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserWeightRequest $request, UserWeight $userWeight)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserWeight  $userWeight
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserWeight $userWeight)
    {
        //
    }
}
