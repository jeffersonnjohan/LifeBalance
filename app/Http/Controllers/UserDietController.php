<?php

namespace App\Http\Controllers;

use App\Models\UserDiet;
use App\Http\Requests\StoreUserDietRequest;
use App\Http\Requests\UpdateUserDietRequest;

class UserDietController extends Controller
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
     * @param  \App\Http\Requests\StoreUserDietRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserDietRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserDiet  $userDiet
     * @return \Illuminate\Http\Response
     */
    public function show(UserDiet $userDiet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserDiet  $userDiet
     * @return \Illuminate\Http\Response
     */
    public function edit(UserDiet $userDiet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserDietRequest  $request
     * @param  \App\Models\UserDiet  $userDiet
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserDietRequest $request, UserDiet $userDiet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserDiet  $userDiet
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserDiet $userDiet)
    {
        //
    }
}
