<?php

namespace App\Http\Controllers;

use App\Models\Collect;
use App\Http\Requests\StoreCollectRequest;
use App\Http\Requests\UpdateCollectRequest;

class CollectController extends Controller
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
     * @param  \App\Http\Requests\StoreCollectRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCollectRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Collect  $collect
     * @return \Illuminate\Http\Response
     */
    public function show(Collect $collect)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Collect  $collect
     * @return \Illuminate\Http\Response
     */
    public function edit(Collect $collect)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCollectRequest  $request
     * @param  \App\Models\Collect  $collect
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCollectRequest $request, Collect $collect)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Collect  $collect
     * @return \Illuminate\Http\Response
     */
    public function destroy(Collect $collect)
    {
        //
    }
}
