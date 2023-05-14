<?php

namespace App\Models;

use App\Models\Diet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DietDay extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = ['id'];

    public function diet()
    {
        return $this->belongsTo(Diet::class);
    }
}
