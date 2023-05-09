<?php

namespace App\Models;

use App\Models\Workout;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EnrollmentWorkout extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function workout()
    {
        return $this->belongsTo(Workout::class);
    }

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
