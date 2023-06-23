<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Collect;
use App\Models\Challenge;
use Illuminate\Http\Request;
use App\Models\EnrollmentDiet;
use Illuminate\Support\Carbon;
use App\Models\EnrollmentWorkout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\StoreChallengeRequest;
use App\Http\Requests\UpdateChallengeRequest;
use Illuminate\Support\Facades\Validator;

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

        $validated = $request->validate([
            'planTitle' => 'required|max:25|min:3',
            'description' => 'required|max:100|min:20',
            'points' => 'required',
            'startDate' => 'required',
            'endDate' => 'required|after_or_equal:startDate',
            'totalWorkout' => 'required',
            'totalDiet' => 'required'
        ]);
        Challenge::create([
            'name' => $validated['planTitle'],
            'description' => $validated['description'],
            'points' => $validated['points'],
            'start_date' => Carbon::createFromFormat('Y-m-d', $validated['startDate'])->setTime(23, 59, 59),
            'end_date' => Carbon::createFromFormat('Y-m-d', $validated['endDate'])->setTime(23, 59, 59),
            'workout_plan_count' => $validated['totalWorkout'],
            'diet_plan_count' => $validated['totalDiet']
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
    public function edit(Request $request)
    {
        $challenge = Challenge::find($request->editId);
        return view('adminpage.editChallenge', [
            'challenge' => $challenge,
            'error' => []
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateChallengeRequest  $request
     * @param  \App\Models\Challenge  $challenge
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateChallengeRequest $request)
    {
        $challenge = Challenge::find($request->challengeId);

        // $validated = $request->validate([
        //     'planTitle' => 'required|max:25|min:3',
        //     'description' => 'required|max:100|min:20',
        //     'points' => 'required',
        //     'startDate' => 'required',
        //     'endDate' => 'required|after_or_equal:startDate',
        //     'totalWorkout' => 'required',
        //     'totalDiet' => 'required'
        // ]);
        // if ($request->getMethod() == 'POST' && !$validated) {
        //     // return Redirect::back()->withInput()->withErrors($validated);
        //     // return Redirect::back();
        //     return Redirect::back()->withInput()->withErrors($validated);
        // }

        $validated = Validator::make($request->all(), [
            'planTitle' => 'required|max:25|min:3',
            'description' => 'required|max:100|min:20',
            'points' => 'required',
            'startDate' => 'required',
            'endDate' => 'required|after_or_equal:startDate',
            'totalWorkout' => 'required',
            'totalDiet' => 'required'
        ]);

        if ($validated->fails()){
            $response = [];
            foreach ($validated->messages()->toArray() as $key => $value) {
                $obj = new \stdClass();
                $obj->name = $key;
                $obj->message = $value[0];

                array_push($response, $obj);
            }
            return view('adminpage.editChallenge', [
                'challenge' => $challenge,
                'error' => $response
            ]);
        }

        $challenge->update([
            'name' => $request['planTitle'],
            'description' => $request['description'],
            'points' => $request['points'],
            'start_date' => Carbon::createFromFormat('Y-m-d', $request['startDate'])->setTime(23, 59, 59),
            'end_date' => Carbon::createFromFormat('Y-m-d', $request['endDate'])->setTime(23, 59, 59),
            'workout_plan_count' => $request['totalWorkout'],
            'diet_plan_count' => $request['totalDiet']
        ]);

        // $challenge->name = $request->planTitle;
        // $challenge->description = $request->description;
        // $challenge->points = $request->points;
        // $challenge->start_date = 'images/challengeplan';
        // $challenge->start_date = Carbon::createFromFormat('Y-m-d', $request->startDate)->setTime(23, 59, 59);
        // $challenge->end_date = Carbon::createFromFormat('Y-m-d', $request->endDate)->setTime(23, 59, 59);
        // $challenge->workout_plan_count = $request->totalWorkout;
        // $challenge->diet_plan_count = $request->totalDiet;

        // $challenge->update();

        return redirect('/admin/challenges');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Challenge  $challenge
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Challenge::destroy($request->deleteId);

        return redirect('/admin/challenges');
    }
}
