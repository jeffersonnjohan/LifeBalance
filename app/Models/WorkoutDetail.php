<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkoutDetail extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = ['id'];

    public function workout_day()
    {
        return $this->belongsTo(WorkoutDay::class);
    }

    public function workout_activity()
    {
        return $this->belongsTo(WorkoutActivity::class);
    }
}
