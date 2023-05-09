<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diet extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters){
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query = $query->where('name', 'like', '%' . $search . '%')
                    ->orWhere('description', 'like', '%' . $search . '%');
        });
     }

    //  public function enrollmentdiet()
    // {
    //     return $this->hasMany(Diet::class);
    // }
}
