<?php

namespace App\Models;

use App\Models\Diet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EnrollmentDiet extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function diet()
    {
        return $this->belongsTo(Diet::class);
    }
}
