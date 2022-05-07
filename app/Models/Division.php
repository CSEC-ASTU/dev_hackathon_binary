<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'is_active'
    ];

    protected $guarded = [];


    public function division()
    {
        return $this->hasMany(Event::class, 'division_id', 'id');
    }
}
