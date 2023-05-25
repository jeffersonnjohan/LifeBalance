<?php

namespace App\Http\Controllers;

use App\Models\Diet;
use App\Models\DietDay;
use Illuminate\Http\Request;
use App\Models\EnrollmentDiet;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreDietRequest;
use App\Http\Requests\UpdateDietRequest;

class DietController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allDiets()
    {
        $id = Auth::user()->id;
        return view('diet.diets', [
            'diets' => Diet::filter(request(['search']))->get(),
            "enrollments" => EnrollmentDiet::where('user_id', $id)->pluck('diet_id')
        ]);
    }

    public function index(){
        return view('adminpage.listDiet', [
            'diets' => Diet::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('adminpage.addDP');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDietRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDietRequest $request){

        $diet = new Diet([
            'name' => $request->planTitle,
            'description' => $request->description,
            'points' => $request->points,
            'image' => 'images/dietplan',
        ]);

        $dayCount = count($request->dietDayDescription);
        
        // Workout Details
        $diet_details = [];

        for($i = 0; $i < $dayCount; $i++){
            $diet_details[] = new DietDay([
                'calories' => $request->calories[$i],
                'description' => $request->dietDayDescription[$i]
            ]);
        }

        $diet->save();
        $diet->dietDay()->saveMany($diet_details);

        return redirect('/admin/diet');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Diet  $diet
     * @return \Illuminate\Http\Response
     */
    public function show(Diet $diet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Diet  $diet
     * @return \Illuminate\Http\Response
     */
    public function edit(Diet $diet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDietRequest  $request
     * @param  \App\Models\Diet  $diet
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDietRequest $request, Diet $diet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Diet  $diet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        // return $request;
        $prevDietPlans = Diet::find($request->deleteID)->dietDay;

        foreach($prevDietPlans as $prevDietPlan){
            DietDay::destroy($prevDietPlan->id);
        }

        Diet::destroy($request->deleteID);

        return redirect('/admin/diet');
    }
}
