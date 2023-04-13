<?php

namespace App\Http\Controllers;

use App\Models\EnrollmentWorkout;
use App\Http\Requests\StoreEnrollmentWorkoutRequest;
use App\Http\Requests\UpdateEnrollmentWorkoutRequest;

class EnrollmentWorkoutController extends Controller
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
     * @param  \App\Http\Requests\StoreEnrollmentWorkoutRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEnrollmentWorkoutRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EnrollmentWorkout  $enrollmentWorkout
     * @return \Illuminate\Http\Response
     */
    public function show(EnrollmentWorkout $enrollmentWorkout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EnrollmentWorkout  $enrollmentWorkout
     * @return \Illuminate\Http\Response
     */
    public function edit(EnrollmentWorkout $enrollmentWorkout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEnrollmentWorkoutRequest  $request
     * @param  \App\Models\EnrollmentWorkout  $enrollmentWorkout
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEnrollmentWorkoutRequest $request, EnrollmentWorkout $enrollmentWorkout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EnrollmentWorkout  $enrollmentWorkout
     * @return \Illuminate\Http\Response
     */
    public function destroy(EnrollmentWorkout $enrollmentWorkout)
    {
        //
    }
}
