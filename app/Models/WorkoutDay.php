<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkoutDay extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = ['id'];

    public function workout()
    {
        return $this->belongsTo(Workout::class);
    }

    public function workout_detail(){
        return $this->hasMany(WorkoutDetail::class);
    }
}
