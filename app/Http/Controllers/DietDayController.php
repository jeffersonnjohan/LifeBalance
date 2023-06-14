<?php

namespace App\Http\Controllers;

use App\Models\DietDay;
use App\Http\Requests\StoreDietDayRequest;
use App\Http\Requests\UpdateDietDayRequest;
use App\Models\Diet;
use App\Models\EnrollmentDiet;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DietDayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {

        $id = Auth::user()->id;
        $diet_id = $request->post('diet_id');
        if($request->post('is_new')){
            $data = array(
                'user_id' => $id,
                'diet_id' => $diet_id,
                'created_at' => Carbon::now('GMT+7'),
                'updated_at' => Carbon::now('GMT+7')
            );
            EnrollmentDiet::insert($data);
        }

        $diet_days = DietDay::where('diet_days.diet_id', '=', $diet_id)->get();

        // temporary:
        // if day_count is 0 in diets, do this:
        if(Diet::where('day_count', 0)){
            Diet::join('diet_days', 'diet_days.diet_id', '=', 'diets.id')
            ->where('diet_id', '=', $diet_id)
            ->update(['day_count' => $diet_days->count()]);
        }

        $enrollment = EnrollmentDiet::where('diet_id', $diet_id)
                                    ->where('user_id', $id)
                                    ->get();

        return view('diet.dietdays', [
            'diet_id' => $diet_id,
            'diet_days' => $diet_days,
            'enrollment' => $enrollment
        ]);
    }

    public function index2(Request $request)
    {
        $id = Auth::user()->id;
        $diet_id = $request->post('diet_id');
        $is_done = DB::table('enrollment_diets')
                    ->where('diet_id', '=', $diet_id)
                    ->where('user_id', $id)
                    ->pluck('is_done');

        if($request->post('diet_value') && !$is_done[0]){
            $finished_day = DB::table('enrollment_diets')
                            ->where('diet_id', '=', $diet_id)
                            ->where('user_id', $id)
                            ->pluck('finished_day');

            $day_count = DB::table('diets')
                            ->where('id', '=', $diet_id)
                            ->pluck('day_count');

            $user_diet = DB::table('user_diets')
            ->insert([
                'user_id' => $id,
                'calories_in' => $request->post('total_kcal'),
                'created_at' => now('GMT+7')
            ]);

            // finished_day++
            $date = \Carbon\Carbon::now('GMT+7');//->format('Y-m-d h:i:s')
            DB::table('enrollment_diets')
            ->where('diet_id', '=', $diet_id)
            ->where('user_id', $id)
            ->update(['finished_day' => $finished_day[0] +  1,
                      'updated_at' => $date]);

            // if day_count == finished_day, update is_done to 1
            if($day_count->contains($finished_day[0] + 1)){
                EnrollmentDiet::where('user_id', $id)
                ->where('diet_id', '=', $diet_id)
                ->update(['is_done' => 1]);

                // add points to user table
                $user_point = User::where('id', $id)->pluck('points');
                $diet_point = Diet::where('id', '=', $diet_id)->pluck('points');
                User::where('id', $id)
                ->update(['points' => $user_point[0] + $diet_point[0]]);
            }
        }
        return redirect('/diets');
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
