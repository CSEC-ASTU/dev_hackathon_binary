<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubDivision extends Model
{
    use HasFactory;

    protected $fillable = [
        'division_id', 'name', 'description', 'is_active'
    ];

    protected $guarded = [];

    public function division()
    {
        return $this->belongsTo(Division::class, 'division_id', 'id');
    }

    public function event()
    {
        return $this->hasMany(Event::class, 'sub_division_id', 'id');
    }
}
