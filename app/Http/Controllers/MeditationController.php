<?php

namespace App\Http\Controllers;

use App\Models\Meditation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreMeditationRequest;
use App\Http\Requests\UpdateMeditationRequest;

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
        $newMeditation= $request->all();
        if($request->file('image')) {
            $newMeditation['image'] = $request->file('image')->store('meditation-images');
        }

        if($request->file('song')) {
            $newMeditation['song'] = $request->file('song')->store('meditation-songs');
        }

        $validated = $request->validate([
            'planTitle' => 'required|max:20|min:5',
            'description' => 'required|max:200|min:10',
            'image' => 'required',
            'song' => 'required'
        ]);
        
        Meditation::create([
            'name' => $validated['planTitle'],
            'description' => $validated['description'],
            'image' => $newMeditation['image'],
            'audio' => $newMeditation['song'],
        ]);

        return redirect('/admin/meditation');
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
    public function edit(Request $request)
    {
        $temp = Meditation::find($request->editID);

        return view('adminpage.editMP', [
            'meditation' => $temp,
            'oldImg' => $temp->image,
            'oldSong' => $temp->audio,
            'error' => []
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMeditationRequest  $request
     * @param  \App\Models\Meditation  $meditation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMeditationRequest $request)
    {
        $meditation = Meditation::find($request->editID);

        if($request->file('image')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $meditation->image = $request->file('image')->store('meditation-images');
        } else {
            $meditation->image = $request->oldImage;
        }

        if($request->file('song')) {
            if($request->oldSong) {
                Storage::delete($request->oldSong);
            }
            $meditation->audio = $request->file('song')->store('meditation-songs');
        } else {
            $meditation->audio = $request->oldSong;
        }

        $validated = Validator::make($request->all(), [
            'planTitle' => 'required|max:25|min:3',
            'description' => 'required|max:100|min:20'
        ]);

        if ($validated->fails()){
            $response = [];
            foreach ($validated->messages()->toArray() as $key => $value) {
                $obj = new \stdClass();
                $obj->name = $key;
                $obj->message = $value[0];

                array_push($response, $obj);
            }
            return view('adminpage.editMP', [
                'meditation' => $meditation,
                'oldImg' => $meditation->image,
                'oldSong' => $meditation->audio,
                'error' => $response
            ]);
        }

        $meditation->update([
            'name' => $request['planTitle'],
            'description' => $request['description'],
            'image' =>  $meditation['image'],
            'audio' => $meditation['audio']
        ]);

        return redirect('/admin/meditation');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Meditation  $meditation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $meditationImg = Meditation::find($request->deleteID)->image;
        $meditationSong = Meditation::find($request->deleteID)->audio;

        Storage::delete($meditationImg);
        Storage::delete($meditationSong);

        // Meditation::find($request->deleteID)->delete();
        Meditation::destroy($request->deleteID);
        return redirect('admin/meditation');
    }
}
