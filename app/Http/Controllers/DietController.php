<?php

namespace App\Http\Controllers;

use App\Models\Diet;
use App\Models\DietDay;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\EnrollmentDiet;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreDietRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdateDietRequest;
use Illuminate\Support\Facades\Validator;

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

        $newDiet = $request->all();
        if($request->file('image')) {
            $newDiet['image'] = $request->file('image')->store('diet-images');
        }

        $validated = $request->validate([
            'planTitle' => 'required|max:20|min:3',
            'description' => 'required|max:100|min:20',
            'points' => 'required',
            'image' => 'required'
        ]);

        $diet = new Diet([
            'name' => $validated['planTitle'],
            'description' => $validated['description'],
            'points' => $validated['points'],
            'image' => $newDiet['image']
        ]);

        // dd($diet);

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
    public function edit(Request $request){
        // dd($request);
        // return Diet::find($request->editID);
        $diet = Diet::find($request->editID);
        return view('adminpage.editDP', [
            'diet' => $diet,
            'dietDays' => $diet->dietDay,
            'oldImg' => $diet->image,
            'error' => []
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDietRequest  $request
     * @param  \App\Models\Diet  $diet
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDietRequest $request)
    {
        // return $request;
        $diet = Diet::find($request->dietID);

        $validated = Validator::make($request->all(), [
            'planTitle' => 'required|max:25|min:3',
            'description' => 'required|max:100|min:20',
            'points' => 'required',
        ]);

        if ($validated->fails()){
            $response = [];
            foreach ($validated->messages()->toArray() as $key => $value) {
                $obj = new \stdClass();
                $obj->name = $key;
                $obj->message = $value[0];

                array_push($response, $obj);
            }
            return view('adminpage.editDP', [
                'diet' => $diet,
                'dietDays' => $diet->dietDay,
                'oldImg' => $diet->image,
                'error' => $response
            ]);
        }

        $prevDietDays = $diet->dietDay;

        foreach($prevDietDays as $prevDietDay){
            DietDay::destroy($prevDietDay->id);
        }

        $diet->name = $request->planTitle;
        $diet->description = $request->description;
        $diet->points = $request->points;

        if($request->file('image')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $diet->image = $request->file('image')->store('diet-images');
        } else {
            $diet->image = $request->oldImage;
        }

        $dayCount = count($request->dietDayDescription);

        // Workout Details
        $diet_details = [];

        for($i = 0; $i < $dayCount; $i++){
            $diet_details[] = new DietDay([
                'calories' => $request->calories[$i],
                'description' => $request->dietDayDescription[$i]
            ]);
        }

        $diet->update();
        $diet->dietDay()->saveMany($diet_details);

        return redirect('/admin/diet');
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

        $dietImg = Diet::find($request->deleteID)->image;

        Storage::delete($dietImg);
        Diet::destroy($request->deleteID);

        return redirect('/admin/diet');
    }
}
