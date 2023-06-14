<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Collect;
use App\Models\Challenge;
use App\Models\EnrollmentDiet;
use Illuminate\Support\Carbon;
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

        $challengeData = Challenge::whereDate('end_date', '>=', now())->whereNotIn('id', $collected)->get();
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
        return view('adminpage.addChallenge');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreChallengeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChallengeRequest $request)
    {
        // return $request;
        // {"_token":"biyMF91K8ZpOllW7oqmBDBxgrbSCUevgql2cd6wV","planTitle":"asa","points":"1","description":"sa","image":"flowchart-methodology.png","startDate":"2023-06-06","endDate":"2023-06-18","totalWorkout":"10","totaDiet":"5","confirmButton":"Confirm"}
        Challenge::create([
            'name' => $request->planTitle,
            'description' => $request->description,
            'points' => $request->points,
            'image' => 'images/challenge',
            'start_date' => Carbon::createFromFormat('Y-m-d', $request->startDate)->setTime(23, 59, 59),
            'end_date' => Carbon::createFromFormat('Y-m-d', $request->endDate)->setTime(23, 59, 59),
            'workout_plan_count' => $request->totalWorkout,
            'diet_plan_count' => $request->totalDiet
        ]);

        return redirect('/admin/challenges');
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
