<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserWeight extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = ['id'];

    public function store(Request $request){
        $userId = auth()->user()->id;

        // Hapus jika ada
        UserWeight::where('user_id', $userId)->delete();

        UserWeight::create([
            'user_id' => $userId,
            'weight' => $request->weight,
            'created_at' => Carbon::now()->toDateTimeString()
        ]);
        return redirect('/home');
    }
}
