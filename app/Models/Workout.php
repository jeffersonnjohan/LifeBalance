<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = ['id'];

    public function workout_day(){
        return $this->hasMany(WorkoutDay::class);
    }
}
