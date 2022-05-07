<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDivision extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'division_id', 'sub_division_id', 'is_active'
    ];

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function division()
    {
        return $this->belongsTo(Division::class, 'division_id', 'id');
    }

    public function sub_division()
    {
        return $this->belongsTo(SubDivision::class, 'sub_division_id', 'id');
    }
}
