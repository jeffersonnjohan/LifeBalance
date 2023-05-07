<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnrollmentWorkout extends Model
{
    use HasFactory;

    public function workout(){
        return $this->belongsTo(Workout::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
