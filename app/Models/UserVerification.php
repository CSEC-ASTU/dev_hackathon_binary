<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserVerification extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'type', 'token', 'is_verified', 'expiry_date', 'is_active'
    ];

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function getExpiryDateAttribute($value)
    {
        return date('d-m-Y', strtotime($value));
    }
}
