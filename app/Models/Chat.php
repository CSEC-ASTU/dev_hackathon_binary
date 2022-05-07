<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_1', 'user_2', 'is_active'
    ];

    protected $guarded = [];

    public function user_1()
    {
        return $this->belongsTo(User::class, 'user_1', 'id');
    }

    public function user_2()
    {
        return $this->belongsTo(User::class, 'user_2', 'id');
    }
}
