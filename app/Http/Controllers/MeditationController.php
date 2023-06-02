<?php

namespace App\Http\Controllers;

use App\Models\Meditation;
use App\Http\Requests\StoreMeditationRequest;
use App\Http\Requests\UpdateMeditationRequest;
use Illuminate\Http\Request;

class MeditationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showAll()
    {
        return view('workout_meditation.meditation', [
            'meditations' => Meditation::filter(request(['search']))->get()
        ]);
    }

    public function index(){
        return view('adminpage.listMeditation', [
            'meditations' => Meditation::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('adminpage.addMP');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMeditationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMeditationRequest $request)
    {
        return 'store';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Meditation  $meditation
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $meditation_id = $request->post('meditation_id');
        $meditation = Meditation::where('meditations.id', '=', $meditation_id)->get();
        return view('workout_meditation.meditationDetails', [
            'meditation' => $meditation
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Meditation  $meditation
     * @return \Illuminate\Http\Response
     */
    public function edit(Meditation $meditation)
    {
        return 'hi';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMeditationRequest  $request
     * @param  \App\Models\Meditation  $meditation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMeditationRequest $request, Meditation $meditation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Meditation  $meditation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meditation $meditation)
    {
        return 'destroy';
    }
}
