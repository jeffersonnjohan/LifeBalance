<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Collect;
use App\Models\Challenge;
use App\Models\EnrollmentDiet;
use App\Models\EnrollmentWorkout;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreChallengeRequest;
use App\Http\Requests\UpdateChallengeRequest;

class ChallengeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $challengeData = Challenge::all();
        $collected = Collect::where('user_id', $id)->get()->pluck('challenge_id');
        // dd($collected);
        $challengeData = Challenge::where('end_date', '>=', now())->whereNotIn('id', $collected)->get();
        // dd($challengeData);
        $arrworkout = [];
        $arrdiet = [];
        // range tanggal dari challenge
        // where tanggal work dan diets nya dalam challenge
        // workout dan diets append
        // lanjut tanggal berikutnya
        for($i = 0; $i < $challengeData->count(); $i++) {
            $filteredworkout = EnrollmentWorkout::where([
                ['created_at', '>', $challengeData[$i]['start_date']],
                ['updated_at', '<', $challengeData[$i]['end_date']],
                ['is_done', 1]
                ])->count();
            array_push($arrworkout, $filteredworkout);
            $filtereddiet = EnrollmentDiet::where([
                ['created_at', '>', $challengeData[$i]['start_date']],
                ['updated_at', '<', $challengeData[$i]['end_date']],
                ['is_done', 1]
                ])->count();
            array_push($arrdiet, $filtereddiet);
        }
        // dd($arrworkout, $arrdiet);
        return view('challenges', compact('challengeData', 'arrworkout', 'arrdiet'));
    }

    public function showAllAdmin(){
        return view('adminpage.listChallenges', [
            'challenges' => Challenge::all()
        ]);
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
     * @param  \App\Http\Requests\StoreChallengeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChallengeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Challenge  $challenge
     * @return \Illuminate\Http\Response
     */
    public function show(Challenge $challenge)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Challenge  $challenge
     * @return \Illuminate\Http\Response
     */
    public function edit(Challenge $challenge)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateChallengeRequest  $request
     * @param  \App\Models\Challenge  $challenge
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateChallengeRequest $request, Challenge $challenge)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Challenge  $challenge
     * @return \Illuminate\Http\Response
     */
    public function destroy(Challenge $challenge)
    {
        //
    }
}
