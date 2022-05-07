<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserFeedNotification extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 	'is_email','is_telegram','is_active'
    ];

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
