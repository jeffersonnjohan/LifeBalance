<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkoutActivity extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = ['id'];

    public function workout_detail()
    {
        return $this->hasMany(WorkoutDetail::class);
    }
}
